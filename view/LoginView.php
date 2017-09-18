<?php
	class LoginView extends View {
		public function show() {
		
			$this->title = "Login - CAI Sovico";
			$this->scripts = array();
			
			if(self::__get("SUCCESS") == 1){
			    header("Location: ".ROOT );
			} else {
			   include("templates/loginTemplate.php");
            }
		}
		
	}
?>
