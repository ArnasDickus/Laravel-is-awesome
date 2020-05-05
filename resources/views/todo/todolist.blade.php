@extends('layouts.app')

@section('content')
    <div class="card-body">
        <!-- Display Validation Errors -->
{{--    @include('common.errors')--}}

    <!-- New Task Form -->
        <form action="to-do-listtask" method="POST" class="d-flex justify-content-center">
        {{ csrf_field() }}

            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <div class="form-group">
                        <label for="task">Task</label>
                        <input type="text" id="task" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">
                        Add Task
                    </button>
                </div>

            </div>

{{--        <!-- Task Name -->--}}
{{--            <div class="form-group">--}}
{{--                <label for="task" class="col-sm-3 control-label">Task</label>--}}

{{--                <div class="col-sm-6">--}}
{{--                    <input type="text" name="name" id="task-name" class="form-control">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Add Task Button -->--}}
{{--            <div class="form-group">--}}
{{--                <div class="col-sm-offset-3 col-sm-6">--}}
{{--                    <button type="submit" class="btn btn-default">--}}
{{--                        <i class="fa fa-plus"></i> Add Task--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </form>
    </div>
@endsection
