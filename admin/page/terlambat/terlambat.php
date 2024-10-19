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
            <th>Tanggal Jatuh Tempo</th>
            <th>Selama</th>
            <th width="5%" class="text-center">#</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;

        // Query untuk mendapatkan data keterlambatan
        $ambil = $con->query("
            SELECT 
                p.no_permohonan, 
                k.nama_konsumen, 
                c.jatuh_tempo,
                DATEDIFF(CURDATE(), c.jatuh_tempo) AS selama
            FROM 
                permohonan p 
            NATURAL JOIN 
                konsumen k
            NATURAL JOIN permohonan_cair c
            WHERE 
                DATEDIFF(CURDATE(), c.jatuh_tempo) > 0
            ORDER BY 
                selama DESC
        ");

        while ($pecah = $ambil->fetch_assoc()) {
            // Format tanggal jatuh tempo
            $jatuh_tempo = date('d-m-Y', strtotime($pecah['jatuh_tempo']));
            // Lama keterlambatan dalam hari
            $selama = $pecah['selama'];
            // Cek apakah keterlambatan lebih dari 7 hari
            $peringatan = ($selama >= 7) ? '<span class="badge bg-warning text-dark">Peringatan</span>' : '';
        ?>
        <tr>
            <td class="text-center"><?php echo $nomor; ?></td>
            <td><?php echo $pecah['no_permohonan']; ?></td>
            <td><?php echo $pecah['nama_konsumen']; ?></td>
            <td><?php echo $jatuh_tempo; ?></td>
            <td><?php echo $selama; ?> Hari <?php echo $peringatan; ?></td>
            <td class="text-center">
                <div class="btn-group me-1 mt-2">
                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Aksi <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu"> 
                        <a class="dropdown-item" href="?page=terlambat&aksi=kunjungan&no_permohonan=<?php echo $pecah['no_permohonan'] ?>">Kunjungan</a>
                        
                        <?php if ($selama >= 7) { ?>
                        <a class="dropdown-item" href="?page=terlambat&aksi=peringatan&no_permohonan=<?php echo $pecah['no_permohonan'] ?>">Tambah Peringatan</a>
                        <?php } ?>
                    </div>
                </div>
            </td>
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