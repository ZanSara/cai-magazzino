  <div class="banner">
      <a href="http://www.caisovico.it">
        <img src="<? echo STATICS ?>/images/pagebanner.jpg">
      </a>
      <h2 style='display:inline-block;'>Stato del Magazzino</h2>
      
      <a href="http://www.caisovico.it/rifugio/rifugio.html">
        <img src="<? echo STATICS ?>/images/freccia_blu_back.jpg" style='display:inline;' class='pull-right' >
      </a>
    </div>

    <div class="mobile-title">
        <h3>Magazzino</h3>
        <a href="http://www.caisovico.it/rifugio/rifugio.html">
          <img class='mobile-back' src="<? echo STATICS ?>/images/nav-home-green.png">
        </a>
        <img class='mobile-login' src="<? echo STATICS ?>/images/nav-settings-green.gif" onclick="javascript:$('#mobile-dropdown').toggle();">
    </div>
    <div id='mobile-dropdown' class="shadow3">
      <ul>
        <!-- <a onclick="javascript:openNewBookingModal(0, 0, 0)"><li class="btn btn-success">Nuova Prenotazione</li></a>
        <a data-toggle="modal" data-target="#FindModal" onclick="$('#mobile-dropdown').toggle();"><li class="btn btn-primary">Cerca</li></a>
        <a data-toggle="modal" data-target="#Adv_Modal" onclick="$('#mobile-dropdown').toggle();"><li class="btn btn-info">Avanzate</li></a -->
        <a data-toggle="modal" data-target="#About_Modal" onclick="$('#mobile-dropdown').toggle();"><li class="btn btn-warning">About</li></a>
        <a href="<? echo ROOT ?>/logout" ><li class="btn btn-danger">Logout</li></a>
      </ul>
    </div>

