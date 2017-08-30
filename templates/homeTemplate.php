 <!-- MAIN TABLE -->

<h1>Magazzino</h1>
<a href="http://www.caisovico.it/rifugio/rifugio.html">
    <img src="<? echo STATICS ?>/images/freccia_blu_back.jpg" style="display:inline; position:absolute; top:15px; right:20px;" >
</a>


<!-- TO BE SHOWN TO SUPER ONLY -->
<div class="top-buttons">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AggModal" data-tipo="Oggetto">Aggiungi Oggetto</button>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AggModal" data-tipo="Unità di Misura">Aggiungi Misura</button>
</div>

<script>
    $('#AggModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var tipo = button.data('tipo') // Extract info from data-type attributes
        
        var modal = $(this)
        modal.find('.modal-title').text('Aggiungi ' + tipo)
    })
</script>

<div id="AggModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Aggiungi +</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
                        <td class="quantita">Quantità</td>
                        <td class="misura">Misura</td>
                        <td class="oggetto">Oggetto</td>
                        <td class="azioni">Azioni</td>
                        <td class="lastmod">Ultima Modifica</td>
                        <td class="author">Autore</td>
                    </tr>
                </table>
                </div>
              </td></tr>
              <tr><td>
                <div class="tabella-inner scrollable">
                <table class="tabella table-striped">
                  <tbody>
                  
                  <?
                  
                    /*foreach ($this->Items as $items) {

                        echo("
                            <tr>
                              <td>".$items['nome']."</td>
                              <td>".$items['misura']."</td>
                              <td>".$items['quantita']."</td>
                              <td>".$items['lastmod']."</td>
                              <td>".$items['author']."</td>
                            <tr>
                        ");
                      }
                  */
                  
                  for($i=0; $i<100; $i++){
                    echo "<tr>  
                            <td>Quantità".$i."</td>
                            <td>Misura".$i."</td>
                            <td>Oggetto".$i."</td>
                            <td>
                                <a class='btn btn-primary'>-</a>
                            </td> 
                            <td>lastmod".$i."</td>
                            <td>author".$i."</td>
                              
                         </tr>";
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
