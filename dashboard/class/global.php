<?php
class Globales {
    // Objeto Admin
    public static function getAdminFech($id)
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM admin WHERE id=:id");
        $statement->bindValue(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        return $result;
    }
}
