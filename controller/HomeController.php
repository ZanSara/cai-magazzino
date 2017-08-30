<?php

class HomeController extends Controller {

	private $model, $view;

	public function __construct($params) {
	    $this->params = $params;
	}

	public function baseAction() {
	    
	    $this->view = new HomeView();
		$this->model = new HomeModel();
		
		$this->model->protectPage();
		
		// Process an eventual POST call
		//if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		//    self::processBooking();
		//}

        // Pass here what's needed into the View/Template rendering
		$params = array("Year" => ($this->model->getYear()),
		                "Items" => ($this->model->getItems()),
		                );
			
		$this->view->addParams($params);
		$this->view->show();
	}
	
	
}
?>
