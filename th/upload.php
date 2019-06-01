<!DOCTYPE html>
<html>
<head>

<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 150%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("mobile2.png");

  min-height: 75%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: center;
  margin: 0%;
  max-width: 100%;
  padding: 15%;
  background-color: none;
}

/* Full-width input fields */
input[type=text], input[type=number], input[type=email], input[type=file] {
  width: 100%;
  padding: 20px;
  font-size: 75%;
  margin: 5px 0 5px 0;
  border: none;
  background: #f1f1f1;
  opacity: 0.75;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  font-weight: bold;
  color: white;
  font-size: 100%;
  padding: 25px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.75;
}

.btn:hover {
  opacity: 1;
}
</style>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cc3f179c78f7000120f07d6&product=sop' async='async'></script>

</head>
<body>
    
<center><p><font color="black"><font size="150%">Welcome <?php echo $_POST["userName"]; ?><br><br>Thank you for joining the Hai Flyers.<br>Powered by On Running</font></p>

<img src="mobile2.jpeg" alt="scan" height="100%" width="100%"></center>

</body>
</html>

<?php

//write to csv
$logName = "members.csv";

$log = fopen("files/members.csv", 'a') or die("Unable to open file!");

$cells[] = array(date("jmY"), $_POST['userID'], $_POST['userName']);

foreach($cells as $cell){
	fputcsv($log,$cell);
}

fclose($log);
?>
