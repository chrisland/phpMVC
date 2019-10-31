<?php
class View{

	// Pfad zum Template
	private $path = false;
	
	// Name des Templates, in dem Fall das Standardtemplate.
	private $template = 'default';
	
	
	public $request = false;
	
	/**
	 * Enthält die Variablen, die in das Template eingebetet
	 * werden sollen.
	 */
	private $_ = array();

	private $js = array();
	
	
	
	public function __construct($viewFolder, $request){
		$this->path = $viewFolder.'/tmpl';

		$this->request = $request;
	}
	
	/**
	 * Ordnet eine Variable einem bestimmten Schl&uuml;ssel zu.
	 *
	 * @param String $key Schlüssel
	 * @param String $value Variable
	 */
	public function assign($key, $value){
		$this->_[$key] = $value;
	}


	/**
	 * Setzt den Namen des Templates.
	 *
	 * @param String $template Name des Templates.
	 */
	public function setTemplate($template = 'default'){
		$this->template = $template;
	}


	public function loadJSON() {
		header("Content-Type: application/json;charset=utf-8");
		echo json_encode($this->_);
	}

	/**
	 * Das Template-File laden und zurückgeben
	 *
	 * @param string $tpl Der Name des Template-Files (falls es nicht vorher 
	 * 						über steTemplate() zugewiesen wurde).
	 * @return string Der Output des Templates.
	 */
	public function loadTemplate(){
		
		
		$tpl = $this->template;
		// Pfad zum Template erstellen & überprüfen ob das Template existiert.
		$file = $this->path . DIRECTORY_SEPARATOR . $tpl . '.php';		
		$exists = file_exists($file);

		$header = 'template/header.php';
		$footer = 'template/footer.php';
		
		if ($exists){
			// Der Output des Scripts wird n einen Buffer gespeichert, d.h.
			// nicht gleich ausgegeben.
			ob_start();
			
			if (file_exists($header)) {
				include $header;
			}
			
			// Das Template-File wird eingebunden und dessen Ausgabe in
			// $output gespeichert.
			include $file;
			
			
			echo $this->getJS();
			
			if (file_exists($footer)) {
				include $footer;
			}
			
			$output = ob_get_contents();
			ob_end_clean();
			
			
			// Output zurückgeben.
			return $output;
		} else {
			// Template-File existiert nicht-> Fehlermeldung.
			return '<h3>Could not find template!</h3>';
		}
	}
	
	public function display() {
	
		return $this->loadTemplate();
			
	}
	
	
	public function addJS($file){
		if (!$file) {
			return false;
		}
		array_push($this->js, $file);
		return true;
	}
	
	public function getJS(){
		$html = '';
		foreach( $this->js as $js ) {
			$html .= '<script src="'.$js.'"></script>';
		}
		return $html;
	}
	
	
	
	
}
?>