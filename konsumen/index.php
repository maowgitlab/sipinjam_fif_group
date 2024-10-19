<?php  
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include ("../admin/inc/koneksi.php");
include ("../admin/inc/tanggal.php");   
if (!isset($_SESSION['konsumen'])) 
{
    echo "<script>alert('Maaf pastikan anda sudah login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}  
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
    <link rel="shortcut icon" href="../admin/assets/gambar/<?php echo $meta['logo_meta'] ?>">

    <!-- plugin css -->
    <link href="../admin/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout Js -->
    <script src="../admin/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/breadcrumb.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Select2 -->
    <link href="../admin/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="../admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="../admin/assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="../admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="../admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     



</head>

<?php $id_konsumen = $_SESSION['konsumen']['id_konsumen'];
$ambil = $con->query("SELECT * FROM konsumen WHERE id_konsumen ='$id_konsumen'");
$konsu = $ambil->fetch_assoc();  
$status_pemilik    = $konsu['status_pemilik']; 
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

                        if ($page == "konsumen") 
                        {  
                            if ($aksi == "ubah") { include "page/konsumen/ubah.php"; }  
                            if ($aksi == "lihat") { include "page/konsumen/lihat.php"; }  
                        } 

                        if ($page == "permohonan") 
                        {
                            if ($aksi == "") { include "page/permohonan/permohonan.php"; }
                            if ($aksi == "tambah") { include "page/permohonan/tambah.php"; }    
                            if ($aksi == "lihat") { include "page/permohonan/lihat.php"; } 
                            if ($aksi == "permohonan_cek") { include "page/permohonan/permohonan_cek.php"; } 
                            if ($aksi == "permohonan_pinjam") { include "page/permohonan/permohonan_pinjam.php"; } 
                            if ($aksi == "pinjaman") { include "page/permohonan/pinjaman.php"; } 
                            if ($aksi == "lihat1") { include "page/permohonan/lihat1.php"; } 
                            if ($aksi == "pembayaran") { include "page/permohonan/pembayaran.php"; } 
                            if ($aksi == "bayar_angsuran") { include "page/permohonan/bayar_angsuran.php"; } 
                            if ($aksi == "peringatan") { include "page/permohonan/peringatan.php"; } 
                        }   

                        if ($page == "terlambat") 
                        {  
                            if ($aksi == "") { include "page/terlambat/terlambat.php"; }  
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
        <script src="../admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="../admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../admin/assets/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="../../../unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- apexcharts -->
        <script src="../admin/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="../admin/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="../admin/assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!-- Required datatable js -->
        <script src="../admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="../admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="../admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="../admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <script src="../admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="../admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>


        <!-- Select2 -->
        <script src="../admin/assets/libs/select2/js/select2.min.js"></script>
        <script src="../admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../admin/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="../admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="../admin/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
        <script src="../admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        
        <script src="../admin/assets/js/pages/form-advanced.init.js"></script>

        <script src="../admin/assets/libs/parsleyjs/parsley.min.js"></script>

        <script src="../admin/assets/js/pages/form-validation.init.js"></script>

        <!-- Datatable init js -->
        <script src="../admin/assets/js/pages/datatables.init.js"></script>


        <script src="../admin/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="../admin/assets/js/app.js"></script> 
        
    </body>

<!-- Mirrored from themesdesign.in/tocly/layouts/layouts-hori-boxed-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:37 GMT -->
</html> 