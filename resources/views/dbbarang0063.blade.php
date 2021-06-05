<!DOCTYPE html>
<html>
<head>
	<title>DbBarang</title>
</head>
<body>

	<a href="/pegawai/tambah"> + Tambah Barang Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Harga</th>
		</tr>
		@foreach($barang as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->harga }}</td>
		</tr>
		@endforeach
	</table>


</body>
</html>