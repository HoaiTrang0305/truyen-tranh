@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật chapter truyện</div>
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
                    <form method="POST" action="{{route('chapter.update',[$chapter->id])}}">
                    @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên chapter</label>
                            <input type="text" name="tieude" value="{{$chapter->tieude}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug chapter</label>
                            <input type="text" name="slug_chapter" value="{{$chapter->slug_chapter}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tóm tắt chapter</label>
                            <input type="text" name="tomtat" value="{{$chapter->tomtat}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                           <textarea name="noidung"class="form-control" rows="20" style="resize:none;">{{$chapter->noidung}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Thuộc truyện</label>
                            <select name="truyen_id" class="form-select" aria-label="Default select example">
                                @foreach($truyen as $key => $value)
                                    <option  {{$chapter->truyen_id==$value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->tentruyen}}</option>
                                @endforeach
                       
                        </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kích hoạt </label>
                        <select name="kichhoat" class="form-select" aria-label="Default select example">
                        @if($chapter->kichhoat==0)
                             <option selected value="0">Kích hoạt</option>
                             <option value="1">Không kích hoạt</option>
                            @else
                            <option value="0">Kích hoạt</option>
                             <option selected value="1">Không kích hoạt</option>
                            @endif
                        </select>
                        </div>
                        <button  type="submit" name="themdanhmuc" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
