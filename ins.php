<?php

    //include "db_connectors.php";

    require "db_connector.php";

	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];


		$execute=mysqli_query($conn,"insert into student (name,email,mobile) values ('$name','$email','$mobile')" );

		if($execute)
		{
			echo "Inserted";
		}

		else
		{
			echo "Try again";
		}
	}

    
    

?>

<br><br>


<form action="" method="POST">
	Name: <input type="text" name="name"><br>
	Email: <input type="email" name="email"><br>
	mobile: <input type="number" name="mobile"><br>
	<input type="submit" name="submit" value="Submit"><br>
</form>








