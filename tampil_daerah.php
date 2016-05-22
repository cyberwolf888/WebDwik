 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Daftar Daerah</h3>
					<a class="btn btn-primary" href="index.php?page=form_input_daerah.php" >Input Data Daerah</a></li>
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
        <th>Kode Daerah</th>
        <th>Provinsi</th>
        <th>Kecamatan</th>
        <th>Desa</th>
        <th colspan="2">Aksi</th>
	</tr>
<?php
include "koneksi.php";
$sql=mysql_query("select * from daerah");
$no=1;
while($data=mysql_fetch_array($sql)){
?>
    <tr>
    	<td><?php echo"$no"; ?></td>
        
         <td><?php echo"$data[0]"; ?></td>
         <td><?php echo"$data[3]"; ?></td>
        <td><?php echo"$data[1]"; ?></td>
        <td><?php echo"$data[2]"; ?></td>
        <td><a href="index.php?page=form_update_daerah.php&id=<?php echo"$data[0]"; ?>">edit</a></td>
        <td><a href="delete_daerah.php?id=<?php echo"$data[0]"; ?>"onclick="return confirm('apakah anda akan menghapus <?php echo"$data[2], $data[1], $data[3]"; ?>')">delete</a></td>
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