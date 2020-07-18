<?php
include "connection.php";
$NO = $_POST['NO'];
$Jns_res = $_POST['Jenis Restoran'];
$makanan = $_POST['Makanan'];
$harga = $_POST['Harga'];
$nama = $_POST['Nama Lengkap'];
$No HP = $_POST['skills'];

$query = "INSERT INTO Resto(fullname,address,province,email,no_handphone, skills)
 VALUES ('$fullname','$address','$province','$email','$no_handphone', '$skills')";

if (mysqli_query($db, $query)) {
    header('Location: dashboard.php');
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
    echo $fullname;
    echo  mysqli_error($db);
}