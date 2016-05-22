 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Update Kolektor</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=tampil_kolektor.php">Daftar Kolektor</a></li>
                        <li>Update Kolektor</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Update Kolektor
                          </header>
                          <div class="panel-body">
						  
<?php
include"koneksi.php";
$sql=mysql_query("select * from kolektor where id_kolektor='$_GET[id]'");
$data=mysql_fetch_array($sql);
?>
<form method="post" action="update_kolektor.php" class="form-horizontal ">
<input type="hidden" name="id" value="<?php echo"$data[0]"; ?>">
<div class="form-group">
<label class="col-sm-2 control-label">ID Collector </label>
<div class="col-sm-10"><input type="text" value="<?php echo"$data[0]"; ?>"class="form-control" disabled/></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Nama  </label>
<div class="col-sm-10"><input type="text" name="nama" value="<?php echo"$data[1]"; ?>"class="form-control" ></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Password </label>
<div class="col-sm-10"><input type="password" name="pass" value="<?php echo"$data[2]"; ?>"class="form-control" ></div></div>
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