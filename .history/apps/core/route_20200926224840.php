<?php
class Route {
    /**
     * @var
     * void
     */
    protected $routes=[];
    function __construct()
    {
        cek_is_route();
        get();
    }

    public function cek_is_route(){
        if(IS_ROUTE){

        }

    }

    function get($route, $function){
        
    }
}