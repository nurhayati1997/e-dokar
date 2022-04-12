<?php  
  header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename= Data Karyawan Perempuan.xls");
?>

<style type="text/css">
  table,th,td{
    border-collapse: collapse;
    padding: 15px;
    margin: 10px;
    color: #000;
  }
</style>

<div style="text-align: center;">
  <span style="margin-left: 20px;font-size: 20px;"><b>Data Karyawan Perempuan RSUD SYAMRABU Bangkalan</b></span>
</div>
<br>
<table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Ruangan</th>
        </tr>
      </thead>
      <?php
        $no = 1;
        if ($data->num_rows() > 0) {
          foreach ($data->result() as $row) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jk; ?></td>
                <td><?php echo $row->ruangan; ?></td>
              </tr>

            <?php
          }
        }
      ?>
</table>