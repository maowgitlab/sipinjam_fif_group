<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include 'inc/koneksi.php';
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
        <link rel="shortcut icon" href="assets/gambar/<?php echo $meta['logo_meta'] ?>">

        <!-- Layout Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> 



    </head>

    <body>
        <div class="auth-maintenance d-flex align-items-center min-vh-100"  style="background-image: url('assets/gambar/bg.jpg'); background-size: cover; background-position: center;">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100 py-0 py-xl-3">
                                    <div class="text-center mb-4">
                                        <a href="#" class="">
                                            <img src="assets/gambar/<?php echo $meta['logo_meta'] ?>" alt="" height="80" class="auth-logo logo-dark mx-auto"> 
                                        </a>
                                        <p class="mt-2"><?php echo $meta['judul_meta'] ?> <br> Cabang Banjar Indah Kota Banjarmasin <br> <small><?php echo $meta['alamat_meta'] ?></small></p> 
                                    </div>
    
                                    <div class="card my-auto overflow-hidden">
                                            <div class="row g-0">
                                                <div class="col-lg-6">
                                                    <div class="bg-overlay bg-primary"></div>
                                                    <div class="h-100 bg-auth align-items-end"></div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="p-lg-5 p-4">
                                                        <div>
                                                            <div class="text-center mt-1">
                                                                <h4 class="font-size-18">Selamat Datang</h4>
                                                                <p class="text-muted">Aplikasi Peminjaman Dana</p>
                                                            </div>
            
                                                            <form class="auth-input" method="post">

                                                                <?php
                                                                $username    = $_POST['username'];
                                                                $password    = $_POST['password'];
                                                                $login       = $_POST['login'];
                                                                    if ($login) 
                                                                    {
                                                                        $sql = mysqli_query($con, "SELECT * FROM pegawai NATURAL JOIN admin WHERE username='$username' AND password='$password' AND status='Aktif'");
                                                                        $ketemu = mysqli_num_rows($sql);
                                                                        $data = mysqli_fetch_array($sql);
                                                                        if ($ketemu >=1) 
                                                                        {
                                                                            session_start();
                                                                            if ($data['level'] == "Admin") 
                                                                            {
                                                                                $_SESSION['Admin'] = $data['id_admin'];
                                                                                echo "<div class='alert alert-success'><b>Login Sukses</b></div>";
                                                                                echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
                                                                            }
                                                                            else if ($data['level'] == "Pimpinan") 
                                                                            {
                                                                                $_SESSION['Pimpinan'] = $data['id_admin'];
                                                                                echo "<div class='alert alert-success'><b>Login Sukses</b></div>";
                                                                                echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
                                                                            }
                                                                            else if ($data['level'] == "Petugas") 
                                                                            {
                                                                                $_SESSION['Petugas'] = $data['id_admin'];
                                                                                echo "<div class='alert alert-success'><b>Login Sukses</b></div>";
                                                                                echo "<meta http-equiv='refresh' content='1;url=index.php'>"; 
                                                                            }  
                                                                        }else
                                                                    {
                                                                ?>
                                                                <script type="text/javascript">
                                                                      alert("Error Username atau Password salah.");
                                                                </script>
                                                                <?php 
                                                                    } 
                                                                } 
                                                                ?> 

                                                                <div class="mb-2">
                                                                    <label class="form-label">Username</label>
                                                                    <input type="text" class="form-control" name="username" required autofocus>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Password</label>
                                                                    <input type="password" class="form-control" name="password" required>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <input type="submit" name="login" value="L O G I N" class="btn btn-primary w-100">    
                                                                    <a href="../index.php" class="btn btn-light w-100 mt-3">K E M B A L I</a>  
                                                                </div> 
                                                            </form>
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
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="../../../unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/tocly/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:37 GMT -->
</html>
