<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger alert-solid" role="alert">
            <span class="fw-medium">
                <?php  
                $tanggal_hari_ini = date('Y-m-d'); 
                $sql = "SELECT * FROM permohonan NATURAL JOIN permohonan_cair NATURAL JOIN konsumen WHERE jatuh_tempo < '$tanggal_hari_ini' AND status_pinjaman != 'Lunas'";
                $result = $con->query($sql); 
                if ($result->num_rows > 0) {
                    echo "<h3>Notifikasi Keterlambatan:</h3>";
                    while ($row = $result->fetch_assoc()) {
                        echo "Transaksi dengan No: " . $row['no_permohonan'] . " atas nama " . $row['nama_konsumen'] . " telah melewati jatuh tempo pada " . $row['jatuh_tempo'] . ".<br>";
                        echo "Segera lakukan pembayaran anda";
                    }
                } else {
                    echo "Tidak ada transaksi yang terlambat.";
                }

                $con->close();
                ?>
            </span> 
        </div>
    </div> 
 
</div>
<!-- END ROW -->  


