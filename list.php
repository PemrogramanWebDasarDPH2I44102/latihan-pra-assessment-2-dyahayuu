<table>
	<tr>
		<th>Tanggal Datang</th>
		<th>Sasaran</th>
		<th>Penerima</th>
		<th>Isi Paket</th>
		<th>Tanggal Ambil</th>
	</tr>
	<?php 
		require_once("proses.php");
		$result = $data->read();
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td><?php echo $row['tgl_datang']?></td>
						<td><?php echo $row['sasaran']?></td>
						<td><?php echo $row['penerima']?></td>
						<td><?php echo $row['isi_paket']?></td>
						<td><?php echo $row['tgl_ambil']?></td>
					</tr>
				<?php 			
			}
		} else{
			echo "Tidak Ada Data";
		}
 				?>
</table>