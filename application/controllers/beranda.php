<?php 
class Beranda extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index(){
		$this->load->library('googlemaps');

		$marker = array();
		$marker['position'] = '-6.9885287, 107.6346458';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
		$this->googlemaps->add_marker($marker);

		$config['center'] = '-6.9885287, 107.6346458';
		$config['zoom'] = '14';
		$config['places'] = TRUE;
		$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
		$config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
		$config['placesAutocompleteOnChange'] = '';
		$this->googlemaps->initialize($config);

		$data['map'] = $this->googlemaps->create_map();

		if (($this->session->userdata('user_name')=="")){
			redirect ('/user');
		}
		else {
		$this->load->view('view_beranda', $data);
	}
}
	
}

 ?>