 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Input Admin</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Input Admin</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Input Admin
                          </header>
                          <div class="panel-body">
 <?php
if(@$_GET['message']=='gagal'){ ?>
<form method="post" action="input_admin.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Id Admin</label>
<div class="col-sm-10"><input type="text" name="id" class="form-control" placeholder="Id Admin" value="<?php echo"$_GET[id]"; ?>">
<?php if(empty($_GET['id'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Nama Admin</label>
<div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama Admin" value="<?php echo"$_GET[nama]"; ?>">
<?php if(empty($_GET['nama'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Password</label>
<div class="col-sm-10"><input type="password" name="pass" class="form-control" placeholder="Password"value="<?php echo"$_GET[pass]"; ?>">
<?php if(empty($_GET['pass'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?></div></div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php }else{?>
<form method="post" action="input_admin.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Id Admin</label>
<div class="col-sm-10"><input type="text" name="id" class="form-control" placeholder="Id Admin">
</div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Nama Admin</label>
<div class="col-sm-10"><input type="text" name="nama" class="form-control" placeholder="Nama Admin"></div></div>

<div class="form-group">
<label class="col-sm-2 control-label">Password</label>
<div class="col-sm-10"><input type="password" name="pass" class="form-control" placeholder="Password"></div></div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php }?>                                     
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