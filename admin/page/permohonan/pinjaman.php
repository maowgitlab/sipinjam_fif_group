<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Pinjaman 
                </h4> <hr>

                <table id="alternative-page-datatable" class="table dt-responsive table-hover nowrap w-100">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>No Permohonan</th>
                            <th>Konsumen</th>
                            <th>Tanggal Pinjaman</th>
                            <th>Pinjaman</th> 
                            <th>Tenor</th> 
                            <th>Tanggal Jatuh Tempo</th> 
                            <th>Bulanan</th> 
                            <th width="5%" class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$con->query("SELECT * FROM permohonan NATURAL JOIN konsumen NATURAL JOIN permohonan_cair ORDER BY no_permohonan ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { 
                            $tgl1 = tgl_indo($pecah['tgl_permohonan']);  
                            $tgl2 = tgl_indo($pecah['jatuh_tempo']);  ?>
                        <tr> 
                            <td class="text-center"><?php echo $nomor; ?></td>  
                            <td><?php echo $pecah['no_permohonan']; ?></td>    
                            <td><?php echo $pecah['nama_konsumen']; ?></td>    
                            <td><?php echo $tgl1; ?></td>    
                            <td><?php echo number_format($pecah['jum_pinjaman'], 0, ',','.') ?></td>    
                            <td><?php echo $pecah['tenor_pinjaman']; ?> Bulan</td>     
                            <td><?php echo $tgl2 ?></td>    
                            <td><?php echo number_format($pecah['angsuran'], 0, ',','.') ?></td>    
                            <td class="text-center">
                                <a class="btn btn-success btn-sm" href="?page=permohonan&aksi=detail_pinjaman&no_permohonan=<?php echo $pecah['no_permohonan'] ?>&id_konsumen=<?php echo $pecah['id_konsumen'] ?>">Detail</a> 
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