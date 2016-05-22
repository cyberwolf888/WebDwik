 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Daftar Customer</h3>
					<a class="btn btn-primary" href="index.php?page=form_input_cst.php" >Input Data Customer</a></li>
					<br>
					<br>
				</div>
			</div>					
			</div><!--/.row-->
            <form class="navbar-form" method="post" action="index.php?page=tampil_cst.php&modul=cari">
            				<select name="cari" class="form-control" style="width:300px">
            					<option value="">-Pilih daerah penagihan-</option>
                            	<?php
								include"koneksi.php";
								$sql2=mysql_query("select * from daerah");
								while($data2=mysql_fetch_array($sql2)){
									echo"<option value='$data2[0]'>$data2[1], $data2[2]</option>";
								}
								?>
                            </select>
                            <input type="submit" value="Cari" class="btn btn-primary" />
                        </form> <br />
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                                                
<table class="table table-striped table-advance table-hover">
<tr>
    <th>No</th>
    <th>No Kontrak</th>
    <th>Nama</th>
    <th>Tempat, Tanggal Lahir</th>
    <th>Alamat</th>
    <th>Agama</th>
    <th>Status</th>
    <th>Alamat Penagihan</th>
    <th>Telephone</th>
    <th>Tanggal Jatuh Tempo</th>
    <th>Pokok Hutang, TOP, Angsuran</th>
    <th>Aksi</th>
</tr>
<?php
if(!empty($_GET['modul'])=='cari')
{
	if(empty($_GET['daerah'])){
		if(empty($_POST['cari'])){
			$sql=mysql_query("select * from cst");
		}
		else{
		$sql=mysql_query("select * from cst where daerah_tagih=$_POST[cari]");
		}
	}
	else{
		$sql=mysql_query("select * from cst where daerah_tagih=$_GET[daerah]");
	}
}
else{
$sql=mysql_query("select * from cst");
}
$no=1;
while(@$data=mysql_fetch_array($sql)){
	$sql_daerah=mysql_query("select * from daerah where kd_daerah='$data[5]'");
	$data_daerah=mysql_fetch_array($sql_daerah);
	$sql_daerah_tagih=mysql_query("select * from daerah where kd_daerah='$data[10]'");
	$data_daerah_tagih=mysql_fetch_array($sql_daerah_tagih);
?>
<tr>
	<td><?php echo"$no"; ?></td>
    <td><?php echo"$data[0]"; ?></td>
    <td><?php echo"$data[1]"; ?></td>
    <td><?php echo"$data[2]"; ?>,<br /> <?php echo"$data[3]"; ?></td>
    <td><?php echo"$data[4]"; ?>,<br /> <?php echo"$data_daerah[1]"; ?>, <?php echo"$data_daerah[2]"; ?></td>
    <td><?php echo"$data[6]"; ?></td>
    <td><?php echo"$data[7]"; ?></td>
    <td><?php echo"$data[9]"; ?>, <br /><?php echo"$data_daerah_tagih[1]"; ?>, <?php echo"$data_daerah_tagih[2]"; ?></td>
    <td><?php echo"$data[11]"; ?></td>
    <td><?php echo"$data[14]"; ?></td>
    <td><?php echo"$data[12],$data[16], $data[13]"; ?></td>
    <td><a href="index.php?page=form_update_cst.php&id=<?php echo"$data[0]"; ?>">update</a><br />
    <a href="delete_cst.php?id=<?php echo"$data[0]"; ?>" onclick="return confirm('apakah anda akan menghapus <?php echo"$data[0], $data[1]"; ?>')">delete</a></td>
</tr>
<?php
$no++;
}
?>
</table>
                          
                          
                          </section>
                  </div>
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