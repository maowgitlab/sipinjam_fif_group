<?php 
  $id_admin = $admin['id_admin'];
  $ambil  = $con->query("SELECT pegawai.*, jabatan.jabatan FROM pegawai JOIN jabatan JOIN admin ON pegawai.id_jabatan = jabatan.id_jabatan AND pegawai.id_pegawai = admin.id_pegawai WHERE admin.id_admin ='$id_admin'");
  $pecah  = $ambil->fetch_assoc();   
  $id_pegawai = $pecah['id_pegawai'];
  $tgl = tgl_indo($pecah['tgl']);
?>

<div class="row">

    <div class="col-3"></div>
    
    <div class="col-6">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Profil Saya - "<strong><?php echo $pecah['nama'] ?></strong>" 
                    <div class="float-end">
                        <a href="?page=profil&aksi=ubah&id_pegawai=<?php echo $pecah['id_pegawai'] ?>" class="btn btn-success btn-sm waves-effect waves-light">Ubah</a>  
                    </div>
                </h4> <hr>

                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="userpage-content"></div>
                        <div class="p-4">
                            <div class="userpage-user-img">
                                <img src="assets/gambar/pegawai/<?= $pecah['foto']; ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                            </div>
                            <h5 class="mt-3 mb-1"><?php echo $pecah['nama'] ?></h5> 

                            <table class="table table-borderless table-sm align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">JABATAN</th>
                                        <td class="text-dark text-end"><?php echo $pecah['jabatan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Nama</th>
                                        <td class="text-dark text-end"><?php echo $pecah['nama'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Tempat, Tanggal Lahir</th>
                                        <td class="text-dark text-end"><?php echo $pecah['tmp'] ?>, <?php echo $tgl ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Alamat</th>
                                        <td class="text-dark text-end"><?php echo $pecah['alamat'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Agama</th>
                                        <td class="text-dark text-end">
                                            <?php 
                                            $sql_barang = mysqli_query($con, "SELECT * FROM pegawai 
                                                JOIN agama ON pegawai.id_agama=agama.id_agama WHERE id_pegawai = '$id_pegawai' ");
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
                                            $sql_barang = mysqli_query($con, "SELECT * FROM pegawai 
                                                JOIN pernikahan ON pegawai.id_pernikahan=pernikahan.id_pernikahan WHERE id_pegawai = '$id_pegawai' ");
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
                                            $sql_barang = mysqli_query($con, "SELECT * FROM pegawai 
                                                JOIN pekerjaan ON pegawai.id_pekerjaan=pekerjaan.id_pekerjaan WHERE id_pegawai = '$id_pegawai' ");
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
                                            $sql_barang = mysqli_query($con, "SELECT * FROM pegawai 
                                                JOIN pendidikan ON pegawai.id_pendidikan=pendidikan.id_pendidikan WHERE id_pegawai = '$id_pegawai' ");
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