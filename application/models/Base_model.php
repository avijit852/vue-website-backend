<?php
class Base_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    //To Get data ::
    function _get($table,$data,$params=[],$pagination=[],$select="*"){
        
        $this->db->select($select);
        
        if(!empty($params)){

            if($params['order']['type'] == 'desc'){
                $this->db->order_by($params['order']['orderby'], "desc");
            }else if($params['order']['type'] == 'asc'){
                $this->db->order_by($params['order']['orderby'], "asc");
            }
            
        }

        if(!empty($pagination)){
            $this->db->limit($pagination['pagination']['limit'], $pagination['pagination']['page']); 
        }
        

        $q = $this->db->get_where($table, $data);
        return $q->result_array();
    }
    

    //TO insert data
    function _set_insert($table,$data){
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    

    //to delete data
    function _set_delete($table,$data){
        $this->db->where($data);
        $this->db->delete($table);
        return $this->db->affected_rows();
    }
    

    //to update data
    function _set_update($table, $data, $condition){
        $this->db->where($condition);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }
}

?>