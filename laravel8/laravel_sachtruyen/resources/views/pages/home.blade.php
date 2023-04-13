 @extends ('../layout')
 @section('slide')
    @include('pages.slide')
@endsection

 @section('content')
 <!-------Sách mới cập nhật-------->
 <div class="album py-5 bg-light">
            <h3>Sách mới cập nhật</h3>           
                <div class="container">
                    <div class="row">
                        @foreach ($truyen as $key => $value)
                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">                                
                                    <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" >
                                    <div class="card-body">
                                        <h5>{{$value->tentruyen}}</h5>
                                        <p class="card-text">{{$value->tomtat}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                            </div>
                                            <small class="text-muted">9 mins ago</small>
                                        </div>
                                    </div>                                
                            </div>
                        </div>  
                        @endforeach                      
                    </div>
                    <a class="btn btn-success" href="">Xem tất cả</a>
                </div>
</div>

<!-------Sách hay xem nhiều-------->
            <!-- <div class="album py-5 bg-light">
            <h3>Sách hay xem nhiều</h3>           
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <a class="btn btn-success" href="">Xem tất cả</a>
                </div>
            </div> -->

<!-------Blogs-------->
            <!-- <div class="album py-5 bg-light">
            <h3>Blogs</h3>           
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow">
                                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                                <div class="card-body">
                                    <h3>This is a wider card with supporting text below</h3>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"> 3500</i></a>
                                        </div>
                                        <small class="text-muted">9 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <a class="btn btn-success" href="">Xem tất cả</a>
            </div> -->
@endsection
            
            