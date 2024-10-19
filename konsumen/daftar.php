<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include '../admin/inc/koneksi.php';
?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/tocly/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:37 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title><?php echo $meta['judul_meta'] ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../admin/assets/gambar/<?php echo $meta['logo_meta'] ?>">

        <!-- Layout Js -->
        <script src="../admin/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="../admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> 



    </head>

    <body>
        <div class="auth-maintenance d-flex align-items-center min-vh-100"  style="background-image: url('../admin/assets/gambar/bg.jpg'); background-size: cover; background-position: center;">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100 py-0 py-xl-3">
                                    <div class="text-center mb-4">
                                        <a href="#" class="">
                                            <img src="../admin/assets/gambar/<?php echo $meta['logo_meta'] ?>" alt="" height="80" class="auth-logo logo-dark mx-auto"> 
                                        </a>
                                        <p class="mt-2"><?php echo $meta['judul_meta'] ?> <br> Cabang Banjar Indah Kota Banjarmasin <br> <small><?php echo $meta['alamat_meta'] ?></small></p> 
                                    </div>
    
                                    <div class="card my-auto overflow-hidden shadow-lg">
                                            <div class="row g-0">
                                                <div class="col-lg-12">
                                                    <div class="bg-overlay bg-primary"></div>
                                                    <div class="h-100 bg-auth align-items-end"></div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="p-lg-5 p-4">
                                                        <div>
                                                            <div class="text-center mt-1">
                                                                <h4 class="font-size-18">Selamat Datang</h4>
                                                                <p class="text-muted">Lengkapi Formulir Untuk Melakukan Pendaftaran</p>
                                                            </div>
            
                                                            <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik_konsumen" required autofocus> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama_konsumen" required> 
                            </div>
                        </div>   
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmp_konsumen" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_konsumen" required> 
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat_konsumen" required> 
                            </div>
                        </div>       
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telp_konsumen" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email_konsumen" required> 
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Agama</label>
                                <select class="form-control" name="id_agama" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_kar=mysqli_query($con, "SELECT * FROM agama ORDER BY id_agama ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_agama]'>$kar[agama]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>       
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Pernikahan</label>
                                <select class="form-control" name="id_pernikahan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_kar=mysqli_query($con, "SELECT * FROM pernikahan ORDER BY id_pernikahan ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_pernikahan]'>$kar[pernikahan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>              
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Pekerjaan</label>
                                <select class="form-control" name="id_pekerjaan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_kar=mysqli_query($con, "SELECT * FROM pekerjaan ORDER BY id_pekerjaan ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_pekerjaan]'>$kar[pekerjaan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Pendidikan</label>
                                <select class="form-control" name="id_pendidikan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_kar=mysqli_query($con, "SELECT * FROM pendidikan ORDER BY id_pendidikan ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_pendidikan]'>$kar[pendidikan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>  
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" name="password_konsumen" required> 
                            </div>
                        </div>       
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Daftar</button> 
                                <a href="login.php" class="btn btn-light btn-sm waves-effect waves-light">KEMBALI</a>
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $nik_konsumen = $_POST['nik_konsumen']; 
                    $nama_konsumen       = $_POST['nama_konsumen']; 
                    $tmp_konsumen       = $_POST['tmp_konsumen']; 
                    $tgl_konsumen      = $_POST['tgl_konsumen'];   
                    $alamat_konsumen = $_POST['alamat_konsumen']; 
                    $telp_konsumen       = $_POST['telp_konsumen']; 
                    $email_konsumen = $_POST['email_konsumen'];    
                    $id_agama = $_POST['id_agama'];  
                    $id_pernikahan      = $_POST['id_pernikahan'];   
                    $id_pekerjaan = $_POST['id_pekerjaan']; 
                    $id_pendidikan = $_POST['id_pendidikan'];  
                    $password_konsumen       = $_POST['password_konsumen']; 

                    $ambil = $con->query("SELECT * FROM konsumen WHERE nik_konsumen='$nik_konsumen'");
                    $yangcocok = mysqli_num_rows($ambil);
                    if ($yangcocok==1) 
                    {
                        echo "<script>alert('Data sudah ada.');</script>";
                        echo "<script>location='?page=daftar&aksi=tambah';</script>";
                    }
                    else
                    {
                        $con->query("INSERT INTO konsumen (nik_konsumen,nama_konsumen,tmp_konsumen,tgl_konsumen,alamat_konsumen,telp_konsumen,email_konsumen,id_agama,id_pernikahan,id_pekerjaan,id_pendidikan,password_konsumen) VALUES ('$nik_konsumen','$nama_konsumen','$tmp_konsumen','$tgl_konsumen','$alamat_konsumen','$telp_konsumen','$email_konsumen','$id_agama','$id_pernikahan','$id_pekerjaan','$id_pendidikan','$password_konsumen') ");

                        echo "<script>alert('Pendaftaran berhasil.');</script>";
                        echo "<script>location='login.php';</script>";
                         
                    }
                }
                ?>
                                                        </div>
                                                    
                                                    </div>
                                                </div>  
                                        </div>
                                    </div>
                                    <!-- end card -->
                                    
                                    <div class="mt-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Aplikasi Peminjaman Dana Pada PT. FIF Group Cabang Banjar Indah Banjarmasin . by Helda Arsita</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        
        <!-- JAVASCRIPT -->
        <script src="../admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="../admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../admin/assets/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="../../../unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <script src="../admin/assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/tocly/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:37 GMT -->
</html>
