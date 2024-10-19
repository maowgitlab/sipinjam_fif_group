<?php
$con->query("DELETE FROM pendidikan WHERE id_pendidikan = '$_GET[id_pendidikan]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=pendidikan';</script>";

?> 