<?php
require __DIR__ . "/../config.php";
require __DIR__ . "/../App/Groq.php";
header('Content-Type: application/json');
use App\Groq;
$Groq = new Groq();
$user_input = json_decode(file_get_contents("php://input"), true);
$messages = $user_input['messages'] ?? [];

if (is_array($messages) && !empty($messages)) {
    $data = $Groq->completion($messages,GROQ_MODEL,GROQ_SYSTEM_PROMPT);
    echo json_encode($data);
    exit();
}
$data = ['msg' => '', 'error_msg' => 'No message received'];
echo json_encode($data);
