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
 			<td><input type="checkbox" name="food[]" value="chicken momo">Chicken MOMO</td>
 			<td><h3>Rs.120</h3></td>
 		</tr>

 		<tr>
 			<td>2.</td>
 			<td><input type="checkbox" name="food[]" value="chicken chowmein">Chicken Chowmein</td>
 			<td><h3>Rs.110</h3></td>
 		</tr>

 		<tr>
 			<td>3.</td>
 			<td><input type="checkbox" name="food[]" value="grilled chicken">Grilled Chicken</td>
 			<td><h3>Rs.600</h3></td>
 		</tr>

 		<tr>
 			<td>4.</td>
 			<td><input type="checkbox" name="food[]" value="chicken curry">Chicken Curry</td>
 			<td><h3>Rs.300</h3></td>
 		</tr>

 		<tr>
 			<td>5.</td>
 			<td><input type="checkbox" name="food[]" value="sizzler">Sizzler</td>
 			<td><h3>Rs.250</h3></td>
 		</tr>

 		<tr>
 			<td>6.</td>
 			<td><input type="checkbox" name="food[]" value="chicken chilli">Chicken Chilli</td>
 			<td><h3>Rs.220</h3></td>
 		</tr>

 		<tr>
 			<td>7.</td>
 			<td><input type="checkbox" name="food[]" value="pizza">Pizza</td>
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
