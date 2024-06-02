@extends('students.master')

@section('content')

@if($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="h2 text-center text-primary">Thêm sinh viên mới</div>
    </div>
    <div class="card-body">
        <form action="{{ route('students.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sinh viên</label>
                <div class="col-sm-10"><input type="text" name="StudentName" id="" class="form-control"></div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10"><input type="text" name="StudentEmail" id="" class="form-control"></div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 form-label">Giới tính</label>
                <div class="col-sm-10">
                    <select class="form-select form-select" name="StudentGender" id="">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 form-label">Chọn lớp</label>
                <div class="col-sm-10">
                    <select class=" form-select form-select" name="ClassRoomID" id="ClassRoomID" required>
                        @foreach($classrooms as $classroom)
                        <option value="{{ $classroom->ClassRoomID}}">{{ $classroom->ClassRoomName }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Thêm" class="btn btn-primary">
            </div>
        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>
@endsection('content')