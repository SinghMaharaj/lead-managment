<?php 
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Lead_update;


class ApiController extends Controller{
    
	private function get_lead($request){

			$draw = $request->get('draw');
			$start = $request->get('start');
			$length = $request->get('length');
			$data = Lead::orderby('id', 'desc');
			$data_count = $data->count();
			$data  = $this->datasearch($data, ['name','email'], $request);
			$recordsFiltered = $data->count();

			$data->offset($start)->limit($length);
			
			$data = $data->get()->toArray();

			foreach($data as $key=>$row)
			{
				$data[$key]['date'] = date('d-m-Y h:i A', strtotime($row['created_at'])); 
			}


			return response()->json([
				'status' => true,
				'message' => 'Success',
				'data'=> $data,
				'length'=>$length,
				'recordsTotal'=>$data_count,
				'recordsFiltered'=>$recordsFiltered,
				'draw'=>$draw
		]);
 
	}


	private function getLeadDetail($request, $id)
	{
		$data = array();
		$lead = Lead::where('id', $id)->first();
		$update_data = Lead_update::where('leads_id', $lead['id'])->get()->toarray();
		$lead['lead_date'] = date('d-m-Y : h:i A', strtotime($lead['created_at']));
		$all_d = [];
		foreach($update_data as $updateleadData)
			{
				$row['user_name'] 		= $updateleadData['user_name']; 
				$row['lead_message'] 	= $updateleadData['lead_message'];
				$row['lead_status'] 	= $updateleadData['lead_status']; 
				$row['update_date'] 	= date('d-m-Y h:i A', strtotime($updateleadData['created_at'])); 
				$all_d[] = $row;
			} 
		$data['lead'] = $lead;
		$data['update_data'] = $all_d;
		return response()->json([
				'status' => true,
				'message' => 'Success',
				'data'=> $data,
		]);

	}


	public function ajax_get_data(Request $request, $type = NULL, $id = NULL)
    {
			if($type == 'lead')
				return $this->get_lead($request);
			else if($type == 'leadDetail')
				return $this->getLeadDetail($request,$id);
    }


}
