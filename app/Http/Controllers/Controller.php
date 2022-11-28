<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



  protected function datasearch($model, $cols, $request)
  {
		  foreach($cols as $col){
				  if($request->get($col) !='')
				  $model->where($col, 'LIKE','%'.$request->get($col).'%');  		
					
		  }
		 return $model;
  }


  protected function setValidatorError($validator, $flag=0)
   {
		
		$errormsg = array();

	    $error_msg = 'Error';
	        $errors =  json_decode($validator->errors());
	        if($errors){
	            $errors = (array) $errors;
	            foreach($errors as $r){
	                $error_msg = $r[0];
	                break;
	            }
	        }

			if($flag == 1){

	        return response()->json([
	                'status' => false,
	                'message' => $error_msg,
	                'data'    => (object)array(),
	        ]);


			}else{
				return $error_msg;
			}
	}



}


