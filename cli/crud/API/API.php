<?php
require_once __DIR__.'/query-builder/query.php';
require_once __DIR__.'/function.php';

$request_type = $_SERVER['REQUEST_METHOD'];
$params = explode('/',$_SERVER['REQUEST_URI']);
$resource = @$params[count(@$params)-2];
$id = @$params[count(@$params)-1];

switch($request_type):
case 'GET':
     process_get($id);
     break;
case 'POST':
     process_post();
     break;
case 'PUT':
     process_put();
     break;
case 'PATCH':
     process_patch();
     break;
case 'DELETE':
     process_delete();
     break;
default:
     die('Invalid Request');
     break;
endswitch;

function process_get($id=''){

     global $resource;
     $query = new Query();

     if($id==''){
          $records = $query->select('*')->table($resource)->allRecords();
     }
     
     if($id){
          $records = $query->select('*')->table($resource)->where('id',$id)->first();
     }

if($records==false){

     $response = array(
          'code'=>201,
          'status'=>false,
          'message'=>'Record Not Found for '.$resource,
          'data'=>[],
     );
}else{
     
     $response = array(
          'code'=>200,
          'status'=>true,
          'message'=>'Record Found',
          'data'=>$records,
     );
}

header("Content-Type:application/json");
http_response_code(200);
echo json_encode($response,JSON_PRETTY_PRINT);
exit();

}


function process_post(){

gobal $resourse;
      $query = new query();
	  try{
		 if($query->insert($resourse,$formdata)){
			 $id =$query->getId();
			$response =array(
			
			'code'=>200,
			'status'=>true,
			'message'=>'record inserted successfully.',
			'error'=>false,
			'data'=>[
			'id'=$id],
			);
	  }
	  else{
		  throw new exception();

	  }  
	  }
	  catch($exception $e){
		  		  $response =array(
			
			'code'=>201,
			'status'=>false,
			'message'=>'Cannot inserted Record.',
			'error'=>$e->getMassege(),
			'data'=>[]
			);
	  }
	 
	 header("Content-type:applcaion/JSON");
http-response_code(200);
echo json_decode($response,JSON_PRETTY_PRINT);
exit();	 


}


function process_put($id){
		gobal $resourse;
      $query = new query();
	  try{
		 if($query->update($resourse,$formdata)->where('id',$id)->commit()){
			$response =array(
			
			'code'=>200,
			'status'=>true,
			'message'=>'record updated successfully.',
			'error'=>false,
			'data'=>[
			'id'=$id,
			'name'=>$formdata['name'],
			'email'=>$formdata['email']
			],
			);
	  }
	  else{
		  throw new exception();

	  }  
	  }
	  catch(){
		  		  $response =array(
			
			'code'=>201,
			'status'=>false,
			'message'=>'record not updated .',
			'error'=>$e->getMassege(),
			'data'=>[]
			);
	  }
	 
	 header("Content-type:applcaion/JSON");
http-response_code(200);
echo json_decode($response,JSON_PRETTY_PRINT);
exit();	 
}

function process_patch(){

echo 'patch request';
}

function process_delete(){

echo 'delete Request';
}