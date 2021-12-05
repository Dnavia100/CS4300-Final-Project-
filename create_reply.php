<?php
session_start();
$cid=$_GET["cid"];
?>

<form action="reply_parse.php" method="post">

<p>Post Content</p>
<textarea name="reply_content" rows="5" cols="75" id="reply_content"  required></textarea>
<br><br>

<input type="hidden" name="cid" value="<?php echo $cid;?>">
<input type="submit" name="reply_submit" value="Create Reply">

</form>