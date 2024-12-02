<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = sha1($_POST['password'] ?? '');

    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ss', $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['nivel'] = $user['nivel'];
        $_SESSION['usuario'] = $user['usuario'];

        echo json_encode([
            'success' => true,
            'usuario' => $user['usuario'],
            'nivel' => $user['nivel'] 
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Credenciales incorrectas']);
    }
} 
?>


