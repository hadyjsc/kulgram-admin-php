<?php
require 'models/UsersModel.php';

class UsersController
{
    public $loadView;
    function __construct() {
        $this->loadView = new Load();
    }

    public function index()
    {
        $data = new UsersModel();
        $results = $data->getAll();
        return $this->loadView->view('user/index',$results);
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = new UsersModel();
            $results = $data->insert([
                'fname' => $_POST['fname'],
                'uname' => $_POST['uname'],
                'password' => password_hash($_POST['password'],PASSWORD_BCRYPT,['cost' => 10]),
                'level' => $_POST['level'],
                'status' => $_POST['status'],
                'createdAt' => date('Y-m-d H:i:s'),
            ]);
            return header('Location: index.php?page=users/detail/'.$results);
        }
        return $this->loadView->view('user/create');
    }

    public function edit($id)
    {
        $data = new UsersModel();
        $results = $data->getOne(['id'=>$id]);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $updated = null;
            if (!empty($_POST['password'])) {
                $updated = $data->update([
                    'fname' => $_POST['fname'],
                    'uname' => $_POST['uname'],
                    'password' => password_hash($_POST['password'],PASSWORD_BCRYPT,['cost' => 10]),
                    'level' => $_POST['level'],
                    'status' => $_POST['status'],
                    'updatedAt' => date('Y-m-d H:i:s'),
                ],$id);
            }else {
                $updated = $data->update([
                    'fname' => $_POST['fname'],
                    'uname' => $_POST['uname'],
                    'level' => $_POST['level'],
                    'status' => $_POST['status'],
                    'updatedAt' => date('Y-m-d H:i:s'),
                ],$id);
            }
            return header('Location: index.php?page=users/detail/'.$id);
        }
        return $this->loadView->view('user/edit',$results);
    }

    public function detail($id)
    {
        $data = new UsersModel();
        $results = $data->getOne(['id'=>$id]);
        return $this->loadView->view('user/detail',$results);
    }

    public function delete($id)
    {
        $data = new UsersModel();
        $results = $data->delete(['id'=>$id]);
        return header('Location: index.php?page=users/index');
    }

}


?>