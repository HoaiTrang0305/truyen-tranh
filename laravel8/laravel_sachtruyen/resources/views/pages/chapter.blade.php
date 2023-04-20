@extends('../layout')
@section('slide')
    @include('pages.slide')
@endsection  
@section('content')    
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$truyen_breadcrumb->tentruyen}}</li>
        </ol>
    </nav>  

    <div class="row">
        <div class="col-md-12">
            <h4>{{$chapter->truyen->tentruyen}}</h4>
            <p>Chương hiện tại: {{$chapter->tieude}}</p>
            
            <div class="col-md-5">
                <style type="text/css">
                    .isDisabled{
                        color:currentColor;
                        pointer-events:none;
                        opacity: 0.5;
                        text-decoration:none;
                    }
                </style>
                <div class="form-group">
                    <label>Chọn chương</lable>

                    <p><a class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisabled':''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Chương trước</a></p>
                    <select name="" class="custom-select select-chapter">
                        @foreach($all_chapter as $key =>$chap)
                        <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                        @endforeach
                    </select>
                    <p><a class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisabled':''}} "  href="{{url('xem-chapter/'.$next_chapter)}}">Chương Sau</a></p>
                </div>
            </div>
            <div class="noidungchuong">
                <p>
                    {{$chapter->noidung}}
                </p>
            </div>
            <div class="form-group">
                    <label>Chọn chương</lable>
                    <select name="" class="custom-select select-chapter">
                        @foreach($all_chapter as $key =>$chap)
                        <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
        </div>
    </div>
  
@endsection