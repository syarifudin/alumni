<?php
$x=array('class'=>'',
			    'id' =>''); 
echo form_open('halaman/simpan',$x);				
?>
<table>
Situasi
<hr>
			   Bagaimana anda menggambarkan situasi anda saat ini ? 
							<tr><td><?php echo form_checkbox('S1','S1')?>Saya masih belajar / melajutkan kuliah profesi atau pascasarjana </td></tr>
							<td> <?php echo form_checkbox('D3','D3')?>Saya menikah </tr>
							<td> <?php echo form_checkbox('D3','D3')?>Saya sibuk dengan keluarga dan anak - anak </tr>
							<td> <?php echo form_checkbox('D3','D3')?>Saya sekarang sedang mencari pekerjaan </tr>
							<td> <?php echo form_checkbox('D3','D3')?>Lainnya </tr>
							<td><textarea type="text" name="alamat_menyurat" value="" class="span5" row="2"></textarea></td>			  
         	</table>
			<hr>
			Aktif Mencari Kerja 
			<hr>
			Apakah anda aktif mencari kerja dalam 4 minggu terakhir ?
			<table>
			<tr><td><?php echo form_radio('S1','S1')?>Saya masih belajar / melajutkan kuliah profesi atau pascasarjana </td></tr>
							<td> <?php echo form_radio('D3','D3')?> Tidak </tr>
							<td> <?php echo form_radio('D3','D3')?>Tidak, Tetapi saya menunggu hasil lamaran </tr>
							<td> <?php echo form_radio('D3','D3')?>ya, saya akan mulai bekerja dalam 2 minggu kedepan</tr>
							<td> <?php echo form_radio('D3','D3')?>ya, tapi saya belum pasti akan  bekerja dalam 2 minggu kedepan</tr>
							<td> <?php echo form_radio('D3','D3')?>Lainnya </tr>
							<td><textarea type="text" name="alamat_menyurat" value="" class="span5" row="2"></textarea></td>		
			</table>
			
			<hr>
			Jenis Tempat Kerja
			<hr>
			Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang ?
			<table>
			<tr><td><?php echo form_radio('S1','S1')?>Saya masih belajar / melajutkan kuliah profesi atau pascasarjana </td></tr>
							<td> <?php echo form_radio('D3','D3')?> Instansi Pemerintah(termasuk BUMN)</tr>
							<td> <?php echo form_radio('D3','D3')?>Organisasi non-profit/lembaga swadaya masyarakat </tr>
							<td> <?php echo form_radio('D3','D3')?>Perusahaan Swasta</tr>
							<td> <?php echo form_radio('D3','D3')?>Wiraswasta/perusahaan sendiri</tr>
							<td> <?php echo form_radio('D3','D3')?>Lainnya </tr>
							<td><textarea type="text" name="alamat_menyurat" value="" class="span5" row="2"></textarea></td>	
							<tr><td>Tempat anda bekerja bergerak dibadang apa? </td></tr>			
							<td><textarea type="text" name="alamat_menyurat" value="" class="span5" row="2"></textarea></td>							
			</table>
			<td><td><td><label> <?php echo form_submit('mysubmit', 'Simpan','class="btn"')?>
								</label></td>
			
			
	</form>