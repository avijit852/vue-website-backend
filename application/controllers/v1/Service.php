<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * This class is for writing all the methods for web services
 *
 * @author Avijit das
 */
/*
 * Add error_reporting to track error in code
 */
error_reporting(E_ALL);
/*
 * Specify domains from which requests are allowed
 */
header('Access-Control-Allow-Origin: *');
/*
 * Specify which request methods are allowed
 */
// header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
/*
 * Additional headers which may be sent along with the CORS request
 * The X-Requested-With header allows jQuery requests to go through
 */

header("Access-Control-Allow-Headers: *");
/*
 * Additional header for app
 */
header('Content-Type:application/json');




// include 'Base_controller.php';

class Service extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('string');
        $this->load->model('Auth_model');
        $this->load->model('Api_model');

    }

    public  function index(){

    		$method = $_SERVER['REQUEST_METHOD'];

    		if($method == 'POST'){

    			$data = json_decode(file_get_contents("php://input"), true);
    			$action = $data['action'];


    			switch ($action) {


				  case "getService":
				  	$data = ['status'=>'Y'];
                    $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];

					$result = $this->Auth_model->_get('service', $data, $params);
				  	if($result){
				  		echo json_encode(['status' => '1', 'data' => $result ]);
				  	}else{
				  		echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);	
				  	}
				    break;

                  case "getServicebyLimit":
                    $start = $data['start']; 
                    $data = ['status'=>'Y'];
                    $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
                    $pagination = ['pagination'=>[ 'limit'=>4, 'page'=>$start ]];

                    $result = $this->Auth_model->_get('service', $data, $params, $pagination);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);    
                    }
                    break;


                  case "getSingleSerivce": 
                    $data = ['service_slug'=>$data['slug']];
                    $result = $this->Auth_model->_get('service', $data);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result, 'msg' => 'record found']);
                    }else{
                        echo json_encode(['status' => '0', 'data' => 'no record found ', 'msg' => 'Server problem here']);    
                    }
                    break;



				  case "getPortfolio":
                    $data = ['status'=>'Y'];
                    $params = [
                        'order'=>[ 'type'=>'desc','orderby'=>'id'],
                    ];
                    $result = $this->Auth_model->_get('portfolio', $data, $params);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);    
                    }
				    break;

                  case "getPortfolioByLimit":

                    $start = $data['start'];
                    $data = ['status'=>'Y'];
                    $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
                    $pagination = ['pagination'=>[ 'limit'=>4, 'page'=>$start ]];
                    $result = $this->Auth_model->_get('portfolio', $data, $params, $pagination);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);    
                    }

                    break;



                  case "getSinglePortfolio": 
                    $status = ['portfolio_slug'=>$data['slug']];
                    $result = $this->Auth_model->_get('portfolio', $status);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);    
                    }
                    break;



                  case "getBlogs":
                    $data = ['status'=>'Y'];
                    $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
                    $result = $this->Auth_model->_get('blogs', $data,$params);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);    
                    }
                    break;

                     

                  case "getBlogsByLimit":
                    $start = $data['start'];
                    $data = ['status'=>'Y'];
                    $params = ['order'=>[ 'type'=>'desc','orderby'=>'id'],];
                    $pagination = ['pagination'=>[ 'limit'=>4, 'page'=>$start ]];
                    $result = $this->Auth_model->_get('blogs', $data,$params, $pagination);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);    
                    }
                    break;


                  case "getSingleBlogs": 
                    $status = ['blogs_slug'=>$data['slug']];
                    $result = $this->Auth_model->_get('blogs', $status);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => ['msg' => 'Server problem here']]);    
                    }
                    break;


                  case "getSlider":
                    $data = ['status'=>'Y'];
                    $params = ['order'=>[ 'type'=>'asc','orderby'=>'slider_position'],];
                    $result = $this->Auth_model->_get('slider', $data, $params);
                    if($result){
                        echo json_encode(['status' => '1', 'data' => $result,'msg' => 'Server Properly Work' ]);
                    }else{
                        echo json_encode(['status' => '0', 'data' => 'No Data Found','msg' => 'Server problem here']);    
                    }
                    break;


                  case "insertAskQry": 
                    $name = $data['name'];
                    $email = $data['email'];
                    $phone = $data['phone'];
                    $msg = $data['message'];

                    if($email){

                        $askQryEmail = [
                            'askquery_email'=>$email
                        ];

                        $result = $this->Auth_model->_get('askquery', $askQryEmail);

                        // echo json_encode(['data' => $result ]);

                        if(!empty($result)){
                            // echo json_encode(['data' => 'askmsg' ]);

                            $primaryId_askQry = $result[0]['id'];

                            if($msg && $primaryId_askQry ){

                                $data=[
                                    'askquery_id'=> $primaryId_askQry,
                                    'askmsg_msg'=>$msg,
                                    'askmsg_reply'=>'',
                                    'created_at'=>date('Y-m-d H:i:s')
                                ];

                                $askmsg = $this->Auth_model->_set_insert('askmsg',$data);

                                if($askmsg){

                                    $askQryUpdate = [
                                        'askquery_iscomplete'=>'Y'
                                    ];

                                    $condition = [
                                        'id '=>$primaryId_askQry
                                    ];


                                    $updateAskQry = $this->Auth_model->_set_update('askquery',$askQryUpdate,$condition);

                                    echo json_encode(['status' => '1', 'data' => 'submit successfully' , 'msg'=>'Message submited']);
                                }
                            }
                        }

                        if(empty($result)){

                            // echo json_encode(['data' => 'askqry' ]);

                            $askQryData=[
                                'askquery_name'=>$name,
                                'askquery_email'=>$email,
                                'askquery_phone'=>$phone,
                                'created_at'=>date('Y-m-d H:i:S')
                            ];
                            
                            $askQryId = $this->Auth_model->_set_insert('askquery',$askQryData);

                            if(!empty($askQryId) && $msg){

                                $askMsgData=[
                                    'askquery_id'=> $askQryId,
                                    'askmsg_msg'=>$msg,
                                    'askmsg_reply'=>'',
                                    'created_at'=>date('Y-m-d H:i:s')
                                    ];

                                $askmsg = $this->Auth_model->_set_insert('askmsg',$askMsgData);

                                if($askmsg){

                                    $askQryUpdate = [
                                        'askquery_iscomplete'=>'Y'
                                    ];

                                    $condition = [
                                        'id '=>$askQryId
                                    ];


                                    $updateAskQry = $this->Auth_model->_set_update('askquery',$askQryUpdate,$condition);

                                    echo json_encode(['status' => '1', 'data' => 'submit successfully' , 'msg'=>'Message submited']);
                                }


                            }else{

                                echo json_encode(['status' => '1', 'data' => 'submit successfully' , 'msg'=>'Message not submited']);
                            }

                        }
                    }else{
                        echo json_encode(['status' => '200', 'data' => 'Sorry we are not found on your email',  'msg' => 'Api default value' ]);
                    }
                    break;


                  case "insertContact":
                        $name = $data["name"];
                        $email = $data["email"];
                        $phone = $data["phone"];
                        $subject = $data["subject"];
                        $message = $data["message"];

                        if($email){

                            $contactData=[
                                    'cd_name'=> $name,
                                    'cd_email'=>$email,
                                    'cd_phone'=>$phone,
                                    'cd_sub'=>$subject,
                                    'cd_message'=>$message,
                                    'created_at'=>date('Y-m-d H:i:s')
                                ];

                            $insertContact = $this->Auth_model->_set_insert('contactdetails',$contactData);

                            if($insertContact){
                                echo json_encode(['status' => '200', 'data' => 'successfully insert',  'msg' => '' ]);
                            }else{
                                echo json_encode(['status' => '200', 'data' => 'there is some problem',  'msg' => '' ]);
                            }
                        }
                    break;


                  case "getPage":
                        $pageName = $data["pagename"];
                        $Pagedata=[
                            'pages.name'=>$pageName,
                        ];
                        $getDetails = $this->Api_model->getPageDetails('pages',$Pagedata);

                        if($getDetails){
                            echo json_encode(['status' => '200', 'data' => $getDetails,  'msg' => 'successfully get data' ]);
                        }else{
                            echo json_encode(['status' => '200', 'data' => 'there is some problem',  'msg' => 'faield to fetch' ]);
                        }
                    break;

				  default:
				    echo json_encode(['status' => '200', 'data' => '',  'msg' => 'Api default value' ]); 
				}


    		}
    		else if($method == 'GET'){


    		}
    		else{
    			echo json_encode(['status' => 0, 'msg' => "Pleasecheck Network"]);
    		}
    		
    }

}