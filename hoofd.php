<html>
<head>
</head>
<body>
<p>  </p>

<form action="savemessage.php" method="post">
title: <input type="text" name="blogtitle"><br>
messege:  <textarea name="comment"></textarea>
<input type="submit">

<div class="bericht">
  <?php
include 'readmessage.php';
   ?>
</div>

</form>
</body>
</html>
