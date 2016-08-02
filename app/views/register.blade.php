<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
<form method="post" action="register" enctype='multipart/form-data'>
<label>Nama</label>
<input type="text" name="nama" value="@if($list != NULL){{$list->nama}} @endif">
<p>
<label>Nombor Telefon</label>
<input type="text" name="no_tel" value="@if($list != NULL){{$list->no_tel}} @endif">
<p>
<label>Emel</label>
<input type="email" name="emel" value="@if($list != NULL){{$list->emel}} @endif">
<p>
<input type="hidden" value="@if($list != NULL){{$list->id}} @endif" name="id">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
