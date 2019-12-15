<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
include('rise.php'); ?>
<form action="add.php" method="POST">
Firstname: <input type="text" name="firstname"><span class="error">*</span></br>
Lastname: <input type="text" name="lastname"  ><span class="error">*</span></br>

Address: <textarea name="address" rows="6" cols="40" required></textarea><span class="error">*</span></br>
Phone: <input type="phone" name="phone" ></br>
BOD: <input type="date" name="dob">
<span class="error">*</span></br>
Gender: <input type="radio" name="gender" value="male" required>Male
      <input type="radio" name="gender"value="female" required>Female
      <input type="radio" name="gender" value="other" required>Other <span class="error">*</span></br>
Hobbies: <input type="checkbox" name="swimming" value="swimming"> swimming 
      <input type="checkbox" name="Music" value="Music">Music
      <input type="checkbox" name="traveling" value="traveling">Traveling</br>
Do You Have bike:<select required><span class="error">*</span>
   <option>Please select option</option>
  <option value="yes">Yes</option>
  <option value="no">No</option>
</select></br>
<input type="submit" value="add">

</form>
</body>
</html>