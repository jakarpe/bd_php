<?php
setcookie('user', $user['name'], time() - 120, "/");
header('Location:/');
?>