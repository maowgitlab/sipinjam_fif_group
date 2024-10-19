<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Pekerjaan
                    <div class="float-end">
                        <a href="?page=pekerjaan&aksi=tambah" class="btn btn-info btn-sm waves-effect waves-light">Tambah</a> 
                    </div>
                </h4> <hr>

                <table id="alternative-page-datatable" class="table dt-responsive table-hover nowrap w-100">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>Pekerjaan</th>
                            <th width="5%" class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$con->query("SELECT * FROM pekerjaan ORDER BY id_pekerjaan ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { 
                            // $tgl = tgl_indo($pecah['tgl']); ?>
                        <tr> 
                            <td class="text-center"><?php echo $nomor; ?></td>  
                            <td><?php echo $pecah['pekerjaan']; ?></td>    
                            <td class="text-center">
                                <div class="btn-group me-1 mt-2">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Aksi <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="?page=pekerjaan&aksi=ubah&id_pekerjaan=<?php echo $pecah['id_pekerjaan'] ?>">Ubah Data</a>
                                        <a class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini ?')" href="?page=pekerjaan&aksi=hapus&id_pekerjaan=<?php echo $pecah['id_pekerjaan'] ?>">Hapus Data</a> 
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