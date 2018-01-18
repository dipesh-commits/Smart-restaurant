<?php
include 'head.php';
require_once 'conn.php';
?>

<h1 class="text-center text-secondary"><b>Welcome to Smart Restaurant</b></h1>

<div class="text-center">
	<h2>Choose your table number</h2>
	<br><hr>
	<div id="tableno" class="form-group"> 
		<form action="index.php" method="POST">
		<input class="form-control" type="radio" name="table" value="Table1">Table no. 1<br>
		<input class="form-control" type="radio" name="table" value="Table2">Table no .2<br>
		<input class="form-control" type="radio" name="table" value="Table3">Table no .3<br>
		<input class="form-control" type="radio" name="table" value="Table4">Table no .4<br>
	
	<button type="submit" class="btn btn-default btn-success" id="choosetable">Choose table</button><br><hr>

		</form>
		<a href="foods.php" class="btn btn-default btn-lg" id="choosemenu">Click here for menu</a>
	</div>
</div>



<style>
body{
	background-image: url(images/background.jpg);
}

h1{
	font-family: Georgia;
}

#tableno{
	font-family: Roberto;
	font-size: 30px;
	font-weight: italic;
}
</style>


<?php

$tableno=(isset($_POST['table'])?$_POST['table']:'');
if(isset($_POST)){
	if(empty($_POST['table'])){
		echo'<script>alert("Please choose any one table")</script>';
	}else{
	$query="INSERT INTO tables(table_no) VALUES('$tableno')";
	$run=$conn->query($query);
}
}
?>

<?php include 'footer.php';
?>



				

							





