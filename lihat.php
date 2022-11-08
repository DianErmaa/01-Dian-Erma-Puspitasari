<?php
	include 'layouts/sidebar.php';
	include 'layouts/topbar.php';
?>
<?php
	include 'koneksi.php';
	$id =  mysqli_real_escape_string($koneksi,$_GET['id']);
	$query = mysqli_query($koneksi,"SELECT * FROM surat WHERE id='$id'");
	$data = mysqli_fetch_array($query);
?>
	<div class="container-fluid">
		<h2>Arsip Surat >> Lihat</h2>
		<h5>Nomor Surat :
			<?php echo $data['nosurat'];?>
		</h5>
		<h5>Kategori :
			<?php echo $data['kategori'];?>
		</h5>
		<h5>Judul :
			<?php echo $data['judul'];?>
		</h5>
		<h5>Waktu Unggah :
			<?php echo $data['waktu']; ?>
		</h5>
		
	<iframe src="file/file_<?php echo $data['id'];?>.pdf" width="1000" height="500"></iframe><?php echo $data['file']; ?><br>
	<a href="index.php" class="btn btn-danger">Kembali</a>
	<a href="unduh.php?filename=<?=$data['file']?>" class="btn btn-success">Unduh</a>

	</div>

<?php
	include 'layouts/footer.php';
	?>
