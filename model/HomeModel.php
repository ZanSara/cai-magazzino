<?php

	class HomeModel extends Model {

	    
        public function getYear(){
            return "2017";
        }
        
        
        // Output the list of booking required to fill the table.
        // Builds an entry for each day, so Template does not need to process anything.
        public function getItems(){
            
            // PUT A LIMIT STATEMENT HERE
            $query = "  SELECT  *
                        FROM    Oggetti";
                        
            $result = $this->mysqli->query($query);
	        if(!$result) {
		        throw new Exception("Errore inatteso durante il caricamento dei dati degli oggetti."); // . $this->mysqli->error);
	        }

            $data = [];
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $row; 
            }

            return $data;
        }


    }
?>
