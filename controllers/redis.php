<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Redis extends CI_Controller {
	
		public function index()
		{
			$this->load->library('redis');

			// create redis object
			$redis = $this->redis->config();
			$redis->set('text','Hello Redis');

			echo $redis->get('text');
		}
	
	}
	
	