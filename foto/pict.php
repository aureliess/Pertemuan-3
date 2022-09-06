<!DOCTYPE html>
<html>
    <head>
        <title> Upload Foto </title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="kirim" name="submit">
  </form>
  <?php
    if (isset($_POST['submit'])){
      $img_tmp_name = $_FILES['file']['tmp_name'];
      $img_size = $_FILES['file']['size'];
      $name = basename($_FILES["file"]["name"]);

      $file_path = 'img/'.$name;


      

      move_uploaded_file($img_tmp_name, $file_path);
    }
  ?>

  <img src="<?php echo "./img/".$name ?>">