<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-md flex-shrink-0">
                        <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                            <i class="ri-user-line "></i>
                        </span>
                    </div>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM pegawai");
                    $jum = mysqli_num_rows($sql);
                    ?>
                    <div class="flex-grow-1 overflow-hidden ms-4">
                        <p class="text-muted text-truncate font-size-15 mb-2"> Karyawan</p>
                        <h3 class="fs-4 flex-grow-1 mb-3"><?php echo $jum ?> </h3>
                    </div>
                    <div class="flex-shrink-0 align-self-start"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-md flex-shrink-0">
                        <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                            <i class="ri-user-line "></i>
                        </span>
                    </div>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM konsumen");
                    $jum = mysqli_num_rows($sql);
                    ?>
                    <div class="flex-grow-1 overflow-hidden ms-4">
                        <p class="text-muted text-truncate font-size-15 mb-2"> Konsumen</p>
                        <h3 class="fs-4 flex-grow-1 mb-3"><?php echo $jum ?> </h3>
                    </div>
                    <div class="flex-shrink-0 align-self-start"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-md flex-shrink-0">
                        <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                            <i class="ri-user-line "></i>
                        </span>
                    </div>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM permohonan WHERE status_permohonan='ACC'");
                    $jum = mysqli_num_rows($sql);
                    ?>
                    <div class="flex-grow-1 overflow-hidden ms-4">
                        <p class="text-muted text-truncate font-size-15 mb-2"> Pinjaman</p>
                        <h3 class="fs-4 flex-grow-1 mb-3"><?php echo $jum ?> </h3>
                    </div>
                    <div class="flex-shrink-0 align-self-start"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END ROW -->

<div class="row">

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header border-0 align-items-center d-flex pb-0">
                <h4 class="card-title mb-0 flex-grow-1">Keterlambatan Konsumen</h4>
            </div>
            <div class="card-body pt-2">
                <div class="table-responsive" data-simplebar style="max-height: 358px;">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
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
                </div> <!-- enbd table-responsive-->
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header border-0 align-items-center d-flex pb-0">
                <h4 class="card-title mb-0 flex-grow-1">Data Survei</h4>
            </div>
            <div class="card-body pt-2">
                <div class="table-responsive" data-simplebar style="max-height: 358px;">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>No Permohonan</th>
                                <th>Nama Konsumen</th>
                                <th>melengkapi syarat peminjaman</th>
                                <th>masuknya pengajuan pinjaman</th>
                                <th>kecepatan proses pengajuan</th>
                                <th>kemudahan dalam penyerahan dokumen</th>
                                <th>penerbitan dokumen</th>
                                <th>kejelasan informasi</th>
                                <th>prosedur pembatalan pinjaman</th>
                                <th>pengajuan ulang pinjaman</th>
                                <th>Tanggal Survei</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor = 1;
                                // Query untuk mendapatkan data keterlambatan
                                $ambil = $con->query("SELECT survei.*, konsumen.nama_konsumen FROM survei JOIN konsumen WHERE survei.id_konsumen = konsumen.id_konsumen");
                            ?>
                            <?php foreach($ambil as $data) : ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $data['no_permohonan'] ?></td>
                                    <td><?= $data['nama_konsumen'] ?></td>
                                    <td><?= $data['pertanyaan_lengkapi_syarat'] ?></td>
                                    <td><?= $data['pertanyaan_masuk_sistem'] ?></td>
                                    <td><?= $data['pertanyaan_diproses'] ?></td>
                                    <td><?= $data['pertanyaan_penyerahan_syarat'] ?></td>
                                    <td><?= $data['pertanyaan_dokumen_terbit'] ?></td>
                                    <td><?= $data['pertanyaan_dokumen_diterima'] ?></td>
                                    <td><?= $data['pertanyaan_dibatalkan'] ?></td>
                                    <td><?= $data['pertanyaan_ajukan_ulang'] ?></td>
                                    <td><?= $data['tanggal_survei'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div> <!-- enbd table-responsive-->
            </div>
        </div>
    </div>
</div>
<!-- END ROW -->