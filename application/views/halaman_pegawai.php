<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pegawai</title>
</head>
<body>

<center>
<h1>Pegawai</h1>
<nr>
<h1>persediaan</h1>
<a href="<?php echo base_url()?>front"> Kembali</a>
<table border="1">
    <thead>
        <tr>
        <th>ID Obat</th>
        <th>Kategori</th>
        <th>Nama Obat</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Farmasi</th>
        </tr>
    </thead>   
    <tbody>
    
        <?php foreach ($t_obat as $r): ?>
            <tr>
        <td><?php echo $r->id_obat ?></td>
        <td><?php echo $r->kategori ?></td>
        <td><?php echo $r->nama_obat ?></td>
        <td><?php echo $r->harga ?></td>
        <td><?php echo $r->stok ?></td>
        <td><?php echo $r->farmasi ?></td>
        <td>
        <a href="<?php echo site_url('front/edit_obat_pegawai/'.$r->id_obat) ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-light">edit</button>
        </td>
        </tr>
        <?php endforeach ?>
    
    </tbody> 
    </table>

    <br>

    <?php echo form_open('Front/search_obat_pegawai') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?>

</center>
</body>
</html>