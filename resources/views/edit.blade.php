@extends('template')

@section('content')
<h1>edit slides</h1>



<!-- slides Form -->
        <form action="/edit" method="POST">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
              @foreach ($slides as $slide)
                <label>slide {{$slide->id}}</label>
                <textarea name=" {{$slide->id}}" id=" {{$slide->id}}"> {{$slide->slidecode}}</textarea>
              @endforeach
              <label>new slide</label>
              <textarea name="new" id="new"></textarea>
            </div>

            <!-- submit Button -->
                <div>
                    <button type="submit">
                        Submit Slides
                    </button>
                </div>
        </form>
@endsection
