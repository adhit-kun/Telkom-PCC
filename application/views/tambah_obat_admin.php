<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat - Admin</title>
</head>
<body>
<form action="<?php echo base_url() ?>front/tambah_obat_act" method="post">
    <label>ID Obat</label>
    <input type="text" name="id_obat">
    <br>
    <label> Kategori </label>
    <input type="text" name="kategori">
    <br>
    <label> Nama Obat </label>
    <input type="text" name="nama_obat">
    <br>
    <label> Harga </label>
    <input type="text" name="harga">
    <br>
    <label> Stok </label>
    <input type="text" name="stok">
    <br>
    <label> farmasi </label>
    <input type="text" name="farmasi">
    <br>
    <button type="submit">Tambah</button>
</form>
    
</body>
</html>