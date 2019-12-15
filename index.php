<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
include('connect.php'); ?>
<form action="add.php" method="POST">
Firstname: <input type="text" name="firstname"><span class="error">*</span></br>
Lastname: <input type="text" name="lastname"  ><span class="error">*</span></br>
Address: <textarea  type="text" name="address" rows="6" cols="40" required></textarea><span class="error">*</span></br>
Phone: <input type="phone" name="phone" ></br>
BOD: <input type="date" name="dob">
<span class="error">*</span></br>
<input type="submit" value="add">
</form>
<div>
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Bod</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					include('connect.php');
					$query=mysqli_query($conn,"select * from `form`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['dob']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>