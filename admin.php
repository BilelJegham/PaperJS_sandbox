<?php
if($_POST["file"]){
    unlink ( './data2.json');
    $myfile = fopen("./data2.json", "w") or die("Unable to open file!");

    fwrite($myfile, $_POST["file"]);
    fclose($myfile);
}
?>

<!DOCTYPE html>
<html>
    <head>
</head>
<body>
<form method="POST" action="#">
<textarea name="file"  rows="50" cols="50">
<?php echo file_get_contents('./data2.json'); ?>

</textarea>
<input value="Envoyer" type="submit"/>
</form>
</body>
</html>



