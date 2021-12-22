<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pegawai</title>
</head>
<body>

<center>
<h1>ADMIN</h1>
<br>
<h1>persediaan Obat</h1>
<a href="<?php echo base_url()?>front"> Kembali</a>
<a href="<?php echo base_url()?>front/tambah_obat_admin"> Tambah Obat </a>
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
        <a href="<?php echo site_url('front/edit_obat_admin/'.$r->id_obat) ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-light">edit</button>
        <br>
        <a href="<?php echo site_url('front/hapus_obat_admin/'.$r->id_obat) ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-light">hapus</button>
        </td>
        </tr>
        <?php endforeach ?>
    
    </tbody> 
    </table>

    <br>
    <br>
    <br>

    <h1>Farmasi</h1>
<a href="<?php echo base_url()?>front/tambah_farmasi_admin"> Tambah Farmasi </a>
<table border="1">
    <thead>
        <tr>
        <th>ID Farmasi</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Telepon</th>
        </tr>
    </thead>   
    <tbody>
    
        <?php foreach ($farmasi as $r): ?>
            <tr>
        <td><?php echo $r->id_farmasi ?></td>
        <td><?php echo $r->nama ?></td>
        <td><?php echo $r->alamat ?></td>
        <td><?php echo $r->kota ?></td>
        <td><?php echo $r->telepon ?></td>
        <td>
        <a href="<?php echo site_url('front/edit_farmasi_admin/'.$r->id_farmasi) ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-light">edit</button>
        <br>
        <a href="<?php echo site_url('front/hapus_farmasi_admin/'.$r->id_farmasi) ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-light">hapus</button>
        </td>
        </tr>
        <?php endforeach ?>
    
    </tbody> 
    </table>


</center>
</body>
</html>