<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="button2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.btn{
			cursor:pointer;
			color:black;
			font-size:30px;
			  font-family: "Lucida Console", Courier, monospace;
			  text-align: center;
			  display: inline-block;
			  cursor: pointer;
			  padding:20px;
			  border-radius: 12px;
			  background-color: Transparent; border: 5px solid #000;
			  
		}
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		.nav-li a:hover:not(.active) {
		  background-color: #00ccff;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:30px;
			padding:16px;
		}
		
		td{
			font-size:30px;
			color: black;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
		}
		body{
			background-image:url("bb.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
		}
		.flat-table-1 tr:hover {
		}
		.btn1 {
			background-color:#000;
			border: none;
			color: white;
			border-radius:23px;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn1:hover {
			background-color:#000;
		}
	</style>
</head>
    <body>
	<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><button class="btn1">BACK TO HOME PAGE</button></li>
	</a>
	</ul>
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Amount</th>
				
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<td><?php echo $name?></td>
				<td><?php echo $mail?></td>
				<td><?php echo $amount?></td>
			</tr>

        </table>

        </div>
		<br>
        <br>
		<br>
		<br><br><br><br>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="btn">Transfer To</button>
	</a>
	</div>
	<br>
	<br>


               
    <div class="buttons">
		<a href="ministatement.php">
		<button class="btn">Mini Statement</button>
		</a>
	</div>
               


    </body>
</html>