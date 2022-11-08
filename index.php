<?php
    include 'layouts/sidebar.php';
    include 'layouts/topbar.php';
    include 'koneksi.php';
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <?php
    if (isset($_SESSION['pesan']) && $_SESSION['pesan'])
    {
      printf('<b>%s</b>', $_SESSION['pesan']);
      unset($_SESSION['pesan']);
    }
  ?>

        <h2>Arsip Surat</h2><br>
        <h5>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</h5>
        <h5>Klik "lihat" pada kolom aksi untuk menampilkan surat.</h5>
        <form action="index.php" method="get">
         <label>Cari :</label>
         <input type="text" name="cari">
         <input type="submit" value="Cari">
        </form>
        <?php 
        if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         echo "<b>Hasil pencarian : ".$cari."</b>";
        }
        ?>
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>NOMOR SURAT</th>
                    <th>KETEGORI</th>
                    <th>JUDUL</th>
                    <th>WAKTU PENGARSIPAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    if(isset($_GET['cari'])){
                      $cari = $_GET['cari'];
                      $hasil = mysqli_query($koneksi,"select * from surat where judul like '%".$cari."%'");    
                     }else{
                      $hasil = mysqli_query($koneksi,"select * from surat");  
                     }
                    $no = 1;
                    $sql = "SELECT * FROM surat";
                        while ($data = mysqli_fetch_array($hasil)){
                ?>
                <tr class="text-center">

                    <td><?php echo $no++?></td>
                    <td><?php echo $data['nosurat'];?></td>
                    <td><?php echo $data['kategori'];?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['waktu'];?></td>
                    <td>
                     

                        
                         <a href="hapus.php?id=<?php echo $data['id'];?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a> 
                         <a href="unduh.php?filename=<?=$data['file']?>" class="btn btn-warning">Unduh</a>
                        <a href="lihat.php?id=<?php echo $data['id'];?>" class="btn btn-primary">Lihat</a>
                    </td>
                </tr>
                <?php
            }?>
            </tbody>
            <tr>
                
            </tr>
        </table>
        <a href="tambah.php" class="btn btn-secondary"><i class="fas fa-fw fa-plus"></i>Arsipkan Surat</a>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
    include 'layouts/footer.php';
?>

