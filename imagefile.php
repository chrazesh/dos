<!-- start image code line here  -->
<?php

/* Get the name of the uploaded file */
$filename = $_FILES['file']['name'];

/* Choose where to save the uploaded file */
$location = "image_upload/profilePicture/" . $filename;

echo $location;
/* Save the uploaded file to the local filesystem */
if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
  echo "<script> alert('image uploaded'); </script>";
  return true;
} else {
  echo "<script> alert('image not uploaded'); </script>";
  return false;

}

?>
<!-- end image code line here  -->