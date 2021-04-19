<?php

//include 'Base_model.php';

class Api_model extends Base_model{
    
    function __construct() {
        parent::__construct();
    }
    


    function getPageDetails($table,$data){

	    	 $this->db->select(
	            '
	            page_details.id as page_details_id, 
	            page_details.page_id,
	            page_details.page_heading,
	            page_details.page_tagline,
	            page_details.page_short_description,
	            page_details.page_description,
	            page_details.page_image,
	            page_details.page_banner,
	            page_details.status as pageDetailsStatus,
	            page_details.created_at as pageDetailsCreateAt,
	            page_details.updated_at as pageDetailsUpdateAt,

	            pages.id as pageid, 
	            pages.name, 
	            pages.page_slug, 
	            pages.meta_title,
	            pages.meta_keyword,
	            pages.meta_description,
	            pages.status as pageStatus,
	            pages.created_at as pageCreateAt,
	            pages.updated_at as pageUpdateAt,

	            ' 
	        );
	      $this->db->join('page_details','page_details.page_id = pages.id');
	      $this->db->where($data);
	      $q = $this->db->get($table);
	      return $q->result_array();

    }


}


?>