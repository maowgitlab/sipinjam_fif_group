<?php 
$id_pegawai = $_GET['id_pegawai'];
$ambil  = $con->query("SELECT * FROM pegawai NATURAL JOIN jabatan WHERE id_pegawai ='$_GET[id_pegawai]'");
$pecah  = $ambil->fetch_assoc();  
$jk  = $pecah['jk']; 
?>

<div class="row">

    <div class="col-3"></div>
    
    <div class="col-6">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Lihat Data Karyawan - "<strong><?php echo $pecah['nama'] ?></strong>" 
                    <div class="float-end">
                        <a href="?page=pegawai&aksi=ubah&id_pegawai=<?php echo $pecah['id_pegawai'] ?>" class="btn btn-success btn-sm waves-effect waves-light">Ubah</a> 
                        <a href="?page=pegawai" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                    </div>
                </h4> <hr>

                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="userpage-content"></div>
                        <div class="p-4">
                            <div class="userpage-user-img">
                                <img src="assets/gambar/pegawai/<?php echo $pecah['foto'] ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                            </div>
                            <h5 class="mt-3 mb-1"><?php echo $pecah['nama'] ?></h5>
                            <p class="text-muted"><?php echo $pecah['jabatan'] ?></p>

                            <table class="table table-borderless table-sm align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">NIK</th>
                                        <td class="text-dark text-end"><?php echo $pecah['nik'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Nama</th>
                                        <td class="text-dark text-end"><?php echo $pecah['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Jabatan</th>
                                        <td class="text-dark text-end"><?php echo $pecah['jabatan'] ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Jenis Kelamin</th>
                                        <td class="text-dark text-end"><?php echo $pecah['jk'] ?></td>
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
                                                JOIN agama ON pegawai.id_agama=agama.id_agama WHERE id_pegawai = '$pecah[id_pegawai]' ");
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
                                                JOIN pernikahan ON pegawai.id_pernikahan=pernikahan.id_pernikahan WHERE id_pegawai = '$pecah[id_pegawai]' ");
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
                                                JOIN pekerjaan ON pegawai.id_pekerjaan=pekerjaan.id_pekerjaan WHERE id_pegawai = '$pecah[id_pegawai]' ");
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
                                                JOIN pendidikan ON pegawai.id_pendidikan=pendidikan.id_pendidikan WHERE id_pegawai = '$pecah[id_pegawai]' ");
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