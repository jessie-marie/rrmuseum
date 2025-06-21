<?php
// Simple placeholder for saving games
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    file_put_contents('games.json', $data);
    echo json_encode(['status' => 'saved']);
}
?>
