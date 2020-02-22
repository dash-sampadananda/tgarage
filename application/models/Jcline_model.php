<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jcline_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jcline by id
     */
    function get_jcline($id)
    {
        return $this->db->get_where('jcline',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all jcline
     */
    function get_all_jcline()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('jcline')->result_array();
    }
        
    /*
     * function to add new jcline
     */
    function add_jcline($params)
    {
        $this->db->insert('jcline',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jcline
     */
    function update_jcline($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('jcline',$params);
    }
    
    /*
     * function to delete jcline
     */
    function delete_jcline($id)
    {
        return $this->db->delete('jcline',array('id'=>$id));
    }
}