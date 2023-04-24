@extends('../layout')
<!-- @section('slide')
    @include('pages.slide')
@endsection   -->
@section('content')
<style type="text/css">
            .card-text{
                display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;
            }</style>
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
        </ol>
    </nav>  
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" />
                </div>
                <div class="col-md-9">
                    <style type="text/css">
                        .infotruyen{
                            list-style: none;
                        }
                    </style>
                    
                    <ul class="infotruyen">
                        <!-------------lấy biến wishlist----------------->
                        <input type="hidden" value="{{$truyen->tentruyen}}" class="wishlist_title">
                        <input type="hidden" value="{{$truyen->danhmuctruyen->tendanhmuc}}" class="wishlist_danhmuc">
                        <input type="hidden" value="{{\URL::current()}}" class="wishlist_url">
                        <input type="hidden" value="{{$truyen->id}}" class="wishlist_id">
                        <!----------------------------------------------->
                    
              
                    <h4>{{$truyen->tentruyen}}</h4>
                        <li>Ngày đăng: {{$truyen->created_at->format('d M Y')}}</li>
                        <li>Tác giả: {{$truyen->tacgia}}</li>
                        <li>Danh mục truyện: <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">
                            {{$truyen->danhmuctruyen->tendanhmuc}}
                        </a></li>
                        @php
                        $mucluc = count($chapter);
                            
                        
                        @endphp
                        <li>Số chapter : {{$mucluc}}</li>
                       
                       
                        @if($chapter_dau)
                        <a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-outline-success mt-2">Đọc Truyện</a>
                        <a href="{{url('xem-chapter/'.$chapter_moinhat->slug_chapter)}}" class="btn btn-outline-success mt-2">Chapter Mới Nhất</a><br>
                        <button class="btn btn-outline-danger btn-thich-truyen mt-2"><i class="fa fa-heart" aria-hiden="true"></i> Thích Truyện</button>
                        @else
                       <a  class="btn btn-outline-danger mt-2">Chương chưa cập nhật</a></li>
                        
                        @endif
                        
                        <a class="btn btn-outline-primary fb-share-button mt-2" data-href="{{\URL::current()}}" data-layout="" data-size="" target="_blank" href="{{\URL::current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <p>
                {{$truyen->tomtat}}
                 </p>
            </div>
            <div style="padding-bottom: 20px;"></div>
            <h5>DANH SÁCH CHƯƠNG</h5>
            <hr>
                <ul class="mucluctruyen">
                @php
                 $mucluc = count($chapter);
                    @endphp
                    @if($mucluc==0)
                                <p>Không có chapter nào</p>
                    @else
                @foreach($chapter as $key => $chap)
                        <li style="  list-style: none;"><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
                @endforeach
                @endif
                </ul>
                <div style="padding-bottom: 20px;"></div>
                <h5>BÌNH LUẬN TRUYỆN</h5> 
                <hr>          
                <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
                <div style="padding-bottom: 20px;"></div>
                <h5>Sách liên quan</h5>
                <hr>
            <div class="row">
                    
            @foreach($cungdanhmuc as $key =>$value)
                            <div class="col-md-3">
                            <div class="card shadow-sm">
                               
                                    <img class="card-img-top" style="height:350px;object-fit: cover;" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" />
                                    <div class="card-body">
                                    <div class="ten-truyen">{{$value->tentruyen}}</div>
                                        <p class="card-text">{{$value->tomtat}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-success">Đọc ngay</a>
                                          
                                        </div>
                                        <small class="text-body-secondary">{{$value->created_at->diffForHumans()}}</small>
                                    </div>
                                    </div>
                                </div>
                            </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-3">
           
            <h4 >Truyện yêu thích</h4>
            
            <div id="yeuthich"></div>
            <hr>
            <h4>Truyện nổi bật</h4>
            
            @foreach($truyen_noibat as $key =>$truyennb)
            <div class="row mt-2">
                        <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyennb->hinhanh)}}" alt=""></div>
                            <div class="col-md-7 sidebar">
                            <a href="{{url('xem-truyen/'.$truyennb->slug_truyen)}}">
                                <p style="color:#666">{{$truyennb->tentruyen}}</p>
                                <p style="color:#666">{{$truyennb->danhmuctruyen->tendanhmuc}}</p>
                            </a>
                            </a>
                        </div>
                    </div> 
            @endforeach
            <hr>
            <h4>Truyện xem nhiều</h4>
           
            @foreach($truyen_xemnhieu as $key =>$truyenxn)
            <div class="row mt-2">
                        <div class="col-md-5"><img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyenxn->hinhanh)}}" alt=""></div>
                            <div class="col-md-7 sidebar">
                            <a href="{{url('xem-truyen/'.$truyenxn->slug_truyen)}}">
                                <p style="color:#666">{{$truyenxn->tentruyen}}</p>
                                <p style="color:#666">{{$truyenxn->danhmuctruyen->tendanhmuc}}</p>
                            </a>
                            </a>
                        </div>
                    </div> 
            @endforeach
        </div>
    </div>
@endsection