<?php 
  if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    
    include "connection.php";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    $value = $_POST['categories'];

    if ($error === 0) {
      if ($img_size > 125000) {
        $em = "Sorry, your file is too large.";
      }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
          $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = 'uploads/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);

          $sql = "INSERT INTO $value(image_url) VALUES('$new_img_name')";
          mysqli_query($con, $sql);
          header("Location: Homepage.php");
        }
      }
    }
  }
?>