<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T02_vendor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T02_vendor_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        // $this->load->view('t02_vendor/t02_vendor_list');
        $data['_view'] = 't02_vendor/t02_vendor_list';
        $data['_caption'] = 'Vendor';
        $this->load->view('_00_dashboard/_00_dashboard', $data);
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->T02_vendor_model->json();
    }

    public function read($id)
    {
        $row = $this->T02_vendor_model->get_by_id($id);
        if ($row) {
            $data = array(
				'idvendor' => $row->idvendor,
				'nama' => $row->nama,
				'alamat' => $row->alamat,
				'kota' => $row->kota,
				'contact_person' => $row->contact_person,
				'telepon' => $row->telepon,
	    	);
            $this->load->view('t02_vendor/t02_vendor_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t02_vendor'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('t02_vendor/create_action'),
		    'idvendor' => set_value('idvendor'),
		    'nama' => set_value('nama'),
		    'alamat' => set_value('alamat'),
		    'kota' => set_value('kota'),
		    'contact_person' => set_value('contact_person'),
		    'telepon' => set_value('telepon'),
		);
        // $this->load->view('t02_vendor/t02_vendor_form', $data);
        $data['_view'] = 't02_vendor/t02_vendor_form';
        $data['_caption'] = 'Vendor';
        $this->load->view('_00_dashboard/_00_dashboard', $data);
    }

    public function create_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'nama' => $this->input->post('nama',TRUE),
				'alamat' => $this->input->post('alamat',TRUE),
				'kota' => $this->input->post('kota',TRUE),
				'contact_person' => $this->input->post('contact_person',TRUE),
				'telepon' => $this->input->post('telepon',TRUE),
	    	);
            $this->T02_vendor_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t02_vendor'));
        }
    }

    public function update($id)
    {
        $row = $this->T02_vendor_model->get_by_id($id);
        if ($row) {
            $data = array(
                'button' => 'Simpan',
                'action' => site_url('t02_vendor/update_action'),
				'idvendor' => set_value('idvendor', $row->idvendor),
				'nama' => set_value('nama', $row->nama),
				'alamat' => set_value('alamat', $row->alamat),
				'kota' => set_value('kota', $row->kota),
				'contact_person' => set_value('contact_person', $row->contact_person),
				'telepon' => set_value('telepon', $row->telepon),
	    	);
            // $this->load->view('t02_vendor/t02_vendor_form', $data);
            $data['_view'] = 't02_vendor/t02_vendor_form';
            $data['_caption'] = 'Vendor';
            $this->load->view('_00_dashboard/_00_dashboard', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t02_vendor'));
        }
    }

    public function update_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idvendor', TRUE));
        } else {
            $data = array(
				'nama' => $this->input->post('nama',TRUE),
				'alamat' => $this->input->post('alamat',TRUE),
				'kota' => $this->input->post('kota',TRUE),
				'contact_person' => $this->input->post('contact_person',TRUE),
				'telepon' => $this->input->post('telepon',TRUE),
	    	);
            $this->T02_vendor_model->update($this->input->post('idvendor', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t02_vendor'));
        }
    }

    public function delete($id)
    {
        $row = $this->T02_vendor_model->get_by_id($id);
        if ($row) {
            $this->T02_vendor_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t02_vendor'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t02_vendor'));
        }
    }

    public function _rules()
    {
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('contact_person', 'contact person', 'trim|required');
		$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
		$this->form_validation->set_rules('idvendor', 'idvendor', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file T02_vendor.php */
/* Location: ./application/controllers/T02_vendor.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-06-29 16:28:39 */
/* http://harviacode.com */