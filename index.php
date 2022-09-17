<html>
<head>
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="button.css">
	<style>
	button{
		
		  border: 4px;
  color: black;
  padding: 30px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  font-family: "Lucida Console", Courier, monospace;
		border-radius: 12px;
	}
	tr{
		text-align:center;
	}
	body
	{
		text-align:left;
	}
		body{
		background-image:url("b8.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	<style>
.button {
  border: none;
  color: black;
  padding: 30px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {color:white; background-color: black; border: 5px solid #000;} 
.button2 {color:white; background-color: black; border: 5px solid #000;} 
</style>
</head>
<body >
<h1 class="alert alert-success rounded-0"><small class="float-right text-muted" style="font-size: 34pt;color:white"><kbd>Presented By : Aditya Sikhwal</kbd></small></h1>
<br>
	<div id="header">
       <br>
	   <br>
	   <br>
	   <br>
	   <br>
       <h2 style=" font-family:courier new; font-size: 68px;color:yellow;"> SPARKS BANKING SYSTEM </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="button1" type="button" href="getdetail.php">Customer Info</button>
                </a>
                </tr>
				
			   <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="button2" type="button">Transaction Details</button>
               </a>
               
               </tr>
            </table>
    </div>
</body>
</html>