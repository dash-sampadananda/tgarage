<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Qline extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Qline_model');
    } 

    /*
     * Listing of qline
     */
    function index()
    {
        $data['qline'] = $this->Qline_model->get_all_qline();
        
        $data['_view'] = 'qline/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new qline
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'quotationid' => $this->input->post('quotationid'),
				'description' => $this->input->post('description'),
				'qty' => $this->input->post('qty'),
				'cost' => $this->input->post('cost'),
				'deleted' => $this->input->post('deleted'),
            );
            
            $qline_id = $this->Qline_model->add_qline($params);
            redirect('qline/index');
        }
        else
        {            
            $data['_view'] = 'qline/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a qline
     */
    function edit($id)
    {   
        // check if the qline exists before trying to edit it
        $data['qline'] = $this->Qline_model->get_qline($id);
        
        if(isset($data['qline']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'quotationid' => $this->input->post('quotationid'),
					'description' => $this->input->post('description'),
					'qty' => $this->input->post('qty'),
					'cost' => $this->input->post('cost'),
					'deleted' => $this->input->post('deleted'),
                );

                $this->Qline_model->update_qline($id,$params);            
                redirect('qline/index');
            }
            else
            {
                $data['_view'] = 'qline/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The qline you are trying to edit does not exist.');
    } 

    /*
     * Deleting qline
     */
    function remove($id)
    {
        $qline = $this->Qline_model->get_qline($id);

        // check if the qline exists before trying to delete it
        if(isset($qline['id']))
        {
            $this->Qline_model->delete_qline($id);
            redirect('qline/index');
        }
        else
            show_error('The qline you are trying to delete does not exist.');
    }
    
}
