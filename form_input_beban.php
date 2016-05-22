 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Input Beban</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Input Beban</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Input Beban
                          </header>
                          <div class="panel-body">
						  
<?php
include"koneksi.php";
if(@$_GET['message']=='gagal'){ ?>
<form method="post" action="input_beban.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Collector</label>
<div class="col-sm-10"><select name="kolektor" class="form-control">			
<?php if(empty($_GET['kolektor'])){ ?>            
            <option value="" selected="selected">Pilih Collector</option>
<?php }else{ $sql4=mysql_query("select * from kolektor where id_kolektor=$_GET[kolektor]");
$data4=mysql_fetch_array($sql4);
?>
			<option value="<?php echo"$data4[0]"; ?>" selected="selected"><?php echo"$data4[0], $data4[1]"; ?></option>
			<?php }
				$sql1=mysql_query("select * from kolektor");
				while($data1=mysql_fetch_array($sql1)){
					echo"<option value='$data1[0]'>$data1[0]| $data1[1]</option>";
				}
			?>
</select>
<?php if(empty($_GET['kolektor'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?>
</div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah </label>
<div class="col-sm-10"><select name="daerah" class="form-control">
<?php if(empty($_GET['daerah'])){ ?>
			<option value="" selected="selected">Pilih Daerah</option>
<?php }else{ 
			$sql5=mysql_query("select * from daerah where kd_daerah=$_GET[daerah]");
			$data5=mysql_fetch_array($sql5);
?>
			<option value="<?php echo"$data5[0]"; ?>" selected="selected"><?php echo"$data5[1], $data5[2]"; ?></option>
            <?php }
				$sql2=mysql_query("select * from daerah where prov='bali'");
				while($data2=mysql_fetch_array($sql2)){
					$bulan=date("m");
					$tahun=date("Y");
					$sql3=mysql_query("select * from beban where kd_daerah=$data2[0] && tahun >= $tahun && bulan >= $bulan");
					$cek=mysql_num_rows($sql3);
					if($cek<=0){
					echo"<option value='$data2[0]'>$data2[1], $data2[2]</option>";
					}
				}
			?>
</select>
<?php if(empty($_GET['daerah'])){echo"<font color='red'>Data masih kosong !!!</font>";} ?></div></div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php }else{ ?>
<form method="post" action="input_beban.php" class="form-horizontal ">

<div class="form-group">
<label class="col-sm-2 control-label">Collector</label>
<div class="col-sm-10"><select name="kolektor" class="form-control">
			<option value="">Pilih Collector</option>
			<?php
				$sql1=mysql_query("select * from kolektor");
				while($data1=mysql_fetch_array($sql1)){
					echo"<option value='$data1[0]'>$data1[0]| $data1[1]</option>";
				}
			?>
</select></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">Daerah </label>
<div class="col-sm-10"><select name="daerah" class="form-control">
			<option value="">Pilih Daerah</option>
            <?php
				$sql2=mysql_query("select * from daerah where prov='bali'");
				while($data2=mysql_fetch_array($sql2)){
					$bulan=date("m");
					$tahun=date("Y");
					$sql3=mysql_query("select * from beban where kd_daerah=$data2[0] && tahun >= $tahun && bulan >= $bulan");
					$cek=mysql_num_rows($sql3);
					if($cek<=0){
					echo"<option value='$data2[0]'>$data2[1], $data2[2]</option>";
					}
				}
			?>
</select></div></div>
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