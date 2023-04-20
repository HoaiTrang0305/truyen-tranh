@extends('../layout')
@section('slide')
    @include('pages.slide')
@endsection  
@section('content')       
<h3>SÁCH MỚI NHẤT</3>
                <div class="owl-carousel owl-theme">
                @foreach($truyen as $key =>$value)
                    <div class="item">
                        <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}"/>
                        <h3>{{$value->tentruyen}}</h3>
                        <p><i class="fas fa-eye"></i>19999</p>
                        <a class="btn btn-danger btn-sm" href="{{url('xem-truyen/'.$value->slug_truyen)}}" >Đọc ngay</a>
                    </div>
                    @endforeach
                </div>
                <!------------------------ Sách mới ----------------------------->
                <h3>SÁCH MỚI CẬP NHẬT</h3>
                <div class="album py-5 bg-body-tertiary">
                        <div class="container">
                            
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            @foreach($truyen as $key =>$value)
                            <div class="col">
                            <div class="card shadow-sm">
                               
                                    <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" />
                                    <div class="card-body">
                                        <h5>{{$value->tentruyen}}</h5>
                                        <p class="card-text"><p style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">{{$value->tomtat}}</p></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a  class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>19999</a>
                                        </div>
                                        <small class="text-body-secondary">{{$value->updated_at->diffForHumans()}}</small>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="btn btn-success" href="" >Xem tất cả</a>
                    </div>
                </div>
                 <!------------------------ Sách nổi bật ----------------------------->
               
                <!------------------------ Blogs ----------------------------->
               
@endsection