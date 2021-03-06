<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}


	#container {
		margin: 10px;
        padding: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	label {
	   display: block; 
	}
    </style>
</head>
<body>

<div id="container">
	<h1>Sign Up</h1>
    <?php 
    
        echo validation_errors(); //return errors, part of FORM helper
        echo form_open('main/register_validation'); 
        echo "<p><label for='email'>Email</label>";
        echo form_input('email', $this->input->post('email')); //so user doesn't have to retype email if there are errors
        echo "</p>";
    
        echo "<p><label for='password'>Password</label>";
        echo form_password('password');
        echo "</p>";   
    
        echo "<p><label for='password'>Confirm Password</label>";
        echo form_password('confirmpassword');
        echo "</p>";
    
        echo "<p>";
        echo form_submit('register_submit', 'Register'); //parameters are name, value
        echo "</p>";
    
        echo form_close();
    ?>
	<a href="login">Login</a>
</div>

</body>
</html>
