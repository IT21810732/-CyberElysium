@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Student List</h1>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Enter Student Name" aria-label="Student Name">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control age" type="number" name="age" placeholder="Enter Student Age" aria-label="Student Age">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('css')
<style>
    .page-title {
        padding-top: 5vh;
        font-size: 4rem;
        color: #ce1351;
    }
</style>
@endpush
