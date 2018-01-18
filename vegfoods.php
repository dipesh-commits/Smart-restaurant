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
 			<td><input type="checkbox" name="food[]" value="roti">Roti</td>
 			<td><h3>Rs.25</h3></td>
 		</tr>

 		<tr>
 			<td>2.</td>
 			<td><input type="checkbox" name="food[]" value="naan">Naan</td>
 			<td><h3>Rs.30</h3></td>
 		</tr>

 		<tr>
 			<td>3.</td>
 			<td><input type="checkbox" name="food[]" value="chowmein">Chowmein</td>
 			<td><h3>Rs.80</h3></td>
 		</tr>

 		<tr>
 			<td>4.</td>
 			<td><input type="checkbox" name="food[]" value="veg momo">Veg MOMO</td>
 			<td><h3>Rs.90</h3></td>
 		</tr>

 		<tr>
 			<td>5.</td>
 			<td><input type="checkbox" name="food[]" value="french fry">French Fry</td>
 			<td><h3>Rs.100</h3></td>
 		</tr>

 		<tr>
 			<td>6.</td>
 			<td><input type="checkbox" name="food[]" value="dal fry">Dal Fry</td>
 			<td><h3>Rs.140</h3></td>
 		</tr>

 		<tr>
 			<td>7.</td>
 			<td><input type="checkbox" name="food[]" value="mix curry">Mix Curry</td>
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
	$checkbox1=$_POST['food'];
	$chk="";
	foreach($checkbox1 as $chk1){
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
