<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Buat KTM UNP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>



<style type="text/css">
    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1;
    }
</style>


<body style=" width: 100%">
  
  <div class="row">
    <nav class="navbar navbar-expand-md fixed-top" style="background: #03263A; padding-top: 15px; padding-bottom: 15px">
      <a class="navbar-brand" style = "color: #F9F4F5" href="#">UNP</a>
      
    </nav>
  </div>

<!--formulir data mahasiswa-->  
  <div class="row" style="margin-top:100px;">
    <div class="container" style="width: 50%">
      <h3>Formulir Pembuatan KTM Mahasiswa UNP</h3>
      
        <br>
        <form method="post" action="uploads/page_ktm.php" enctype="multipart/form-data">  
        <div class="form-group">
          <label><b>Nama Lengkap<b></label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda (sesuai KTP) ex. BUDI SETIA" name="nama">
        </div>
        
        <div class="form-group">
          <label><b>Nomor Mahasiswa<b></label>
          <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM Anda ex. 16 / 00603" name="NIM">
        </div>

        <div class="form-group">
          <label><b>Program Studi<b></label>
          <input type="text" class="form-control" id="prodi" placeholder="Masukkan Prodi Anda ex. ILMU PENDIDIKAN" name="PRODI">
        </div>

        <div class="form-group">
          <label><b>Valid Thru<b></label>
          <p style="font-size: 11px; color: red;font-style: italic;"> *isilah valid thru dengan angka bulan dan tahun masuk ditambah dengan masa studi normal anda</p>
          <p style="font-size: 11px; font-style: italic;color: red;"> ex. mahasiswa S1 tahun 2016, maka valid thru nya 06 / 2020 (ditambah 4 tahun masa studi normal)</p>
          <input type="text" class="form-control" id="validthru" placeholder="Masukkan bulan dan tahun ex. 11 / 14" name="VALID">
        </div>
        
        <div>
          <label><b>Program Sarjana<b></label>
          <select name="program" class="custom-select custom-select mb-3">
            <option selected>-Pilih Program Sarjana Anda-</option>
            <option value="DII">D-II</option>
            <option value="DIII">D-III</option>
            <option value="DIV">D-IV</option>
            <option value="S1">S-1</option>
            <option value="S2">S-2</option>
            <option value="S3">S-3</option>
          </select>
        </div>
        
        <div class="form-group">
          <label><b>Pas Foto<b></label><br>
          <input type="file" name="fileToUpload" id="fileToUpload">
          <p style="font-size: 10px; color: red; font-style: italic;"> *format foto jpg, png, max size 500 KB</p>
        </div>


<!--keterangan sebelum submit-->        
        <br><p style="font-style: bold; font-size: 13px; font-weight: 100;"> Pastikan data yang anda masukkan sudah benar!</p>
        <p style="font-size: 13px; font-weight: 100;"> Jika background KTM anda tidak muncul, pastikan anda sudah menceklis option "Background graphics" dihalaman tersebut.</p>
        <input type="submit" class="btn btn-primary" value="Upload Image" name="submit"></input>
      </form>
    </div>
  </div>


<!--footer-->
  <div class = "row" style="background: #03263A; padding: 10px; margin-top: 60px; color: #F9F4F5">
    <div class="container">
      <h5 style="text-align: center;"> &copy 2018 Universitas Negeri Padang </h5>
      <h6 style="text-align: center;"> UPT. PUSAT KOMPUTER</h6>
      <h6 style="text-align: center;"> Gedung Rektorat Lama Lt. 1 (Pojok Kanan) </h6>
      <h6 style="text-align: center;"> e-mail : puskom@unp.ac.id | Telp : 0751-67363 </h6>
    </div>
  </div>


</body>
</html>


