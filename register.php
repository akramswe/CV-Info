<?php 
include('header.php');
?>
<body>
<div class="container">

<br>
<br>
 <div class="navbar">
	<div class="alert alert-info" role="alert">
		<h2>Registration Form</h2>
	</div>
    </div>
   
<div class="thumbnail" style="border:1px solid #1982d1; background:;">

     <div class="row">
	<div class="span3 offset1"></div>
    <div class="span8">
	<br>
	
	<div class="alert alert-danger"><b><i class="icon-file"></i> Please Fill up all the details Below</b></div>
	
	<form class="form-horizontal" method="POST" onsubmit="return myFunction()">
	 
    <div class="control-group">
    <label class="control-label" for="inputEmail">FirstName</label>
    <div class="controls">
    <!-- <input type="text" class="span4" name="firstname" id="fname" placeholder="FirstName" autofocus="autofocus" required> -->
    <input type="text" id="fname" name="fname" placeholder="Your Name" class="input-text" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">LastName</label>
    <div class="controls">
    <!-- <input type="text" class="span4" name="lastname" id="inputEmail" placeholder="LastName" required> -->
    <input type="text" id="fname" name="fname" placeholder="Your Name" class="input-text" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Age</label>
    <div class="controls">
    <!-- <input type="Number" class="span1" name="age" id="inputEmail" placeholder="Age" required> -->
    <input type="Number" id="age" size="20" name="age" placeholder="Your Age" required>
    </div>
    </div>
	 
	<div class="control-group">
    <label class="control-label" for="inputEmail">Gender</label>
    <div class="controls">
	<select class="span2" name="gender" required>
	<option>Male</option>
	<option>Female</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Address</label>
    <div class="controls">
    <input type="text" class="span4" name="address" id="inputEmail" placeholder="Address" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Email Adress</label>
    <div class="controls">
    <!-- <input type="email" class="span4" name="email" id="inputEmail" placeholder="Email Address" required> -->
    <input type="text" id="email" name="mail" placeholder="Your Email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputEmail">Password</label>
    <div class="controls">
    <!-- <input type="password" class="span4" name="email" id="password" placeholder="**********" required> -->
     <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputEmail">Confirm-Password</label>
    <div class="controls">
    <!-- <input type="password" class="span4" name="email" id="comfirm-password" placeholder="**********" required> -->

    <input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required>

    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Contact Number</label>
    <div class="controls">
    <!-- <input type="text" class="span4" name="c_number" id="inputEmail" placeholder="Contact Number" required> -->
   
       <input type="Phone" name="Phone" id="Phone" class="input-text" placeholder="Your Phone" required>

    </div>
    </div>
	
	<div class="control-group">
		<div class="controls">
		
		<img src="generatecaptcha.php?rand=<?php echo rand(); ?>" name="captcha_img" id='image_captcha' > 
		<a href='javascript: refreshing_Captcha();'><i class="icon-refresh icon-large"></i></a> 
		<script language='JavaScript' type='text/javascript'>
			function refreshing_Captcha()
			{
				var img = document.images['image_captcha'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
		</script>
		</div>
	</div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Captcha Confirmation</label>
    <div class="controls">
    <input type="text" class="span4" name="captcha_code" id="inputEmail" placeholder="Enter the Captcha Code above" required>
    </div>
    </div>
 
    <div class="control-group">
    <div class="controls">
    <button type="submit" name="submit" class="btn btn-primary"><i class="icon-save icon-large"></i> Register Member </button>
    </div>
    </div>
    </form>


    <script>
        function myFunction() {
            var at = document.getElementById("email").value.indexOf("@");
            var age = document.getElementById("age").value;
            var fname = document.getElementById("fname").value;
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("comfirm-password").value;
            var checkBox = document.getElementById("myCheck");


            submitOK = "true";


            if (fname.length < 5) {
                alert("Name can't be <5 character!");
                submitOK = "false";
            }

            if (at == -1) {
                alert("Email can not be blank!");
                submitOK = "false";
            }

            if (password != confirm_password) {
                // confirm_password.setCustomValidity("Passwords Don't Match");
                alert("Passwords Don't Match");
                submitOK = "false";

            }
            if (age < 18) {
                alert("Sorry you are under age!");
                submitOK = "false";
            }

            if (checkBox.checked == false) {
                alert("You must accept terms and conditions!");
                submitOK = "false";
            }


            if (submitOK == "false") {
                return false;
            }
        }
    </script>

	
	</div>
    </div>
	</div>
	<center>
	<div class="alert alert-danger" role="alert">
	<b>Developed By Washim Akram</b>
	</div>
	</center>
	
	<?php
	if (isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$c_number = $_POST['c_number'];
	$captcha_code = $_POST['captcha_code'];
	
	/*mysql_query("insert into reg_member (firstname, lastname, age, address, gender, email, c_number, captcha_code, date)
	values('$firstname', '$lastname', '$age', '$address', '$gender', '$email', '$c_number', '$captcha_code', NOW())
	")or die(mysql_error());*/
	$servername = "localhost";
 $username = "root";
 $password = "";
$dbname = "swe333";
// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
$sql = "insert into reg_member (firstname, lastname, age, address, gender, email, c_number, captcha_code, date)
	values('$firstname', '$lastname', '$age', '$address', '$gender', '$email', '$c_number', '$captcha_code', NOW())";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} 

} 
	?>
	<script type="text/javascript">
	alert('You are Successfully Register Thank You');
	window.location="index.php";
	</script>

	<?php
	}
	?>
	
	

</div>
</body>
</html