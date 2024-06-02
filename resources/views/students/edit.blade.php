@extends('students.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="h1 text-center text-warning">Sửa thông tin sinh viên</div>
    </div>
    <div class="card-body">
        <form action="{{ route('students.update',$student->StudentID)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Tên sinh viên</label>
                <div class="col-sm-10"><input type="text" name="StudentName" id="" class="form-control" value="{{ $student->StudentName }}"></div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10"><input type="text" name="StudentEmail" id="" class="form-control" value="{{ $student->StudentEmail }}"></div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 form-label">Giới tính</label>
                <div class="col-sm-10">
                    <select class="form-select form-select" name="StudentGender" id="">
                        <!-- <option value="0" @if($student->StudentGender == 0) selected @endif>Nam</option>
                        <option value="1" @if($student->StudentGender == 1) selected @endif>Nữ</option> -->
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
                        <option value="{{ $classroom->ClassRoomID}}" @if($classroom->ClassRoomID == $student->ClassRoomID) selected @endif > 
                            {{ $classroom->ClassRoomName }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" value="Sửa" class="btn btn-warning">
            </div>
        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>
<script>
    document.getElementsByName('StudentGender')[0].value = "{{ $student->StudentGender }}"
</script>
@endsection('content')