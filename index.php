<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Upload and unzip file in webserver</title>
</head> 

<body>
<div class="box">
<div class="heading">Upload File and Unzip</div>
<div class="msg">
<?php if($myMsg) echo "<p>$myMsg</p>"; ?></div>
<div class="form_field">
<form enctype="multipart/form-data" method="post" action="upload.php">
<label>Upload Zip File: </label> <input type="file" name="zip_file">
<br><br>
<input type="submit" name="submit" value="Upload" class="upload"> <br><br>
</form>
</div>
</div>
</body>
</html>