<?php
namespace App\Repository;
use Illuminate\Http\Request;
interface IUserRepository
{

    public function getAllUsers();
    public function getStoreUser(Request $request);
    public function getUserById($id);
   public function getUpdateUser(Request $request,$id);
    public function deleteUser($id);
}

?>
