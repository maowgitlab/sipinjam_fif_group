<?php 
$id_konsumen = $_GET['id_konsumen'];
$ambil  = $con->query("SELECT * FROM konsumen WHERE id_konsumen ='$_GET[id_konsumen]'");
$pecah  = $ambil->fetch_assoc();   
$tgl = tgl_indo($pecah['tgl_konsumen']);
?>

<div class="row">

    <div class="col-3"></div>
    
    <div class="col-6">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Lihat Data Konsumen - "<strong><?php echo $pecah['nama_konsumen'] ?></strong>" 
                    <div class="float-end">
                        <a href="?page=konsumen&aksi=ubah&id_konsumen=<?php echo $pecah['id_konsumen'] ?>" class="btn btn-success btn-sm waves-effect waves-light">Ubah</a> 
                        <a href="?page=konsumen" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                    </div>
                </h4> <hr>

                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="userpage-content"></div>
                        <div class="p-4">
                            <div class="userpage-user-img">
                                <img src="assets/gambar/user.png" alt="" class="avatar-lg rounded-circle img-thumbnail">
                            </div>
                            <h5 class="mt-3 mb-1"><?php echo $pecah['nama_konsumen'] ?></h5> 

                            <table class="table table-borderless table-sm align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">NIK</th>
                                        <td class="text-dark text-end"><?php echo $pecah['nik_konsumen'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Nama</th>
                                        <td class="text-dark text-end"><?php echo $pecah['nama_konsumen'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Tempat, Tanggal Lahir</th>
                                        <td class="text-dark text-end"><?php echo $pecah['tmp_konsumen'] ?>, <?php echo $tgl ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Telepon</th>
                                        <td class="text-dark text-end"><?php echo $pecah['telp_konsumen'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Email</th>
                                        <td class="text-dark text-end"><?php echo $pecah['email_konsumen'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Alamat</th>
                                        <td class="text-dark text-end"><?php echo $pecah['alamat_konsumen'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Agama</th>
                                        <td class="text-dark text-end">
                                            <?php 
                                            $sql_barang = mysqli_query($con, "SELECT * FROM konsumen 
                                                JOIN agama ON konsumen.id_agama=agama.id_agama WHERE id_konsumen = '$pecah[id_konsumen]' ");
                                                while ($data_barang = mysqli_fetch_array($sql_barang)){
                                                echo "$data_barang[agama]";
                                            } 
                                            ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <th class="ps-0" scope="row">Status Pernikahan</th>
                                        <td class="text-dark text-end">
                                            <?php 
                                            $sql_barang = mysqli_query($con, "SELECT * FROM konsumen 
                                                JOIN pernikahan ON konsumen.id_pernikahan=pernikahan.id_pernikahan WHERE id_konsumen = '$pecah[id_konsumen]' ");
                                                while ($data_barang = mysqli_fetch_array($sql_barang)){
                                                echo "$data_barang[pernikahan]";
                                            } 
                                            ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Pekerjaan</th>
                                        <td class="text-dark text-end">
                                            <?php 
                                            $sql_barang = mysqli_query($con, "SELECT * FROM konsumen 
                                                JOIN pekerjaan ON konsumen.id_pekerjaan=pekerjaan.id_pekerjaan WHERE id_konsumen = '$pecah[id_konsumen]' ");
                                                while ($data_barang = mysqli_fetch_array($sql_barang)){
                                                echo "$data_barang[pekerjaan]";
                                            } 
                                            ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Pendidikan</th>
                                        <td class="text-dark text-end">
                                            <?php 
                                            $sql_barang = mysqli_query($con, "SELECT * FROM konsumen 
                                                JOIN pendidikan ON konsumen.id_pendidikan=pendidikan.id_pendidikan WHERE id_konsumen = '$pecah[id_konsumen]' ");
                                                while ($data_barang = mysqli_fetch_array($sql_barang)){
                                                echo "$data_barang[pendidikan]";
                                            } 
                                            ?>
                                        </td>
                                    </tr> 
                                </tbody>
                            </table>  

                        </div>
                    </div>
                </div> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-3"></div>
                        
</div>