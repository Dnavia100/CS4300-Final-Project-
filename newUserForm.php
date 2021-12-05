<?php
echo '<div class="form-popup" id="newForm">
<form  method="post" action="createUser.php" class="form-container">
<h1>New User</h1>

<label for="fname"><b>Full Name</b></label>
<input type="text" placeholder="Enter Full Name" id="fname" name="fname" required>

<label for="email"><b>Email Address</b></label>
<input type="text" placeholder="Enter Username" id="email" name="email" required>

<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" id="uname" name="uname" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" id="password" name="password" required>

<button type="submit" class="btn">Submit</button>
<button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
</form>
</div>';
?>