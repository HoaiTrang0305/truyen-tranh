@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm bài viết</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{route('blog.update',[$blog->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên bài viết</label>
                            <input type="text" name="tenbaiviet" value="{{$blog->tenbaiviet}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                            <input type="text" name="tacgia" value="{{$blog->tacgia}}" class="form-control" onkeyup="ChangeToSlug();"  >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug bài viết</label>
                            <input type="text" name="slug_baiviet" value="{{$blog->slug_baiviet}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tóm tắt bài viết</label>
                          <textarea name="noidung" class="form-control" rows="5"style="resize:none;">{{$blog->noidung}}</textarea>


                        </div>
                      
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hình ảnh bài viết</label>
                            <input type="file" name="hinhanh"  class="form-control" >
                            <img src="{{asset('public/uploads/blog/'.$blog->hinhanh)}}" height="200" width="150" >
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kích hoạt bài viết</label>
                        <select name="kichhoat" class="form-select" aria-label="Default select example">
                            @if($blog->kichhoat==0)
                             <option selected value="0">Kích hoạt</option>
                             <option value="1">Không kích hoạt</option>
                            @else
                            <option value="0">Kích hoạt</option>
                             <option selected value="1">Không kích hoạt</option>
                            @endif
                        </select>
                        </div>
                       
                        <button  type="submit" name="thembaiviet" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
