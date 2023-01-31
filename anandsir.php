<!-- start image code line here  -->
<?php

/* Get the name of the uploaded file */
$filename = $_FILES['file']['name'];

/* Choose where to save the uploaded file */
$location = "../img/banners/" . $filename;

echo $location;
/* Save the uploaded file to the local filesystem */
if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
  return true;
} else {
  return false;

}

?>
<!-- end image code line here  -->