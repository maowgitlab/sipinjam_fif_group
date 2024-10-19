<?php
$con->query("DELETE FROM bank WHERE id_bank = '$_GET[id_bank]'");

echo "<script>alert('Berhasil dihapus');</script>";
echo "<script>location='?page=bank';</script>";

?> 