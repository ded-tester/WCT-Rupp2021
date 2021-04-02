<?php

$result = match (true) {
    
    300 => null,
    404 => 'not found',
    500 => 'server error',
    default => 'code error',
};

echo($result);
?>