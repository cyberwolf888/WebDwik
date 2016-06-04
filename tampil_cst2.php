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
    <th>Pokok Hutang</th>
    <th>Telah Bayar</th>
    <th>Tanggal Jatuh Tempo</th>
    <th>Aksi</th>
</tr>
<?php
if(!empty($_GET['modul'])=='cari')
{
	if(empty($_GET['daerah'])){
		if(empty($_POST['cari'])){
			$sql=mysql_query("select c.*,l.status from cst as c LEFT JOIN laporan AS l ON l.id_cst = c.id_cst WHERE isnull(l.status)");
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
$sql=mysql_query("select c.*,l.status from cst as c LEFT JOIN laporan AS l ON l.id_cst = c.id_cst WHERE isnull(l.status)");
}
$no=1;
while(@$data=mysql_fetch_array($sql)){
	$sql_daerah=mysql_query("select * from daerah where kd_daerah='".$data['kd_daerah']."'");
	$data_daerah=mysql_fetch_array($sql_daerah);
	$sql_daerah_tagih=mysql_query("select * from daerah where kd_daerah='".$data['daerah_tagih']."'");
	$data_daerah_tagih=mysql_fetch_array($sql_daerah_tagih);
?>
<tr>
<td><?php echo"$no" ?></td>
    <td><?php echo $data['no_kontrak']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo"Rp. ".number_format($data['pokok_hutang'],0,',','.');; ?></td>
    <td><?php echo"Rp. ".number_format($data['telah_bayar'],0,',','.'); ?></td>
    <td><?php echo $data['tgl_jth_tempo']; ?></td>
    <td><a href="#popup" onclick="FungsiData('<?php echo $data[0]; ?>');">Detail</a><br>
    <a href="index.php?page=form_update_cst.php&id=<?php echo"$data[0]"; ?>">update</a><br />
    <a href="delete_cst.php?id=<?php echo"$data[0]"; ?>"onclick="return confirm('apakah anda akan menghapus <?php echo $data['no_kontrak'] ?>')">delete</a></td>
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
        Nama                  : <?php echo $data['nama']; ?><br />
        Tempat, Tanggal lahir : <?php echo $data['tempat_lahir'].", ".$data['tgl_lahir']; ?><br />
        Alamat                : <?php echo $data['alamat'].", ".$data_daerah['desa'].", ".$data_daerah['kecamatan'].", ".$data_daerah['prov'] ;?><br />
        Agama                 : <?php echo $data['agama'] ?><br />
        Status                : <?php echo $data['status']; ?><br />
        Warganegara           : <?php echo $data['warganegara']; ?><br />
        Tempat penagihan      : <?php echo $data['tmpat_tagih'].", ".$data_daerah['desa'].", ".$data_daerah['kecamatan'].", ".$data_daerah['prov']  ;?><br />
        No. Tlp               : <?php echo $data['tlp']; ?><br />
        Tanggal jatuh tempo   : <?php echo $data['tgl_jth_tempo']; ?><br />
		Pokok Hutang          : <?php echo $data['pokok_hutang']; ?><br />
        Telah Bayar           : <?php echo $data['telah_bayar']; ?><br />
		TOP			          : <?php echo $data['top']; ?><br />
		Angsuran              : <?php echo $data['angsuran']; ?><br />
        
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