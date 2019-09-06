<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1px">
	<tr>
		<th width="50px">Id</th>
		<th>Nama</th>
		<th>Tags</th>
	</tr>
		<?php foreach ($data as $d): ?>
	<tr>
		<td>{{$d->id}}</td>
		<td>{{$d->name}}</td>
		<td>
			@foreach($d->tags as $tag)
				{{$tag->name.','}}
			@endforeach
		</td>
	</tr>
		<?php endforeach; ?>
</table>
</body>
</html>