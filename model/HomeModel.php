<?php

	class HomeModel extends Model {

	    
        public function getYear(){
            return "2017";
        }
        
        
        // Output the list of booking required to fill the table.
        // Builds an entry for each day, so Template does not need to process anything.
        public function getItems(){

            $query = "  SELECT  *
                        FROM    Oggetti AS p
                            INNER JOIN
                                Misure AS c
                            ON
                                p.misura = c.ID";
            $result = $this->mysqli->query($query);
	        if(!$result) {
		        throw new Exception("Errore inatteso durante il caricamento dei dati degli oggetti."); // . $this->mysqli->error);
	        }

            $data = $result->fetch_array();

            return $data;
        }


    }
?>
