@extends('master')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5">
                <div class="p-3">
                    <form action="{{ route('student#create') }}" method="POST">
                        @csrf
                        <div class="text-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="studentName" class="form-control" placeholder="Enter Student Name...">
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Student Description</label>
                            <textarea name="studentDescription" cols="30" rows="10" class="form-control"
                                placeholder="Enter Student Description..."></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Create" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-7">
                @foreach ($students as $student)
                    <div class="data-container">
                        <div class="post p-3 shadow-sm mb-4">
                            <h3>{{ $student['id'] }}</h3>
                            <h5>{{ $student['name'] }}</h5>
                            <p>{{ $student['description'] }}</p>
                            <div class="text-end">
                                <a href="{{ route('student#delete', $student['id']) }}">
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-trash"></i>ဖျက်ရန်
                                    </button>
                                </a>
                                <a href="{{ route('student#updatePage', $student['id']) }}">
                                    <button class="btn btn-sm btn-primary">
                                        <i class="fa-solid fa-file-lines"></i>အပြည့်အစုံဖတ်ရန်
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row"></div>
    </div>
@endsection
