<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
		<center>
			<tr>
				<td>
				<font color="blue"> 
				 <h1>Daftar : {{$data}} </h1>
					</font>
					@foreach ($b as $datas)
				<hr>{{$datas}}<hr>
		@endforeach
				</td>
			</tr>
		</center>

</body>
</html>
