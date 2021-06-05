<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

	<h3>Data barang</h3>

	<a href="index"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/barang/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		harga <textarea name="harga" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>