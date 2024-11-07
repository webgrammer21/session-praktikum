<?php 
   session_start(); 
// menghubungkan dengan koneksi
$query=new mysqli('localhost', 'root', '', 'db_makanan');
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($query,"select * from user where username='$username' and password='$password'")or die (mysqli_error($query));
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
    if($cek > 0){
	    $_SESSION['username'] = $username;
	    $_SESSION['status']   = "login";
	    header("location:session.php");
    }else{
	    header("location:../login.php?pesan=gagal");
    } ?>
