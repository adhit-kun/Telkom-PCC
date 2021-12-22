<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit obat - Admin</title>
</head>
<body>
<center>
<h1>Edit obat Admin</h1>
<form action="<?php echo base_url()?>front/edit_obat_admin_act" method="post">
    <input type="hidden" value="<?php echo $id_obat ?>" name="id_obat">    
    <br>
    <label> Kategori </label>
    <input type="text" value="<?php echo $kategori ?>" name="kategori">
    <br>
    <label> Nama Obat </label>
    <input type="text" value="<?php echo $nama_obat ?>" name="nama_obat">
    <br>
    <label> Harga </label>
    <input type="text" value="<?php echo $harga ?>" name="harga">
    <br>
    <label> Stok </label>
    <input type="text" value="<?php echo $stok ?>" name="stok">
    <br>
    <label> farmasi </label>
    <input type="text" value="<?php echo $farmasi ?>" name="farmasi">
    <br>
    <button type="submit">Edit</button>
</form>
</center>
</body>
</html>