<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sách truyện</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <!-------Menu-------->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Sachtruyen.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="navbar-brand">
                        <a class="nav-link" href="{{url('/')}}">Trang chủ <span class="sr-only"></span></a>
                    </div>
                        
                    
                    <div class="navbar-brand">
                    <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục truyện
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @foreach($danhmuc as $key => $value)
                                <li><a class="dropdown-item" href="{{url('danh-muc/'.$value->slug_danhmuc)}}">{{$value->tendanhmuc}}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    <div class="navbar-brand">
                    <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Truyện
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @foreach($danhmuc as $key => $value)
                                <li><a class="dropdown-item" href="{{url('danh-muc/'.$value->slug_danhmuc)}}">{{$value->tendanhmuc}}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">                                           
                    </form>
                    <div class="navbar-brand"> 
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </nav>
            <!-------Slide-------->
            @yield('slide')

            <!-------Footer-------->
            @yield('content')
            <footer class="text-muted">
                <div class="container">
                    <p class="float-right">
                        <a href="#">Back to top</a>
                    </p>
                    <p>Sách, truyện tổng hợp hiện có trên mạng internet. Nếu bạn có bản quyền thương mại với tác phẩm voi lòng liên hệ qua email: info.docsachvui@gmail.com</p>
                    <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
                </div>
            </footer>
        </div>
                           
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js">  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            //nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    </body>
</html>
