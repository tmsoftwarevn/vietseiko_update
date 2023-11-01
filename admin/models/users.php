<?php
class User extends Db
{
    //Phuong thuc lay tat ca tai khoan user
    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM user");
        $items = array();
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    //Phuong thuc lay user tu admin
    public function getAllUserFromAdmin()
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE Role = 0");
        $items = array();
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Phuong thuc lay quyen quan tri
    public function getSiperAdmin($user)
    {
        $sql = self::$connection->prepare("SELECT `Role` FROM `user` WHERE `username` like '$user'");
        $items = array();
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Phuong thuc xoa user
    public function deleteUser($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `user` WHERE id like ?");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }
    //Phuong thuc Them user:
    public function createUser($username, $password, $img, $gioitinh, $bangcap, $sodienthoai, $email, $super)
    {
        $sql = self::$connection->prepare("INSERT INTO `user`(`username`, `img`, `password`, `gioitinh`,`bangcap`,`sodienthoai`, `email`, `Role`)
        VALUE ('$username', '$img', '$password', '$gioitinh', '$bangcap', '$sodienthoai'. '$email', '$super')");
        return $sql->execute();
    }
    //Phuong thuc doi mat khau
    public function editPassWord($id, $password)
    {
        $sql = self::$connection->prepare("UPDATE `user` SET `password` = '$password' WHERE `id` LIKE '$id'");
        return $sql->execute();
    }
    //Phuong thuc select
    public function getPass($user)
    {
        $sql = self::$connection->prepare("SELECT `password` FROM user WHERE `username` like '$user'");
        $items = array();
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Phuong thuc lay password
    public function getPassword($user)
    {
   
		foreach($this->getPass($user) as $pass=>$get)
			{  
                $password = $get['password'];
			}
		return $password;
    }
    public function checkRole($username){
        $sql = self::$connection->prepare("SELECT Role FROM `user` WHERE `username` = ?");
        $sql->bind_param('s',$username);
        return $sql->execute();
    }
    //Phuong thuc lay lai password:

}
