<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="phpbasic.php" method="post" enctype="multipart/form-data">
        <label>Filename: </label>
        <input type="file" name="upload" id="file"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>    
</body>
</html>

<?php
if(isset($_FILES['upload']["name"])) 
{
    echo "Keterangan File: <br>";
    echo "Upload: ". $_FILES['upload']["name"] . "<br>";
    echo "Type: ". $_FILES['upload']["type"] . "<br>";
    echo "Size: ". ($_FILES['upload']["size"] / 1024) . " Kb<br>";
    echo "Stored in: ". $_FILES['upload']["tmp_name"]. "<br>";

    $uploadfile = "upload/" . $_FILES['upload']["name"];
    if(move_uploaded_file($_FILES['upload']["tmp_name"], $uploadfile))
        echo "<br> Status: sukses upload";
    else
        echo "<br> Status: gagal upload";
}
else
    echo "masih kosong";
?>