<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
  .bordered {
   width: 200px;
   height: 100px;
   position: relative;
   /*vertical-align: middle;*/
   /*margin-right: 100px;*/
   margin-top: 100px;
   margin-left: 700px;
    padding: 20px;
    border: 1px dashed green;
    border-style: dashed;
    vertical-align: center;
     border-radius: 8px;
     }

      .bordered1{
   width: 200px;
   height: 100px;
   position: relative;
   /*vertical-align: middle;*/
   /*margin-right: 100px;*/
   margin-top: -141px;
   margin-left: 438px;
    padding: 20px;
    border: 1px dashed green;
    border-style: dashed;
    vertical-align: center;
     border-radius: 8px;
     }

     .bordered2{
   width: 200px;
   height: 100px;
   position: relative;
   /*vertical-align: middle;*/
   /*margin-right: 100px;*/
   margin-top: -141px;
   margin-left: 960px;
    padding: 20px;
    border: 1px dashed green;
    border-style: dashed;
    vertical-align: center;
     border-radius: 8px;
     }

     .bordered3{
   width: 200px;
   height: 100px;
   position: relative;
   /*vertical-align: middle;*/
   /*margin-right: 100px;*/
   margin-top: -141px;
   margin-left: 1217px;
    padding: 20px;
    border: 1px dashed green;
    border-style: dashed;
    vertical-align: center;
     border-radius: 8px;
     }

.headeroption,.footeroption{
			background: #444;
			color: #fff;
			text-align: center;
			padding: 50px;
		}

		button{
			height: 26px;
			width: 118px;
			border-radius: 8px;
			text-align: center;
			background-color: rgba(232, 236, 241, 1);
			/*text-decoration-color: white;*/
		}

  </style>

</head>
<body>
  
<div class="headeroption">
	<h1>Welcome Admin Panel</h2>
</div> 

<div>
	<div align="center" class="bordered">
		<img src="icon/plus.png"> <br>
<button  type="submit" name="submit" class="btn btn-primary"><i class="icon-save icon-large"></i> Create New CV </button>
	</div>	

	<div align="center" class="bordered1">
		<img src="icon/view.png"> <br>
<button type="submit" name="submit" class="btn btn-primary" onclick="myFunction1()"><i class="icon-save icon-large"></i> View CV </button>
</div>

<div align="center" class="bordered2">
		<img src="icon/edit.png"> <br>
<button type="submit" name="submit" class="btn btn-primary" onclick="myFunction()"><i class="icon-save icon-large"></i>Cover Letter </button>
</div>

<div align="center" class="bordered3">
		<img src="icon/video.png"> <br>
<button type="submit" name="submit" class="btn btn-primary"><i class="icon-save icon-large"></i>Upload video </button>
</div>

</div>
			
		<script>
function myFunction() {
  location.replace("coverletter.php")
}

function myFunction1() {
  location.replace("CV/index.html")
}
</script>


</body>
</html>