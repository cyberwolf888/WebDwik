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
 <form action="" method="post">                         
 <table class="table table-striped table-advance table-hover">
	<tr>
        <th>No</th>
        <th>Customer</th>
        <th>Status</th>
        <th>Aksi</th>
	</tr>
<?php
include "koneksi.php";
$sql=mysql_query("select * from cst");
$no=1;
while($data=mysql_fetch_array($sql)){
	$bulan=date("m");	
	$tahun=date("Y");	
	$sql2=mysql_query("select * from laporan where no_kontrak=$data[0] AND MONTH(waktu)=$bulan AND YEAR(waktu)=$tahun ORDER BY waktu DESC");
	$data2=mysql_fetch_array($sql2);
?>
    <tr>
    	<td><?php echo"$no"; ?></td>
        <td><?php echo"$data[1]"; ?></td>
        <td><?php echo"$data2[4]"; ?></td>
        <td></td>
    </tr>
<?php
$no++;
}
?>    
</table></form>
                          
                          
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