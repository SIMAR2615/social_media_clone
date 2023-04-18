<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact form</title>
</head>
<body>
	<style>#box{

 
background-color:#303245;
		margin: auto;
		width: 500px;
		padding: 110px 100px;
        display: -webkit-flex;
        display: -ms-flex;
        flex-direction: column;
        border-radius: 12px;
        	}
        @media(max-width: 1000px ){
            section{
                padding: 125px 30px;

            }
        }

		#data{
			font-size: 20px;
			color:black;
			padding-left: 100px;
			margin: 4px;
			
		}
		td{
			font-size: 16px;
			color: white;
		}
		H1{
			text-align: center;
			align-items: center;
			color: white;
		}
		body {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  overflow-y: hidden;
  
  justify-content: center;
  align-items: center;
  background: #dde5f4;
  height: 100vh;
}
</style>
<div id = "box">
<div class="container">	
	<form action="process_contact.php" method="POST">
		<table>
			<h1 >CONTACT US</h1>
			<tr>

				<td>name:</td>
				<td><input id = "data" type="varchar" name="name_user" required></td>
			</tr>
			<tr>
				<td>contact:</td>
				<td><input  id = "data" type="int" name="CONTACT" required></td>
			</tr>
			<tr>
				<td>your Queries: </td>
				<td><textarea   id = "data" type = "text" name="mytext"  cols="20" rows="10" name="Queries" required></textarea></td>
			</tr>

			<tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
		</table>
		<h3 style=" color:white;"> For more information mail us : Simarjotkaur744@gmail.com </h3>
	</form></div></div>
 
</body>
</html>