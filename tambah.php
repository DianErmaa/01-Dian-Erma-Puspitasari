<?php
    include 'layouts/sidebar.php';
    include 'layouts/topbar.php';

?>

    <div class="container-fluid">
         <h2>Arsip Surat >> Unggah</h2>
         <h5>Unggah Surat yang telah terbit pada form ini untuk diarsipkan.</h5>
         <h5>Catatan :</h5>
         <h6><ul>
             <li>Gunakan File berformat PDF</li>
         </ul></h6>
         <form action="upload.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
                <table>
                    <tr>
                        <td width="10%">
                            <label>Nomor Surat </label>
                        </td>
                        <td width="85%">
                            <input type="text" name="nosurat" class="form-control" id="nosurat">
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <label>Kategori Surat</label>
                        </td>
                        <td width="85%">
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="Undangan" class="form-control">Undangan</option>
                                <option value="Pemberitahuan" class="form-control">Pengumuman</option>
                                <option value="Pemberitahuan" class="form-control">Nota Dinas</option>
                                <option value="Pemberitahuan" class="form-control">Pemberitahuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <label>Judul Surat </label>
                        </td>
                        <td width="85%">
                            <input type="text" name="judul" class="form-control" id="judul">
                        </td>
                    </tr>
                    <tr>
                        <td width="10%">
                            <label>Waktu Upload </label>
                        </td>
                        <td width="85%">
                            <input type="text" name="waktu" id="waktu" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d H:i:s"); ?>">
                        </td>
                    </tr>

                    <tr>
                        <td width="10%">
                            <label>File surat</label>
                        </td>
                        <td width="85%">
                            <input type="file" name="file" id="file">
                        </td>
                    </tr>

                </table>
             </div>
             <a href="index.php" class="btn btn-danger">Kembali</a>
             <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">
         </form>
    </div>
</div>



<?php 
    include 'layouts/footer.php';
 ?>