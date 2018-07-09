<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sender;
use App\Receiver;
use App\Item;
use App\Shipment;
use DB;
use Carbon\Carbon;

class shipmentsController extends Controller
{
    
	public function addShipment(Request $request){

		$now = Carbon::now()->toDateTimeString();
		$sender_id = Sender::insertGetId(["first_name"=>$request->first_name, "other_name"=>$request->other_name, "last_name"=>$request->last_name,"sender_address"=>$request->sender_address, "sender_phone"=>$request->sender_phone,"created_at"=>$now, "updated_at"=>$now]);
		$receiver_id = Receiver::insertGetId(["receiver_first_name"=>$request->receiver_first_name, "receiver_other_name"=>$request->receiver_other_name, "receiver_last_name"=>$request->receiver_last_name, "receiver_address"=>$request->receiver_address, "receiver_phone"=>$request->receiver_phone, "nearest_airport"=>$request->nearest_airport,"created_at"=>$now, "updated_at"=>$now]);
		$item_id = Item::insertGetId(["invoice"=>$request->invoice, "tracking_number"=>$request->tracking_number, "weight"=>$request->weight, "quantity"=>$request->quantity,"created_at"=>$now, "updated_at"=>$now]);
		Shipment::create(["item_id"=>$item_id,"receiver_id"=>$receiver_id,"sender_id"=>$sender_id,"status"=>$request->status,"shipment_mode"=>$request->shipment_mode,"departure_time"=>$request->departure_time,"arrival_time"=>$request->arrival_time,"pick_up_date"=>$request->pick_up_date,"delivery_date"=>$request->delivery_date, "comment"=>$request->comment]);

		return response()->json("Successful");
	}

	public function viewShipmentList(){
		$shipments = DB::table('shipments')->join('items','shipments.item_id','items.id')->join('receivers','shipments.receiver_id','receivers.id')->join('senders','shipments.sender_id','senders.id')->get();
		return response()->json($shipments);
	}


	public function editShipment(Request $request){

	}

	public function viewActivities(){
		$shipment_activities = Activity::all();
		return response()->json($shipment_activities);
	}

	public function updateActivities(Request $request){
		Activity::where('shipment_id', $request->shipment_id)->update($request->all());
		return response()->json("Updated Successfully");
	}

}
