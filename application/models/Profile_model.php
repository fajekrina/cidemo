<?php 
defined('BASEPATH') or exit('No direct script access allowed');


class Profile_model extends CI_Model
{
  public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
		
	}

  private $table = 'profile';

  public function rules()
  {
    return [
        [
            'field' => 'nama_lengkap', 
            'label' => 'Nama Lengkap',  
            'rules' => 'trim|required'
        ],
        [
            'field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'agama',
            'label' => 'Agama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'no_hp',
            'label' => 'No Hp',
            'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
        ],
        [
            'field' => 'pendidikan',
            'label' => 'Pendidikan',
            'rules' => 'trim|required'
        ]
    ];
  }

  public function getById($id)
  {
    return $this->db->get_where($this->table, ["id" => $id])->row();
  }

  public function getAll()
  {
    $this->db->from($this->table);
    $this->db->order_by("id", "desc");
    $query = $this->db->get();
    return $query->result();
  }

  public function save()
  {
    $data = array(
      "nama_lengkap" => $this->input->post('nama_lengkap'),
      "nama_panggilan" => $this->input->post('nama_panggilan'),
      "jenis_kelamin" => $this->input->post('jenis_kelamin'),
      "tempat_lahir" => $this->input->post('tempat_lahir'),
      "tanggal_lahir" => $this->input->post('tanggal_lahir'),
      "kebangsaan" => $this->input->post('kebangsaan'),
      "agama" => $this->input->post('agama'),
      "pendidikan" => $this->input->post('pendidikan'),
      "jurusan" => $this->input->post('jurusan'),
      "instansi" => $this->input->post('instansi'),
      "nilai" => $this->input->post('nilai'),
      "alamat" => $this->input->post('alamat'),
      "no_hp" => $this->input->post('no_hp'),
      // "file_foto" => $this->input->post('file_foto'),
    );
    return $this->db->insert($this->table, $data);
  }

  public function update()
  {
    $data = array(
      "nama_lengkap" => $this->input->post('nama_lengkap'),
      "nama_panggilan" => $this->input->post('nama_panggilan'),
      "jenis_kelamin" => $this->input->post('jenis_kelamin'),
      "tempat_lahir" => $this->input->post('tempat_lahir'),
      "tanggal_lahir" => $this->input->post('tanggal_lahir'),
      "kebangsaan" => $this->input->post('kebangsaan'),
      "agama" => $this->input->post('agama'),
      "pendidikan" => $this->input->post('pendidikan'),
      "jurusan" => $this->input->post('jurusan'),
      "instansi" => $this->input->post('instansi'),
      "nilai" => $this->input->post('nilai'),
      "alamat" => $this->input->post('alamat'),
      "no_hp" => $this->input->post('no_hp'),
      // "file_foto" => $this->input->post('file_foto'),
    );
    return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("id" => $id));
  }
}

?>