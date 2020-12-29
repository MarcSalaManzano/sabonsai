<?php
if(isset($_SESSION['user_id'])) {
    session_unset();
}
header('location: http://tdiw-e8.deic-docencia.uab.cat/index.php');
?>