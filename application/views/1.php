<?php
$x=array('class'=>'',
			    'id' =>''); 
echo form_open('halaman/simpan',$x);				
?><table>
			   Idenntitas Alumni <hr>
							<tr><th scope="row"><div align="left">NRP</div></th>
									<td><?php echo form_input('nrp','','class="span4"')?></td>
							</tr>
							<tr><th scope="row"><div align="left">Nama Lengkap</div></th>
								<td> <?php echo form_input('nama', '','class="span4"')?></textarea></td>
							</tr>
							<tr><th scope="row"><div align="left">Nomor Telepon</div></th>
							<td><?php echo form_input('no_telepon', '','class="span4"')?>
							</tr>
							<th scope="row"><div align="left">Email</div></th>
							<td> <?php echo form_input('email','','class="span4"')?>
							<tr>
							</td>
							<tr><th scope="row"><div align="left">Alamat Lengkap (KTP) </div></th>
								<td>  <textarea type="text" name="alamat" value="" class="span5" row="2"></textarea></td>
							</tr>
							<tr><th scope="row"><div align="left">Kota</div></th><td><?php echo form_input('email','','class="span2"')?>&nbsp Propensi <select>
						  <option span="2">1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select></td>
							
							<tr><th scope="row"><div align="left">Kode Pos</div></th>
							<td> <?php echo form_input('kode_pos1','','class="span4"')?></tr>
							<tr><th scope="row"><div align="left">Alamat Menyurat </div></th>
								<td>  <textarea type="text" name="alamat_menyurat" value="" class="span5" row="2"></textarea></td>
							</tr>
							<tr><th scope="row"><div align="left">Kode Pos</div></th>
							<td> <?php echo form_input('Kode_Pos2','','class="span4"')?></tr>
							<tr><th scope="row"><div align="left">Program Studi</div></th>
							<td><?php echo form_radio('S1','S1')?>S1 &nbsp<?php echo form_radio('D3','D3')?>D3 </tr>
							<tr><th scope="row"><div align="left">Tahun Wisuda</div></th>
							<td> <?php echo form_input('Kode_Pos2','','class="span4"')?></tr>
							<tr><th scope="row"><div align="left">Status Pekerjaan </div></th>
							<td><?php echo form_radio('S','s')?>Sudah Bekerja &nbsp<?php echo form_radio('b','b')?>Belum Bekerja </tr>
											  
         	</table>
	<hr> Mencari Pekerjaan
	<hr>
						<table>
						<tr><td>Mulai Mencari Pekerjaan :<td></tr>
						<tr><td><?php echo form_radio('Sebelum Lulus','SebelumLulus')?>Sebelum Lulus </td></tr> <tr><td><?php echo form_radio('Sesudah Lulus','SesudahLulus')?>Sesudah Lulus </td></tr>
						<tr><td><?php echo form_radio('tidakmencari','tidakmencari')?>Saya tidak pernah mencari kerja </td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td>Berapa bulan setelah lulus anda mendapatkan perkerjaan ?</td></tr>
						<tr><td><?php echo form_radio('S1','S1')?>< 6 bulan </td></tr> <tr><td><?php echo form_radio('D3','D3')?>> 6 bulan </td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td> Alasan Mendapatkan Pekerjaan Lebih Dari 6 Bulan</td></tr>
						<tr><td><textarea type="text" name="alasanlebihdari6bulan" value="" class="span6" row="4"></textarea></td></tr>
						<td><td><td><label> <?php echo form_submit('mysubmit', 'Simpan','class="btn"')?>
								</label></td>	
						</table>
						</table>
	 </form>