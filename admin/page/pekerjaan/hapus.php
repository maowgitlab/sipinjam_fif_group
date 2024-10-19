<?php
$con->query("DELETE FROM pekerjaan WHERE id_pekerjaan = '$_GET[id_pekerjaan]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=pekerjaan';</script>";

?> 