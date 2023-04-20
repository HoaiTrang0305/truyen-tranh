@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục truyện</div>
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
                    <form method="POST" action="{{route('danhmuc.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                            <input type="text" name="tendanhmuc" value="{{old('tendanhmuc')}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug danh mục</label>
                            <input type="text" name="slug_danhmuc" value="{{old('slug')}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mô tả danh mục</label>
                            <input type="text" name="mota" value="{{old('mota')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kích hoạt danh mục</label>
                        <select name="kichhoat" class="form-select" aria-label="Default select example">
                            <option value="0">Kích hoạt</option>
                            <option value="1">Không kích hoạt</option>
                        </select>
                        </div>
                        <button  type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
