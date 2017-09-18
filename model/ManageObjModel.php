<?php

	class ManageObjModel extends Model {
	
	
	    public function addToObj($itemid){
            
            $query = "  SELECT  quantita
                        FROM    Oggetti
                        WHERE   id = {$itemid}";
            $result = $this->mysqli->query($query);
	        if(!$result) {
		        throw new Exception("Errore inatteso durante il caricamento della quantita' dell'oggetto selezionato."); // . $this->mysqli->error);
	        }
            $quantita = $result->fetch_array(MYSQLI_ASSOC);
            $quantita++;
                        
            $query = "  UPDATE  Oggetti
                        SET     quantita = {$quantita}
                        WHERE   id = {$itemid}";
                        
            $result = $this->mysqli->query($query);
	        if(!$result) {
		        throw new Exception("Errore inatteso durante il caricamento dei dati degli oggetti."); // . $this->mysqli->error);
	        }
        }
        

	    public function getItemData($itemid){
            
            // PUT A LIMIT STATEMENT HERE
            $query = "  SELECT  *
                        FROM    Oggetti
                        WHERE   id = {$itemid}";
                        
            $result = $this->mysqli->query($query);
	        if(!$result) {
		        throw new Exception("Errore inatteso durante il caricamento dei dati dell'oggetto selezionato."); // . $this->mysqli->error);
	        }

            $data =  $result->fetch_array(MYSQLI_ASSOC);
            return $data;
        }


    }
?>
