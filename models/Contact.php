<?php

class Contact
{
    public static function getContacts()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT * FROM users ORDER BY id DESC');
        $users = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $users[$i]['id'] = $row['id'];
            $users[$i]['first_name'] = $row['first_name'];
            $users[$i]['last_name'] = $row['last_name'];
            $users[$i]['email'] = $row['email'];
            $i++;
        }
        return $users;
    }

    public static function addContact($first_name, $last_name, $email)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO  users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)';
        $result = $db->prepare($sql);
        $result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
    }
    public static function updateContactById($id, $first_name, $last_name, $email)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email  WHERE  id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
    }

    public static function deleteContactById($id)
    {
        $db = Db::getConnection();
        $sql = 'DELETE FROM users WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}
