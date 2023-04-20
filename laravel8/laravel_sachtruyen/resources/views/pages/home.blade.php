@extends('../layout')
@section('slide')
    @include('pages.slide')
@endsection  
@section('content')       
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

.card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}

.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 
.noidung_chuong {
  padding:15px;
  text-align:left;
  height:63px;
}
.card-read-more {
    display: flex;
   width: 100%;
   justify-content:center;
   align-content: center;
  border-top: 1px solid #aaa;
}
.card-read-more a {
  padding:10px;
  font-weight:600;
  color: #40916c;
  text-transform: uppercase;
  
}
</style>
                <div style="margin-top:50px;"  class="owl-carousel owl-theme">
                @foreach($truyen as $key =>$value)
                <div class="card">
                            <img style="height:400px;object-fit: cover;"  src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" />
                          </a>
                            <div class="noidung_chuong">
                                <p class="card-title">{{$value->tentruyen}}</p>
                            </div>
                            <div class="card-read-more">
                                <a href="{{url('xem-truyen/'.$value->slug_truyen)}}"  >
                                Đọc ngay
                                </a>
                         </div>
                </div>
                    @endforeach
                </div>
                <!------------------------ Sách mới ----------------------------->
                <h3  style="margin-top:50px;">SÁCH MỚI CẬP NHẬT</h3>
                <div class="album py-5 bg-body-tertiary">
                        <div class="container">
                            
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            @foreach($truyen as $key =>$value)
                            <div class="col">
                            <div class="card shadow-sm">
                               
                                    <img class="card-img-top" style="height:400px;object-fit: cover;" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" />
                                    <div class="card-body" >
                                    <div class="ten-truyen">{{$value->tentruyen}}</div>
                                        <p class="card-text"><p style="display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">{{$value->tomtat}}</p></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-success">Đọc ngay</a>
                                           
                                        </div>
                                        <small class="text-body-secondary">{{$value->updated_at->diffForHumans()}}</small>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                      
                    </div>
                </div>
             <hr>
             </div>
             <nav aria-lable="Page navigation">
                {!!$truyen->links()!!}
             </nav>                 
            </div>
             
               
@endsection