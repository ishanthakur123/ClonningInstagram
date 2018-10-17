<!DOCTYPE html>
<html>
<head>
	<title>Register Sukses</title>
</head>
<body>
<table align="center">
<h1><center>Register Sukses</center></h1>
<?php
$email=$_POST['email'];
$namalengkap=$_POST['namalengkap'];
$namapengguna=$_POST['namapengguna'];
$password=$_POST['password'];
$password = str_repeat("*", strlen($password));
echo "<tr><td>Email</td> <td>:</td> <td>$email</td></tr>";
echo "<tr><td>Nama Lengkap</td> <td>:</td> <td>$namalengkap</td></tr>";
echo "<tr><td>Nama Pengguna</td> <td>:</td> <td>$namapengguna</td></tr>";
echo "<tr><td>Password</td> <td>:</td> <td>$password</td></tr>";
?>
</table>
</body>
</html>