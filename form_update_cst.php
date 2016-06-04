 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Update Customer</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=tampil_cst.php">Daftar Customer</a></li>
                        <li>Update Customer</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Update Customer
                          </header>
                          <div class="panel-body">
                          
<link rel="stylesheet" href="jquery_ui/jquery-ui.css" />
<script src="jquery_ui/jquery-1.10.2.js"></script>
<script src="jquery_ui/jquery-ui.js"></script>
<script>
$(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
<script>
$(function() {
    $( "#datepicker2" ).datepicker();
  });
</script>
<?php
include"koneksi.php";
$sql=mysql_query("select * from cst where id_cst = '$_GET[id]'");
$data=mysql_fetch_array($sql);
?>
<form method="post" action="update_cst.php" class="form-horizontal ">
<input type="hidden" name="id_cst" value="<?php echo $_GET['id']; ?>">
<div class="form-group">
<label class="col-sm-2 control-label">No Kontrak</label>
<div class="col-sm-10"><input type="text" value="<?php echo"$data[no_kontrak]"; ?>" class="form-control"  disabled>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Nama</label>
<div class="col-sm-10"><input type="text" name="nama" value="<?php echo"$data[nama]"; ?>" class="form-control" style="width:50%">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tempat lahir</label>
<div class="col-sm-10"><input type="text" name="tmp_lahir" value="<?php echo"$data[tempat_lahir]"; ?>" class="form-control">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tanggal lahir</label>
<div class="col-sm-10"><input type="text" name="tgl_lahir" id="datepicker" value="<?php echo"$data[tgl_lahir]"; ?>" class="form-control">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Alamat </label>
<div class="col-sm-10"><input type="text" name="almt" value="<?php echo"$data[alamat]"; ?>" class="form-control" style="width:50%">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah </label>
<div class="col-sm-10"><select name="daerah" class="form-control">
                    <?php
						$sql_daerah_select=mysql_query("select * from daerah where kd_daerah = '$data[kd_daerah]'");
						$data_daerah_select=mysql_fetch_array($sql_daerah_select);
						echo"<option value='$data_daerah_select[0]' selected>$data_daerah_select[1], $data_daerah_select[2]</option>";
						$sql_daerah=mysql_query("select * from daerah");
						while($data_daerah=mysql_fetch_array($sql_daerah)){
							echo"<option value='$data_daerah[0]'>$data_daerah[1], $data_daerah[2]</option>";
						}
					?>
				   </select></div></div>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Agama</label>
<?php if($data['agama']=='hindu'){ ?>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu" checked>Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha">Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam">Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen">Kristen </label>
<?php }else if ($data['agama']=='buddha'){?>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu" >Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha" checked>Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam">Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen">Kristen </label>
<?php }else if ($data['agama']=='islam'){?>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu" >Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha" >Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam" checked>Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen">Kristen </label>
<?php }else if ($data['agama']=='kristen'){?>
<label class="checkbox-inline"><input type="radio" name="agama" value="hindu" >Hindu </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="buddha" >Buddha </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="islam" >Islam </label>
<label class="checkbox-inline"><input type="radio" name="agama" value="kristen" checked>Kristen </label>
<?php } ?>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Status Perkawinan</label>
<?php if($data['status']=='belum menikah'){ ?>
<label class="checkbox-inline"><input type="radio" name="status" value="belum menikah" checked>Belum Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="menikah">Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="cerai">Cerai </label>
<?php }else if($data['status']=='menikah'){ ?>
<label class="checkbox-inline"><input type="radio" name="status" value="belum menikah" >Belum Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="menikah" checked>Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="cerai">Cerai </label>
<?php }else if($data['status']=='cerai'){ ?>
<label class="checkbox-inline"><input type="radio" name="status" value="belum menikah" >Belum Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="menikah" >Menikah </label>
<label class="checkbox-inline"><input type="radio" name="status" value="cerai" checked>Cerai </label>
<?php } ?>
</div>              
<div class="form-group">
<label class="control-label col-lg-2" for="inputSuccess">Kewarganegaraan </label>
<?php if($data['warganegara']=='wni'){ ?>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wni" checked>Warga Negra Indonesia </label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wna">Warga Negara Asing </label>
<?php }else if($data['warganegara']=='wna'){ ?>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wni" >Warga Negra Indonesia </label>
<label class="checkbox-inline"><input type="radio" name="warganegara" value="wna" checked>Warga Negara Asing </label>
<?php } ?></div>

<div class="form-group">
<label class="col-sm-2 control-label">History</label>
<div class="col-sm-10"><textarea name="komen" class="form-control" ><?php echo"$data[komen]"; ?></textarea>
</div></div>
                    
<div class="form-group">
<label class="col-sm-2 control-label">Alamat penagihan</label>
<div class="col-sm-10"><input type="text" name="tmp_tagih" value="<?php echo"$data[tmpat_tagih]"; ?>" class="form-control" style="width:50%">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah penagihan </label>
<div class="col-sm-10"><select name="daerah_tagih" class="form-control">
                    <?php
						$sql_daerah_tagih_select=mysql_query("select * from daerah where kd_daerah = '$data[daerah_tagih]'");
						$data_daerah_tagih_select=mysql_fetch_array($sql_daerah_tagih_select);
						echo"<option value='$data_daerah_tagih_select[0]' selected>$data_daerah_tagih_select[1], $data_daerah_tagih_select[2]</option>";
						$sql_daerah_tagih=mysql_query("select * from daerah");
						while($data_daerah_tagih=mysql_fetch_array($sql_daerah_tagih)){
							echo"<option value='$data_daerah_tagih[0]'>$data_daerah_tagih[1], $data_daerah_tagih[2]</option>";
						}
					?>
				   </select></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No Telephone</label>
<div class="col-sm-10"><input type="text" name="tlp" value="<?php echo"$data[tlp]"; ?>" class="form-control">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tanggal Jatuh Tempo</label>
<div class="col-sm-10"><input type="text" name="tgl_jth_tempo" id="datepicker2" value="<?php echo"$data[tgl_jth_tempo]"; ?>" class="form-control">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Pokok Hutang </label>
<div class="col-sm-10"><input type="text" name="pokok_hutang" value="<?php echo"$data[pokok_hutang]"; ?>"class="form-control">
<?php if(!empty($_GET['pokok_hutang'])){echo"<font color='red'>Data harus berupa angka !!!</font>";}
?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Telah Bayar </label>
<div class="col-sm-10"><input type="text" name="telah_bayar" value="<?php echo"$data[telah_bayar]"; ?>"class="form-control">
<?php if(!empty($_GET['pokok_hutang'])){echo"<font color='red'>Data harus berupa angka !!!</font>";}
?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">TOP</label>
<div class="col-sm-10"><input type="text" name="top" class="form-control" style="width:50%" value="<?php echo"$data[top]"; ?>">
<?php if(!empty($_GET['top'])){echo"<font color='red'>Data harus berupa angka !!!</font>";}
?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Angsuran</label>
<div class="col-sm-10"><input type="text" name="angsuran" value="<?php echo"$data[angsuran]"; ?>"class="form-control">
<?php if(!empty($_GET['angsuran'])){echo"<font color='red'>Data harus berupa angka !!!</font>";}
?>
</div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

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