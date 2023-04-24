@extends('../layout')
<!-- @section('slide')
    @include('pages.slide')
@endsection   -->
@section('content')  
<style type="text/css">

.ten-truyen{
  height: 45px;
}

</style>
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$tukhoa}}</li>
        </ol>
    </nav>        
                <!------------------------ Sách mới ----------------------------->
                <h3>Kết quả tìm kiếm với từ khóa: {{$tukhoa}}</h3>
                <div class="album py-5 bg-body-tertiary">
                        <div class="container">
                            
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            @php
                                 $count = count($truyen);
                            @endphp
                            @if($count==0)
                                <p>Không có truyện nào</p>
                            @else


                            @foreach($truyen as $key =>$value)
                            <div class="col">
                            <div class="card shadow-sm">
                               
                                    <img class="card-img-top" style="height:400px;object-fit: cover;" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" />
                                    <div class="card-body">
                                        <div class="ten-truyen">{{$value->tentruyen}}</div>
                                        <p class="card-text">{{$value->tomtat}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-success">Đọc ngay</a>
                                           
                                        </div>
                                        <small class="text-body-secondary">9 mins</small>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>
                      
                    </div>
                </div>
                 <!------------------------ Danh mục truyen ----------------------------->
                
               
                <!------------------------  ----------------------------->
               
@endsection