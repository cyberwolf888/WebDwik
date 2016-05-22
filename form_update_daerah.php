 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Update Daerah</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=tampil_daerah.php">Daftar Daerah</a></li>
                        <li>Update Daerah</li>						  	
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
                          <div class="panel-body">
                                      
<?php
include"koneksi.php";
$sql=mysql_query("select * from daerah where kd_daerah='$_GET[id]'");
$data=mysql_fetch_array($sql);
?>

<form action="update_daerah.php" method="post" class="form-horizontal ">
<input type="hidden" name="kd_daerah" value="<?php echo"$data[0]"; ?>" />
<div class="form-group">
<label class="col-sm-2 control-label">Kode Daerah </label> 
<div class="col-sm-10"><input type="text" value="<?php echo"$data[0]"; ?>" class="form-control" disabled="disabled"></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Provinsi </label> 
<div class="col-sm-10"><input type="text" name="prov" value="<?php echo"$data[3]"; ?>"class="form-control"></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Kecamatan </label> 
<div class="col-sm-10"><input type="text" name="kecamatan" value="<?php echo"$data[1]"; ?>"class="form-control"></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Desa </label> 
<div class="col-sm-10"><input type="text" name="desa" value="<?php echo"$data[2]"; ?>"class="form-control"></div></div>
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