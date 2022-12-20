@extends("layouts.app")
@section("tovar")
<section>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div>
               @foreach($comik as $comi)
                <div class="d-flex flex-column ">
                    <img src=" {{$comi->img}} " class="img1 img-fluid col-lg-7 w-100" alt="Первый слайд">
                    <h3 class="text-center">Название: {{$comi['name']}}</h3>
                    <p class="text-center"> Издатель : {{$comi['publisher']}}</p>
                    <p class="text-center">Цена: {{$comi['price']}} </p>
                    <p class="text-center">Год выпуска: {{$comi['dite']}}</p>
                </div>
                @endforeach 
            </div>
            
        </div>
    </div>
</section>
@endsection