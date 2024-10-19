<?php
$con->query("DELETE FROM jabatan WHERE id_jabatan = '$_GET[id_jabatan]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=jabatan';</script>";

?> 