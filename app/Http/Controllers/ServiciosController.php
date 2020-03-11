<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeCotizacion;

class ServiciosController extends Controller
{
    function SendMail(Request $request){
    	$data = request()->validate([
    		'NombreProy' => 'required',
	        'NombrePer' => 'required',
	        'Correo' => 'required',
	        'Comentario' => 'required'
    	],[
    		'NombreProy.required' => 'Se requiere un nombre de proyecto',
    		'NombrePer.required' => 'Se requiere su nombre',
    		'Correo.required' => 'Se requiere una dirección de correo',
    		'Comentario.required' => 'Comentario obligatorio, describa de que trata su proyecto/asesoria'
    	]);

    	$datos=request()->except('_token');

    	Mail::to('contacto@personasproductivas.com')
    	->send(new MensajeCotizacion($datos));
        if(count(Mail::failures()) > 0){
            return redirect()->back()->withError('msgError', ['Hubieron errores por favor intentelo más tarde']);   
        }else{
            return redirect()->back()->withSuccess('Mensaje enviado, espere la contestación.');
        }
    }
}
