<?php

class AddController extends Controller {

	private $model, $view;

	public function __construct($params) {
	    $this->params = $params;
	}

	public function baseAction() {
	    
	    $this->view = new JSONView();
		$this->model = new ManageObjModel();
		
		$this->model->protectPage();
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		    
		    if(isset($_POST['itemid'] ) ){
		        $itemid = $_POST['itemid'];
		        $this->model->addToObj($itemid);
            		
		        $params = array("Item" => ($this->model->getItemData($itemid)) );
		        $this->view->addParams($params);
		        $this->view->show();
		    }
		    
		}
	}
	
	
}
?>
