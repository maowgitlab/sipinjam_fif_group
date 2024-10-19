<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Peringatan  
                </h4> <hr>

                <table id="alternative-page-datatable" class="table dt-responsive table-hover nowrap w-100">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th>No Permohonan</th>
            <th>Konsumen</th>
            <th>Tanggal Peringatan</th>
            <th>Isi Peringatan</th> 
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        // Query untuk mendapatkan data peringatan
        $ambil = $con->query("
            SELECT 
                p.no_permohonan,
                k.nama_konsumen,
                pr.tgl_peringatan,
                pr.isi
            FROM 
                peringatan pr
            JOIN 
                permohonan p ON pr.no_permohonan = p.no_permohonan
            JOIN 
                konsumen k ON p.id_konsumen = k.id_konsumen
            WHERE 
                k.id_konsumen = '$konsu[id_konsumen]'
            ORDER BY 
                pr.tgl_peringatan DESC
        ");

        while ($pecah = $ambil->fetch_assoc()) {
            // Format tanggal peringatan
            $tgl_peringatan = date('d-m-Y', strtotime($pecah['tgl_peringatan']));
        ?>
        <tr>
            <td class="text-center"><?php echo $nomor; ?></td>
            <td><?php echo $pecah['no_permohonan']; ?></td>
            <td><?php echo $pecah['nama_konsumen']; ?></td>
            <td><?php echo $tgl_peringatan; ?></td>
            <td><?php echo htmlspecialchars($pecah['isi']); ?></td> 
        </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>



            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col--> 
                        
</div>