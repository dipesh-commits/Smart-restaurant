<?php
include 'head.php';
require_once 'conn.php';
?>

<h2 class="text-center">Foods That Are Ordered</h2>

<?php
$fetch_table= "SELECT * FROM tables";
$run= $conn->query($fetch_table);

?>

<?php
$fetch_foods= "SELECT * FROM eat";
$run_foods=$conn->query($fetch_foods);
?>

<form action="admin.php" method="POST">
 <button type="submit" name="submit" class="btn btn-danger btn-lg pull-right">Delete</button>
  <table class="table table-bordered">
	<thead>
		<tr>
		<th>#</th>
		<th>Table</th>
	</tr>
	</thead>
	<tbody>
		<?php while($table=mysqli_fetch_assoc($run)): ?>
		<tr>
			<td><h2 class="glyphicon glyphicon-glass"></td>
			<td><b>Order From <?=$table['table_no'];?></b></td>
		</tr>

	<?php endwhile; ?>
	</tbody>
 </table><br>

 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>#</th>
 			<th>Foods</th>
 		</tr>
 	</thead>

 	<tbody>
 		<?php while($foods=mysqli_fetch_assoc($run_foods)): ?>
 			<tr>
 				<td><?=$foods['id'];?></td>
 				<td><?=$foods['foods'];?></td>
 			</tr>
 		<?php endwhile; ?>
 		
 	</tbody>
 </table>
</form>


<?php
	if(isset($_POST['submit'])){
		$delete="DELETE FROM tables";
		$conn->query($delete);

	}
?>

<?php
if(isset($_POST['submit'])){
	$delete_food="DELETE FROM eat";
	$conn->query($delete_food);
}
?>
<style>
 body{
 	background-image: url(images/admin.jpg);
 }
	</style>

<?php include 'footer.php';?>