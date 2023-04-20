@extends('../layout')
<!-- @section('slide')
    @include('pages.slide')
@endsection   -->
@section('content')  

<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$tendanhmuc}}</li>
        </ol>
    </nav>        
                <!------------------------ Sách mới ----------------------------->
                <h3>{{$tendanhmuc}}</h3>
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
                               
                                    <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" />
                                    <div class="card-body">
                                        <h5>{{$value->tentruyen}}</h5>
                                        <p class="card-text">{{$value->tomtat}}</p>
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
                        @endif
                        </div>
                       
                    </div>
                </div>
                <hr>
             <nav aria-lable="Page navigation nav-success">
                {!!$truyen->links()!!}
             </nav>
               
@endsection