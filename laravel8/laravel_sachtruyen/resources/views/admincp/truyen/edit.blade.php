@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>
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
                    <form method="POST" enctype="multipart/form-data" action="{{route('truyen.update',[$truyen->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
                            <input type="text" name="tentruyen" value="{{$truyen->tentruyen}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                            <input type="text" name="tacgia" value="{{$truyen->tacgia}}" class="form-control" onkeyup="ChangeToSlug();"  >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug truyện</label>
                            <input type="text" name="slug_truyen" value="{{$truyen->slug_truyen}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tóm tắt truyện</label>
                          <textarea name="tomtat" class="form-control" rows="5"style="resize:none;">{{$truyen->tomtat}}</textarea>


                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Danh mục</label>
                        <select name="danhmuc" class="form-select" aria-label="Default select example">
                            @foreach($danhmuc as $key => $muc )
                            <option {{$muc->id==$truyen->danhmuc_id ? 'selected' : ''}} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hình ảnh truyện</label>
                            <input type="file" name="hinhanh"  class="form-control" >
                            <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="200" width="150" >
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kích hoạt danh mục</label>
                        <select name="kichhoat" class="form-select" aria-label="Default select example">
                            @if($truyen->kichhoat==0)
                             <option selected value="0">Kích hoạt</option>
                             <option value="1">Không kích hoạt</option>
                            @else
                            <option value="0">Kích hoạt</option>
                             <option selected value="1">Không kích hoạt</option>
                            @endif
                        </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Truyện nổi bật</label>
                        <select name="truyen_noibat" class="form-select" aria-label="Default select example">
                        @if($truyen->truyen_noibat==0)
                            <option selected value="0">Truyện mới</option>
                            <option value="1">Truyện nổi bật</option>
                            <option value="2">Truyện xem nhiều</option>
                            @elseif($truyen->truyen_noibat==1)
                            <option  value="0">Truyện mới</option>
                            <option selected value="1">Truyện nổi bật</option>
                            <option value="2">Truyện xem nhiều</option>
                            @else
                            <option  value="0">Truyện mới</option>
                            <option  value="1">Truyện nổi bật</option>
                            <option selected value="2">Truyện xem nhiều</option>
                            @endif
                        </select>
                        </div>
                        <button  type="submit" name="themtruyen" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
