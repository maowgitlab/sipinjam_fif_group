<?php 
$no_permohonan = $_GET['no_permohonan'];
$id_konsumen = $_GET['id_konsumen'];
$ambil  = $con->query("SELECT * FROM permohonan NATURAL JOIN konsumen WHERE no_permohonan ='$_GET[no_permohonan]' AND id_konsumen ='$_GET[id_konsumen]'");
$pecah  = $ambil->fetch_assoc();   
$tgl = tgl_indo($pecah['tgl_permohonan']); ?>

<div class="row"> 
    
    <div class="col-5">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Profil Saya - "<strong><?php echo $pecah['nama_konsumen'] ?></strong>" 
                    <div class="float-end">
                        <a href="?page=permohonan" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a>  
                    </div>
                </h4> <hr>

                <div class="card overflow-hidden">
                    <div class="card-body p-0"> 
                        <div class="p-4">  

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

    <div class="col-7">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Pengajuan Permohonan</strong>    
                </h4> <hr>

                <div class="card overflow-hidden">
                    <div class="card-body p-0"> 
                        <div class="p-4">  

                            <table class="table table-borderless table-sm align-middle mb-0">
                                <tbody>
                                    <tr>
                                        <th class="ps-0" scope="row">Nomor Permohonan</th>
                                        <td class="text-dark text-end"><?php echo $pecah['nik_konsumen'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Tanggal</th>
                                        <td class="text-dark text-end"><?php echo $tgl ?></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Waktu</th>
                                        <td class="text-dark text-end"><?php echo $pecah['waktu_permohonan'] ?> </td>
                                    </tr>
                                    <tr>
                                        <th class="ps-0" scope="row">Fotocopy KTP</th>
                                        <td class="text-dark text-end"><a href="assets/gambar/syarat/<?php echo $pecah['ktp'] ?>" target="_blank">Lihat</a></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Fotocopy Kartu Keluarga</th>
                                        <td class="text-dark text-end"><a href="assets/gambar/syarat/<?php echo $pecah['kk'] ?>" target="_blank">Lihat</a></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Fotocopy STNK</th>
                                        <td class="text-dark text-end"><a href="assets/gambar/syarat/<?php echo $pecah['stnk'] ?>" target="_blank">Lihat</a></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Fotocopy BPKB</th>
                                        <td class="text-dark text-end"><a href="assets/gambar/syarat/<?php echo $pecah['bpkb'] ?>" target="_blank">Lihat</a></td>
                                    </tr> 
                                    <tr>
                                        <th class="ps-0" scope="row">Fotocopy Rekening Listrik</th>
                                        <td class="text-dark text-end"><a href="assets/gambar/syarat/<?php echo $pecah['listrik'] ?>" target="_blank">Lihat</a></td>
                                    </tr>  
                                    <tr>
                                        <th class="ps-0" scope="row" style="vertical-align: top;">Status Permohonan</th>
                                        <td class="text-dark text-end"><?php echo $pecah['status_permohonan'] ?></td>
                                    </tr> 
                                </tbody>
                            </table>  

                        </div>
                    </div>
                </div> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>