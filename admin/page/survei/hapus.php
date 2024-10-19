<?php
$con->query("DELETE FROM survei WHERE id = '$_GET[id]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=survei';</script>";

?> 