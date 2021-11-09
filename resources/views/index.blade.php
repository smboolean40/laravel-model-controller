<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Movies</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<ul>
		@foreach ($movies as $movie)
		<li>
			<h3>{{$movie["title"]}}</h3>
			<p>{{$movie->nationality}}</p>
			<p>Data uscita: {{$movie->date}}</p>
		</li>
		@endforeach
	</ul>
</body>
</html>