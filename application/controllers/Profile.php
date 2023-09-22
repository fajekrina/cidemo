<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model("Profile_model");
  }

  public function index()
  {
    $data["title"] = "List Data Profile";
    $data["data_profile"] = $this->Profile_model->getAll();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/menu');
    $this->load->view('profile/index', $data);
    $this->load->view('templates/footer');
  }

  public function add()
  {
    $Profile = $this->Profile_model; 
    $validation = $this->form_validation;
    $validation->set_rules($Profile->rules());
    if ($validation->run()) {
        $Profile->save($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil disimpan. 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect("profile");
    }
    $data["title"] = "Tambah Data Profile";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/menu');
    $this->load->view('profile/add', $data);
    $this->load->view('templates/footer');
  }

  public function edit($id)
  {
    if (!isset($id)) redirect('profile');

    $Profile = $this->Profile_model;
    $validation = $this->form_validation;
    $validation->set_rules($Profile->rules());

    if ($validation->run()) {
        $Profile->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diperbarui.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("profile");
    }
    $data["title"] = "Edit Data Profile";
    $data["data_profile"] = $Profile->getById($id);
    var_dump($data);
    if (!$data["data_profile"]) show_404();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/menu');
    $this->load->view('profile/edit', $data);
    $this->load->view('templates/footer');
  }

  public function delete()
  {
    $id = $this->input->get('id');
    if (!isset($id)) show_404();
    $this->Profile_model->delete($id);
    $msg['success'] = true;
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data berhasil dihapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
    $this->output->set_output(json_encode($msg));
  }
}

?>
