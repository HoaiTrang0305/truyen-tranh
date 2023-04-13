<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">                       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto">
                    <div class="navbar-brand">
                        <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only"></span></a>
                    </div>
                    
                    <div class="navbar-brand">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục truyện
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm danh mục</a></li>
                                <li><a class="dropdown-item" href="{{route('danhmuc.index')}}">Liệt kê danh mục</a></li>
                            </ul>
                        </div>
                    </div>
                        
                    <div class="navbar-brand">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Truyện
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('truyen.create')}}">Thêm sách truyện</a></li>
                                <li><a class="dropdown-item" href="{{route('truyen.index')}}">Liệt kê sách truyện</a></li>
                            </ul>
                        </div>
                    </div>
                        
                    <div class="navbar-brand">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Chapter
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('chapter.create')}}">Thêm chapter</a></li>
                                <li><a class="dropdown-item" href="{{route('chapter.index')}}">Liệt kê chapter</a></li>
                            </ul>
                        </div>
                    </div>                        
            </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">                                           
                </form>
                <div class="navbar-brand"> 
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>

        </div>
    </nav>
</div>