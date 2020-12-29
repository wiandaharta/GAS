<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>

				<?php 
                require 'config.php';
                $no = 0;
                $query = mysqli_query($conn, "SELECT * FROM perwakilan INNER JOIN mahasiswa ON perwakilan.nim = mahasiswa.nim INNER JOIN dosen on perwakilan.nip = dosen.nip");
                while($row=mysqli_fetch_object($query))
                {
                    $no++;
				 ?>
				<tr>
					<td><? $no ?></td>
					<td><?= $row->id; ?></td>
					<td><?= $row->nip; ?></td>
					<td><?= $row->nim; ?></td>
					<td>
						<a href="" class="btn btn-danger">Del</a>
						<a href="" class="btn btn-warning">Edit</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>