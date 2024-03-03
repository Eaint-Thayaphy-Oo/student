@extends('master')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="{{ route('student#home') }}" class="text-decoration-none text-black"><i
                            class="fa-solid fa-arrow-left"></i>back</a>
                </div>
                {{-- controller mhr first nae u htr yin 0 khnn nae htote sayr ma lo boo --}}
                <h3>{{ $student['name'] }}</h3>
                <p>{{ $student['description'] }}</p>
                {{-- controller mhr get nae u yin 0 khnn nae htote pyy ya ml
                <h3>{{ $student[0]['name'] }}</h3>
                <p>{{ $student[0]['description'] }}</p> --}}
            </div>
        </div>
        <div class="row my-3">
            <div class="col-3 offset-8">
                <a href="{{ route('student#editPage', $student['id']) }}">
                    <button class="btn bg-dark text-white">Edit</button>
                </a>
            </div>
        </div>
    </div>
@endsection
