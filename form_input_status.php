 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Input Status</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Input Status</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Input Status
                          </header>
                          <div class="panel-body">
                                      
<form method="post" action="input_status.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Customer</label>
<div class="col-sm-10"><select name="cst">
<?php
$sql=mysql_query("select * from cst");

while($data=mysql_fetch_array($sql)){
?>
<option value="<?php echo"$data[0]" ?>"><?php echo"$data[0] | $data[1]"; ?></option>
<?php	
	}
?>
</select>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Status</label>
<div class="col-sm-10"><select name="status">
<option value="0" selected>belum bayar</option>
<option value="1">bayar</option>
<option value="2">lunas</option>
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