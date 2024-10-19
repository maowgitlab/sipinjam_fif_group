<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Survei
                </h4> <hr>

                <table id="alternative-page-datatable" class="table dt-responsive table-hover nowrap w-100">
                    <thead>
                      <tr>
                          <th width="5%">No.</th>
                          <th>Aksi</th>
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
                        <?php $nomor=1; ?>
                        <?php $ambil=$con->query("SELECT survei.*, konsumen.nama_konsumen FROM survei JOIN konsumen WHERE survei.id_konsumen = konsumen.id_konsumen"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { 
                            // $tgl = tgl_indo($pecah['tgl']); ?>
                        <tr> 
                            <td><?= $nomor; ?></td>
                            <td class="text-center">
                                <div class="btn-group me-1 mt-2">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Aksi <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini ?')" href="?page=survei&aksi=hapus&id=<?php echo $pecah['id'] ?>">Hapus Data</a> 
                                    </div>
                                </div> 
                            </td> 
                            <td><?= $pecah['no_permohonan'] ?></td>
                            <td><?= $pecah['nama_konsumen'] ?></td>
                            <td><?= $pecah['pertanyaan_lengkapi_syarat'] ?></td>
                            <td><?= $pecah['pertanyaan_masuk_sistem'] ?></td>
                            <td><?= $pecah['pertanyaan_diproses'] ?></td>
                            <td><?= $pecah['pertanyaan_penyerahan_syarat'] ?></td>
                            <td><?= $pecah['pertanyaan_dokumen_terbit'] ?></td>
                            <td><?= $pecah['pertanyaan_dokumen_diterima'] ?></td>
                            <td><?= $pecah['pertanyaan_dibatalkan'] ?></td>
                            <td><?= $pecah['pertanyaan_ajukan_ulang'] ?></td>
                            <td><?= $pecah['tanggal_survei'] ?></td>
                        </tr> 
                        <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>