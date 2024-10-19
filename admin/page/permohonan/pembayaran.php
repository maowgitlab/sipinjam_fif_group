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
                            <th>Pinjaman</th> 
                            <th>Tenor</th> 
                            <th>Tanggal Jatuh Tempo</th> 
                            <th>Bulanan</th> 
                            <th>Masuk</th> 
                            <th>Sisa</th> 
                            <th width="5%" class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$con->query("SELECT * FROM permohonan NATURAL JOIN konsumen NATURAL JOIN permohonan_cair  ORDER BY no_permohonan ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { 
                            $tgl1 = tgl_indo($pecah['tgl_permohonan']);  ?>
                        <tr> 
                            <td class="text-center"><?php echo $nomor; ?></td>  
                            <td><?php echo $pecah['no_permohonan']; ?></td>    
                            <td><?php echo $pecah['nama_konsumen']; ?></td>  
                            <td><?php echo number_format($pecah['jum_pinjaman'], 0, ',','.') ?></td>    
                            <td><?php echo $pecah['tenor_pinjaman']; ?> Bulan</td>     
                            <td>
                                <?php 
                                    $tanggal_sekarang = $pecah['tgl_pinjaman'];
                                    $jumlah_hari_kedepan = 30;
                                    $tanggal_berikutnya = date('Y-m-d', strtotime('+'.$jumlah_hari_kedepan .'days', strtotime($tanggal_sekarang)));
                                    $tanggal_berikutnya = tgl_indo($tanggal_berikutnya);  

                                    echo "$tanggal_berikutnya";
                                ?> 
                            </td>    
                            <td><?php echo number_format($pecah['angsuran'], 0, ',','.') ?></td>    
                            <td>
                                <?php 
                                    $sql_barang = mysqli_query($con, "SELECT * FROM pembayaran WHERE no_permohonan = '$pecah[no_permohonan]'");
                                        while ($data_barang = mysqli_fetch_array($sql_barang)){
                                            $hit = $hit+$data_barang['nominal_bayar'];
                                    } 
                                        echo number_format($hit, 0, ',','.')." <br>";
                                ?>
                            </td>    
                            <td>
                                <?php 
                                    $sql_barang = mysqli_query($con, "SELECT * FROM pembayaran WHERE no_permohonan = '$pecah[no_permohonan]'");
                                        while ($data_barang = mysqli_fetch_array($sql_barang)){
                                            $tgl1 = tgl_indo($pecah['tgl_permohonan']);  
                                            $tgl2 = tgl_indo($data_barang['tgl_pembayaran']);  
                                            $sisa = $pecah['tenor_pinjaman']-$data_barang['bayar_ke'];    
                                    } 
                                        echo $sisa." Bulan";
                                ?>
                            </td>  
                            <td class="text-center"> 
                                <a class="btn btn-success btn-sm" href="?page=permohonan&aksi=detail_pembayaran&no_permohonan=<?php echo $pecah['no_permohonan'] ?>&id_konsumen=<?php echo $pecah['id_konsumen'] ?>">Detail</a> 
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