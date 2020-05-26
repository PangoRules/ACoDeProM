<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\conektaphpmaster\lib\Conektaphp;



class PaymentController extends Controller
{
    private $ApiKey="key_LFZAe7xwzaeUMUmAtedxvg";
    private $ApiVersion="2.0.0";

    public function __construct($token,$card,$name,$monto,$email,$descripcion,$tipoMoneda){
        $this->token=$token;
        $this->card=$card;
        $this->name=$name;
        $this->monto=$monto;
        $this->email=$email;
        $this->descripcion=$descripcion;
        $this->tipoMoneda=$tipoMoneda;
    }

    public function Pay(){
        \Conekta\Conekta::setApiKey($this->ApiKey);
        \Conekta\Conekta::setApiVersion($this->ApiVersion);

        if(!$this->Validar()){
            return false;
        }
        if(!$this->CreateCustomer()){
            return false;
        }
        if(!$this->CreateOrder()){
            return false;
        }
        return true;
    }

    public function CreateOrder(){
        try{
            $this->order = \Conekta\Order::create(
                array(
                    "amount" => $this->descripcion,
                    "line_items" => array(
                        array(
                            "name" => $this->monto,
                            "unit_price" => $this->descripcion*100,
                            "quantity" => 1
                        ) //first line_item
                    ), //line items
                    "currency" => $this->tipoMoneda,
                    "customer_info" => array(
                        "customer_id" => $this->customer->id
                    ), //customer info
                    "charges" => array(
                        array(
                            "payment_method" => array(
                                "type" => "default"
                            )
                        )//first charge
                    )//charges
                )//order
            );
        } catch (\Conekta\ProccessingError $error){
            $this->error=$error->getMessage();
            return false;
        } catch (\Conekta\ParameterValidationError $error){
            $this->error=$error->getMessage();
            return false;
        } catch (\Conekta\Handler $error){
            $this->error=$error->getMessage();
            return false;
        }
        return true;
    }

    public function CreateCustomer(){
        try{
            $this->customer = \Conekta\Customer::create(
                array(
                    "name" => $this->name,
                    "email" => $this->email,
                    "payment_sources" => array(
                        array(
                            "type" => "card",
                            "token_id" => $this->token
                        )
                    )
                )
            );
        } catch (\Conekta\ProccessingError $error){
            $this->error=$error->getMessage();
            return false;
        } catch (\Conekta\ParameterValidationError $error){
            $this->error=$error->getMessage();
            return false;
        } catch (\Conekta\Handler $error){
            $this->error=$error->getMessage();
            return false;
        }
        return true;
    }

    public function Validar(){
        if($this->card=="" || $this->name=="" || $this->monto=="" || $this->email=="" || $this->descripcion==""){
            $this->error="Todos los campos anteriores son obligatorios.";
            return false;
        }
        if(strlen($this->card)<=14){
            $this->error="El número de la tarjeta debe tener al menos 15 caracteres.";
            return false;
        }
        if(!filter_var($this->monto, FILTER_VALIDATE_EMAIL)){
            $this->error="El correo tiene un formato no valido.";
        }
        if($this->descripcion<=22){
            $this->error=$this->descripcion;
            return false;
        }
        return true;
    }
}
