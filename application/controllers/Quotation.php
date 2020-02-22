<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Quotation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Quotation_model');
    } 

    /*
     * Listing of quotation
     */
    function index()
    {
        $data['quotation'] = $this->Quotation_model->get_all_quotation();
        
        $data['_view'] = 'quotation/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new quotation
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'createdate' => $this->input->post('createdate'),
				'approved' => $this->input->post('approved'),
				'approvedby' => $this->input->post('approvedby'),
				'approveddate' => $this->input->post('approveddate'),
				'jobcardno' => $this->input->post('jobcardno'),
            );
            
            $quotation_id = $this->Quotation_model->add_quotation($params);
            redirect('quotation/index');
        }
        else
        {            
            $data['_view'] = 'quotation/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a quotation
     */
    function edit($id)
    {   
        // check if the quotation exists before trying to edit it
        $data['quotation'] = $this->Quotation_model->get_quotation($id);
        
        if(isset($data['quotation']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'createdate' => $this->input->post('createdate'),
					'approved' => $this->input->post('approved'),
					'approvedby' => $this->input->post('approvedby'),
					'approveddate' => $this->input->post('approveddate'),
					'jobcardno' => $this->input->post('jobcardno'),
                );

                $this->Quotation_model->update_quotation($id,$params);            
                redirect('quotation/index');
            }
            else
            {
                $data['_view'] = 'quotation/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The quotation you are trying to edit does not exist.');
    } 

    /*
     * Deleting quotation
     */
    function remove($id)
    {
        $quotation = $this->Quotation_model->get_quotation($id);

        // check if the quotation exists before trying to delete it
        if(isset($quotation['id']))
        {
            $this->Quotation_model->delete_quotation($id);
            redirect('quotation/index');
        }
        else
            show_error('The quotation you are trying to delete does not exist.');
    }
    
}