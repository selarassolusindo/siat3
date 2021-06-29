<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T05_satuan_model extends CI_Model
{

    public $table = 't05_satuan';
    public $id = 'idsatuan';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('idsatuan,satuan,kode,tipe');
        $this->datatables->from('t05_satuan');
		if (isset($_POST['idsatuan']) && $_POST['idsatuan'] != '') { $this->datatables->like('idsatuan', $_POST['idsatuan']); }
		if (isset($_POST['satuan']) && $_POST['satuan'] != '') { $this->datatables->like('satuan', $_POST['satuan']); }
		if (isset($_POST['kode']) && $_POST['kode'] != '') { $this->datatables->like('kode', $_POST['kode']); }
		if (isset($_POST['tipe']) && $_POST['tipe'] != '') { $this->datatables->like('tipe', $_POST['tipe']); }
        //add this line for join
        //$this->datatables->join('table2', 't05_satuan.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('t05_satuan/update/$1'),'Ubah')." | ".anchor(site_url('t05_satuan/delete/$1'),'Hapus','onclick="javascript: return confirm(\'Apakah Anda yakin ingin menghapus data ?\')"'), 'idsatuan');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('idsatuan', $q);
		$this->db->or_like('satuan', $q);
		$this->db->or_like('kode', $q);
		$this->db->or_like('tipe', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('idsatuan', $q);
		$this->db->or_like('satuan', $q);
		$this->db->or_like('kode', $q);
		$this->db->or_like('tipe', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file T05_satuan_model.php */
/* Location: ./application/models/T05_satuan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-06-29 22:20:02 */
/* http://harviacode.com */