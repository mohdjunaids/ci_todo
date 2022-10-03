<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class   Todo extends CI_Controller {

  
 
	public function index()
	{
        
        
         
         

        $data = array();
        $data['myJson'] = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/todos/'));
        $this->load->view('my_view',$data);

 

 
	}

	 
}
