<form action="proses.php" method="POST">
	<table>
		<tr>
			<td colspan="2" align="center"><h2>Table Paket</h2></td>
		</tr>
		<tr>
			<td>Tanggal Datang</td>
			<td><input type="date" name="tgl_datang"></td>
		</tr>
		<tr>
			<td>Sasaran</td>
			<td><select name="sasaran">
				<option value="Tatang">Tatang</option>
				<option value="Yayat">Yayat</option>
				<option value="Maman">Maman</option>
			</select></td>
		</tr>
		<tr>
			<td>Penerima</td>
			<td><input type="text" name="penerima"></td>
		</tr>
		<tr>
			<td>Isi Paket</td>
			<td><input type="text" name="isi_paket"></td>
		</tr>
		<tr>
			<td>Tanggal Ambil</td>
			<td><input type="date" name="tgl_ambil"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>