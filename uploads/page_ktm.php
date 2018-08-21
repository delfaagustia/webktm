<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
 
  <meta charset="utf-8">
  <title>Web Buat KTM UNP</title>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  
 
  <link rel="stylesheet" href="font.css">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

 
   <link href='http://fontsforweb.com/font/getcss?id=7550&apikey=ce1e28a0b546755b984ca52bed35bdfe' rel='stylesheet' type='text/css'>


</head>


<style>
body  {
    

}

#nama {
    position: absolute;
    font-weight: bold;
    top: 242px;
    left: 117px;
    font-size: 25px;
    font-family: 'myriadpro';
    text-transform: uppercase;
}
#pasfoto{
    position: absolute;
    top: 314px;
    left: 590px;
    size: 100%;
}

#nim {
    position: absolute;
    font-weight: bold;
    top: 282px;
    left: 117px;
    font-size: 25px;
    font-family: 'myriadpro';
    text-transform: uppercase;
}

#prodi {
    position: absolute;
    font-weight: bold;
    top: 322px;
    left: 117px;
    font-size: 25px;
    font-family: 'myriadpro';
    text-transform: uppercase;
}
#valid {
    position: absolute;
    font-weight: bold;
    top: 434px;
    left: 350px;
    font-size: 25px;
    font-family: 'myriadpro';
    text-transform: uppercase;
}

#gaje {
    position: absolute;
    font-weight: bold;
    top: 490px;
    left: 117px;
    font-size: 25px;
    font-family: 'myriadpro';
}
.rotate90 {
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
}

    h1 {
      font-family: 'myriadpro';
    }

</style>

<script type="text/javascript">
 window.onload = function() { window.print(); }
</script>



<body style="background-image: url('http://localhost/webktm/KTMWEB.jpg');background-repeat: no-repeat; background-position: 100px 100px; background-size: 700px;" >
<!--untuk letakkan data kedalam ktm-->
  <div class = "row" >
    <h2 class="fontsforweb_myriadpro" id = "nama" style="font-size: 33px"><?php echo strtoupper($_POST['nama']); ?></h2>
    <h2 class="fontsforweb_myriadpro" id = "nim" style="font-size: 33px"><?php echo strtoupper($_POST['NIM']); ?> </h2>
    <h2 class="fontsforweb_myriadpro" id = "prodi" style="font-size: 33px"><?php echo strtoupper($_POST['PRODI']); ?> (<?php echo $_POST['program']; ?>)</h2>
    <h2 class="fontsforweb_myriadpro" id = "valid" style="font-size: 33px"><?php echo $_POST['VALID']; ?> </h2>
    <h2 class="fontsforweb_myriadpro" id = "gaje" style="font-size: 33px"><?php echo rand(1000,9999); echo " "; echo rand(1000,9999);echo " "; echo rand(1000,9999); echo " "; echo rand(1000,9999) ?></h2>

<!--upload file foto mahasiswa ke folder uplaod-->
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //print_r($check);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 2;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!--letakkan foto tadi ke dalam gambar ktm-->
    <img  id = "pasfoto" src="<?php echo 'uploads/'.$_FILES["fileToUpload"]["name"]; ?>" height="212" width="180">
  </div>

</body>
</html>


