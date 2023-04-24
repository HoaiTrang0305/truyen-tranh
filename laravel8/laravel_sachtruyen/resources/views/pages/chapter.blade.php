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
           
            
            <div class="col-md-12">
                <style type="text/css">
                    .form-group,.chon-chuong{
                    display: flex;
                    width: 100%;
                        justify-content:center;
                        align-items: center;
                        
                    }
                    .form-group{
                        margin-bottom: 20px;
                    }
                    .isDisabled{
                        color:currentColor;
                        pointer-events:none;
                        opacity: 0.5;
                        text-decoration:none;
                    }
                    .noidungchuong{
                        padding: 0 50px;
                    }
                </style>
                
                <div class="form-group">
                    <div>
                    <div class="chon-chuong">
                    <h4>{{$chapter->truyen->tentruyen}}</h4>
                    </div>
                    <div class="chon-chuong">
                    <p>Chương hiện tại: {{$chapter->tieude}}</p>
                    </div>
                    <div class="chon-chuong">
                    <p>Chọn Chương</p>
                    </div>
                    <a class="btn btn-outline-success {{$chapter->id==$min_id->id ? 'isDisabled':''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Chương trước</a>
                    <select name="" class="custom-select select-chapter bg-light">
                        @foreach($all_chapter as $key =>$chap)
                        <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                        @endforeach
                    </select>
                    <a class="btn btn-outline-success {{$chapter->id==$max_id->id ? 'isDisabled':''}} "  href="{{url('xem-chapter/'.$next_chapter)}}">Chương Sau</a>
                    </div>
                   
                </div>
            </div>
            <div class="noidungchuong">
                <p>
                    {{$chapter->noidung}}
                </p>
            </div>
            <div class="form-group">
                    <div>
                    <a class="btn btn-outline-success {{$chapter->id==$min_id->id ? 'isDisabled':''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Chương trước</a>
                    <select name="" class="custom-select select-chapter bg-light">
                        @foreach($all_chapter as $key =>$chap)
                        <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                        @endforeach
                    </select>
                    <a class="btn btn-outline-success {{$chapter->id==$max_id->id ? 'isDisabled':''}} "  href="{{url('xem-chapter/'.$next_chapter)}}">Chương Sau</a>
                    </div>
                   
                </div>
              
                <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
        </div>
    </div>
  
@endsection