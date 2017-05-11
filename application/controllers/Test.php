<?php defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;

Class Test extends CI_Controller
{
    public function index()
    {
    
        $key = "example_key";
        $token = array(
            "iss" => "http://example.org",
            "aud" => "http://example.com",
            "iat" => 1356999524,
            "nbf" => 1357000000
        );
     
        $jwt = JWT::encode($token, $key);
    
        echo $jwt;
      
    }

}
  