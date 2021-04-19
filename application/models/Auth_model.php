<?php

//include 'Base_model.php';

class Auth_model extends Base_model{
    
    function __construct() {
        parent::__construct();
    }
    

    //Get Contact Details
    function getContact($tableName, $tableConditionData){

        $this->db->select('id,cd_email,cd_name,created_at');
        $this->db->group_by('cd_email'); 
        $this->db->where($tableConditionData);
        $q = $this->db->get($tableName);
        return $q->result_array();
    }


    function get_pageDetails(){

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
      $this->db->order_by('page_details.id','desc');
      $this->db->join('pages','pages.id = page_details.page_id');
      $this->db->where(['page_details.status'=>'Y']);
      $q = $this->db->get('page_details');
      return $q->result_array();

    }


  //   function last_week_data($table,$data){
  //   	$this->db->select('*');
  //   	$this->db->order_by('field_id','desc');
		// $this->db->where('field_today_date BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
		// $this->db->where($data);
		// $q = $this->db->get($table);
		// return $q->result_array();
  //   }


  //   function last_week_data_csv($table,$data){
  //   	$this->db->select('field_today_date,field_job_id,field_phase_id,field_category_id,field_job_name,field_start_work,field_end_work,field_travel_start,field_travel_end,field_mileage');
  //   	$this->db->order_by('field_id','desc');
		// $this->db->where('field_today_date BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
		// $this->db->where($data);
		// $q = $this->db->get($table);
		// return $q->result_array();
  //   }


    // function getQueryAndMsg(){
    //     // $this->db->order_by('book_id', 'desc');
    //     $this->db->order_by('id','desc');
    //     $q = $this->db->get_where('askquery', ['status'=>'Y']);
    //     return $q->result_array();
    // }

    // function getQueryAndMsg(){

    //   $this->db->select(
    //     'askquery.id as qryid, 
    //     askquery.askquery_name, 
    //     askquery.askquery_email, 
    //     askquery.askquery_phone, 
    //     askquery.askquery_iscomplete,
    //     askquery.created_at as qrycreated_at,
    //     askquery.status as qry_status,
    //     askmsg.id as msgid,
    //     askmsg.askquery_id,
    //     askmsg.askmsg_msg,
    //     askmsg.askmsg_reply,
    //     askmsg.askmsg_isreply,
    //     askmsg.created_at as msgcreated_at,
    //     askmsg.status as msgStatus
    //     '
    //   );
    //   $this->db->order_by('askquery.id','desc');
    //   $this->db->join('askmsg','askmsg.askquery_id = askquery.id');
    //   $this->db->where(['askquery.status'=>'Y']);
    //   $q = $this->db->get('askquery');
    //   return $q->result_array();

    // }

    
}

?>