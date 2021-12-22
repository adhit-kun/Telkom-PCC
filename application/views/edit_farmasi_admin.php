<html>
<title>Edit Farmasi - Admin</title>
</head>
<body>
<center>
<h1>Edit obat Admin</h1>
<form action="<?php echo base_url()?>front/edit_farmasi_admin_act" method="post">
    <input type="hidden" value="<?php echo $id_farmasi ?>" name="id_farmasi">    
    <br>
    <label> Nama </label>
    <input type="text" value="<?php echo $nama ?>" name="nama">
    <br>
    <label> Alamat </label>
    <input type="text" value="<?php echo $alamat ?>" name="alamat">
    <br>
    <label> Kota </label>
    <input type="text" value="<?php echo $kota ?>" name="kota">
    <br>
    <label> Telepon </label>
    <input type="text" value="<?php echo $telepon ?>" name="telepon">
    <br>
    <button type="submit">Edit</button>
</form>
</center>
</body>
</html>