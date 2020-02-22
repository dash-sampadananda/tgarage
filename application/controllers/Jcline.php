<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jcline extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jcline_model');
    } 

    /*
     * Listing of jcline
     */
    function index()
    {
        $data['jcline'] = $this->Jcline_model->get_all_jcline();
        
        $data['_view'] = 'jcline/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new jcline
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'workname' => $this->input->post('workname'),
				'description' => $this->input->post('description'),
            );
            
            $jcline_id = $this->Jcline_model->add_jcline($params);
            redirect('jcline/index');
        }
        else
        {            
            $data['_view'] = 'jcline/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a jcline
     */
    function edit($id)
    {   
        // check if the jcline exists before trying to edit it
        $data['jcline'] = $this->Jcline_model->get_jcline($id);
        
        if(isset($data['jcline']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'workname' => $this->input->post('workname'),
					'description' => $this->input->post('description'),
                );

                $this->Jcline_model->update_jcline($id,$params);            
                redirect('jcline/index');
            }
            else
            {
                $data['_view'] = 'jcline/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The jcline you are trying to edit does not exist.');
    } 

    /*
     * Deleting jcline
     */
    function remove($id)
    {
        $jcline = $this->Jcline_model->get_jcline($id);

        // check if the jcline exists before trying to delete it
        if(isset($jcline['id']))
        {
            $this->Jcline_model->delete_jcline($id);
            redirect('jcline/index');
        }
        else
            show_error('The jcline you are trying to delete does not exist.');
    }
    
}