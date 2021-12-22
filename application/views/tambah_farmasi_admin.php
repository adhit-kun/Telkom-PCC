<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Farmasi - Admin</title>
</head>
<body>
<center>
<h1>Tambah Farmasi Admin</h1>
<form action="<?php echo base_url()?>front/tambah_farmasi_admin_act" method="post">
    <br>
    <label> ID Farmasi </label>
    <input type="text" name="id_farmasi">    
    <br>
    <label> Nama </label>
    <input type="text" name="nama">
    <br>
    <label> Alamat </label>
    <input type="text" name="alamat">
    <br>
    <label> Kota </label>
    <input type="text" name="kota">
    <br>
    <label> Telepon </label>
    <input type="text" name="telepon">
    <br>
    <button type="submit">Tambah</button>
</form>
</center>
</body>
</html>