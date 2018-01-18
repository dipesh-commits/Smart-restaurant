<?php
include 'head.php';
require_once 'conn.php';
 ?>

 <h2 class="text-center">Choose the food you want to order</h2>


<form action="vegfoods.php" method="POST">
 <table class="table table-bordered table-hover" id="vegfoods">
 	<thead class="bg-primary">
 		<tr>
 	    <th>ID</th>
 		<th>Foods</th>
 		<th>Price</th>
 	</tr>
 	</thead>

 	<tbody>
 		<tr>
 			<td>1.</td>
 			<td><input type="checkbox" name="food[]" value="tea">Tea</td>
 			<td><h3>Rs.25</h3></td>
 		</tr>

 		<tr>
 			<td>2.</td>
 			<td><input type="checkbox" name="food[]" value="coffee">Coffee</td>
 			<td><h3>Rs.50</h3></td>
 		</tr>

 		<tr>
 			<td>3.</td>
 			<td><input type="checkbox" name="food[]" value="sprite">Sprite</td>
 			<td><h3>Rs.40</h3></td>
 		</tr>

 		<tr>
 			<td>4.</td>
 			<td><input type="checkbox" name="food[]" value="fanta">Fanta</td>
 			<td><h3>Rs.40</h3></td>
 		</tr>

 		<tr>
 			<td>5.</td>
 			<td><input type="checkbox" name="food[]" value="dew">Mountain Dew</td>
 			<td><h3>Rs.45</h3></td>
 		</tr>

 		<tr>
 			<td>6.</td>
 			<td><input type="checkbox" name="food[]" value="Tuborg">Tuborg</td>
 			<td><h3>Rs.140</h3></td>
 		</tr>

 		<tr>
 			<td>7.</td>
 			<td><input type="checkbox" name="food[]" value="Vodka">Vodka</td>
 			<td><h3>Rs.200</h3></td>
 		</tr>

 		

 	</tbody>


 </table> 

<div class="col-md-12 text-center">
 <button type="submit" class="btn btn-success btn-lg" name="submit">Order Now</button><br><br>
</div>

</form>

<?php

if (isset($_POST['submit'])) {
	$checkbox=$_POST['food'];
	$chk="";
	foreach($checkbox as $chk1){
 		$chk.=$chk1.",";
	}
	$fetch="INSERT INTO eat(foods) VALUES('$chk')";
	$run=$conn->query($fetch);

	if($run==1){
		echo '<script>alert("Thank you for your order")</script>';
	}
	else{
		echo'<script>alert("Please order the food")</script>';
	}
}
 ?>

 <style>
 body{
 	background-image: url(images/background.jpg);
 }

 #vegfoods{
 	font-family: Georgia;
 	font-size: 20px;
 	font-weight:bold;
 }
</style>

<?php include 'footer.php';
?>
