<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Lead_update;


class LeadController extends Controller
{
    //
    public function index()
	{
		return view('admin.leads');
	}


    // This Function use for the Lead Update
	public function leadUpdate(Request $request)
    {
    	$customMessages = [
        					'name.required' 	      => 'Name field is required.',
        					'email.required'          => 'Email field is required.',
                            'mobile.required'         => 'Mobile No field is required.',
                            'source.required'         => 'Source No field is required.',
                            'description.required'    => 'Description No field is required.',
        					'status.unique' 	      => 'Status field is required.'
    					];

		$validator = Validator::make($request->all(),[
            'name' 	         => ['required', 'string', 'max:255'],
            'email'          => ['required', 'email'],
            'mobile'         => ['required', 'numeric', 'min:10'],
            'source'         => ['required', 'string'],
            'description'    => ['required', 'string'],
            'status'         => ['required'],
        ], $customMessages);

        if($validator->fails())
              return $this->setValidatorError($validator,1);

         if($request->id =='') 
         	$data = new Lead;
         else
         $data =  Lead::find($request->id);

         $data->name 		 = $request->name;
         $data->email 	     = $request->email;
         $data->mobile 	     = $request->mobile;
         $data->source       = $request->source;
         $data->description  = $request->description;
         $data->status       = $request->status;
         $data->created_at	 = now();
         $data->save();

         $msg = $request->id =='' ? 'Add' : 'Updated';
         return response()->json([
                        'status'  => true,
                        'message' => 'Lead '.$msg.' Successfully',
                        'data'    => $data,        
                        ]);
    }


    // This function use for the Post Update
    public function postUpdate(Request $request)
    {
        $customMessages = [
                            'user_name.required'    => 'Update lead by User Name field is required.',
                            'lead_message.required' => 'Update lead message field is required.',
                            'lead_status.unique'    => 'Update lead Status'
                        ];

        $validator = Validator::make($request->all(),[
            'user_name'      => ['required', 'string', 'max:255',],
            'lead_message'   => ['required', 'string'],
            'lead_status'    => ['required'],
        ], $customMessages);

        if($validator->fails())
              return $this->setValidatorError($validator,1);

         if($request->id =='') 
            $data = new Lead_update;
         else
         $data =  Lead_update::find($request->id);

         $data->user_name       = $request->user_name;
         $data->lead_message    = $request->lead_message;
         $data->lead_status     = $request->lead_status;
         $data->leads_id        = $request->leads_id;
         $data->created_at      = now();
         $data->save();

         $msg = $request->id =='' ? 'Added' : 'Updated';
         return response()->json([
                        'status'  => true,
                        'message' => 'Post Lead '.$msg.' Successfully',
                        'data'    => $data,        
                        ]);
    }



}
