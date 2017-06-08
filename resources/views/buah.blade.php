<!DOCTYPE html>
<html>
<head>
	<title>Lopping</title>
</head>
<body>
		<h1>Buah Buahan</h1>
		@foreach ($buah as $data)
				<hr>{{$data}}<hr>
		@endforeach
		<br>
		<br>
		<h1>Mahluk hidup</h1>
		@foreach ($mahlukhidup as $data)
				<hr>{{$data}}<hr>
		@endforeach
		<br>
		<br>
		<h1>Komputer</h1>
		@foreach ($komputer as $data)
				<hr>{{$data}}<hr>
		@endforeach

</body>
</html>