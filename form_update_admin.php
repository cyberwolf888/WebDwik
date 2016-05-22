 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Update Admin</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=tampil_admin.php">Daftar Admin</a></li>
                        <li>Update Admin</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Update Admin
                          </header>
                          <div class="panel-body">
                                  
                                  
<?php
include"koneksi.php";
$sql=mysql_query("select * from admin where id_admin='$_GET[id]'");
$data=mysql_fetch_array($sql); 
?>    
<form method="post" action="update_admin.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Id Admin</label>
<div class="col-sm-10"><input type="text" name="id" class="form-control" value="<?php echo"$data[0]"; ?>">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Nama Admin</label>
<div class="col-sm-10"><input type="text" name="nama" class="form-control" value="<?php echo"$data[1]"; ?>"></div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Password</label>
<div class="col-sm-10"><input type="password" name="pass" class="form-control" value="<?php echo"$data[2]"; ?>"></div></div>
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