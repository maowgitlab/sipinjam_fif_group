<?php
$con->query("DELETE FROM darah WHERE id_darah = '$_GET[id_darah]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=darah';</script>";

?> 