<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">                       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only"></span></a>
                    </li>

                    
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('danhmuc.create')}}">Thêm danh mục <span class="sr-only"></span></a>
                            <a class="nav-link" href="{{route('danhmuc.index')}}">Liệt kê danh mục <span class="sr-only"></span></a>
                        </li> 

                    
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('truyen.create')}}">Thêm sách truyện <span class="sr-only"></span></a>
                            <a class="nav-link" href="{{route('truyen.index')}}">Liệt kê sách truyện <span class="sr-only"></span></a>
                        </li>                                                             
                </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>

        </div>
    </nav>
</div>