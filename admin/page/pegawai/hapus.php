<?php
$con->query("DELETE FROM pegawai WHERE id_pegawai = '$_GET[id_pegawai]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=pegawai';</script>";

?> 