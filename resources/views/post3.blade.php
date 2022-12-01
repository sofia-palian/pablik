<!DOCTYPE html>
<html>
	<head>
        @foreach ($post as $lulu)
		<title> {{$lulu['title']}}</title>
	</head>
	<body>
		<header>
            <h1> {{$lulu['title']}}</h1>
		</header>
		<main>
			<div class="info">
				<span class="date">{{$lulu['date']}}</span>
				<span class="author">{{$lulu['author']}}</span>
			</div>
			<div class="text">
				{{$lulu['teaser']}}
			</div>
            <div class="more">
			    <a href="/post/">{{$lulu['text']}}</a>
			</div>

		</main>
        @endforeach
	</body>
</html>