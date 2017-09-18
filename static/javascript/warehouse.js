

function openAggModal(itemid){
    
    $("#AggModal").modal("show");

    if(itemid) { // itemid=0 => new object is being created
        agg_showClean();
    }else{
        agg_showLoading();
        getItemData(itemid);
    }

}



function modObj(path, id){
    console.log(path+' '+id+'!');
    objAJAX(path, id);
}
function renderObj(data){
    console.log('rendering!');
    console.log(data);
}


function renderError(Exception, gotData){
    console.log(Exception);
    $('#ErrorModal modal-body p').html(Exception+"<br><br>Contatta il webmaster!");  
    $('#ErrorModal').show();
}


// ************** AJAX **************************

var baseURL = "/cai-magazzino/";

function objAJAX(path, itemid){

    $.post( baseURL+path, {
            itemid: itemid
        }).done(function(gotData) {
        
            console.log(gotData);
            
            try{
                var decoded = JSON.parse(gotData);
            }catch (Exception) {
                renderError(Exception, gotData, "Errore Ajax nel contattare '"+path+"'.");
                return;
            };
            
            renderObj(decoded);

    }).fail(function() {
        renderError("AJAX failure (path="+path+", itemid="+itemid+")", "AJAX failure");
    });

}
