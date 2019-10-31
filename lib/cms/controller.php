<?php
class Controller {

	private $request = null;
	private $template = '';
	private $task = '';
	private $view = null;
	public $model = null;

	/**
	 * Konstruktor, erstellet den Controller.
	 *
	 * @param Array $request Array aus $_GET & $_POST.
	 */
	public function __construct($request){
		//$this->view = new View();
		$this->request = $request;
		$this->template = !empty($request['layout']) ? $request['layout'] : 'default';
		$this->task = !empty($request['task']) ? $request['task'] : 'show';
	}

	/**
	 * Methode zum anzeigen des Contents.
	 *
	 * @return String Content der Applikation.
	 */
	public function display(){
		

		$this->model = $this->getModel();
	
		$viewFolder = ROOT.'/view/'.$this->request['view'];
		$this->view = $this->getView($viewFolder, $this->request);
		
		$this->view->setTemplate($this->template);
			
		if( method_exists($this, $this->task ) ) {
			$this->{$this->task}($this->view);
		}		

		return $this->view->display();

	}
	
	public function show($view) {
		return;
	}
	
	
	

	
	private function getView($viewFolder, $request) {
		
		$viewName = ucfirst($this->request['view']).'View';
		$viewFile = $viewFolder.'/view.php';

		if (file_exists($viewFile)) {
		  include_once($viewFile);
		  return new $viewName($viewFolder, $request);
		} else {
		  die('No View');
		  return false;
		}
		
		if (!$view) {
		  die('Error with View');
		  return false;
		}
		
	}
	
	
	public function getModel() {
	
		$modelName = ucfirst($this->request['view']).'Model';
		$modelFile = ROOT.'/model/'.$this->request['view'].'.php';
		
		if (file_exists($modelFile)) {
		  include_once($modelFile);
		  return new $modelName();
		} else {
		  return false;
		}
		
		if (!$model) {
		  return false;
		}

	
	
	}
	
	
}
?>