<?php


 class Customer extends User {
     public $order;
     
     //abbas
     public function request_order($order){
         $this->order=$order;
     }
     public function get_order(){
         return $this->order;
     }
}
