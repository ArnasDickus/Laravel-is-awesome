@extends('layouts.app')

@section('content')
    <div class="card-body">
        <!-- Display Validation Errors -->
{{--    @include('common.errors')--}}

    <!-- New Task Form -->
        <form action="to-do/task" method="post" class="d-flex justify-content-center">
        {{ csrf_field() }}

            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <div class="form-group">
                        <label for="task">Task</label>
                        <input type="text" name="name" id="task" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">
                        Add Task
                    </button>
                </div>
            </div>
        </form>
        <div class="container">
            @if (count($tasks) > 0)
                <div class="card mt-4">
                    <div class="card-title">
                        <h2 class="text-center mt-2">Current Tasks</h2>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                            </thead>

                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        <form action="/to-do/task/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="btn btn-danger">Delete Task</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
