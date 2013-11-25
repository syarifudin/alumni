<?php
$x=array('class'=>'',
			    'id' =>''); 
echo form_open('halaman/simpan',$x);				
?>
Bagaimana Anda Mencari Pekerjaan ? <hr>
						<table>
						<tr><td width="416"><?php echo form_checkbox('newsletter', 'accept');?>Melalui Iklan Koran/Majalah, Brosur.  </td>
						</tr>
						<tr><td><?php echo form_checkbox('Sesudah Lulus','SesudahLulus')?>Melamar keperusahaan tanpa mengetahui lowongan yang ada. </td></tr>
						<tr><td><?php echo form_checkbox('newsletter', 'accept');?>Pergi ke bursa kerja </td></tr>
						<tr><td><?php echo form_checkbox('newsletter', 'accept');?>Mencari lewat internet/iklan online/milis</td></tr>
						<tr><td><?php echo form_checkbox('Sesudah Lulus','SesudahLulus')?>Dihubungi oleh perusahaan </td></tr>
						<tr><td><?php echo form_checkbox('newsletter', 'accept');?>Menghubungi Kemenakertrans </td></tr>
						<tr><td><?php echo form_checkbox('newsletter', 'accept');?>Menghubungi agen tenaga kerja komersial/swasta</td></tr>
						<tr><td><?php echo form_checkbox('Sesudah Lulus','SesudahLulus')?>Memperoleh informasi dari pusat/kantor pengembangan  karir</td></tr>
						<tr><td><?php echo form_checkbox('newsletter', 'accept');?>Menghubungi kantor kemahasiswaan/hubungi alumni</td></tr>
						<tr><td><?php echo form_checkbox('newsletter', 'accept');?>Membangun jejaring (network) sejak masih kuliah </td></tr>
						<tr><td><?php echo form_checkbox('Sesudah Lulus','SesudahLulus')?>Memabangun bisnis sendiri</td></tr>
						<tr><td><?php echo form_checkbox('newsletter', 'accept');?>Melalui penempatan kerja atau magang </td></tr>
						<tr><td><?php echo form_checkbox('S1','S1')?>Bekerja ditempat yang sama dengan tempat kerja semasa kuliah</td></tr>
						<tr><td><?php echo form_checkbox('D3','D3')?>Lainnya </td></tr>
						<tr><td><textarea type="text" name="alasan" value="" class="span5" row="2"></textarea></td></tr>
						
						
							</table>
							<hr>
							<table>
							<label>Berapa jumlah perusahaan yang telah anda lamar (melalui email)?</label>
							<td> <?php echo form_input('Kode_Pos2','','class="span4"')?></tr>
							<tr><td><label>Berapa jumlah perusahaan yang merespon ?</label></td></tr>
							<td><?php echo form_input('Kode_Pos2','','class="span4"')?></td>
							</table>
							<hr>
							<label>Status Pekerjaan</label>
							<table>
							<label>apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</label>
							<?php echo form_radio('S1','S1')?>ya &nbsp<?php echo form_radio('D3','D3')?>tidak 
							<label>Nama tempat kerja</label> <?php echo form_input('kode_pos1','','class="span4"')?>
							<label>Alamat Tempat Kerja</label><textarea type="text" name="alamat_menyurat" value="" class="span5" row="2"></textarea>
							<label>Kota</label> <?php echo form_input('kode_pos1','','class="span4"')?>
							<label>Propensi</label> <?php echo form_input('kode_pos1','','class="span4"')?>
							<label>Cakupan</label> <textarea type="text" name="alamat_menyurat" value="" class="span5" row="2"></textarea>
							<label>Jabatan</label> <?php echo form_input('jabatan','','class="span4"')?>
							<label>Pekerjaan anda dibidang IT?</label>
							<?php echo form_radio('ya','ya')?>ya &nbsp<?php echo form_radio('tidak','tidak')?>tidak 
						
							<td></td><tr> <td><label></label></td></tr>	
					</table>
					<?php echo form_submit('mysubmit', 'Simpan','class="btn"')?>
	                </form>
	                