 @extends('layouts.app')

@section('content')
@include('layouts.nav')

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.x-git.js"></script> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản lý</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only"></span></a>
                                </li>

                                <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('danhmuc.create')}}">Thêm danh mục <span class="sr-only"></span></a>
                                    <a class="nav-link" href="{{route('danhmuc.index')}}">Liệt kê danh mục <span class="sr-only"></span></a>
                                </li> 

                                <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('danhmuc.create')}}">Thêm sách truyện <span class="sr-only"></span></a>
                                    <a class="nav-link" href="{{route('danhmuc.index')}}">Liệt kê sách truyện <span class="sr-only"></span></a>
                                </li>                               
                                                            
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>

                        </div>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 





