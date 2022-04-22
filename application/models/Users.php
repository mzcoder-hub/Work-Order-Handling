<?php

class Users extends CI_Model
{
    private $_table = "users";

    public $username;
    public $password;
    public $email;
    public $full_name;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'full_name',
            'label' => 'Nama Lengkap',
            'rules' => 'required'],

            ['field' => 'role',
            'label' => 'Hak Akses',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("user_id" => $id));
    }

    public function insertUser()
    {
        $post = $this->input->post();

        $this->username = $post['username'];
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->email = $post['email'];
        $this->full_name = $post['full_name'];
        $this->role = $post['role'];

        return $this->db->insert($this->_table, $this);
    }

    public function doLogin(){
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["euser"])
        ->or_where('username', $post["euser"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya
            $isAdmin = $user->role == "admin";
            $isUser  = $user->role == "user";

            // jika password benar dan dia admin
            if($isPasswordTrue && $isAdmin){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user->username, 'role' => $user->role]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }else if($isPasswordTrue && $isUser){
                $this->session->set_userdata(['user_logged' => $user->username, 'role' => $user->role]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }else{
                return false;
            }
        }
        
        // login gagal
        return false;
    }
    public function isLogged() {
     if ($this->session->userdata('user_logged') != null) {
         return true;
     }else{
        return false;
    }
}
public function isNotLogin(){
    return $this->session->userdata('user_logged') === null;
}

private function _updateLastLogin($user_id){
    $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
    $this->db->query($sql);
}

}