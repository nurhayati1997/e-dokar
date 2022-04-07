<?php  
  header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename=Data Karyawan.xls");
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
  <span style="margin-left: 20px;font-size: 20px;"><b>Data Karyawan RSUD SYAMRABU Bangkalan</b></span>
</div>
<br>
<table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Ruangan</th>
          <th>Status Karyawan</th>
          <th>Pendidikan</th>
          <th>Jenis Tenaga</th>
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
                <td><?php echo $row->jabatan; ?></td>
                <td><?php echo $row->ruangan; ?></td>
                <td><?php echo $row->status_karyawan; ?></td>
                <td><?php echo $row->jenis_pendidikan; ?></td>
                <td><?php echo $row->jenis_tenaga; ?></td>
              </tr>

            <?php
          }
        }
      ?>
</table>