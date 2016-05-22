 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Input Kendaraan</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Input Kendaraan</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Input Kendaraan
                          </header>
                          <div class="panel-body">
 <?php if(@$_GET['message']=="gagal"){?>
<form method="post" action="input_barang.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">No. Plat </label>
<div class="col-sm-10"><input type="text" name="plat" class="form-control" placeholder="No. Plat" value="<?php echo"$_GET[plat]" ?>">
<?php 
if(empty($_GET['plat'])){echo"<font color='red'>Data masih kosong !!!</font>";}
else if (!empty($_GET['pesan'])){echo"<font color='red'>nomor sudah terdaftar !!!</font>";}
?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Merk </label>
<div class="col-sm-10"><select name="merk" class="form-control">
<?php if(empty($_GET['merk'])){ ?>
			<option value="" selected>Pilih Merk</option>
            <option value="Honda">Honda</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
<?php }else if($_GET['merk']=="Honda"){ ?>
<option value="Honda" selected="selected">Honda</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
<?php }else if($_GET['merk']=="Yamaha"){ ?>
<option value="Honda">Honda</option>
            <option value="Yamaha" selected="selected">Yamaha</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
<?php }else if($_GET['merk']=="Suzuki"){ ?>
<option value="Honda">Honda</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Suzuki" selected="selected">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
<?php }else if($_GET['merk']=="Kawasaki"){ ?>
<option value="Honda">Honda</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
<?php }?>
</select>
<?php if(empty($_GET['merk'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Type </label>
<div class="col-sm-10"><input type="text" name="type" class="form-control" placeholder="Type" value="<?php echo"$_GET[type]"; ?>">
<?php if(empty($_GET['type'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No. Mesin </label>
<div class="col-sm-10"><input type="text" name="mesin" class="form-control" placeholder="No. Mesin" value="<?php echo"$_GET[mesin]"; ?>">
<?php if(empty($_GET['mesin'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No. Rangka </label>
<div class="col-sm-10"><input type="text" name="rangka" class="form-control" placeholder="No. Rangka" value="<?php echo"$_GET[rangka]"; ?>">
<?php if(empty($_GET['rangka'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tagihan Bulanan </label>
<div class="col-sm-10"><input type="text" name="tagihan" class="form-control" placeholder="Tagihan Bulanan" value="<?php echo"$_GET[tagihan]"; ?>">
<?php if(empty($_GET['tagihan'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Customer </label>
<div class="col-sm-10"><select name="cst" class="form-control">
			<option value="" selected>Pilih Customer</option>
            <?php
				include"koneksi.php";
				$sql=mysql_query("select * from cst");
				while($data=mysql_fetch_array($sql)){
					echo"<option value='$data[0]'>$data[1]</option>";
				}
			?>
</select>
<?php if(empty($_GET['cst'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?></div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form.
<?php }else{ ?>
<form method="post" action="input_barang.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">No. Plat </label>
<div class="col-sm-10"><input type="text" name="plat" class="form-control" placeholder="No. Plat">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Merk </label>
<div class="col-sm-10"><select name="merk" class="form-control">
			<option value="" selected>Pilih Merk</option>
            <option value="Honda">Honda</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
</select></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Type </label>
<div class="col-sm-10"><input type="text" name="type" class="form-control" placeholder="Type">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No. Mesin </label>
<div class="col-sm-10"><input type="text" name="mesin" class="form-control" placeholder="No. Mesin">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No. Rangka </label>
<div class="col-sm-10"><input type="text" name="rangka" class="form-control" placeholder="No. Rangka">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tagihan Bulanan </label>
<div class="col-sm-10"><input type="text" name="tagihan" class="form-control" placeholder="Tagihan Bulanan">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Customer </label>
<div class="col-sm-10"><select name="cst" class="form-control">
<?php 
if(empty($_GET['cst'])){
?>
			<option value="" selected>Pilih Customer</option>
<?php }else{ 
$sql2=mysql_query("select * from cst where no_kontrak=$_GET[cst]");
$data2=mysql_fetch_array($sql2);
?>
			<option value="<?php echo"$data2[0]"; ?>" selected><?php echo"$data2[1]"; ?></option>
            <?php }
				include"koneksi.php";
				$sql=mysql_query("select * from cst");
				while($data=mysql_fetch_array($sql)){
					echo"<option value='$data[0]'>$data[1]</option>";
				}
			?>
</select></div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php } ?>                         

</div>
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