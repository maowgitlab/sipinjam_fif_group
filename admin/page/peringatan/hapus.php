<?php
$con->query("DELETE FROM agama WHERE id_agama = '$_GET[id_agama]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=agama';</script>";

?> 