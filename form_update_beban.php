 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Update Beban</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=tampil_beban.php">Daftar Beban</a></li>
                        <li>Update Beban</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Update Beban
                          </header>
                          <div class="panel-body">
						
<?php
include"koneksi.php";
$sql1=mysql_query("select * from beban where no_beban='$_GET[id]'");
$data1=mysql_fetch_array($sql1);
$sql3=mysql_query("select * from kolektor where id_kolektor='$data1[1]'");
$data3=mysql_fetch_array($sql3);
$sql5=mysql_query("select * from daerah where kd_daerah = '$data1[2]'");
$data5=mysql_fetch_array($sql5);
?>
<form method="post" action="update_beban.php" class="form-horizontal ">
<input type="hidden" name="kd_beban" value="<?php echo"$data1[0]"; ?>">
<div class="form-group">
<label class="col-sm-2 control-label">Kode Beban</label>
<div class="col-sm-10"><input type="text" value="<?php echo"$data1[0]"; ?>" class="form-control" disabled>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Collector</label>
<div class="col-sm-10"><select name="kolektor" class="form-control">
				<option value="<?php echo"$data1[1]"; ?>"><?php echo"$data3[1]"; ?></option>
                <?php
					$sql2=mysql_query("select * from kolektor");
					while($data2=mysql_fetch_array($sql2)){
						echo"<option value='$data2[0]'>$data2[1]</option>";
					}
				?>
</select></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah</label>
<div class="col-sm-10"><select name="daerah" class="form-control">
				<option value="<?php echo"$data1[2]"; ?>"><?php echo"$data5[1], $data5[2]"; ?></option>
                <?php
					$sql4=mysql_query("select * from daerah");
					while($data4=mysql_fetch_array($sql4)){
						echo"<option value='$data4[0]'>$data4[1], $data4[2]</option>";
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