@extends('../layout')
<!-- @section('slide')
    @include('pages.slide')
@endsection   -->
@section('content')  

        <!-- Responsive navbar-->
       
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$blog->tenbaiviet}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{$blog->created_at}}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$blog->tacgia}}</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-8"><img class="img-fluid rounded" src="{{asset('public/uploads/blog/'.$blog->hinhanh)}}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$blog->noidung}}</p>
                         
                    </article>
                    <!-- Comments section-->
                    
                    <section class="mb-5">
                    <h5>BÌNH LUẬN </h5> 
                    <hr> 
                    <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>
                    </section>
                </div>
            
                <div class="col-lg-3">
                <h1 class="fw-bolder mb-2"><h4>Gợi ý bài viết</h4></h1>
                         @foreach($blogs as $key =>$value)
                         <div class="card mb-4">
                           
                            <div class="card shadow-sm">
                               
                                    <img class="card-img-top" src="{{asset('public/uploads/blog/'.$value->hinhanh)}}" />
                                    <div class="card-body">
                                        <h5>{{$value->tenbaiviet}}</h5>    
                                        <p class="card-text">{{$value->tomtat}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('xem-baiviet/'.$value->slug_baiviet)}}" class="btn btn-sm btn-success">Đọc ngay</a>
                                           
                                        </div>
                                        <small class="text-body-secondary">{{$value->cr}}</small>
                                    </div>
                                    </div>
                               
                            @endforeach
                    
                  
                </div>
            </div>
        </div>
        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
