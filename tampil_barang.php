 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Daftar Kendaraan</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Daftar Kendaraan</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tabel Kendaraan
                          </header>

<table class="table table-striped table-advance table-hover">
<tr>
	<th>No</th>
    <th>No Plat</th>
    <th>Merk</th>
    <th>Type</th>
    <th>No. Mesin, No. Rangka</th>
    <th>Tagihan Bulanan</th>
    <th>Customer</th>
    <th>Aksi</th>
</tr>
<?php
include"koneksi.php";
$no=1;
$sql=mysql_query("select * from barang");
while($data=mysql_fetch_array($sql)){
	$sql2=mysql_query("select * from cst where no_kontrak='$data[6]'");
	@$data2=mysql_fetch_array($sql2);
?>
<tr>
	<td><?php echo"$no"; ?></td>
    <td><?php echo"$data[0]"; ?></td>
    <td><?php echo"$data[1]"; ?></td>
    <td><?php echo"$data[2]"; ?></td>
    <td><?php echo"$data[3]"; ?>,<br /><?php echo"$data[4]"; ?></td>
    <td><?php echo"$data[5]"; ?></td>
    <td><?php echo"$data2[1]"; ?></td>
    <td><a href="index.php?page=form_update_barang.php&id=<?php echo"$data[0]"; ?>">update</a><br /><a href="delete_barang.php?id=<?php echo"$data[0]"; ?>"onclick="return confirm('apakah anda akan menghapus <?php echo"$data[0]"; ?>')">delete</a></td>
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