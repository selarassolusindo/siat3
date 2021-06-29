<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T04_armada extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T04_armada_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        // $this->load->view('t04_armada/t04_armada_list');
        $data['_view'] = 't04_armada/t04_armada_list';
        $data['_caption'] = 'Armada';
        $this->load->view('_00_dashboard/_00_dashboard', $data);
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->T04_armada_model->json();
    }

    public function read($id)
    {
        $row = $this->T04_armada_model->get_by_id($id);
        if ($row) {
            $data = array(
				'idarmada' => $row->idarmada,
				'merk' => $row->merk,
				'tipe' => $row->tipe,
				'tahun_pembuatan' => $row->tahun_pembuatan,
				'nomor_polisi' => $row->nomor_polisi,
				'nomor_rangka' => $row->nomor_rangka,
				'nomor_mesin' => $row->nomor_mesin,
				'tanggal_pembelian' => $row->tanggal_pembelian,
				'tanggal_jatuh_tempo_pajak' => $row->tanggal_jatuh_tempo_pajak,
				'tanggal_jatuh_tempo_kir' => $row->tanggal_jatuh_tempo_kir,
	    	);
            $this->load->view('t04_armada/t04_armada_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t04_armada'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('t04_armada/create_action'),
		    'idarmada' => set_value('idarmada'),
		    'merk' => set_value('merk'),
		    'tipe' => set_value('tipe'),
		    'tahun_pembuatan' => set_value('tahun_pembuatan'),
		    'nomor_polisi' => set_value('nomor_polisi'),
		    'nomor_rangka' => set_value('nomor_rangka'),
		    'nomor_mesin' => set_value('nomor_mesin'),
		    'tanggal_pembelian' => set_value('tanggal_pembelian'),
		    'tanggal_jatuh_tempo_pajak' => set_value('tanggal_jatuh_tempo_pajak'),
		    'tanggal_jatuh_tempo_kir' => set_value('tanggal_jatuh_tempo_kir'),
		);
        // $this->load->view('t04_armada/t04_armada_form', $data);
        $data['_view'] = 't04_armada/t04_armada_form';
        $data['_caption'] = 'Armada';
        $this->load->view('_00_dashboard/_00_dashboard', $data);
    }

    public function create_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'merk' => $this->input->post('merk',TRUE),
				'tipe' => $this->input->post('tipe',TRUE),
				'tahun_pembuatan' => $this->input->post('tahun_pembuatan',TRUE),
				'nomor_polisi' => $this->input->post('nomor_polisi',TRUE),
				'nomor_rangka' => $this->input->post('nomor_rangka',TRUE),
				'nomor_mesin' => $this->input->post('nomor_mesin',TRUE),
				'tanggal_pembelian' => $this->input->post('tanggal_pembelian',TRUE),
				'tanggal_jatuh_tempo_pajak' => $this->input->post('tanggal_jatuh_tempo_pajak',TRUE),
				'tanggal_jatuh_tempo_kir' => $this->input->post('tanggal_jatuh_tempo_kir',TRUE),
	    	);
            $this->T04_armada_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t04_armada'));
        }
    }

    public function update($id)
    {
        $row = $this->T04_armada_model->get_by_id($id);
        if ($row) {
            $data = array(
                'button' => 'Simpan',
                'action' => site_url('t04_armada/update_action'),
				'idarmada' => set_value('idarmada', $row->idarmada),
				'merk' => set_value('merk', $row->merk),
				'tipe' => set_value('tipe', $row->tipe),
				'tahun_pembuatan' => set_value('tahun_pembuatan', $row->tahun_pembuatan),
				'nomor_polisi' => set_value('nomor_polisi', $row->nomor_polisi),
				'nomor_rangka' => set_value('nomor_rangka', $row->nomor_rangka),
				'nomor_mesin' => set_value('nomor_mesin', $row->nomor_mesin),
				'tanggal_pembelian' => set_value('tanggal_pembelian', $row->tanggal_pembelian),
				'tanggal_jatuh_tempo_pajak' => set_value('tanggal_jatuh_tempo_pajak', $row->tanggal_jatuh_tempo_pajak),
				'tanggal_jatuh_tempo_kir' => set_value('tanggal_jatuh_tempo_kir', $row->tanggal_jatuh_tempo_kir),
	    	);
            // $this->load->view('t04_armada/t04_armada_form', $data);
            $data['_view'] = 't04_armada/t04_armada_form';
            $data['_caption'] = 'Armada';
            $this->load->view('_00_dashboard/_00_dashboard', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t04_armada'));
        }
    }

    public function update_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idarmada', TRUE));
        } else {
            $data = array(
				'merk' => $this->input->post('merk',TRUE),
				'tipe' => $this->input->post('tipe',TRUE),
				'tahun_pembuatan' => $this->input->post('tahun_pembuatan',TRUE),
				'nomor_polisi' => $this->input->post('nomor_polisi',TRUE),
				'nomor_rangka' => $this->input->post('nomor_rangka',TRUE),
				'nomor_mesin' => $this->input->post('nomor_mesin',TRUE),
				'tanggal_pembelian' => $this->input->post('tanggal_pembelian',TRUE),
				'tanggal_jatuh_tempo_pajak' => $this->input->post('tanggal_jatuh_tempo_pajak',TRUE),
				'tanggal_jatuh_tempo_kir' => $this->input->post('tanggal_jatuh_tempo_kir',TRUE),
	    	);
            $this->T04_armada_model->update($this->input->post('idarmada', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t04_armada'));
        }
    }

    public function delete($id)
    {
        $row = $this->T04_armada_model->get_by_id($id);
        if ($row) {
            $this->T04_armada_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t04_armada'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t04_armada'));
        }
    }

    public function _rules()
    {
		$this->form_validation->set_rules('merk', 'merk', 'trim|required');
		$this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
		$this->form_validation->set_rules('tahun_pembuatan', 'tahun pembuatan', 'trim|required');
		$this->form_validation->set_rules('nomor_polisi', 'nomor polisi', 'trim|required');
		$this->form_validation->set_rules('nomor_rangka', 'nomor rangka', 'trim|required');
		$this->form_validation->set_rules('nomor_mesin', 'nomor mesin', 'trim|required');
		$this->form_validation->set_rules('tanggal_pembelian', 'tanggal pembelian', 'trim|required');
		$this->form_validation->set_rules('tanggal_jatuh_tempo_pajak', 'tanggal jatuh tempo pajak', 'trim|required');
		$this->form_validation->set_rules('tanggal_jatuh_tempo_kir', 'tanggal jatuh tempo kir', 'trim|required');
		$this->form_validation->set_rules('idarmada', 'idarmada', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file T04_armada.php */
/* Location: ./application/controllers/T04_armada.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-06-29 20:11:34 */
/* http://harviacode.com */