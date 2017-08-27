<?php

	class HomeView extends View {
		public function show() {
			$this->title = "Magazzino - CAI Sovico";
			$this->scripts = array();
			
            include("templates/headTemplate.php");
			include("templates/bannerTemplate.php");
			
			// In case of Exception raised at processing time, EXCEPTION is set
			if(parent::__get("EXCEPTION") != "Missing parameter" ){
			    echo '<script> 
			                $().ready(function() { 
			                    $("#ErrorModal").modal("show"); 
			                });
			          </script>';
			}
		    include("templates/errorAlert.php"); // Required also for JS errors. Must always be there.
		   
			
			include("templates/aboutModal.php");
			
		    include("templates/homeTemplate.php");
		    include("templates/footSmallTemplate.php");
		}
	}
?>
