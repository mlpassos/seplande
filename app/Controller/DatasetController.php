<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'ckan/Ckan_client');

class DatasetController extends AppController {

	public function index() {

	}

	public function newDataset() {
		if ($this->request->is('post')) {
			$ckan = new Ckan_client('key CKAN');
		try
		{
			$data = array(
				"name" => $this->request->data['Dataset']['name'],
				"title" => $this->request->data['Dataset']['title'],
				"url"=> $this->request->data['Dataset']['url'],
				"notes"=> $this->request->data['Dataset']['notes'],
				"tags"=> $this->request->data['Dataset']['tags'],
				"maintainer"=> $this->request->data['Dataset']['maintainer'],
				"maintainer_email"=> $this->request->data['Dataset']['maintainer_email'],
				"license_id"=> $this->request->data['Dataset']['license_id'],
				"resources"=> "[ ToBEIncremented ]"
			);

			// print_r(json_encode($data));die;
			$data = json_encode($data);
			$ckan->post_package_register($data);

		}
		catch (Exception $e)
		{
			print '<p><strong>Caught exception: ' . $e->getMessage() . 
				'</strong></p>';
		}
		unset($ckan);
		}
	}

	public function getJson() {
		$json = file_get_contents('http://geo.seplande.al.gov.br/geoweb/wizard/php/file/alagoas_Percentualdedomicliosparticularespermanentescomteleviso_20140801_1346.json');
		// return $json;
		print_r($json);die();
	}	
}
