<?php
class user extends CI_Controller
{

    public function __construct()
{
    parent::__construct();
    $this->load->model('datauser', 'model');
    $this->load->library('session');
    $this->load->helper('url');
    $this->table = 'user';
}


public function add()
{
$this->load->view('user_add');
}

public function edit($id)
{
$data['user'] = $this->model->get_data($this->table, ['id' => $id])->row();
$this->load->view('user_edit', $data);
}

public function update()
{
if(isset($_POST['ubah']))
{
//ambil data
$nama = $this->input->post('nama');
$username = $this->input->post('username');
$password = $this->input->post('password');
$id = $this->input->post('id');
//cek keterisian nama, username, dan password
if($username and $password and $nama)
{
//cek apakah password sudah lebih dari 6 karakter
if(strlen($password) > 6)
{
$data = [
'nama'=>$nama,
'username'=>$username,
'password'=>$password
];
//panggil function update_data pada model
$this->model->update_data($this->table, $data, ['id' => $id]);
}
redirect('user/show');
}
}
}

public function delete($id)
{
$delete = $this->model->delete_data($this->table, ['id'=>$id]);
if($delete)
redirect('user/show');
}

public function show()
{
$data['users'] = $this->model->get_all_data($this->table);
$this->load->view('user_show', $data);
}

public function save()
{
    if (isset($_POST['kirim'])) {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi apakah data terisi
        if ($nama && $username && $password) {
            // Cek panjang password
            if (strlen($password) < 6) {
                $this->session->set_flashdata('error', 'Password minimal 6 karakter!');
                redirect('user/add');
            } else {
                $data = [
                    'nama' => $nama,
                    'username' => $username,
                    'password' => $password
                ];
                $this->model->insert_data($this->table, $data);
                $this->session->set_flashdata('success', 'User berhasil ditambahkan!');
                redirect('user/add');
            }
        } else {
            $this->session->set_flashdata('error', 'Semua field harus diisi!');
            redirect('user/add');
        }
    }
}

}