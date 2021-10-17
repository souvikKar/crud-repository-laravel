<?php
namespace App\Repository;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repository\IUserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserRepository implements IUserRepository
{
    protected $user = null;

    public function getAllUsers(){
        return User::all();
    }
    public function getStoreUser(Request $request){
        User::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password) ,
            'created_at'=> Carbon::now(),
        ]);
      return redirect()->route('add.user')->with('success','User inserted Successfully...');
    }

    public function getUserById($id){
        return User::find($id);
    }

    public function getUpdateUser(Request $request,$id){

        User::find($id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
            'created_at'=> carbon::now(),
        ]);

        return redirect()->route('add.user')->with('success','User Updated Successfully...');
    }

    public function deleteUser($id){
        return User::find($id)->delete();
    }
}

?>
