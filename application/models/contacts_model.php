<?php

  /**
   *
   */
  class contacts_model extends CI_model
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function getContacts()
    {
      $query = $this->db->get('contacts');
      return $query->result();
    }

    public function addContact($typeContact, $idContact, $fullName, $emailaddress, $tel, $cel)
    {
      $contactArr = array(
           "typeContact" => $typeContact,
           "idContact" => $idContact,
           "fullName" => $fullName,
           "emailaddress" => $emailaddress,
           "tel" => $tel,
           "cel" => $cel
       );
       $query = $this->db->insert('contacts', $contactArr);
       return $query;
    }


    public function updateContact($idContact, $fullName, $emailaddress, $tel, $cel)
    {
      $contactArr = array(
           "fullName" => $fullName,
           "emailaddress" => $emailaddress,
           "tel" => $tel,
           "cel" => $cel
       );
       $this->db->where('idContact',$idContact);
       return $this->db->update('contacts',$contactArr);
    }

    public function delContact($idCont)
    {
      $id = $idCont;
      $this->db->where('idContact', $id);
      return $this->db->delete('contacts');
    }

    public function countContacts()
    {
      $this->db->from('contacts');
      return $num_rows = $this->db->count_all_results();
    }


  }


?>
