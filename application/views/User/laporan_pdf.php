<html><head>
<h1 style="text-align: center">Laporan Data</h1>
<br>
  <table border="1">
      
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Nope</th>
    </tr>
  </head><body>
  <?php
	$no = 1;
	foreach ($row->result() as $key => $row) { ?>
    <tr>
      <th scope="row"><?=$no++;?></th>
      <td><?=$row->nama;?></td>
      <td><?=$row->username;?></td>
      <td><?=$row->no_hp;?></td>
    </tr>
	<?php	
	} ?>	
    </table>
</body></html>