<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bill extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bill_model');
    } 

    /*
     * Listing of bill
     */
    function index()
    {
        $data['bill'] = $this->Bill_model->get_all_bill();
        
        $data['_view'] = 'bill/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new bill
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'billno' => $this->input->post('billno'),
				'jobcardno' => $this->input->post('jobcardno'),
				'createddate' => $this->input->post('createddate'),
				'chequeno' => $this->input->post('chequeno'),
				'bankname' => $this->input->post('bankname'),
				'issettelted' => $this->input->post('issettelted'),
				'paymenttype' => $this->input->post('paymenttype'),
				'amount' => $this->input->post('amount'),
				'tax' => $this->input->post('tax'),
				'userid' => $this->input->post('userid'),
            );
            
            $bill_id = $this->Bill_model->add_bill($params);
            redirect('bill/index');
        }
        else
        {            
            $data['_view'] = 'bill/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a bill
     */
    function edit($id)
    {   
        // check if the bill exists before trying to edit it
        $data['bill'] = $this->Bill_model->get_bill($id);
        
        if(isset($data['bill']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'billno' => $this->input->post('billno'),
					'jobcardno' => $this->input->post('jobcardno'),
					'createddate' => $this->input->post('createddate'),
					'chequeno' => $this->input->post('chequeno'),
					'bankname' => $this->input->post('bankname'),
					'issettelted' => $this->input->post('issettelted'),
					'paymenttype' => $this->input->post('paymenttype'),
					'amount' => $this->input->post('amount'),
					'tax' => $this->input->post('tax'),
					'userid' => $this->input->post('userid'),
                );

                $this->Bill_model->update_bill($id,$params);            
                redirect('bill/index');
            }
            else
            {
                $data['_view'] = 'bill/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The bill you are trying to edit does not exist.');
    } 

    /*
     * Deleting bill
     */
    function remove($id)
    {
        $bill = $this->Bill_model->get_bill($id);

        // check if the bill exists before trying to delete it
        if(isset($bill['id']))
        {
            $this->Bill_model->delete_bill($id);
            redirect('bill/index');
        }
        else
            show_error('The bill you are trying to delete does not exist.');
    }
    
}