<?php echo '<button class="login" onclick="openForm()">Login</button>';

echo '<a href="logout.php">Logout</a>';

echo '<div class="form-popup" id="myForm">
<form  method="post" action="processLogin.php" class="form-container">
<h1>Login</h1>

<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" id="uname" name="uname" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" id="password" name="password" required>

<button type="submit" class="btn">Login</button>
<button type="button" class="btn" onclick="newUserForm()">Create Account</button>
<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</form>
</div>';
?>