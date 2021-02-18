<?php 

require 'koneksi.php';

if (isset($_POST["submit"])) {
	if (submit($_POST) > 0) {
		echo "<script> 
				alert('user baru berhasil ditambahkan!!');
			 </script>" ;
	} else {
		echo mysqli_error($conn);
		echo "gagal!!";
	}

}

// //koneksi ke database
// include_once("koneksi.php");


// if (isset($_POST['submit'])) {
// 	$email = $_POST['email'];
// 	$nama = $_POST['nama'];
// 	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// 	if ($database->submit($email,$nama,$password)) {
// 		header('location:formlogin.php');
// 	}
// }

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Creat New Account</title>
	<link rel="stylesheet" type="text/css" href="halamanakun.css">
	<link rel="stylesheet" type="text/css" href="halamanakun.css">

</head>
<body>
	<div class="card">
		<div class="card-content">
			<div class="title">
				<h2>CREATE ACCOUNT</h2>
			</div>
			<div class="underline"></div>
		</div>

				<!-- isi di card -->

				<!-- untuk email -->	
		<label id="email" for="user-email" style="padding-top: 13px"> &nbsp; <!-- Email --></label>	
			<form action="" method="post" class="form">
				<input id="user-email" class="form-content" type="text" name="email" autocomplete="on" placeholder="Email"  required/>
					<div class="formborder"></div>
			</form>

				<!-- untuk nama -->
		<label id="name" for="user-name" style="padding-top: 13px"> &nbsp;</label>	
			<form method="post" class="form">
				<input id="user-name" class="form-content" type="nama" name="nama" autocomplete="on" placeholder="Nama" required/>
					<div class="formborder"></div>
			</form>

				<!-- untuk password -->
		<label id="pass" for="user-password" style="padding-top: 13px"> &nbsp;</label>		
			<form method="post" class="form">
				<input id="user-password" class="form-content" type="password" name="password" placeholder="Password">
					<div class="formborder"></div>
			</form>

	    	<form action="" method="post" id="form">
     			   <div class="show">
   			    <input type="checkbox" id="show-hide" name="show-hide"><label for="show-hide" id="show-hide-label">Show Password </label>
        			</div>
    	    </form>    
			
						<div class="tombol">
							<a href="formlogin.php">
								<input id="submit-btn" type="submit" name="submit" value="Sign Up">
							</a>
							<br>
							Have an account?<a href="formlogin.php" id="login">Log In</a>
						</div>
	</div>
	 <script>
    (function() {
    
        var showHide = function( element, field ) {
            this.element = element;
            this.field = field;
            
            this.toggle();    
        };
        
        showHide.prototype = {
            toggle: function() {
                var self = this;
                self.element.addEventListener( "change", function() {
                    if(self.element.checked) {self.field.setAttribute( "type", "text" );}
                    else {self.field.setAttribute( "type", "password","password2" );}
                }, false);
            }
        };
        
        document.addEventListener( "DOMContentLoaded", function() {
            var checkbox = document.querySelector( "#show-hide" ),
                password = document.querySelector( "#user-password","#user-password2" ),
                form = document.querySelector( "#form" );
                
                form.addEventListener( "submit", function( e ) {
                    e.preventDefault();
                }, false);
                
                var toggler = new showHide( checkbox, password );
        });
        
    })();
</script>
</body>
</html>