<?php

    class Pizza{

        private $_db,
                $_data;


        public function __construct($pizza = ""){
            $this->_db = DB::getInstance();

            $this->_sessionName = Config::get('session/session_name');

            $this->_cookieName = Config::get('remember/cookie_name');


            if(!$pizza){

            }else{
                $this->find($pizza);
            }
        }
        public function find($pizza = null){
            if($pizza){

                $field = (is_numeric($pizza) ? 'id' : 'name');

                $data = $this->_db->get('pizza', array($field, '=', $pizza));

                if($data->count()){
                    $this->_data = $data->first();

                    return true;
                }
            }
            return false;
        }
    }