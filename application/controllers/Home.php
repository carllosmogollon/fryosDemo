<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//helpers used in this demo
		$this->load->helper(array('form', 'url'));

		//loading contoacts model
		$this->load->model('contacts_model');

	}


	public function index()
	{

		//loading de model
		$result = $this->contacts_model->countContacts();
		$data["totalContacts"] = $result;

		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

	//view to add contact
	public function navAddContacts()
	{
		$this->load->view('templates/header');
		$this->load->view('addContact');
		$this->load->view('templates/footer');
	}

	public function saveContact()
	{
		//getting parameter to create a contact
		$typeContact = $this->input->post("account-type-radio");
		$idContact = $this->input->post("idcontact-register");
		$fullName = $this->input->post("fullname-register");
		$emailaddress = $this->input->post("emailaddress-register");
		$tel = $this->input->post("tel-register");
		$cel = $this->input->post("cel-register");

		//loading de model
		$result = $this->contacts_model->addContact($typeContact, $idContact, $fullName, $emailaddress, $tel, $cel);

		//validate that itContact is unique

		if ($result) {
			$this->navGetContacts();
		} else {
			$this->index();
		}

	}

	//updating contact picture
	public function do_upload()
	{
		$idContact = $this->input->post("idCont");
		$namePic = "pic" . $idContact . ".jpg";


		//parameter to set image requirements
		$config = array(
			'upload_path' => 'uploads/',
			'file_name' => $namePic,
			'allowed_types' => 'gif|jpg|png|jpeg',
			'overwrite' => TRUE
		);

		$this->load->library('upload', $config);

		if($this->upload->do_upload())
		{
			$data = array('upload_data' => $this->upload->data());
			//print_r($data);
			$this->navGetContacts();
		}
		else
		{
			//tracking the error
			$error = array('error' => $this->upload->display_errors());
			//print_r($error);
			$this->index();

		}

	}

	public function navGetContacts()
	{
		$data["contacts"] = $this->contacts_model->getContacts();
		$this->load->view('templates/header');
		$this->load->view('getContacts', $data);
		$this->load->view('templates/footer');
	}

	public function deleteContact($id)
	{
		$idCont = $id;

		//loading de model
		$result = $this->contacts_model->delContact($idCont);

		//validate that itContact is unique
		if ($result) {
			$this->navGetContacts();
		} else {
			$this->index();
		}
	}

	public function updateContact()
	{
		//getting parameter to update a contact
		$idContact = $this->input->post("idcontact-register");
		$fullName = $this->input->post("fullname-register");
		$emailaddress = $this->input->post("emailaddress-register");
		$tel = $this->input->post("tel-register");
		$cel = $this->input->post("cel-register");

		//loading de model
		$result = $this->contacts_model->updateContact($idContact, $fullName, $emailaddress, $tel, $cel);

		//validate that itContact is unique

		if ($result) {
			$this->navGetContacts();
		} else {
			$this->index();
		}
	}
}
