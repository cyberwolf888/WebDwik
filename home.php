 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Laporan Kolektor</h3>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
                        <li>Laporan Kolektor</li>						  	
					</ol>
				</div>
			</div>					
			</div><!--/.row-->
            
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tabel Laporan
                          </header>
                          
 <table class="table table-striped table-advance table-hover">
	<tr>
        <th>No</th>
        <th>Customer</th>
        <th>Laporan</th>
        <th>Pokok Hutang</th>
        <th>Telah Bayar</th>
        <th>Sisa Hutang</th>
        <th>Angsuran Ke</th>
        <th>Status</th>
        <th>Waktu</th>
	</tr>
<?php
include "koneksi.php";
$sql=mysql_query("select * from laporan ORDER BY waktu DESC");
$no=1;
while($data=mysql_fetch_array($sql)){
	$sql2=mysql_query("select * from cst where id_cst=$data[id_cst]");
	$data2=@mysql_fetch_array($sql2);
?>
    <tr>
    	<td><?php echo"$no"; ?></td>
        <td><?php echo"$data2[nama]"; ?></td>
        <td><?php echo"$data[2]"; ?></td>
        <td><?php echo"Rp. ".number_format($data2['pokok_hutang'],0,',','.'); ?></td>
        <td><?php echo"Rp. ".number_format($data2['telah_bayar'],0,',','.'); ?></td>
        <td><?php echo"Rp. ".number_format($data2['pokok_hutang']-$data2['telah_bayar'],0,',','.'); ?></td>
        <td><?php echo"$data[5]"; ?></td>
        <?php
        	if($data['status']==0){
				$status="Belum Bayar";
			}else if($data['status']==1){
				$status="Bayar";
			}else if($data['status']==2){
				$status="Lunas";
			}
		?>
        <td><?php echo"$status"; ?></td>
        <td><?php echo"$data[waktu]"; ?></td>
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