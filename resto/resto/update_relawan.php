<?
include "connection.php";
$No = $_POST['No'];
$Jns_res = $_POST['Jenis Restoran'];
$Jns_res;
if(isset($_POST['Jenis Restoran'])) {
    $Jns_res = $_POST['Jenis Restoran'];
} else {
    $Jns_res = $_POST['temp_Jenis Restoran'];
}
$makanan = $_POST['Makanan'];
$no_handphone = $_POST['no_handphone'];
$skills = $_POST['skills'];
$update="UPDATE relawan SET fullname='$fullname', address='$address',
province='$province',
email='$email', no_handphone='$no_handphone', skills='$skills' WHERE id ='$id'";
if (mysqli_query($db, $update)) {
    header('Location: dashboard.php');
} else {
 echo "relawan gagal di update";
}
?>