<?php  
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
include ("inc/koneksi.php");
include ("inc/tanggal.php");   
include ("inc/function_denda.php");   
include ("inc/function_tanggal.php.php");   

if ($_SESSION['Admin'] || $_SESSION['Pimpinan'] || $_SESSION['Petugas']) {      
?>  

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/tocly/layouts/layouts-hori-boxed-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:37 GMT -->
<head>
        
    <meta charset="utf-8" />
    <title><?php echo $meta['judul_meta'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/gambar/<?php echo $meta['logo_meta'] ?>">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/breadcrumb.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Select2 -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     



</head>

<?php
if ($_SESSION['Admin']) { $user = $_SESSION['Admin']; }
elseif ($_SESSION['Pimpinan']) { $user = $_SESSION['Pimpinan']; } 
elseif ($_SESSION['Petugas']) { $user = $_SESSION['Petugas']; } 
$sql = mysqli_query($con, "SELECT * FROM admin NATURAL JOIN pegawai WHERE id_admin='$user'");
$admin = mysqli_fetch_assoc($sql);
?>

    <body data-layout="horizontal" data-layout-size="boxed">
            <?php include "modal.php" ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <?php include "header.php" ?>

            <?php include "menu.php" ?>   

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?php 
                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];   

                        if ($page == "jabatan") 
                        {
                            if ($aksi == "") { include "page/jabatan/jabatan.php"; }
                            if ($aksi == "tambah") { include "page/jabatan/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/jabatan/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/jabatan/hapus.php"; } 
                        } 

                        if ($page == "pegawai") 
                        {
                            if ($aksi == "") { include "page/pegawai/pegawai.php"; }
                            if ($aksi == "tambah") { include "page/pegawai/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/pegawai/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/pegawai/hapus.php"; } 
                            if ($aksi == "lihat") { include "page/pegawai/lihat.php"; }  
                        }

                        if ($page == "admin") 
                        {
                            if ($aksi == "") { include "page/admin/admin.php"; }
                            if ($aksi == "tambah") { include "page/admin/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/admin/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/admin/hapus.php"; } 
                        } 

                         if ($page == "agama") 
                        {
                            if ($aksi == "") { include "page/agama/agama.php"; }
                            if ($aksi == "tambah") { include "page/agama/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/agama/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/agama/hapus.php"; } 
                        } 

                        if ($page == "pendidikan") 
                        {
                            if ($aksi == "") { include "page/pendidikan/pendidikan.php"; }
                            if ($aksi == "tambah") { include "page/pendidikan/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/pendidikan/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/pendidikan/hapus.php"; } 
                        } 

                        if ($page == "pekerjaan") 
                        {
                            if ($aksi == "") { include "page/pekerjaan/pekerjaan.php"; }
                            if ($aksi == "tambah") { include "page/pekerjaan/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/pekerjaan/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/pekerjaan/hapus.php"; } 
                        } 

                        if ($page == "pernikahan") 
                        {
                            if ($aksi == "") { include "page/pernikahan/pernikahan.php"; }
                            if ($aksi == "tambah") { include "page/pernikahan/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/pernikahan/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/pernikahan/hapus.php"; } 
                        }  

                        if ($page == "bank") 
                        {
                            if ($aksi == "") { include "page/bank/bank.php"; }
                            if ($aksi == "tambah") { include "page/bank/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/bank/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/bank/hapus.php"; } 
                        } 

                        if ($page == "pinjaman") 
                        {
                            if ($aksi == "") { include "page/pinjaman/pinjaman.php"; }
                            if ($aksi == "tambah") { include "page/pinjaman/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/pinjaman/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/pinjaman/hapus.php"; } 
                        }

                        if ($page == "konsumen") 
                        {
                            if ($aksi == "") { include "page/konsumen/konsumen.php"; }
                            if ($aksi == "tambah") { include "page/konsumen/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/konsumen/ubah.php"; }  
                            if ($aksi == "lihat") { include "page/konsumen/lihat.php"; } 
                            if ($aksi == "hapus") { include "page/konsumen/hapus.php"; } 
                        }

                        if ($page == "web") 
                        {
                            if ($aksi == "") { include "page/web/web.php"; } 
                            if ($aksi == "ubah") { include "page/web/ubah.php"; }   
                        }

                        if ($page == "permohonan") 
                        {
                            if ($aksi == "") { include "page/permohonan/permohonan.php"; }
                            if ($aksi == "tambah") { include "page/permohonan/tambah.php"; }    
                            if ($aksi == "detail") { include "page/permohonan/detail.php"; } 
                            if ($aksi == "permohonan_cek") { include "page/permohonan/permohonan_cek.php"; } 
                            if ($aksi == "permohonan_pinjam") { include "page/permohonan/permohonan_pinjam.php"; } 
                            if ($aksi == "pinjaman") { include "page/permohonan/pinjaman.php"; } 
                            if ($aksi == "detail_pinjaman") { include "page/permohonan/detail_pinjaman.php"; } 
                            if ($aksi == "pembayaran") { include "page/permohonan/pembayaran.php"; } 
                            if ($aksi == "detail_pembayaran") { include "page/permohonan/detail_pembayaran.php"; } 
                        }  

                        if ($page == "terlambat") 
                        {
                            if ($aksi == "") { include "page/terlambat/terlambat.php"; }
                            if ($aksi == "peringatan") { include "page/terlambat/peringatan.php"; }  
                            if ($aksi == "ubah") { include "page/terlambat/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/terlambat/hapus.php"; } 
                        } 

                        if ($page == "peringatan") 
                        {
                            if ($aksi == "") { include "page/peringatan/peringatan.php"; }
                            if ($aksi == "peringatan") { include "page/peringatan/peringatan.php"; }  
                            if ($aksi == "ubah") { include "page/peringatan/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/peringatan/hapus.php"; } 
                        } 

                        if($page == "profil") {
                            if($aksi == "") { include "page/profil/lihat.php"; }
                            if($aksi == "ubah") { include "page/profil/ubah.php"; }
                        }

                        if($page == "survei") {
                            if($aksi == "") { include "page/survei/survei.php"; }
                            if($aksi == "hapus") { include "page/survei/hapus.php"; }
                        }

                        if ($page == "") {
                            include "home.php";
                        }
                        ?> 

                    </div>
                    
                </div>
                <!-- End Page-content -->
               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Aplikasi Peminjaman Dana Pada PT. FIF Group Cabang Banjar Indah Banjarmasin
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    by Helda Arsita
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper --> 

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="../../../unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>


        <!-- Select2 -->
        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        
        <script src="assets/js/pages/form-advanced.init.js"></script>

        <script src="assets/libs/parsleyjs/parsley.min.js"></script>

        <script src="assets/js/pages/form-validation.init.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>


        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script> 
        
    </body>

<!-- Mirrored from themesdesign.in/tocly/layouts/layouts-hori-boxed-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:37 GMT -->
</html>


<?php    
}else{
    echo '<script language="javascript">alert("Anda belum login, Klik OK untuk Login"); document.location="login.php";</script>';
    }
?>