<?php
class Globales
{
    public static function getEventos()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_eventos");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }    
    public static function getModalidad()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_modalidad");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    } 
    public static function getHorarios()
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM tbl_horarios");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }     
    public static function addCita($id_cliente, $fecha, $horario, $modalidad, $mensaje)
    {
        global $conn;

        date_default_timezone_set('America/Lima');

        try {
            $sql = "INSERT INTO tbl_reservas 
                    (id_cliente, fecha, horario, modalidad, mensaje) 
                    VALUES (:id_cliente, :fecha, :horario, :modalidad, :mensaje)";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id_cliente', $id_cliente, PDO::PARAM_STR);
            $stmt->bindValue(':fecha', $fecha, PDO::PARAM_STR);
            $stmt->bindValue(':horario', $horario, PDO::PARAM_STR);
            $stmt->bindValue(':modalidad', $modalidad, PDO::PARAM_STR);
            $stmt->bindValue(':mensaje', $mensaje, PDO::PARAM_STR);

            return $stmt->execute(); // Devuelve true si se ejecuta bien
        } catch (PDOException $e) {
            // Puedes loguear el error si quieres
            return false;
        }
    }
    
}
?>