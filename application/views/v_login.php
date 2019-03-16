<!DOCTYPE html>
<html>
<head>
	<title>Login | CV. Dekarobe</title>
	<style>
  body {
     margin: 0;
     padding: 0;
     text-align: center;
  }
  .bg {
     width: 100%;
     height: 100%;
     position: absolute;
     z-index: 1;
     float: left;
     left: 0;
  }
  .content {
     width: 80%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     padding: 30px;
     text-align: left;
  }

form {
    border: 3px solid #f1f1f1;
    margin: auto;
    width: 30%;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.center {
  margin: auto;
  width: 50%;
  padding: 10px;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border: 1px solid #ffffff;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
  <img src="<?php echo base_url('/application/views/images/bg.jpg'); ?>" alt="bg" class="bg"/>
  <div class="content">
	<h1 class="center">
		<div style="margin: 0px 10px 15px 0px; text-align: center;">
			Login Page <br/> CV. Dekarobe
		</div>
		</h1>
	<form method="post" action="<?php echo base_url('index.php/login/aksilogin'); ?>">
  <div class="imgcontainer">
    <img src="<?php echo base_url('/application/views/images/palapa.png'); ?>" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Your Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password" name="password" required>

    <button type="submit">Submit</button>
  </div>
</div>
</body>
</html>