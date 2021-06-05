<!DOCTYPE html>
<html>
<head>
    <title>1461900063</title>
</head>
<body>
    <h3>Edit Barang</h3>
<a href="/pasien"> Kembali</a>
<br/>
<br/>
@foreach($barang as $p)
    <form action="/barang/update" method="post">
    {{ csrf_field() }}
        Id <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
        Harga <textarea required="required" name="harga">{{ $p->harga }}</textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
@endforeach
</body>
</html> 