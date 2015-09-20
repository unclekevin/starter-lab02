<?php

/**
 * Description of Images
 *
 * @author Kevin
 */
class Images extends CI_Model {
    
    // constructor
    function _contruct()
    {
        parent::_construct();
    }
    
    // return all images, descending order by post date
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
}
