 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Input Daerah</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Input Daerah</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Input Daerah
                          </header>

<?php
if(@$_GET['message']=='gagal'){ 
?>

<div class="panel-body">
                                      
<form method="post" action="input_daerah.php" class="form-horizontal ">
<div class="form-group">
<label class="col-sm-2 control-label">Provinsi </label>
<div class="col-sm-10"><input type="text" name="prov" class="form-control" placeholder="Provinsi" value="<?php echo"$_GET[prov]"; ?>">
<?php if(empty($_GET['prov'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Kecamatan </label>
<div class="col-sm-10"><input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo"$_GET[kec]"; ?>">
<?php if(empty($_GET['kec'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Desa </label>
<div class="col-sm-10"><input type="text" name="desa" class="form-control" placeholder="Desa" value="<?php echo"$_GET[desa]"; ?>">
<?php if(empty($_GET['desa'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php	
}else{
?>	
	<div class="panel-body">
                                      
<form method="post" action="input_daerah.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Provinsi </label>
<div class="col-sm-10"><input type="text" name="prov" class="form-control" placeholder="Provinsi"></div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Kecamatan </label>
<div class="col-sm-10"><input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Desa </label>
<div class="col-sm-10"><input type="text" name="desa" class="form-control" placeholder="Desa"></div></div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
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