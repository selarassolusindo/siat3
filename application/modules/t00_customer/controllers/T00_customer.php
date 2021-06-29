<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T00_customer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T00_customer_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        // $this->load->view('t00_customer/t00_customer_list');
        $data['_view'] = 't00_customer/t00_customer_list';
        $data['_caption'] = 'Customer';
        $this->load->view('_00_dashboard/_00_dashboard', $data);
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->T00_customer_model->json();
    }

    public function read($id)
    {
        $row = $this->T00_customer_model->get_by_id($id);
        if ($row) {
            $data = array(
				'idcustomer' => $row->idcustomer,
				'nama' => $row->nama,
				'alamat' => $row->alamat,
				'kota' => $row->kota,
				'contact_person' => $row->contact_person,
				'telepon' => $row->telepon,
	    	);
            $this->load->view('t00_customer/t00_customer_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t00_customer'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('t00_customer/create_action'),
		    'idcustomer' => set_value('idcustomer'),
		    'nama' => set_value('nama'),
		    'alamat' => set_value('alamat'),
		    'kota' => set_value('kota'),
		    'contact_person' => set_value('contact_person'),
		    'telepon' => set_value('telepon'),
		);
        // $this->load->view('t00_customer/t00_customer_form', $data);
        $data['_view'] = 't00_customer/t00_customer_form';
        $data['_caption'] = 'Customer';
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
            $this->T00_customer_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t00_customer'));
        }
    }

    public function update($id)
    {
        $row = $this->T00_customer_model->get_by_id($id);
        if ($row) {
            $data = array(
                'button' => 'Simpan',
                'action' => site_url('t00_customer/update_action'),
				'idcustomer' => set_value('idcustomer', $row->idcustomer),
				'nama' => set_value('nama', $row->nama),
				'alamat' => set_value('alamat', $row->alamat),
				'kota' => set_value('kota', $row->kota),
				'contact_person' => set_value('contact_person', $row->contact_person),
				'telepon' => set_value('telepon', $row->telepon),
	    	);
            // $this->load->view('t00_customer/t00_customer_form', $data);
            $data['_view'] = 't00_customer/t00_customer_form';
            $data['_caption'] = 'Customer';
            $this->load->view('_00_dashboard/_00_dashboard', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t00_customer'));
        }
    }

    public function update_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idcustomer', TRUE));
        } else {
            $data = array(
				'nama' => $this->input->post('nama',TRUE),
				'alamat' => $this->input->post('alamat',TRUE),
				'kota' => $this->input->post('kota',TRUE),
				'contact_person' => $this->input->post('contact_person',TRUE),
				'telepon' => $this->input->post('telepon',TRUE),
	    	);
            $this->T00_customer_model->update($this->input->post('idcustomer', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t00_customer'));
        }
    }

    public function delete($id)
    {
        $row = $this->T00_customer_model->get_by_id($id);
        if ($row) {
            $this->T00_customer_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t00_customer'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t00_customer'));
        }
    }

    public function _rules()
    {
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('contact_person', 'contact person', 'trim|required');
		$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
		$this->form_validation->set_rules('idcustomer', 'idcustomer', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file T00_customer.php */
/* Location: ./application/controllers/T00_customer.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-06-29 06:08:42 */
/* http://harviacode.com */