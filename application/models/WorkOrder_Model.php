<?php defined('BASEPATH') OR exit('No direct script access allowed');

class WorkOrder_Model extends CI_Model
{
    private $_table = "complain";

    public $ID_COMPLAIN;
    public $Nama;
    public $NPK;
    public $Divisi;
    public $Department;
    public $Nama_Atasan;
    public $Subject_Abnormality;
    public $Keterangan_Abnormality;
    public $Attachment;

    public function rules()
    {
        return [
            ['field' => 'Nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'NPK',
            'label' => 'NPK',
            'rules' => 'numeric'],

            ['field' => 'Divisi',
            'label' => 'Divis',
            'rules' => 'required'],

            ['field' => 'Department',
            'label' => 'Department',
            'rules' => 'required'],

            ['field' => 'Nama_Atasan',
            'label' => 'Nama Atasan',
            'rules' => 'required'],

            ['field' => 'Subject_Abnormality',
            'label' => 'Subject Abnormality',
            'rules' => 'required'],

            ['field' => 'Keterangan_Abnormality',
            'label' => 'Keterangan Abnormality',
            'rules' => 'required'],

            ['field' => 'old-images',
            'label' => 'Gambar Lama'],

            ['field' => 'add_info',
            'label' => 'Gambar Lama'],

            ['field' => 'AddInfo',
            'label' => 'Add Info'],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getStatusCount($status)
    {
        $this->db->select('*');
        $this->db->from('complain');
        $this->db->like('Status', $status);
        return $this->db->count_all_results();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["ID_COMPLAIN" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->ID_COMPLAIN = mt_rand(100000, 999999);
        $this->Nama  = $post['Nama'];
        $this->NPK  = $post['NPK'];
        $this->Divisi  = $post['Divisi'];
        $this->Department  = $post['Department'];
        $this->Nama_Atasan  = $post['Nama_Atasan'];
        $this->Subject_Abnormality  = $post['Subject_Abnormality'];

        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->ID_COMPLAIN;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $media = $_FILES;

        $tmp_name = $media['images']['tmp_name'];
        $name = $config['file_name'].'.jpg';

        $dir_upload = $config['upload_path'];
        $uploaded = move_uploaded_file($tmp_name, $dir_upload.$name);
        if ($uploaded) {
            $this->Attachment = $name;
        } else {
            $this->Attachment = "default.jpg";
        }

        $this->Keterangan_Abnormality  = $post['Keterangan_Abnormality'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        // return print_r($post);
        $this->ID_COMPLAIN = $post['ID_COMPLAIN'];
        $this->Nama  = $post['Nama'];
        $this->NPK  = $post['NPK'];
        $this->Divisi  = $post['Divisi'];
        $this->Department  = $post['Department'];
        $this->Nama_Atasan  = $post['Nama_Atasan'];
        $this->Subject_Abnormality  = $post['Subject_Abnormality'];
        $this->Keterangan_Abnormality  = $post['Keterangan_Abnormality'];

        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->ID_COMPLAIN;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $media = $_FILES;
        if (!empty($media["images"]["tmp_name"])) {
            $tmp_name = $media['images']['tmp_name'];
            $name = $config['file_name'].'.jpg';

            $dir_upload = $config['upload_path'];
            $uploaded = move_uploaded_file($tmp_name, $dir_upload.$name);
            if ($uploaded) {
                $this->Attachment = $name;
            } else {
                $this->Attachment = "default.jpg";
            }
        } else {
            $this->Attachment = $post["old-images"];
        }
        return $this->db->update($this->_table, $this, array('ID_COMPLAIN' => $post['ID_COMPLAIN']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("ID_COMPLAIN" => $id));
    }
}