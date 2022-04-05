<!DOCTYPE html>
<html>
<head>
	<title>Surat Ketererangan Dokter</title>
  <link rel="icon" href="<?= base_url() ?>assets_admin/logot.png" type="image/png">
	<style type="text/css">
    /* body{
      background-image: url(assets_admin/logot.png);
      background-size: cover;
      background-attachment: fixed;
    } */
    
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
      /* background-image:url(assets_admin/logot.png); */
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<!-- <body background="assets_admin/logot.png"> -->
<!-- <body style="background-image:url(assets_admin/logot.png)"> -->
<body>
  
	<center>
		<table>
			<tr>
				<td><img src="<?= base_url() ?>assets_admin/Bangkalan.png" width="90" height="90"></td>
				<td>
				<center>
					<font size="4"></font><br>
					<font size="4">PEMERINTAH KABUPATEN BANGKALAN</font><br>
					<font size="4">DINAS KESEHATAN</font><br>
					<font size="5"><b>UOBK RSUD SYARIFAH AMBAMI RATO EBU</b></font><br>
					<font size="2">Jl. Pemuda Kaffa No.9,Telp.(031) 3091111 Fax.(031) 3094108 kode pos 69112</font><br>
					<font size="2"><i>Website www.rsabangkalan.com Email 1: eres.bangkalan@yahoo.co.id</i></font><br>
					<font size="2"><i>Email 2: rsudsyamrabu@bangkalankab.go.id</i></font><br>
					<font size="2">BANGKALAN</font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
      <table width="625">
        <tr>
          <td>
            <center>
              <font size="2">SURAT KETERANGAN DOKTER</font> <br>
              <font size="3"><u><b>SEHAT JASMANI</u></b></font><br>
              <font size="2">NOMOR : 445.1/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/433.102.1/1/2022</font> 
            </center>
          </td>
        </tr>
      </table>
      <table width="625">
        <!-- <tr>
          <td class="text2">Jember, 16 mei 2019</td>
        </tr> -->
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>

		</table>
		<table width="625">
      <br>
			<tr class="text2">
				<td>Nama </td>
				<td width="541">: <?= $pasien['nama'] ?></td>
			</tr>
			<tr>
				<td width="200">Tempat Lahir / Tanggal Lahir</td>
				<td width="525">: <?= $pasien['tempat_lahir'] ?> , <?= $pasien['ttl_pasien_gcu'] ?></td>
			</tr>
			<tr class="text2">
				<td>Alamat </td>
				<td width="541">: <?= $pasien['alamat_pasien_gcu'] ?></td>
			</tr>
			<tr>
				<td width="200">Kecamatan / Kab</td>
				<td width="525">: <?= $pasien['kecamatan_pasien_gcu'] ?> - <?= $pasien['kabupaten_pasien_gcu'] ?></td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			        <font size="2">Dalam Pemeriksaan Kesehatan dinyatakan CUKUP SEHAT / TIDAK CUKUP SEHAT JASMANI untuk :<br></font>
              <center>
                <br>
                <br>
					      <font size="2"> <b><?= $pasien['keperluan_pasien_gcu'] ?> </b></font><br>
              <center>
            </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			    
		       </td>
		    </tr>
		</table>
		<br>
		</table>
		<table>
      <br>
      <br>
      <br>
      <br>
      <table width="625">
        <tr>
          <td class="text2">Bangkalan, <?= $pasien['tgl_daftar_gcu'] ?></td>
        </tr>
      </table>
      <table width="625">
        <tr class="text2">
          <td>Berat Badan</td>
          <td width="525">: <?= $pasien['bb_pasien_gcu'] ?></td>
          <td width="200">Dokter Yang Memeriksa</td>
        </tr>
        <tr>
          <td>Tinggi Badan</td>
          <td width="525">: <?= $pasien['tb_pasien_gcu'] ?></td>
        </tr>
        <tr>
          <td>Pendengaran</td>
          <td width="525">: <?= $pasien['pendengaran_pasien_gcu'] ?></td>
        </tr>
        <tr>
          <td>Warna</td>
          <td width="525">: <?= $pasien['warna_pasien_gcu'] ?></td>
          <td>&nbsp;<u><b>dr.YULIA MAYASIN</u><br>NIP.197207082010012</b></td>
        </tr>
      </table>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
		       </td>
		    </tr>
		</table>
		<br>
		
	</center>
</body>
</html>