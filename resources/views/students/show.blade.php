@extends('students.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <div class="h1 text-center text-primary">Thông tin chi tiết sinh viên</div>                
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form text-uppercase">Tên sinh viên</label>
            <div class="col-sm-10 text-primary">{{ $student->StudentName }}</div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form text-uppercase">Email sinh viên</label>
            <div class="col-sm-10 text-primary">{{ $student->StudentEmail }}</div>
        </div>       
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form text-uppercase">Giới tinh</label>
            <div class="col-sm-10 text-primary">@if($student->StudentGender == 0) Nam @else Nữ @endif</div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form text-uppercase">Lớp</label>
            <div class="col-sm-10 text-primary">{{ $student->ClassRoom->ClassRoomName }}</div>
        </div>
                    
    </div>
    <div class="card-footer text-muted">
        <div class="d-grid">
        <a href="{{ route('students.index')}}" class="btn btn-primary float-end">Quay lại</a>
        </div>
    </div>
</div>
@endsection('content')