<?php
function youtube($length = 11) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';
    $id = '';
    for ($i = 0; $i < $length; $i++) {
        $id .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $id;
}

echo youtube();