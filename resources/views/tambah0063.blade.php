<!DOCTYPE html>
<html>
<head>
    <title>1461900063</title>
</head>
<body>
<h3>Tambah Barang</h3>
<a href="/barang"> Kembali</a>
<br/>
<br/>
    <form action="/barang/store" method="post">
        {{ csrf_field() }}
            Id <input type="text" name="id" required="required"> <br/>
            Nama <input type="text" name="nama" required="required"> <br/>
            Harga <textarea name="harga" required="required"></textarea> <br/>
<input type="submit" value="Simpan Data">
</form>