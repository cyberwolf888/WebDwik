 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Input Emergency</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Input Emergency</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Input Emergency
                          </header>
                          <div class="panel-body">
<?php if(@$_GET['message']=="gagal"){ ?>

<form method="post" action="input_emergency.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Customer </label>
<div class="col-sm-10"><select name="cst" class="form-control">
<?php if(empty($_GET['cst'])) {?>
					<option value="">Pilih Customer</option>
<?php }else{ 
	$sql2=mysql_query("select * from cst where no_kontrak=$_GET[cst]");
	$data2=mysql_fetch_array($sql2);
?>
                    <option value="<?php echo"$data2[0]"; ?>"><?php echo"$data2[0], $data2[1]"; ?></option>
                    <?php }
						include"koneksi.php";
						$sql=mysql_query("select * from cst");
						while($data=mysql_fetch_array($sql)){
							echo"<option value='$data[0]'>$data[0] | $data[1]</option>";
						}
					?>
</select>
<?php if(empty($_GET['cst'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Comment Of Survey </label>
<div class="col-sm-10"><textarea name="komen" class="form-control"><?php echo"$_GET[komen]"; ?></textarea>
<?php if(empty($_GET['komen'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Mother Name </label>
<div class="col-sm-10"><input type="text" name="ibu" class="form-control" style="width:50%" value="<?php echo"$_GET[ibu]"; ?>">
<?php if(empty($_GET['ibu'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>


<?php }else{ ?>
<form method="post" action="input_emergency.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Customer </label>
<div class="col-sm-10"><select name="cst" class="form-control">
					<option value="">Pilih Customer</option>
                    <?php
						include"koneksi.php";
						$sql=mysql_query("select * from cst");
						while($data=mysql_fetch_array($sql)){
							echo"<option value='$data[0]'>$data[0] | $data[1]</option>";
						}
					?>
</select>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Comment Of Survey </label>
<div class="col-sm-10"><textarea name="komen" class="form-control"></textarea>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Mother Name </label>
<div class="col-sm-10"><input type="text" name="ibu" class="form-control" style="width:50%">
</div></div>
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