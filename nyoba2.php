
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="kirim">KIRIM</button>
</form>



<?php	
if(isset($_POST['kirim'])){

    $file=$_FILES['file']['name'];
    $files=$_FILES['file']['tmp_name'];
    move_uploaded_file($files,"assets/images/".$file);

?>
<td>
    <img src="assets/images/<?= $file?>">
</td>

<?php	
}
?>