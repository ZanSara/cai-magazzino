 <!-- MAIN TABLE -->

<h1>Magazzino</h1>
<a href="http://www.caisovico.it/rifugio/rifugio.html">
    <img src="<? echo STATICS ?>/images/freccia_blu_back.jpg" style="display:inline; position:absolute; top:15px; right:20px;" >
</a>


<!-- TO BE SHOWN TO SUPER ONLY -->
<div class="top-buttons">
    <p>Sei loggato come <? echo $this->Username ?></p>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#AggModal">Aggiungi Oggetto</button>
    <a href="logout" class="btn btn-warning">Logout</a>
</div>




<div id="AggModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" style="text-align:center;">Aggiungi Oggetto</h2>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer" style="text-align:center;">
        <button type="button" class="btn btn-primary">Salva</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<hr />

    <div class="row">
        <div class="tabella-outer shadow3">
          <table style="overflow:hidden;">
              <tr><td>
                <div class='scrollable'>
                <table class="tabella">
                    <tr>
                        <td class="quantita"><div>Q.tà</div></td>
                        <td class="misura"><div>Misura</div></td>
                        <td class="oggetto"><div>Oggetto</div></td>
                        <td class="lastmod"><div>Ultima Modifica</div></td>
                        <td class="author"><div>Autore</div></td>
                    </tr>
                </table>
                </div>
              </td></tr>
              <tr><td>
                <div class="tabella-inner scrollable">
                <table class="tabella table-striped">
                  <tbody>
                  
                  
                  <tr>
                  <pre>
                  <?
                    
                    $dbhost=DB_HOSTNAME;
                    $dbuser=DB_USERNAME;
                    $dbpwd=DB_PASSWORD;
                    $dbname = DB_DBNAME;
                    $this->mysqli = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
		            if($this->mysqli->connect_error != NULL) {
			            die("Errore durante la connessione al server. ");// . $mysqli->connect_error);
		            }
		            $this->mysqli->set_charset("utf8");
		
		
                  
                  
                    $query = "  SELECT  quantita
                                FROM    Oggetti
                                WHERE   id = 1";
                    $result = $this->mysqli->query($query);
                    if(!$result) {
                        throw new Exception("Errore inatteso durante il caricamento della quantita' dell'oggetto selezionato."); // . $this->mysqli->error);
                    }
                    $quantita = $result->fetch_array(MYSQLI_ASSOC);
                    echo $quantita;
                  
                  ?>
                  <pre>
                  </tr>
                  
                  <?
                    for($i=0; $i<10; $i++){
                    
                    foreach ($this->Items as $item) {
                    
                        echo("
                            <tr id='row".($item['id']+$i*3)."' onclick='toggleActions(".($item['id']+$i*3).")'>
                              <td><div>".$item['quantita']."</div></td>
                              <td><div>".$item['misura']."</div></td>
                              <td><div>".$item['nome']."</div></td>
                              <td><div>".$item['lastmod']."</div></td>
                              <td><div>".$item['author']."</div></td>
                            </tr>
                            <tr id='btn".($item['id']+$i*3)."' class='popuptr' style='display:none;'>
                              <td class='popuptd'><div>
                                  <a class='btn-azione btn btn-danger' onclick='modObj(`remove`, ".$item['id'].")'> Togli </a>
                                  <a class='btn-azione btn btn-success' onclick='modObj(`add`, ".$item['id'].")'> Aggiungi </a>
                                  <a class='btn-azione btn btn-primary' onclick='javascript:openAggModal(".$item['id'].");'> Aggiorna </a>
                                  <a class='btn-azione btn btn-warning' onclick='javascript:openDetailsModal(".$item['id'].");'> Dettagli </a>
                              </div></td>
                            </tr>
                        ");
                      }
                        
                      }
                  ?>
                                    
                  </tbody>
                </table>
              </div>
            </td></tr>
          </tbody>
        </table>
        
   
      </div>
    </div>
    
    
    <script>
    function toggleActions(itemid){
        $('#btn'+itemid).toggle()
    }
    </script>    
