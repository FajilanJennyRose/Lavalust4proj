<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class homeview extends Controller {

    public function home() {
	
		$this->call->view('home');
    }

    public function contacts() {
	
      $this->call->view('contacts');
      }

      public function packages() {
	
        $this->call->view('packages');
        }

        public function crew() {
	
          $this->call->view('crew');
          }

          public function login() {
	
            $this->call->view('login');
            }

            public function signup() {
	
              $this->call->view('signup');
              }

}
?>
