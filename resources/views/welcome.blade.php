@extends('template')

@section('content')
        <div class="flex-center position-ref full-height">
                <div class="top-right">
                        <a href="{{ url('/edit') }}">edit</a>
                        <a href="{{ url('/present') }}">present</a>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    presentaties
                </div>

            </div>
        </div>
@endsection
