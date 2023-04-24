@extends('../layout')
<!-- @section('slide')
    @include('pages.slide')
@endsection   -->
@section('content')  


                <div class="album py-5 bg-body-tertiary">
                        <div class="container">
                            
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            @php
                               $count = count($blog);
                            @endphp
                            @if($count==0)
                                <p>Không có bài viết nào</p>
                            @else


                            @foreach($blog as $key =>$value)
                            <div class="col">
                            <div class="card shadow-sm">
                               
                                    <img class="card-img-top"style="height:400px;object-fit: cover;" src="{{asset('public/uploads/blog/'.$value->hinhanh)}}" />
                                    <div class="card-body">
                                        <H5 style="height:45px;">{{$value->tenbaiviet}}</H5>
                                        <p class="card-text">{{$value->tomtat}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('xem-baiviet/'.$value->slug_baiviet)}}" class="btn btn-sm btn-success">Đọc ngay</a>
                                           
                                        </div>
                                        <small class="text-body-secondary">{{$value->created_at}}</small>
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
                {!!$blog->links()!!}
             </nav>
               
@endsection