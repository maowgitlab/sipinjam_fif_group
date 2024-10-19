<?php
$con->query("DELETE FROM admin WHERE id_admin = '$_GET[id_admin]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=admin';</script>";

?> 