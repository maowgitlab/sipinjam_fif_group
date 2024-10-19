<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "../../inc/koneksi.php";
include "../../inc/tanggal.php";  
$nama = $_GET['nama']; 
?>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title><?php echo $meta['judul_meta'] ?></title>
    <link rel="shortcut icon" href="../../assets/gambar/<?php echo $meta['logo_meta'] ?>">
</head>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #ffff;
        font: 12pt "Tahoma";
    }
    * 
    {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 1px;
        background: white; 
    }
    .subpage {
        padding: 1cm; 
        height: 257mm;
        outline: 2cm #FFF solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>

<style>
    .horizontal_center
    {
        border-top: 3px solid black;
        height: 2px; 
    }
</style>

<style>
    .horizontal_center_tipis
    {
        border-top: 1px solid black;
        height: 2px; 
    }
</style>

<body>
    <div class="book">
        <div class="page">
            <div class="subpage">
                <table width="100%">  
                    <tr>
                        <td style="vertical-align: middle; text-align: center;">
                            <a href="#">
                                <img src="../../assets/gambar/<?php echo $meta['logo_meta'] ?>" height="90px">
                            </a>
                        </td>
                        <td style="text-align: left;">
                            <strong style="font-size: 20px;"><?php echo $meta['judul_meta'] ?></strong> <br> 
                            <strong style="font-size: 20px;">CABANG BANJAR INDAH</strong> <br>  
                            <small  style="font-size: 11.5px;"><?php echo $meta['alamat_meta'] ?></small> <br>
                            <small  style="font-size: 11.5px;">Telepon : <?php echo $meta['telp_meta'] ?> / Email : <?php echo $meta['email_meta'] ?></small>
                        </td>
                    </tr>  
                </table>

                <div class="horizontal_center"></div> 

                <table>
                    <tr><th style="font-size: 14px; text-align: center;">&nbsp;</th></tr>
                    <tr>
                        <td style="font-size: 14px;">Laporan</td>
                        <td style="font-size: 14px;">:</td>
                        <td style="font-size: 14px;">Karyawan</td>
                    </tr>  
                    <tr>
                        <td style="font-size: 14px;">Tanggal Cetak</td>
                        <td style="font-size: 14px;">:</td>
                        <td style="font-size: 14px;"><?php echo tgl_indo(date('Y-m-d')); ?></td>
                    </tr> 
                </table> 

                <br>

                <table style="width: 100%; border-collapse: collapse;">  
                    <tr>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; font-weight: bold;">No.</td>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; font-weight: bold;">NIK</td>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; font-weight: bold;">Nama</td>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; font-weight: bold;">Jenis Kelamin</td>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; font-weight: bold;">Jabatan</td>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; font-weight: bold;">Tempat, Tanggal Lahir</td>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; font-weight: bold;">Alamat</td> 
                    </tr> 
                    <?php $nomor=1; ?>
                    <?php $ambil=$con->query("SELECT * FROM pegawai NATURAL JOIN jabatan ORDER BY id_pegawai DESC"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { 
                        $tgl = tgl_indo($pecah['tgl']); ?>
                    <tr>
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; vertical-align: top;"><?php echo $nomor; ?></td> 
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; vertical-align: top;"><?php echo $pecah['nik']; ?></td>    
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; vertical-align: top;"><?php echo $pecah['nama']; ?></td>    
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; vertical-align: top;"><?php echo $pecah['jk']; ?></td>    
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; vertical-align: top;"><?php echo $pecah['jabatan']; ?></td>    
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; vertical-align: top;"><?php echo $pecah['tmp']; ?>, <?php echo $tgl; ?></td>    
                        <td style="font-size: 10px; border: 1px solid #999; padding: 2px; vertical-align: top;"><?php echo $pecah['alamat']; ?></td>  
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </table>

                <br>

                <table align="right">
                    <tr>
                        <td style="font-size: 14px; text-align: center;">
                            Banjarmasin, <?php echo tgl_indo(date('Y-m-d')); ?> <br> Mengetahui <br> Pimpinan
                        </td>
                    </tr> 
                    <tr>
                        <td style="font-size: 14px; text-align: center;">
                            <img src="../../../qr.png" alt="" width="80" height="80">
                        </td>
                    </tr>
                    <tr>
                        <th style="font-size: 14px; text-align: center;">
                            <?php echo $meta['pimpinan_meta'] ?>
                        </th>
                    </tr>
                </table>
            </div>    
        </div>
     
        <!-- <div class="page">
            <div class="subpage">Page 2/2</div>    
        </div>  -->

    </div>
</body>

</html>
<script type="text/javascript">window.print();</script>