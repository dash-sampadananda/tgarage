<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Insurance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get insurance by id
     */
    function get_insurance($id)
    {
        return $this->db->get_where('insurance',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all insurance
     */
    function get_all_insurance()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('insurance')->result_array();
    }
        
    /*
     * function to add new insurance
     */
    function add_insurance($params)
    {
        $this->db->insert('insurance',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update insurance
     */
    function update_insurance($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('insurance',$params);
    }
    
    /*
     * function to delete insurance
     */
    function delete_insurance($id)
    {
        return $this->db->delete('insurance',array('id'=>$id));
    }
}