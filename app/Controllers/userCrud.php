<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
    // user list
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }

    //user form
    public function create(){
        return view('add_user');
    }

    //insert data into database
    public function store(){
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        $userModel-> insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }

    // view single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_object'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }

    //update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this -> request->getVar('name'),
            'email' => $this -> request->getVar('email'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }

    //delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }
}