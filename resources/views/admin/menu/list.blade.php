@extends('admin.main')

@section('content')
    <table class="table">
        <thead align="center">
            <tr>
                <th style="width: 50px">ID</th>
                <th>Tên Danh Mục</th>
                <th>Trạng Thái</th>
                <th>Cập Nhật</th>
                <th style="width: 100px">&nbsp;</th>
            </tr>
        </thead>
        <tbody align="center">
            {!! \App\Helpers\Helper::menu($menus) !!}
        </tbody>
    </table>
@endsection


