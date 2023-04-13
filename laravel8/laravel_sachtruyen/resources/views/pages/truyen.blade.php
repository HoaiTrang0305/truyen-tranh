@extends ('../layout')


@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-9">
        <dic class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
            </div>
            <div class="col-md-9">
                <style type="text/css">
                    .infotruyen{
                        list-style:none;
                    }

                </style>
                <ul class="infotruyen">
                    <li>Tác giả: Charles Perrault</li>
                    <li>Thể loại: Truyên cổ tích</li>
                    <li>Số chapter: 5</li>
                    <li>Số lượt xem: 02</li>
                    <li><a href="#">Xem mục lục</a></li>
                    <li><a href="#" class="btn btn-primary">Đọc online</a><li>
                    
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <p>Truyện Cô bé lọ lem kể rằng ở một ngôi nhà nọ,
                 có một cô gái có ngoại hình xinh đẹp, chăm chỉ,
                  rất thích ca hát và rất hiếu thảo.
                   Mẹ cô mất sớm nên bố cô lấy vợ hai.
                    Người vợ này tính tình độc ác và có hai 
                    cô con gái vừa xấu tính vừa keo kiệt. 
                    Và sau đó không lâu thì cha Lọ Lem cũng mất.  
                    Và người mẹ kế đã bắt Lọ Lem làm việc chăm chỉ,
                     không ngơi tay. Vào đêm vũ hội, Lọ Lem được
                      sự giúp đỡ của bà tiên và tham dự vũ hội.
                       Yêu cầu của nàng tiên là trước 12 giờ đêm 
                       phải trở về nhà. Chàng hoàng tử yêu nàng say 
                       đắm nàng Lọ Lem. Cô ấy rời quả bóng và đánh
                        rơi một chiếc giày thủy tinh. Hoàng tử ra 
                        lệnh tìm chủ nhân của chiếc giày. Và cuối 
                        cùng anh đã tìm thấy cô. Kể từ đó, họ sống 
                        hạnh phúc bên nhau.</p>
        </div>
        <hr>
        <h4>Mục lục</h4>
        <ul class="mucluctruyen">
            <li><a href="#">Phần thứ nhất-Chương1</a></li>
            <li><a href="#">Phần thứ nhất-Chương2</a></li>
            <li><a href="#">Phần thứ nhất-Chương3</a></li>
            <li><a href="#">Phần thứ nhất-Chương4</a></li>
            <li><a href="#">Phần thứ nhất-Chương5</a></li>
        </ul>
        <h4>Sách cùng danh mục</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <a href="">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                        <div class="card-body">
                            <h5>This is a wider card with supporting text below</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           
                        </div>
                    </a>
                </div>
            </div> 

            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <a href="">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                        <div class="card-body">
                        <h5>This is a wider card with supporting text below</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           
                        </div>
                    </a>
                </div>
            </div> 

            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <a href="">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                        <div class="card-body">
                            <h5>This is a wider card with supporting text below</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           
                        </div>
                    </a>
                </div>
            </div>

             <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <a href="">
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/cinderella176.jpg')}}" >
                        <div class="card-body">
                            <h5>This is a wider card with supporting text below</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           
                        </div>
                    </a>
                </div>
            </div> 
        </div>

    </div>

    <div class="col-md-3">
        <h3>Sách hay xem nhiều</h3>
    </div>
</div>

@endsection
            
            