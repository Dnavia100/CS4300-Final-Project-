<?php echo '<div class ="login">
<button id="login" onclick="openForm()">Login</button>
</div>';

echo '<div class="form-popup" id="myForm">
<form action="/index.php" class="form-container">
<h1>Login</h1>

<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>

<button type="submit" class="btn">Login</button>
<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</form>
</div>';
?>