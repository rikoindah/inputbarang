<!DOCTYPE html>
<html>
<head>
	<title>Form Penjualan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	.container {
	margin: 0 auto;
	width: 50%;
	padding: 20px;
	background-color: #f2f2f2;
	border-radius: 10px;
	box-shadow: 0px 0px 10px #888888;
}

h1 {
	text-align: center;
	margin-bottom: 20px;
}

form {
	display: flex;
	flex-direction: column;
	align-items: center;
}

label {
	display: block;
	margin-bottom: 10px;
	font-weight: bold;
}

input[type=text], input[type=number] {
	padding: 10px;
	border-radius: 5px;
	border: none;
	box-shadow: 0px 0px 5px #888888;
}

button {
	margin-top: 20px;
	background-color: #4CAF50;
	color: white;
	padding: 10px;
	border: none;
	border-radius: 5px;
	box-shadow: 0px 0px 5px #888888;
	cursor: pointer;
}

</style>
<body>
	<div class="container">
		<h1>Form Penjualan</h1>
		<form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
          @csrf
			<label for="nama_barang">Nama Barang:</label>
			<input type="text" id="nama_barang" name="nama_barang" required>
			<label for="harga_barang">Harga Barang:</label>
			<input type="number" id="harga_barang" name="harga_barang" required>
			<label for="jumlah_barang">Jumlah Barang:</label>
			<input type="number" id="jumlah_barang" name="jumlah_barang" required>
			<button type="submit">Simpan</button>
		</form>
	</div>
</body>
</html>
