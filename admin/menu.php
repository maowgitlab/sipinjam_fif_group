<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="ri ri-home-5-line"></i> Beranda
                        </a>
                    </li>  

                    <?php if ($_SESSION['Admin']) { ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                        >
                            <i class="ri ri-folder-4-line"></i> Data Master 
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">   
                            <a href="?page=jabatan" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Jabatan</a>  
                            <a href="?page=admin" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Admin</a> 
                            <a href="?page=pendidikan" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Pendidikan</a> 
                            <a href="?page=pekerjaan" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Pekerjaan</a>  
                            <a href="?page=agama" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Agama</a> 
                            <a href="?page=pernikahan" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Status Pernikahan</a>    
                            <a href="?page=pinjaman" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Pinjaman</a>    
                            <a href="?page=survei" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Survei</a>    
                        </div>
                    </li>  

                    <li class="nav-item">
                        <a class="nav-link" href="?page=pegawai">
                            <i class="ri ri-user-line"></i> Karyawan 
                        </a>
                    </li>
                    <?php } ?>  

                    <?php if ($_SESSION['Admin'] || $_SESSION['Petugas']) { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="?page=konsumen">
                            <i class="ri ri-user-line"></i> Konsumen 
                        </a>
                    </li>  

                    <li class="nav-item">
                        <a class="nav-link" href="?page=permohonan">
                            <i class="ri ri-file-list-3-line "></i> Permohonan 
                        </a>
                    </li>    

                    <li class="nav-item">
                        <a class="nav-link" href="?page=permohonan&aksi=pinjaman">
                            <i class="ri ri-file-list-3-line "></i> Pinjaman 
                        </a>
                    </li>     

                    <li class="nav-item">
                        <a class="nav-link" href="?page=permohonan&aksi=pembayaran">
                            <i class="ri ri-file-list-3-line "></i> Pembayaran 
                        </a>
                    </li>  

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                        >
                            <i class="ri ri-folder-4-line"></i> Terlambat 
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">   
                            <a href="?page=terlambat" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Terlambat</a>  
                            <a href="?page=peringatan" class="dropdown-item"><i class="ri ri-arrow-drop-right-line"></i> Peringatan</a>  
                        </div>
                    </li>  
                    <?php } ?> 

                    <?php if ($_SESSION['Admin'] || $_SESSION['Pimpinan']) { ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                        >
                            <i class="ri ri-printer-line"></i> Laporan 
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">   
                            <a href="page/laporan/karyawan.php" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Karyawan</a>  
                            <a href="page/laporan/konsumen.php" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Konsumen</a> 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#pengajuan" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Pengajuan</a> 
                            <a href="#" data-bs-toggle="modal" data-bs-target="#survei" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Survei</a> 
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#pencairan" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Pencairan</a> 
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#pembayaran" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Pembayaran</a>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#sisa" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Sisa Pembayaran</a>
                            <a href="page/laporan/terlambat.php" class="dropdown-item" target="_blank"><i class="ri ri-arrow-drop-right-line"></i> Keterlambatan</a>  
                        </div>
                    </li> 
                    <?php } ?> 

                </ul>
            </div>
        </nav>
    </div>
</div> 


<div id="pengajuan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <form action="page/laporan/pengajuan.php" target="_blank" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Laporan Pengajuan Permohonan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Dari Tanggal</label>
                        <input class="form-control" autofocus="" value="<?php echo date('Y-m-d'); ?>" name="tgl_awal" required="" type="date"> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Sampai Tanggal</label>
                        <input class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_akhir" required="" type="date"> 
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cetak"> 
                </div>
            </div><!-- /.modal-content -->
        </form>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div id="survei" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <form action="page/laporan/survei.php" target="_blank" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Laporan Hasil Survei</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Dari Tanggal</label>
                        <input class="form-control" autofocus="" value="<?php echo date('Y-m-d'); ?>" name="tgl_awal" required="" type="date"> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Sampai Tanggal</label>
                        <input class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_akhir" required="" type="date"> 
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cetak"> 
                </div>
            </div><!-- /.modal-content -->
        </form>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div id="pencairan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <form action="page/laporan/pencairan.php" target="_blank" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Laporan Pencairan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Dari Tanggal</label>
                        <input class="form-control" autofocus="" value="<?php echo date('Y-m-d'); ?>" name="tgl_awal" required="" type="date"> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Sampai Tanggal</label>
                        <input class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_akhir" required="" type="date"> 
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cetak"> 
                </div>
            </div><!-- /.modal-content -->
        </form>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div id="pembayaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <form action="page/laporan/pembayaran.php" target="_blank" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Laporan Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Dari Tanggal</label>
                        <input class="form-control" autofocus="" value="<?php echo date('Y-m-d'); ?>" name="tgl_awal" required="" type="date"> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Sampai Tanggal</label>
                        <input class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_akhir" required="" type="date"> 
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cetak"> 
                </div>
            </div><!-- /.modal-content -->
        </form>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div id="sisa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <form action="page/laporan/sisa.php" target="_blank" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Laporan Sisa Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Dari Tanggal</label>
                        <input class="form-control" autofocus="" value="<?php echo date('Y-m-d'); ?>" name="tgl_awal" required="" type="date"> 
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Sampai Tanggal</label>
                        <input class="form-control" value="<?php echo date('Y-m-d'); ?>" name="tgl_akhir" required="" type="date"> 
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Cetak"> 
                </div>
            </div><!-- /.modal-content -->
        </form>


    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->