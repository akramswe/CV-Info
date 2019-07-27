 <title>CV Form</title>
   
        <link href="cvform/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="cvform/css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
        <link href="cvform/css/DT_bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <script src="cvform/js/jquery-1.7.2.min.js" type="text/javascript"></script>
       <script src="cvform/js/bootstrap.js" type="text/javascript"></script>
 
    <script src="cvform/js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="cvform/js/bootstrap-transition.js" type="text/javascript"></script>
    <script src="cvform/js/DT_bootstrap.js" type="text/javascript"></script>
    <script src="cvform/js/jquery.dataTables.js" type="text/javascript"></script>
       
      <style>

       input[type="text"]{
            height: 37px;
            width: 223px;
        }
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 39%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 300px) {
  .column {
    width: 100%;
  }
}

#navbar1{
    width: 405px;

}

</style>

<body>

<?php
include_once('link.php');
require_once('connection.php');
        session_start();
        if(!isset($_SESSION['email']))
        {
                header("location: index.php");
        }
        $name=$_SESSION['email'];
?>

<div class="container">

<br>
<br>
 <div class="navbar">
    <div class="alert alert-info" role="alert">
        <h2>Create CV Form</h2> <a href="dashboard.php">Back to Home</a>
    </div>
    </div>
   

<div class="row">
  <div class="column" style="background-color:;">
    <div class="thumbnail" style="border:2px solid #1982d1;">

     <div class="row">
    <div class="span3 offset1"></div>
    <div class="span8">
    <br>
    
    
    
    <div class="alert alert-danger" id="navbar1"><b><i class="icon-file" ></i> Please Fill up all the details Below</b></div>
    
    <form class="form-horizontal" style="height: 10%; width: 20%;" method="POST">
     
    <div class="control-group">
    <label class="control-label" for="inputEmail">FirstName</label>
    <div class="controls">
    <input type="text"  name="firstname" id="inputEmail" placeholder="FirstName" autofocus="autofocus" required>
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="inputEmail">LastName</label>
    <div class="controls">
    <input type="text" class="span4" name="lastname" id="inputEmail" placeholder="LastName" required>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputEmail">Designation</label>
    <div class="controls">
    <input type="text" class="span4" name="designation" id="inputEmail" placeholder="LastName" required >
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputEmail">Age</label>
    <div class="controls">
    <input type="text" class="span1" name="age" id="inputEmail" placeholder="Age" required>
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
    <input type="text" class="span4" name="email" id="inputEmail" placeholder="Email Address" required>
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="inputEmail">Contact Number</label>
    <div class="controls">
    <input type="text" class="span4" name="c_number" id="inputEmail" placeholder="Contact Number" required>
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
    <button type="submit" name="submit" class="btn btn-primary"><i class="icon-save icon-large" ></i> Register Member</button>
    </div>
    </div>
    </form>
    
    </div>
    </div>
    </div>
  </div>

  <div class="column" style="background-color:;">
    <div class="thumbnail" style="border:2px solid #1982d1;">

     <div class="row">
    <div class="span3 offset1"></div>
    <div class="span8">
    <br>
    
    
    
    <div class="alert alert-danger" id="navbar1"><b><i class="icon-file" ></i> Please Fill up all the details Below</b></div>
    
    <form class="form-horizontal" style="height: 10%; width: 20%;" method="POST">
     
    <div class="control-group">
    <label class="control-label" for="inputEmail">FirstName</label>
    <div class="controls">
    <input type="text"  name="firstname" id="inputEmail" placeholder="FirstName" autofocus="autofocus" required>
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="inputEmail">LastName</label>
    <div class="controls">
    <input type="text" class="span4" name="lastname" id="inputEmail" placeholder="LastName" required>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputEmail">Designation</label>
    <div class="controls">
    <input type="text" class="span4" name="designation" id="inputEmail" placeholder="LastName" required >
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputEmail">Age</label>
    <div class="controls">
    <input type="text" class="span1" name="age" id="inputEmail" placeholder="Age" required>
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
    <input type="text" class="span4" name="email" id="inputEmail" placeholder="Email Address" required>
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="inputEmail">Contact Number</label>
    <div class="controls">
    <input type="text" class="span4" name="c_number" id="inputEmail" placeholder="Contact Number" required>
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
    <button type="submit" name="submit" class="btn btn-primary"><i class="icon-save icon-large" ></i> Register Member</button>
    </div>
    </div>
    </div>
    </form>
    </div>
</div>
</div>
</div>
</div>
</div>
    </div>
    </div>
    </div>
</div>

    
    <?php
    if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $designation=$_POST['designation'];
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
$dbname = "cvinfo";
// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
$sql = "insert into reg_member (firstname, lastname, age, address, gender, email, c_number, captcha_code,designation, date)
    values('$firstname', '$lastname', '$age', '$address', '$gender', '$email', '$c_number', '$captcha_code','$designation', NOW())";
if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
} 

} 
    ?>
    <script type="text/javascript">
    alert('You are Successfully Register Thank You');
    window.location="createcv.php";
    </script>

    <?php
    }
    ?>
    
    
</div>
</body>
</html>