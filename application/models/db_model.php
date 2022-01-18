<?php
class Db_model extends CI_Model
{
    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function insert_get($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }
    public function get_query($query)
    {
        return $this->db->query($query);
    }

    public function get_all($tabel)
    {
        return $this->db->get($tabel);
    }

    public function get_group($tabel, $order)
    {
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->group_by($order);
        return $this->db->get();
    }

    public function get_tbl_pasien($tabel, $order, $tgl, $dokter, $kec, $diagnosa)
    {
        $this->db->select('*');
        $this->db->from($tabel);
        if ($tgl != null) {
            $this->db->where('tanggal_antri', $tgl);
        }
        if ($dokter != null) {
            $this->db->where('id_dokter', $dokter);
        }
        if ($kec != null) {
            $this->db->where('id_kecamatan', $kec);
        }
        if ($diagnosa != null) {
            $this->db->where('diagnosa', $diagnosa);
        }
        $this->db->group_by($order);
        return $this->db->get();
    }

    public function update($tabel, $data, $where)
    {
        $this->db->update($tabel, $data, $where);
    }

    public function delete($tabel, $where)
    {
        $this->db->delete($tabel, $where);
    }

    public function keuntunganHariIni($tanggalMulai, $tanggalSelesai)
    {
        $this->db->order_by("tanggal DESC");
        $this->db->select("SUM(harga)");
        $this->db->from("vw_transaksi");
        $this->db->where(['tanggal >=' => $tanggalMulai, 'tanggal <=' => $tanggalSelesai]);
        return $this->db->get()->row_array()["SUM(harga)"];
    }

    public function pasienByKecamatan()
    {
        $this->db->select("tbl_kecamatan.KECAMATAN, COUNT(nama)");
        $this->db->from("tbl_pasien");
        $this->db->join("tbl_kecamatan", "tbl_kecamatan.id = tbl_pasien.kecamatan");
        $this->db->group_by("tbl_pasien.kecamatan");
        return $this->db->get();
    }

    public function praktekByDokter()
    {
        $this->db->select("tbl_user.nama, COUNT(id_antrian)");
        $this->db->from("tbl_user");
        $this->db->join("tbl_antrian", "tbl_antrian.id_user = tbl_user.id_user");
        $this->db->group_by("tbl_antrian.id_user");
        return $this->db->get();
    }
}
