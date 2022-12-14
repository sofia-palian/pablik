@extends("layouts.app")
@section("product")
<section>
    <div class="container">
        <div class="d-flex flex-wrap">
            @foreach($comik as $comi)
            <div class="d-flex flex-wrap col-lg-3 col-sm-6 col-md-12 col-12 mt-3 flex-column justify-content-center align-items-center ">
                <img src="{{$comi->img}}" class="img1 img-fluid col-lg-7" alt="...">
                <h3 class="text-center">{{$comi['name']}}</h3>
                <p>{{$comi['price']}}</p>
               <button class="but"><a href="./tov/{{$comi['id']}}" class="text-black text-decoration-none">Подробнее</a></button> 
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection