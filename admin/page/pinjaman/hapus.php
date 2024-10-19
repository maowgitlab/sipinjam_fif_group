<?php
$con->query("DELETE FROM pinjaman WHERE id_pinjaman = '$_GET[id_pinjaman]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=pinjaman';</script>";

?> 