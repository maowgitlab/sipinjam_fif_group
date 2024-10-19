<?php  
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
include ("inc/koneksi.php");
include ("inc/tanggal.php");  

function kode_kirim($length)
{
    $data = '1234567';
    $string = 'FM';
    for ($i=0; $i < $length; $i++)
    {
        $pos = rand(0, strlen($data)-1);
        $string .= $data[$pos]; 
    }
    return $string;
}
$kodekr= kode_kirim(7); 

if ($_SESSION['Admin'] || $_SESSION['Pimpinan']) {      
?>  

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/tocly/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:25 GMT -->
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
    $sql = mysqli_query($con, "SELECT * FROM admin NATURAL JOIN staff WHERE id_admin='$user'");
    $admin = mysqli_fetch_assoc($sql);
    ?>

    <body data-sidebar="colored">

        <?php include "modal.php" ?>
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            
            <?php include "header.php" ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "menu.php" ?>
            <!-- Left Sidebar End -->

            

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

                        if ($page == "kategori") 
                        {
                            if ($aksi == "") { include "page/kategori/kategori.php"; }
                            if ($aksi == "tambah") { include "page/kategori/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/kategori/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/kategori/hapus.php"; } 
                        } 

                        if ($page == "poli") 
                        {
                            if ($aksi == "") { include "page/poli/poli.php"; }
                            if ($aksi == "tambah") { include "page/poli/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/poli/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/poli/hapus.php"; } 
                        } 

                        if ($page == "r_sakit") 
                        {
                            if ($aksi == "") { include "page/r_sakit/r_sakit.php"; }
                            if ($aksi == "tambah") { include "page/r_sakit/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/r_sakit/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/r_sakit/hapus.php"; } 
                        } 

                        if ($page == "jenis") 
                        {
                            if ($aksi == "") { include "page/jenis/jenis.php"; }
                            if ($aksi == "tambah") { include "page/jenis/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/jenis/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/jenis/hapus.php"; } 
                        } 

                        if ($page == "satuan") 
                        {
                            if ($aksi == "") { include "page/satuan/satuan.php"; }
                            if ($aksi == "tambah") { include "page/satuan/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/satuan/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/satuan/hapus.php"; } 
                        } 

                        if ($page == "staff") 
                        {
                            if ($aksi == "") { include "page/staff/staff.php"; }
                            if ($aksi == "tambah") { include "page/staff/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/staff/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/staff/hapus.php"; } 
                            if ($aksi == "lihat") { include "page/staff/lihat.php"; } 
                        } 

                        if ($page == "admin") 
                        {
                            if ($aksi == "") { include "page/admin/admin.php"; }
                            if ($aksi == "tambah") { include "page/admin/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/admin/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/admin/hapus.php"; }  
                        } 

                        if ($page == "dokter") 
                        {
                            if ($aksi == "") { include "page/dokter/dokter.php"; }
                            if ($aksi == "tambah") { include "page/dokter/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/dokter/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/dokter/hapus.php"; } 
                            if ($aksi == "lihat") { include "page/dokter/lihat.php"; } 
                        } 

                        if ($page == "obat") 
                        {
                            if ($aksi == "") { include "page/obat/obat.php"; }
                            if ($aksi == "tambah") { include "page/obat/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/obat/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/obat/hapus.php"; } 
                            if ($aksi == "lihat") { include "page/obat/lihat.php"; } 
                        } 

                        if ($page == "pasien") 
                        {
                            if ($aksi == "") { include "page/pasien/pasien.php"; }
                            if ($aksi == "tambah") { include "page/pasien/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/pasien/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/pasien/hapus.php"; }  
                        } 

                        if ($page == "minta_obat") 
                        {
                            if ($aksi == "") { include "page/minta_obat/minta_obat.php"; }  
                            if ($aksi == "tambah") { include "page/minta_obat/tambah.php"; }
                            if ($aksi == "kurang") { include "page/minta_obat/kurang.php"; }
                            if ($aksi == "hapus") { include "page/minta_obat/hapus.php"; } 
                            if ($aksi == "lihat") { include "page/minta_obat/lihat.php"; }   
                            if ($aksi == "detail") { include "page/minta_obat/detail.php"; }  
                        }

                        if ($page == "daftar") 
                        {
                            if ($aksi == "") { include "page/daftar/daftar.php"; }
                            if ($aksi == "tambah") { include "page/daftar/tambah.php"; }  
                            if ($aksi == "ubah") { include "page/daftar/ubah.php"; }  
                            if ($aksi == "hapus") { include "page/daftar/hapus.php"; }  
                        } 

                        if ($page == "periksa") 
                        {
                            if ($aksi == "") { include "page/periksa/periksa.php"; } 
                        } 

                        if ($page == "") {
                            include "home.php";
                        }
                        ?> 

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <script>document.write(new Date().getFullYear())</script> © <?php echo $meta['judul_meta'] ?>.
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with by Rayhan - Universitas Islam Kalimantan Muhammad Arsyad Al Banjari Banjarmasin
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

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>


        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>


<!-- Mirrored from themesdesign.in/tocly/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2023 10:33:26 GMT -->
</html>
<?php    
}else{
    echo '<script language="javascript">alert("Anda belum login, Klik OK untuk Login"); document.location="login.php";</script>';
    }
?>