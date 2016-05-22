<link rel="stylesheet" href="jquery_ui/jquery-ui.css" />
<script src="jquery_ui/jquery-1.10.2.js"></script>
<script src="jquery_ui/jquery-ui.js"></script>
<script>
$(function() {
    $( "#datepicker" ).datepicker();
  });
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
</script>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Input Customer</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Input Customer</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Input Customer
                          </header>
                          <div class="panel-body">
<?php
if(@$_GET['message']=="gagal"){
?>
<form method="post" action="input_cst.php" class="form-horizontal ">
<div class="form-group">
<label class="col-sm-2 control-label">No Kontrak</label>
<div class="col-sm-10"><input type="text" name="nkontrak" class="form-control" placeholder="No Kontrak" value="<?php echo"$_GET[nkontrak]"; ?>">
<?php if(empty($_GET['nkontrak'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Nama</label>
<div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama" style="width:50%"value="<?php echo"$_GET[nama]"; ?>">
<?php if(empty($_GET['nama'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tempat lahir</label>
<div class="col-sm-10"><input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo"$_GET[tmp_lahir]"; ?>">
<?php if(empty($_GET['tmp_lahir'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tanggal lahir</label>
<div class="col-sm-10"><input type="text" name="tgl_lahir" id="datepicker" placeholder="Tanggal Lahir" class="form-control"value="<?php echo"$_GET[tgl_lahir]"; ?>">
<?php if(empty($_GET['tgl_lahir'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Alamat </label>
<div class="col-sm-10"><input type="text" name="almt" class="form-control" placeholder="Nama" style="width:50%"value="<?php echo"$_GET[almt]"; ?>">
<?php if(empty($_GET['almt'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah</label>
<div class="col-sm-10"><select name="daerah" class="form-control">
<?php if(empty($_GET['daerah'])){ ?>
					<option value="" selected>- Pilih Daerah -</option>
<?php }else{ 
$sql3=mysql_query("select * from daerah where kd_daerah=$_GET[daerah]");
$data3=mysql_fetch_array($sql3);
?>
					<option value="<?php echo"$data3[0]"; ?>" selected><?php echo"$data3[1], $data3[2]"; ?></option>
<?php } ?>
                    <?php
					include"koneksi.php";
						$sql=mysql_query("select * from daerah");
						while($data=mysql_fetch_array($sql)){
							echo"<option value='$data[0]'>$data[1], $data[2]</option>";
						}
					?>
				   </select>
<?php if($_GET['daerah']==""){echo"<font color='red'>Data masih kosong !!!</font>";} ?>                   
                   </div></div>
<?php if($_GET['agama']=="hindu"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Agama </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu" checked>Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha">Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam">Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen">Kristen</label></div>
<?php }else if($_GET['agama']=="buddha"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Agama </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu">Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha" checked>Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam">Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen">Kristen</label></div>
<?php }else if($_GET['agama']=="islam"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Agama </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu">Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha">Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam" checked>Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen">Kristen</label></div>
<?php }else if($_GET['agama']=="kristen"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Agama </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu">Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha">Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam">Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen"checked>Kristen</label></div>
<?php } ?>

<?php if($_GET['status']=="belum menikah"){  ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
<label class="checkbox-inline"><input type="radio" name="status" value="belum menikah" checked>Belum Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="menikah">Menikah</label>
<label class="checkbox-inline"><input type="radio" name="status" value="cerai">Cerai</label></div>
<?php }else if($_GET['status']=="menikah"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
<label class="checkbox-inline"><input type="radio" name="status" value="belum menikah">Belum Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="menikah" checked>Menikah</label>
<label class="checkbox-inline"><input type="radio" name="status" value="cerai">Cerai</label></div>
<?php }else if($_GET['status']=="cerai"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
<label class="checkbox-inline"><input type="radio" name="status" value="belum menikah">Belum Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="menikah">Menikah</label>
<label class="checkbox-inline"><input type="radio" name="status" value="cerai" checked>Cerai</label></div>
<?php } ?>
<?php if($_GET['warganegara']=="wni"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Kewarganegaraan</label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wni" checked>Warga Negra Indonesia </label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wna">Warga Negara Asing </label></div>
<?php }else if($_GET['warganegara']=="wna"){ ?>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Kewarganegaraan</label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wni">Warga Negra Indonesia </label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wna" checked>Warga Negara Asing </label></div>
<?php } ?>

<div class="form-group">
<label class="col-sm-2 control-label">History </label>
<div class="col-sm-10"><textarea name="komen" class="form-control"><?php echo"$_GET[komen]"; ?></textarea>
<?php if(empty($_GET['komen'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Alamat Penagihan</label>
<div class="col-sm-10"><input type="text" name="tmp_tagih" class="form-control" placeholder="Tempat Penagihan" style="width:50%"value="<?php echo"$_GET[tmp_tagih]"; ?>">
<?php if(empty($_GET['tmp_tagih'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah Penagihan</label>
<div class="col-sm-10"><select name="daerah_tagih" class="form-control">
<?php if(empty($_GET['daerah_tagih'])){ ?>
					<option value="" selected>- Pilih Daerah -</option>
                    <?php }else{ 
					$sql4=mysql_query("select * from daerah where kd_daerah = $_GET[daerah_tagih]");
					$data4=mysql_fetch_array($sql4);
					?>
                    <option value="<?php echo"$data4[0]"; ?>" selected><?php echo"$data4[1], $data4[2]"; ?></option>
                    <?php }
						$sql2=mysql_query("select * from daerah");
						while($data2=mysql_fetch_array($sql2)){
							echo"<option value='$data2[0]'>$data2[1], $data2[2]</option>";
						}
					?>
				   </select>
<?php if($_GET['daerah_tagih']==""){echo"<font color='red'>Data masih kosong !!!</font>";} ?>                   
                   </div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No Telephone </label>
<div class="col-sm-10"><input type="text" name="tlp" class="form-control" placeholder="No. Telephone" value="<?php echo"$_GET[tlp]"; ?>">
<?php if(empty($_GET['tlp'])){echo"<font color='red'>Data masih kosong !!!</font>";} 
else if(!empty($_GET['tipe'])){echo"<font color='red'>Data harus berupa angka !!!</font>";}
?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tanggal Jatuh Tempo</label>
<div class="col-sm-10"><input type="text" name="tgl_jth_tempo" id="datepicker2" placeholder="Tanggal Jatuh Tempo" class="form-control" value="<?php echo"$_GET[tgl_jth_tempo]"; ?>">
<?php if(empty($_GET['tgl_jth_tempo'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Pokok Hutang </label>
<div class="col-sm-10"><input type="text" name="pokok_hutang" class="form-control" placeholder="pokok_hutang"value="<?php echo"$_GET[pokok_hutang]"; ?>">
<?php if(empty($_GET['pokok_hutang'])){echo"<font color='red'>Data masih kosong !!!</font>";} 
else if(!empty($_GET['pokok_hutang'])){echo"<font color='red'>Data harus berupa angka !!!</font>";}
?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">TOP </label>
<div class="col-sm-10"><input type="text" name="top" class="form-control" style="width:50%" value="<?php echo"$_GET[top]"; ?>">
<?php if(empty($_GET['top'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Angsuran</label>
<div class="col-sm-10"><input type="text" name="angsuran" class="form-control" placeholder="angsuran"value="<?php echo"$_GET[angsuran]"; ?>">
<?php if(empty($_GET['angsuran'])){echo"<font color='red'>Data masih kosong !!!</font>";} 
else if(!empty($_GET['angsuran'])){echo"<font color='red'>Data harus berupa angka !!!</font>";}
?>
</div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>
<?php
}else{	
?>
<form method="post" action="input_cst.php" class="form-horizontal ">
<div class="form-group">
<label class="col-sm-2 control-label">No Kontrak</label>
<div class="col-sm-10"><input type="text" name="nkontrak" class="form-control" placeholder="No Kontrak">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Nama</label>
<div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama" style="width:50%">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tempat lahir</label>
<div class="col-sm-10"><input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" >
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tanggal lahir</label>
<div class="col-sm-10"><input type="text" name="tgl_lahir" id="datepicker" placeholder="Tanggal Lahir" class="form-control">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Alamat </label>
<div class="col-sm-10"><input type="text" name="almt" class="form-control" placeholder="Nama" style="width:50%">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah</label>
<div class="col-sm-10"><select name="daerah" class="form-control">
					<option value="" selected>- Pilih Daerah -</option>
                    <?php
					include"koneksi.php";
						$sql=mysql_query("select * from daerah");
						while($data=mysql_fetch_array($sql)){
							echo"<option value='$data[0]'>$data[1], $data[2]</option>";
						}
					?>
				   </select></div></div>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Agama </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu" checked>Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha">Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam">Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen">Kristen</label></div>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
<label class="checkbox-inline"><input type="radio" name="status" value="belum menikah" checked>Belum Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="menikah">Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="cerai">Cerai</label></div>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Kewarganegaraan</label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wni" checked>Warga Negra Indonesia </label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wna">Warga Negara Asing </label></div>

<div class="form-group">
<label class="col-sm-2 control-label">History </label>
<div class="col-sm-10"><textarea name="komen" class="form-control"></textarea>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Alamat Penagihan</label>
<div class="col-sm-10"><input type="text" name="tmp_tagih" class="form-control" placeholder="Tempat Penagihan" style="width:50%">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah Penagihan</label>
<div class="col-sm-10"><select name="daerah_tagih" class="form-control">
					<option value="" selected>- Pilih Daerah -</option>
                    <?php
						$sql2=mysql_query("select * from daerah");
						while($data2=mysql_fetch_array($sql2)){
							echo"<option value='$data2[0]'>$data2[1], $data2[2]</option>";
						}
					?>
				   </select></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No Telephone </label>
<div class="col-sm-10"><input type="text" name="tlp" class="form-control" placeholder="No. Telephone">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tanggal Jatuh Tempo</label>
<div class="col-sm-10"><input type="text" name="tgl_jth_tempo" id="datepicker2" placeholder="Tanggal Jatuh Tempo" class="form-control">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Pokok Hutang </label>
<div class="col-sm-10"><input type="text" name="pokok_hutang" class="form-control" placeholder="Pokok hutang">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">TOP </label>
<div class="col-sm-10"><input type="text" name="top" class="form-control" placeholder="Top">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Angsuran</label>
<div class="col-sm-10"><input type="text" name="angsuran" class="form-control" placeholder="angsuran">
</div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>
<?php
}
?>
                                      


                      </section>
                  </div>
            
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->