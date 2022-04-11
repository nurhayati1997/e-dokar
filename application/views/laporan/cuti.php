<?php  
  header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename= Data Cuti Karyawan.xls");
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
  <span style="margin-left: 20px;font-size: 20px;"><b>Data Cuti Karyawan RSUD SYAMRABU Bangkalan</b></span>
</div>
<br>
<table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Masa Kerja</th>
          <th>Unit Kerja</th>
          <th>Jenis Cuti</th>
          <th>Alasan</th>
          <th>mulai Cuti</th>
          <th>akhir Cuti</th>
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
                <td><?php echo $row->masa_kerja; ?></td>
                <td><?php echo $row->unit_kerja; ?></td>
                <td><?php echo $row->jenis_cuti; ?></td>
                <td><?php echo $row->alasan_cuti; ?></td>
                <td><?php echo $row->mulai_tgl; ?></td>
                <td><?php echo $row->sampai_tgl; ?></td>
              </tr>

            <?php
          }
        }
      ?>
</table>