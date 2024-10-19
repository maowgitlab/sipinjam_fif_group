<?php
$con->query("DELETE FROM pernikahan WHERE id_pernikahan = '$_GET[id_pernikahan]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=pernikahan';</script>";

?> 