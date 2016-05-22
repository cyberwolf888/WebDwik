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
            <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                                                  
<table class="table table-striped table-advance table-hover">
<tr>
<th>No</th>
    <th>No Kontrak</th>
    <th>Nama</th>
    <th>Tanggal Jatuh Tempo</th>
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
<td><?php echo"$no" ?></td>
    <td><?php echo"$data[0]"; ?></td>
    <td><?php echo"$data[1]"; ?></td>
    <td><?php echo"$data[14]"; ?></td>
    <td><a href="#popup" onclick="FungsiData('<?php echo $data[0]; ?>');">Detail</a><br>
    <a href="index.php?page=form_update_cst.php&id=<?php echo"$data[0]"; ?>">update</a><br />
    <a href="delete_cst.php?id=<?php echo"$data[0]"; ?>"onclick="return confirm('apakah anda akan menghapus <?php echo"$data[0], $data[1]"; ?>')">delete</a></td>
</tr>

<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				<h1>Detail</h1>
                <span id="isidata">
				</span>				
			</div>
		</div>
        <span id="data<?php echo $data[0]; ?>" style="display:none;">
     	<p align="left"> 
        Nama                  : <?php echo $data[1]; ?><br />
        Tempat, Tanggal lahir : <?php echo "$data[2], $data[3]"; ?><br />
        Alamat                : <?php echo "$data[4], $data_daerah[2], $data_daerah[1], $data_daerah[3]" ;?><br />
        Agama                 : <?php echo $data[6] ?><br />
        Status                : <?php echo $data[7]; ?><br />
        Warganegara           : <?php echo $data[8]; ?><br />
        Tempat penagihan      : <?php echo "$data[9], $data_daerah_tagih[2], $data_daerah_tagih[1], $data_daerah_tagih[3]" ;?><br />
        No. Tlp               : <?php echo $data[11]; ?><br />
        Tanggal jatuh tempo   : <?php echo $data[14]; ?><br />
		Pokok Hutang          : <?php echo $data[12]; ?><br />
		TOP			          : <?php echo $data[16]; ?><br />
		Angsuran              : <?php echo $data[13]; ?><br />
        
        </p>
        </span>
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
<script>
function FungsiData(id){
	var data=$('#data'+id).html();
	//alert(data);
	$('#isidata').html(data);
}
</script>