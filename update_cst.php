<?php
include"koneksi.php";
mysql_query("update cst set nama='$_POST[nama]', tempat_lahir='$_POST[tmp_lahir]', tgl_lahir='$_POST[tgl_lahir]', alamat='$_POST[almt]', kd_daerah='$_POST[daerah]', agama='$_POST[agama]', status='$_POST[status]', warganegara='$_POST[warganegara]', tmpat_tagih='$_POST[tmp_tagih]',daerah_tagih='$_POST[daerah_tagih]', tlp='$_POST[tlp]', pokok_hutang='$_POST[pokok_hutang]', telah_bayar='$_POST[telah_bayar]', angsuran='$_POST[angsuran]',tgl_jth_tempo='$_POST[tgl_jth_tempo]',komen='$_POST[komen]',top='$_POST[top]' where id_cst='$_POST[id_cst]'");
echo mysql_error();
header("location:index.php?page=tampil_cst2.php");
?>