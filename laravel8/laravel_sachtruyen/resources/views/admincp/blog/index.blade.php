@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê bài viết</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên bài viết</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Slug bài viết</th>
                           
                            <th scope="col">TG Tạo</th>
                            <th scope="col">TG Cập nhật</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($danhsachbaiviet as $key =>$blog)
                            <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$blog->tenbaiviet}}</td>
                            <td><img src="{{asset('public/uploads/blog/'.$blog->hinhanh)}}" height="200" width="150" ></td>
                            <td>{{$blog->slug_baiviet}}</td>
                          
            
                            <td>{{$blog->created_at}}</td>
                            <td>
                                @if($blog->updated_at !='')
                                {{$blog->updated_at->diffForHumans()}}
                                @endif
                            </td>
                            <td>
                                @if($blog->kichhoat==0)
                                    <span class="text text-success">Kích hoạt</span>
                                @else
                                    <span class="text text-danger">Không kích hoạt</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('blog.edit',[$blog->id])}}" class="btn btn-primary">Sửa</a>
                                <form action="{{route('blog.destroy',[$blog->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Xác nhận xóa bài viết!');" class="btn btn-danger">Xóa</button>

                                </form>
                            </td>
                            </tr>
                           @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
