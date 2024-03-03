@extends('master')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="my-3">
                    <a href="{{ route('student#updatePage', $student['id']) }}" class="text-decoration-none text-black"><i
                            class="fa-solid fa-arrow-left"></i>back</a>
                </div>
                <form action="{{ route('student#update') }}" method="post">
                    @csrf
                    <label>Student Name</label>
                    <input type="hidden" name="studentId" value="{{ $student['id'] }}">
                    <input type="text" name="studentName" class="form-control"
                        value="{{ old('studentName', $student['name']) }}" placeholder="Enter Student Name...">
                    <label>Student Description</label>
                    <textarea name="studentDescription" cols="30" rows="10" class="form-control my-3"
                        placeholder="Enter post description...">{{ old('studentDescription', $student['description']) }}</textarea>
                    <input type="submit" value="Update" class="btn bg-dark text-white my-3 float-end">
                </form>
            </div>
        </div>
    </div>
@endsection
