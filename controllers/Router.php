<?php
    class Router{
        private $_controller;
        private $_view;

        public function routeReq(){
            try{
                // CHARGEMENT AUTOMATIQUE DE CLASS
                spl_autoload_register(
                    function($class){
                        require_once('models/'.$class.'.php');
                    }
                )

                // $url ="";
                if(isset($_GET['url'])){
                    $url = explode('/', filter_var($_GET['url'] ,  FITER_SANITIZE_URL));
                }
            }catch(Exception $e){

            }
        }

    }

?>