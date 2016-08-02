<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>





	<table >
	
	<tr>
		<td>id</td>
		<td>nama</td>
		<td>nombor telefon</td>
		<td>emel</td>
		<td>fungsi</td>
	</tr>
    	 
	@foreach ($list as $lists)
	
	<tr>
		<td>{{ $lists['id'] }}</td>
		<td>{{ $lists['nama'] }}</td>
		<td>{{ $lists['no_tel'] }}</td>
		<td>{{ $lists['emel'] }}</td>

	
		
		<td><a href="{{URL::to('register?id='.$lists->id)}}">edit</a></td>
	
	</tr>
	@endforeach

   </table>
   <p>
   	
   </p>
   <a href="{{URL::to('register')}}">New</a>

</body>
</html>	

