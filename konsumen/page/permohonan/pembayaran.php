<div class="row">

    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Pinjaman
                </h4>
                <hr>

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
                            <th width="5%" class="text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php
                        $ambil = $con->query("SELECT * FROM permohonan NATURAL JOIN konsumen NATURAL JOIN permohonan_cair WHERE id_konsumen='$konsu[id_konsumen]' ORDER BY no_permohonan ASC");
                        ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) {
                            $tgl1 = tgl_indo($pecah['tgl_permohonan']);
                            $tgl2 = tgl_indo($pecah['jatuh_tempo']);
                            $data = $pecah['no_permohonan'];
                            $jumlah_pembayaran_query = $con->query("SELECT COUNT(*) AS jumlah FROM pembayaran WHERE no_permohonan = '$data'");
                            $jumlah_pembayaran = $jumlah_pembayaran_query->fetch_assoc()['jumlah'];
                            
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['no_permohonan']; ?></td>
                                <td><?php echo $pecah['nama_konsumen']; ?></td>
                                <td><?php echo number_format($pecah['jum_pinjaman'], 0, ',', '.') ?></td>
                                <td><?php echo $pecah['tenor_pinjaman']; ?> Bulan</td>
                                <td><?php echo $tgl2 ?></td>
                                <td><?php echo number_format($pecah['angsuran'], 0, ',', '.') ?></td>
                                <td class="text-center">
                                    <?php if ($pecah['status_pinjaman'] == 'Cicilan') { ?>
                                        <?php if ($jumlah_pembayaran < $pecah['tenor_pinjaman']) : ?>
                                            <a class="btn btn-warning btn-sm" href="?page=permohonan&aksi=bayar_angsuran&no_permohonan=<?php echo $pecah['no_permohonan'] ?>&id_konsumen=<?php echo $pecah['id_konsumen'] ?>">Bayar Angsuran</a>
                                        <?php else : ?>
                                            <?php 
                                                $no_permohonan = $pecah['no_permohonan'];
                                                $cek_survei = $con->query("SELECT * FROM survei WHERE no_permohonan = '$no_permohonan'");
                                                $data_survei = $cek_survei->fetch_assoc();    
                                            ?>
                                            <?php if($data_survei) : ?>
                                                <span class="btn btn-outline-success btn-sm">Sudah Isi Survei</span>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#surveiModal" data-id_konsumen="<?php echo $pecah['no_permohonan'] ?>">Isi Survei</a>
                                            <?php endif; ?>
                                            <span class="btn btn-info btn-sm">Sudah Lunas</span>
                                        <?php endif; ?>
                                    <?php } ?>
                                    <a class="btn btn-success btn-sm" href="?page=permohonan&aksi=lihat1&no_permohonan=<?php echo $pecah['no_permohonan'] ?>&id_konsumen=<?php echo $pecah['id_konsumen'] ?>">Detail</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->



    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Data Pembayaran
                </h4>
                <hr>

                <table id="alternative-page-datatable" class="table dt-responsive table-hover nowrap w-100">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>No Permohonan</th>
                            <th>Pinjaman</th>
                            <th>Tenor</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Pembayaran Ke</th>
                            <th>Bayar</th>
                            <th>Sisa Angsuran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php $ambil = $con->query("SELECT * FROM pembayaran NATURAL JOIN permohonan NATURAL JOIN konsumen NATURAL JOIN permohonan_cair ORDER BY no_permohonan ASC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) {
                            $tgl1 = tgl_indo($pecah['tgl_permohonan']);
                            $tgl2 = tgl_indo($pecah['tgl_pembayaran']);
                            $sisa = $pecah['tenor_pinjaman'] - $pecah['bayar_ke'];
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['no_permohonan']; ?></td>
                                <td><?php echo number_format($pecah['jum_pinjaman'], 0, ',', '.') ?></td>
                                <td><?php echo $pecah['tenor_pinjaman']; ?> Bulan</td>
                                <td><?php echo $tgl2; ?></td>
                                <td><?php echo $pecah['bayar_ke']; ?></td>
                                <td><?php echo number_format($pecah['nominal_bayar'], 0, ',', '.') ?></td>
                                <td><?php echo $sisa; ?> Bulan</td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

</div>

<!-- Modal -->
<div class="modal fade" id="surveiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Survei Kepuasan Pelanggan ⭐⭐⭐</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                <input type="hidden" id="noPermohonanInput" name="no_permohonan">
                    <!-- Pertanyaan 1 -->
                    <div class="mb-3">
                        <label for="survei1">Bagaimana kepuasan Anda terhadap proses melengkapi syarat peminjaman di FIF Group?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_1" id="survey_question_1_option_1" value="Sangat Puas" required>
                            <label class="form-check-label" for="survey_question_1_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_1" id="survey_question_1_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_1_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_1" id="survey_question_1_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_1_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_1" id="survey_question_1_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_1_option_4">Buruk</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 2 -->
                    <div class="mb-3">
                        <label for="survei2">Bagaimana Anda menilai proses masuknya pengajuan pinjaman Anda ke dalam sistem kami?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_2" id="survey_question_2_option_1" value="Sangat Puas" required>
                            <label class="form-check-label" for="survey_question_2_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_2" id="survey_question_2_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_2_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_2" id="survey_question_2_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_2_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_2" id="survey_question_2_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_2_option_4">Buruk</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 3 -->
                    <div class="mb-3">
                        <label for="survei3">Bagaimana kepuasan Anda terhadap kecepatan proses pengajuan pinjaman Anda?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_3" id="survey_question_3_option_1" value="Sangat Puas" required>
                            <label class="form-check-label" for="survey_question_3_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_3" id="survey_question_3_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_3_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_3" id="survey_question_3_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_3_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_3" id="survey_question_3_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_3_option_4">Buruk</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 4 -->
                    <div class="mb-3">
                        <label for="survei4">Bagaimana Anda menilai kemudahan dalam penyerahan dokumen persyaratan?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_4" id="survey_question_4_option_1" value="Sangat Puas" required>
                            <label class="form-check-label" for="survey_question_4_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_4" id="survey_question_4_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_4_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_4" id="survey_question_4_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_4_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_4" id="survey_question_4_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_4_option_4">Buruk</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 5 -->
                    <div class="mb-3">
                        <label for="survei5">Bagaimana kepuasan Anda terhadap waktu yang dibutuhkan untuk penerbitan dokumen setelah persyaratan lengkap?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_5" id="survey_question_5_option_1" value="Sangat Puas" required>
                            <label class="form-check-label" for="survey_question_5_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_5" id="survey_question_5_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_5_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_5" id="survey_question_5_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_5_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_5" id="survey_question_5_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_5_option_4">Buruk</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 6 -->
                    <div class="mb-3">
                        <label for="survei6">Bagaimana Anda menilai kejelasan informasi yang Anda terima saat dokumen pinjaman diterbitkan?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_6" id="survey_question_6_option_1" value="Sangat Puas" required>
                            <label class="form-check-label" for="survey_question_6_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_6" id="survey_question_6_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_6_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_6" id="survey_question_6_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_6_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_6" id="survey_question_6_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_6_option_4">Buruk</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 7 -->
                    <div class="mb-3">
                        <label for="survei7">Bagaimana kepuasan Anda terhadap prosedur pembatalan pinjaman di FIF Group?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_7" id="survey_question_7_option_1" value="Sangat Puas" required>
                            <label class="form-check-label" for="survey_question_7_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_7" id="survey_question_7_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_7_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_7" id="survey_question_7_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_7_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_7" id="survey_question_7_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_7_option_4">Buruk</label>
                        </div>
                    </div>

                    <!-- Pertanyaan 8 -->
                    <div class="mb-3">
                        <label for="survei8">Bagaimana kepuasan Anda terhadap proses pengajuan ulang pinjaman setelah pembatalan?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_8" id="survey_question_8_option_1" value="Sangat Puas">
                            <label class="form-check-label" for="survey_question_8_option_1">Sangat Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_8" id="survey_question_8_option_2" value="Puas">
                            <label class="form-check-label" for="survey_question_8_option_2">Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_8" id="survey_question_8_option_3" value="Biasa Saja">
                            <label class="form-check-label" for="survey_question_8_option_3">Biasa Saja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="survey_question_8" id="survey_question_8_option_4" value="Buruk">
                            <label class="form-check-label" for="survey_question_8_option_4">Buruk</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Nanti Aja Deh 😋</button>
                        <button type="submit" class="btn btn-primary btn-sm" name="kirimSurvei">Kirim Survei 😎</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('surveiModal');
    modal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget;
      var noPermohonan = button.getAttribute('data-id_konsumen');
      var noPermohonanInput = document.getElementById('noPermohonanInput');
      noPermohonanInput.value = noPermohonan;
      console.log('No Permohonan:', noPermohonan);
    });
  });
</script>
<?php 
    if (isset($_POST['kirimSurvei'])) {
        $survey_question_1 = $_POST['survey_question_1'];
        $survey_question_2 = $_POST['survey_question_2'];
        $survey_question_3 = $_POST['survey_question_3'];
        $survey_question_4 = $_POST['survey_question_4'];
        $survey_question_5 = $_POST['survey_question_5'];
        $survey_question_6 = $_POST['survey_question_6'];
        $survey_question_7 = $_POST['survey_question_7'];
        $survey_question_8 = $_POST['survey_question_8'];
        $id_konsumen = $konsu['id_konsumen'];
        $no_permohonan = $_POST['no_permohonan'];
        $tgl_survei = date('Y-m-d H:i:s');

        $data = $con->query("INSERT INTO survei VALUES (NULL, '$id_konsumen', '$no_permohonan', '$survey_question_1', '$survey_question_2', '$survey_question_3', '$survey_question_4', '$survey_question_5', '$survey_question_6', '$survey_question_7', '$survey_question_8', '$tgl_survei')");

        if ($data) {
            echo "<script>
                alert('Terima Kasih Sudah Mengisi Survei Kami 😊');
                window.location.href = '?page=permohonan&aksi=pembayaran';
            </script>";
        } else {
            echo "<script>alert('Gagal Mengisi Survei Kami 😞');</script>";
        }
    }
?>