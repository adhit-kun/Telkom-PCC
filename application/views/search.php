<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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
			<?php foreach ($obat as $r): ?>
            <td>
            <tr>
                <td><?php echo $r->id_obat ?></td>
                <td><?php echo $r->kategori ?></td>
                <td><?php echo $r->nama_obat ?></td>
                <td><?php echo $r->harga ?></td>
                <td><?php echo $r->stok ?></td>
                <td><?php echo $r->farmasi ?></td>
            </tr>
            </td>
            <?php endforeach ?>
            </tbody>
	</table>
</body>
</html>