<?php
$con->query("DELETE FROM konsumen WHERE id_konsumen = '$_GET[id_konsumen]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=konsumen';</script>";

?> 