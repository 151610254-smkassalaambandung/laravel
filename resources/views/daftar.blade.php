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
				 <b>Daftar : {{$data}} {{$data2}}</b>
					</font>
					@foreach ($b as $datas)
					<ul>
					<li>{{$datas}}</li>
					</ul>
		@endforeach
				</td>
			</tr>
		</center>

</body>
</html>