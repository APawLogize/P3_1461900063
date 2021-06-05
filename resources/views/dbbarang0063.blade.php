<!DOCTYPE html>
<html>
<head>
	<title>DbBarang</title>
</head>
<body>
	<h3>Data Barang</h3>

	<a href="/pegawai/tambah"> + Tambah Barang Baru</a>
	<h2>Cari Barang : </h2>
	<form action="/barang/cari" method="GET">
    <input type="text" name="lihat" placeholder="Masukkan disini" value="{{ old('cari') }}">
    <input type="submit" value="CARI">
	
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
			<td>
				<a href="/barang/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/barang/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>