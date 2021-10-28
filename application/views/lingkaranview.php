<!DOCTYPE html>
<html>

<head>
	<title>Luas lingkaran</title>
</head>

<body>

	<h2>Model Lingkaran</h2>

	<table>
		<tr>
			<td>Nilai jari-jari</td>
			<td>:</td>
			<th><?php echo $model->get_jarijari(); ?></th>
		</tr>
		<tr>
			<td>Luas Lingkaran</td>
			<td>:</td>
			<th><?php echo $model->hitung_luas(); ?></th>
		</tr>
		<tr>
			<td>Keliling Lingkaran</td>
			<td>:</td>
			<th><?php echo $model->hitung_keliling(); ?></th>
		</tr>
	</table>
	</form>

	<p>
	<p>

	<table>
		<tr>
			<th>Nama</th>
			<th>:</th>
			<th>Rendy Priyadi Suhendi</th>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>12201524</td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>12.3A.15</td>
	</table>

</body>

</html>