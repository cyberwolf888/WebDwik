 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Daftar Beban</h3>
					<a class="btn btn-primary" href="index.php?page=form_input_beban.php" >Input Data Beban</a></li>
					<br>
					<br>
					
				</div>
			</div>					
			</div><!--/.row-->
            
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          
<table class="table table-striped table-advance table-hover">
<tr>
	<th>No</th>
    <th>Kode beban</th>
    <th>Collector</th>
    <th>Daerah</th>
    <th>Bulan</th>
    <th colspan="2">Aksi</th>
</tr>
<?php
include"koneksi.php";
$sql=mysql_query("select * from beban");
$no=1;
while($data=mysql_fetch_array($sql)){
$sql2=mysql_query("select * from daerah where kd_daerah = $data[2]");
@$data2=mysql_fetch_array($sql2);
$sql3=mysql_query("select * from kolektor where id_kolektor = $data[1]");
$data3=mysql_fetch_array($sql3);

?>
<tr>
	<td><?php echo"$no"; ?></td>
    <td><?php echo"$data[0]"; ?></td>
    <td><?php echo"$data3[1]"; ?></td>
    <td><?php echo"<a href=index.php?page=tampil_cst2.php&modul=cari&daerah=$data2[0]>$data2[1], $data2[2]"; ?></td>
    <td><?php echo"$data[3]/$data[4]"; ?></td>
    <td><a href="index.php?page=form_update_beban.php&id=<?php echo"$data[0]"; ?>">Edit</a></td>
    <td><a href="delete_beban.php?id=<?php echo"$data[0]"; ?>"onclick="return confirm('apakah anda akan menghapus <?php echo"$data[0]"; ?>')">Delete</a></td>
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