@extends("layouts.app")
@section("product")
<section>
    <div class="container d-flex flex-wrap">
        @foreach($comik as $comi).
        <div class="d-flex flex-wrap col-lg-3 ">
            <img src="{{$comi->img}}" class="d-block w-100 " alt="...">
            <h4>{{$comi['name']}}</h4>
        </div>
        @endforeach
    </div>
</section>
@endsection