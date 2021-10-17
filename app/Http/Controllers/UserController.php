<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\IUserRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public $user;

    public function __construct(IUserRepository $user)
    {
        $this->user = $user;

    }

    public function showUsers(){
        $users = $this->user->getAllUsers();
        return view('user.index',compact('users'));
    }

    public function addUser(){
        return view('user.create');
    }

    public function storeUser(Request $request){
        $users = $this->user->getStoreUser($request);
        return view('user.create',compact('users'));
    }

    public function getUser($id){
        $users = $this->user->getUserByID($id);
        return view('user.edit', compact('users'));

    }

    public function updateUser(Request $request,$id){
        $users = $this->user->getUpdateUser($request,$id);
        return view('user.edit', compact('users'));

    }

    public function deleteUser($id){
        $this->user->deleteUser($id);
        return redirect()->route('user.list');
    }



}
