<!DOCTYPE html>
<html>
	<head>
        @foreach ($produkt as $podukt2)
		<title> </title>
	</head>
	<body>
		<header>
            <h1> {{$podukt2['name']}}</h1>
            
		 </header>
		<main>
			<div class="info">
				<span class="date">{{$lulu['date']}}</span>
				<span class="author">{{$lulu['author']}}</span>
			</div>
			<div class="text">
				{{$lulu['text']}}
			</div>

		</main>
        @endforeach
	</body>
</html>