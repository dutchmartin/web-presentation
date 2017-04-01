@extends('template')

@section('content')
<h1>edit</h1>



<!-- New Task Form -->
        <form action="/edit" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">slide</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="slidecontent" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Slide
                    </button>
                </div>
            </div>
        </form>
@endsection
