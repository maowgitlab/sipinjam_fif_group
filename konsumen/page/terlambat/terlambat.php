<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Keterlambatan 
                </h4> <hr>

                <table id="alternative-page-datatable" class="table dt-responsive table-hover nowrap w-100">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>No Permohonan</th>
                            <th>Konsumen</th>
                            <th>Tanggal</th>
                            <th>Selama</th>
                            <th width="5%" class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$con->query("SELECT * FROM terlambat NATURAL JOIN permohonan NATURAL JOIN konsumen ORDER BY id_terlambat ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { 
                            $tgl = tgl_indo($pecah['tgl_terlambat']); ?>
                        <tr> 
                            <td class="text-center"><?php echo $nomor; ?></td>  
                            <td><?php echo $pecah['no_permohonan']; ?></td>    
                            <td><?php echo $pecah['nama_konsumen']; ?></td>    
                            <td><?php echo $tgl; ?></td>    
                            <td><?php echo $pecah['selama']; ?> Hari</td>    
                            <td class="text-center">
                                <?php 
                                $tgl1    =  date("Y-m-d");
                                $periksa = mysqli_query($con, "SELECT * FROM terlambat NATURAL JOIN permohonan NATURAL JOIN konsumen WHERE tgl_terlambat='$tgl1'");
                                $num = mysqli_num_rows($periksa); 
                                echo "Segera lakukan pembayaran";
                                ?> 
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