@extends("layouts.app")
@section("product")
<section>
    <div class="container">
        <div class="d-flex">
            <div>
                @foreach($comik as $comi).
                <div>
                    <img src="{{$comi->img}}" class="d-block w-100 " alt="...">
                    <h4>{{$comi['name']}}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection