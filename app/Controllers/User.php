<?php namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\Models\User_model;

class User extends Controller
{
	public function index()
	{
		try{
			$model = new \App\Models\User_model();
			$data['user'] = $model->getUser(false);
			echo view('user_view',$data);
		}catch (\Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function add_new()
	{
		echo view('add_user_view');
	}

	public function save(){
		$model = new \App\Models\User_model();
		$nama = $this->request->getPost('nama');
		$u_name = $this->request->getPost('u_name');
		$data = ['nama'=>$nama, 'u_name'=>$u_name];
		$model->saveUser($data);
        return redirect()->to('/user');
	}

	public function edit($id)
    {
        $model = new \App\Models\User_model();
        $data['user'] = $model->getUser($id)->getRowArray();
        echo view('edit_user_view', $data);
    }

    public function update(){
    	$model = new \App\Models\User_model();
        $id = $this->request->getPost('u_id');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'u_name' => $this->request->getPost('u_name'),
        );
        $model->updateUser($data, $id);
        return redirect()->to('/user');
    }

    public function delete($id){
        $model = new \App\Models\User_model();
        $model->deleteUser($id);
        return redirect()->to('/user');
    }



}