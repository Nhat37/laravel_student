@extends('students.master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{ $message }}
</div>

@endif

<div class="container mt-5">
    <div class="h1 text-center text-primary">Quản lý sinh viên</div>
</div>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"></div>
            <div class="col col-md-6">
                <a href="{{ route('students.create')}}" class="btn btn-primary float-end">Thêm sinh viên mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive shadow rounded">
            <table class="table table-light table-hover">
                <thead>
                    <tr>
                        <th scope="col">Mã sinh viên</th>
                        <th scope="col">Tên sinh viên</th>
                        <th scope="col">Địa chỉ Email</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Lớp</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($students) > 0)
                        @foreach($students as $row)
                        <tr class="">
                            <td>{{ $row->StudentID }}</td>
                            <td>{{ $row->StudentName }}</td>
                            <td>{{ $row->StudentEmail }}</td>
                            <td>@if($row->StudentGender == 0) Nam @else Nữ @endif</td>
                            <td>{{ $row->ClassRoom->ClassRoomName }}</td>
                            <!-- classroom là function định nghịa tron model student -->
                            <td>
                                <form method="post" action="{{ route('students.destroy',$row->StudentID) }}" onsubmit="return confirm('Bạn có chắc muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('students.show',$row->StudentID) }}" class="btn btn-outline-primary">Xem</a>
                                    <a href="{{ route('students.edit',$row->StudentID) }}" class="btn btn-outline-warning">Sửa</a>
                                    <input type="submit" value="Xóa" class="btn btn-outline-danger">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">Data Not Found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {!! $students->links() !!}
        </div>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>
@endsection