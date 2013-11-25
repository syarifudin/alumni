<?php
$x=array('class'=>'form',
			    'id' =>'contactform'); 
echo form_open('halaman/simpan',$x);				
?>
			<table align="center" width="70%" >
			   Rgistrasi Alumni <hr>
							<tr><th scope="row"><div align="left">Nama</div></th>
									<td><?php echo form_input('nama','','class="span4"')?></td>
							</tr>
							<tr><th scope="row"><div align="left">Tanggal Lahir</div></th>
								<td> <?php echo form_input('tgl_lahir','11/06/1991','id="datepicker"')?></textarea></td>
							</tr>
							<tr><th scope="row"><div align="left">Fakultas</div></th>
								<td> <select >
									  <option>Teknik Informatika</option>
									  <option>Manajemen Informatika</option>
									  </select>    </td>
	
							</tr>
							<tr><th scope="row"><div align="left">Tahun Masuk</div></th>
							<td><label> <?php echo form_input('tahun', '','class="span4"')?>
							</label></td>
							<tr>
								<th scope="row"><div align="left">Email</div></th>
							<td> <?php echo form_input('email','','class="span4"')?>
								</td>
						  </tr>
								<td><label> <?php echo form_submit('mysubmit', 'Simpan','class="btn"')?>
								</label></td>
						  </tr>
           </table>
		 </div>
       </label>
	 </form>
	 
	 
   <link rel="stylesheet" href="<?php echo base_url();?>jquery/themes/base/jquery-ui.css" />
  <script src="<?php echo base_url();?>jquery/jquery-1.9.1.js"></script>
  <script src="<?php echo base_url();?>jquery/ui/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
