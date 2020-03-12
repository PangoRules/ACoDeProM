<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\PaymentController;

extract($_REQUEST);

class Pay extends Controller{

	public function index(Request $request){
		
	}

	public function Pagando(Request $request){

		//return 1;

		$oPayment = new PaymentController($request->conektaTokenId, $request->card, $request->nombre, $request->ProyAse, $request->email, $request->monto);

		if($oPayment->Pay()){
			return 1;
		}else{
			return $oPayment->error;
		}
	}
}

/*
Esto estaba así

<?php
require_once("app/http/controllers/paymentcontroller.php");
extract($_REQUEST);

$oPayment = new PaymentController($conektaTokenId, $card, $name, $description, $total, $email);


if($oPayment->pay()){
	echo "1";
}else{
	echo $oPayment->error;
}

/*
