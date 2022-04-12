<?php
class Db_model extends CI_Model
{
    public function ambil_data($tabel)
    {
        $date= date('Y-m-d');
        return $this->db->get_where($tabel, array ('tgl_daftar_swab'=> $date));
    }
    
    public function ambil_data_belumambilobat($tabel)
    {
        return $this->db->get($tabel);
    }
    
    public function all_data($tabel)
    {
        return $this->db->get($tabel);
    }

    public function save_upload($id_karyawan,$nama,$email,$password,$rule,$foto,$status){
        $data =array('id_karyawan' => $id_karyawan, 'nama'=>$nama, 'email'=>$email, 'password'=>$password, 'rule'=>$rule, 'foto'=>$foto, 'status'=>$status );

        $result =$this->db->insert('karyawan',$data);
        return $result;

    }

    public function dataKaryawan()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function datapelatihan()
    {
        $this->db->select('*');
        $this->db->from('v_pelatihan_karyawan');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function datareguler()
    {
        $this->db->select('*');
        $this->db->from('v_kenaikan_reguler');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function datafungsional()
    {
        $this->db->select('*');
        $this->db->from('v_kenaikan_fungsional');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function databerkala()
    {
        $this->db->select('*');
        $this->db->from('v_berkala_karyawan');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function datariwayat()
    {
        $this->db->select('*');
        $this->db->from('v_riwayat_kerja_karyawan');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function databerhenti()
    {
        $this->db->select('*');
        $this->db->from('v_berhenti_karyawan');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function datacuti()
    {
        $this->db->select('*');
        $this->db->from('v_cuti_karyawan');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function datapns()
    {
        $this->db->select('*');
        $this->db->from('v_total_pns');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }
    public function datacpns()
    {
        $this->db->select('*');
        $this->db->from('v_total_cpns');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }

    public function datapppk()
    {
        $this->db->select('*');
        $this->db->from('v_total_pppk');
        $this->db->order_by('id', 'asc');
        $data = $this->db->get('');
        return $data;
    }
    
    public function all_data_karyawan($tabel)
    {
        $query = $this->db->get('karyawan');
        $result=$query->result_array();
        return $result;
    }

    public function get($tabel)
    {
        return $this->db->get($tabel);
    }


    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_query($query)
    {
        return $this->db->query($query);
    }

    public function get_all($tabel)
    {
        return $this->db->get($tabel);
    }

    public function update($tabel, $data, $where)
    {
        $this->db->update($tabel, $data, $where);
    }

    public function delete($tabel, $where)
    {
        $this->db->delete($tabel, $where);
    }
    public function insert_get($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }
    // function getWarningStock($tabel)
    // {
    //     $this->db->order_by('stok_barang ASC');
    //     $this->db->limit(10, 0);
    //     return $this->db->get($tabel);
    // }

    // function getTerlaris()
    // {
    //     $this->db->select('*, SUM(jumlah_penjualan)');
    //     $this->db->group_by('id_barang');
    //     $this->db->order_by('jumlah_penjualan DESC');
    //     return $this->db->get('tbl_penjualan', 10);
    // }

    // function getJumlahTerjual()
    // {
    //     $this->db->select('SUM(jumlah_penjualan)');
    //     $this->db->where('tgl_penjualan', date("Y/m/d"));
    //     $this->db->group_by('tgl_penjualan');
    //     return $this->db->get('tbl_penjualan');
    // }
}
