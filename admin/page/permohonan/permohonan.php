<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Permohonan
                    <div class="float-end">
                        <a href="?page=permohonan&aksi=tambah" class="btn btn-info btn-sm waves-effect waves-light">Tambah</a> 
                    </div>
                </h4> <hr>

                <table id="alternative-page-datatable" class="table dt-responsive table-hover nowrap w-100">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>No Permohonan</th>
                            <th>Konsumen</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Status</th> 
                            <th width="5%" class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$con->query("SELECT * FROM permohonan NATURAL JOIN konsumen ORDER BY no_permohonan ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { 
                            $tgl = tgl_indo($pecah['tgl_permohonan']); ?>
                        <tr> 
                            <td class="text-center"><?php echo $nomor; ?></td>  
                            <td><?php echo $pecah['no_permohonan']; ?></td>    
                            <td><?php echo $pecah['nama_konsumen']; ?></td>    
                            <td><?php echo $tgl; ?></td>    
                            <td><?php echo $pecah['waktu_permohonan']; ?></td>    
                            <td><?php echo $pecah['status_permohonan']; ?></td>     
                            <td class="text-center">
                                <div class="btn-group me-1 mt-2">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Aksi <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu"> 
                                        <?php if ($_SESSION['Petugas']) { ?>
                                        <?php if($pecah['status_permohonan'] == 'Pending'){ ?> 
                                        <a class="dropdown-item" href="?page=permohonan&aksi=permohonan_cek&no_permohonan=<?php echo $pecah['no_permohonan'] ?>">Survey / Cek</a>
                                        <?php }} ?>
                                        <?php if ($_SESSION['Admin']) { ?>
                                        <?php if($pecah['status_permohonan'] == 'Cek, Selesai'){ ?> 
                                        <a class="dropdown-item" href="?page=permohonan&aksi=permohonan_pinjam&no_permohonan=<?php echo $pecah['no_permohonan'] ?>">Pinjaman</a> 
                                        <?php }} ?>
                                        <a class="dropdown-item" href="?page=permohonan&aksi=detail&no_permohonan=<?php echo $pecah['no_permohonan'] ?>&id_konsumen=<?php echo $pecah['id_konsumen'] ?>">Detail</a> 
                                    </div>
                                </div> 
                            </td> 
                        </tr> 
                        <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>