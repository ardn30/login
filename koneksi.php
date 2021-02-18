<?php 
$sever = "localhost";
$username = "root";
$password = "";
$database = "utama_web";
$conn;

// $conn = mysqli_connect($server,$username,$password,$database);

function __construct(){
$conn = mysqli_connect($server,$username,$password,$database);
}

function registrasi($data){
	global $conn;

	$email = strtolower(stripcslashes($data["email"]));
	$nama = $data["nama"];
	$password = mysqli_real_escape_string($data["password"]);


//enkripsi password

$password = password_hash($password, PASSWORD_DEFAULT);

//tambah user ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('','$email','$nama','$password')");
	return mysqli_affected_rows($conn);
}

// function register($email,$nama,$password){
// 	$insert = mysqli_query($koneksi, "insert into t_newuser values ('','$email','$nama','$password')");
// 	return $insert;
// }

// function login($email,$nama,$password){
// 	$query = mysqli_query($koneksi,"select * from t_newuser where email='$email'");
// 		$data_user = $query->fetch_array();
// 		if(password_verify($password,$data_user['password']))
// 		{
// 			$_SESSION['email'] = $email;
// 			$_SESSION['nama'] = $data_user['nama'];
// 			$_SESSION['is_login'] = TRUE;
// 			return TRUE;
// 		}
// }



 ?>
