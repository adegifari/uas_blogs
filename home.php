
<h1>BLOG KU</h1>
<?php
	$addonq = '';
	if(get("q")!=""){ $addonq = " WHERE nama LIKE '%". get('q')."%'"; }
	$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq.
	" ORDER BY id ASC");
	$hasil->execute();
	$data = $hasil->fetchAll();
?>
<?php
	$i = 1;
	foreach ($data as $key) {
?>
<tbody>
	<tr>
		<td><h2><?php echo $key['judul'];?></h2><br><?php 
		if(!$key['penulis'] == ''){
			echo 'Ditulis oleh '.$key['penulis'];
		}
		else{
			echo 'Error !, Silahkan check kembali data yang diinput !';
		}
		?>
		</td>
	</tr>
	<tr>
	</tr>
	<td><p><?php echo $key['konten'];?></p><hr></td>
</tbody>
<h2>
<?php
	$i++;
}
?>
<h5><p>&copy; Ade Ahmad Gifari</p></h5>
