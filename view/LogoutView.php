<?php
	class LogoutView extends View {
		public function show() {
		    header("Location: ".ROOT);
            die();
		}
		
	}
?>
