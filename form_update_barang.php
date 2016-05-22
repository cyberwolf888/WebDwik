 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Update Kendaraan</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=tampil_barang.php">Daftar Kendaraan</a></li>
                        <li>Update Kendaraan</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Update Kendaraan
                          </header>
                          <div class="panel-body">

<?php
include"koneksi.php";
$sql=mysql_query("select * from barang where no_plat='$_GET[id]'");
@$data=mysql_fetch_array($sql);
?>
<form method="post" action="update_barang.php" class="form-horizontal ">
<input type="hidden" name="plat" value="<?php echo"$data[0]"; ?>">
<div class="form-group">
<label class="col-sm-2 control-label">No Plat </label>
<div class="col-sm-10"><input type="text" value="<?php echo"$data[0]"; ?>"class="form-control" placeholder="No. Plat" disabled>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Merk </label>
<div class="col-sm-10"><select name="merk" class="form-control">
			<option value="<?php echo"$data[1]"; ?>" selected><?php echo"$data[1]"; ?></option>
            <option value="Honda">Honda</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
</select></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Type </label>
<div class="col-sm-10"><input type="text" name="type" value="<?php echo"$data[2]"; ?>"class="form-control" placeholder="Type">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No. Mesin </label>
<div class="col-sm-10"><input type="text" name="mesin" value="<?php echo"$data[3]"; ?>"class="form-control" placeholder="No. Mesin">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">No. Rangka </label>
<div class="col-sm-10"><input type="text" name="rangka" value="<?php echo"$data[4]"; ?>"class="form-control" placeholder="No. Rangka">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Tagihan Bulanan </label>
<div class="col-sm-10"><input type="text" name="tagihan" value="<?php echo"$data[5]"; ?>"class="form-control" placeholder="No. Rangka">
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Customer </label>
<div class="col-sm-10"><select name="cst" class="form-control">
			<?php
				$sql2=mysql_query("select * from cst where no_kontrak='$data[6]'");
				$data2=mysql_fetch_array($sql2);
					echo"<option value='$data2[0]' selected>$data2[1]</option>";
				$sql3=mysql_query("select * from cst");
				while($data3=mysql_fetch_array($sql3)){
					echo"<option value='$data3[0]'>$data3[1]</option>";
				}
			?>
</select></div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

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