<?php
include 'dashboard/config/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Obtener y sanitizar los datos enviados por AJAX
        $correo = $_POST['correo'] ?? null;
        $contrasena = $_POST['contrasena'] ?? null;

        if (!$correo || !$contrasena) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Faltan datos obligatorios.'
            ]);
            exit;
        }
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $response = array(
                'status' => 'error',
                'message' => 'El correo ingresado no es válido.'
            );
            echo json_encode($response);
            exit;
        }

        // Verificar si el correo existe en la base de datos
        $stmt = $conn->prepare("SELECT id, contrasena FROM tbl_usuarios WHERE correo = :correo AND estado = 'activo' ");
        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            // El correo existe, verificar la contraseña
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($contrasena, $user['contrasena'])) {
                // La contraseña es correcta, iniciar sesión
                session_start();
                session_regenerate_id(true); // Regenerar ID de sesión para evitar secuestro
                $_SESSION['user_id'] = $user['id'];
                
                $response = array(
                    'status' => 'success',
                    'message' => 'Ingreso exitoso.'
                );
            } else {
                // La contraseña es incorrecta
                $response = array(
                    'status' => 'error',
                    'message' => 'Contraseña incorrecta.'
                );
            }
        } else {
            // El correo no existe en la base de datos
            $response = array(
                'status' => 'error',
                'message' => 'El correo no está registrado o el usuario no se encuentra Activo.'
            );
        }

    } catch (Exception $e) {
        // Manejo de errores en caso de problemas de conexión o ejecución
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error al procesar la solicitud: ' . $e->getMessage()
        );
    }

    // Devolver la respuesta como JSON
    echo json_encode($response);
}
?>
