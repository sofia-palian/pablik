@extends("layouts.app")
@section("content")
<section class="abuotUs">
    <div class="container">
        <h2><b> О нас </b></h2> 
        <div class="d-flex align-items-center justify-content-around">
            <img src="/public/img/Group 1.svg">
            <div class="d-flex text-center flex-column py-5" >
                <h4 class="m-0"><b>Comics are art. But funnier.</b></h4>
                <h5>"Комиксы – искусство. Только забавнее."</h5>
            </div>
        </div>
        <h2><b>Новинки компании</b></h2>
        <div class="d-flex flex-column align-items-center">
            <div id="carouselExampleIndicators" class="carousel slide w-50 h-50 d-flex justify-content-center py-4" data-bs-ride="five">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner ">
                  @foreach($code as $codes)
                  @if ($loop ->first)
                  <div class="carousel-item active ">
                    <img src="{{$codes->img}}" class="d-block w-100 " alt="...">
                  </div>
                  @else
                  <div class="carousel-item ">
                    <img src="{{$codes->img}}" class="d-block w-100 " alt="...">
                  </div>
                  @endif 
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Следующий</span>
                </button>
              </div>
        </div>
    </div>
<section>
@endsection