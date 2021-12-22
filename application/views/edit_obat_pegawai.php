<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit pegawai stok obat</title>
</head>
<body>
<center>
<h1>Pegawai - Edit Stok</h1>
<form action="<?php echo base_url()?>front/edit_obat_pegawai_act" method="post">
    <label> ID Obat </label>
    <input type="hidden" value="<?php echo $id_obat ?>" name="id_obat">
    <p> <?php print $id_obat ?> </p>
    <br>
    <label> Stok</label>
    <input type="text" value="<?php echo $stok ?>" name="stok">
    <button type="submit">Edit</button>
</form>
</center>
</body>
</html>