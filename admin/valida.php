<?php

session_start();

if( empty( $_SESSION['LOGIN'] ) || !ipset( $_SESSION['LOGIN'] ) ) {
    header('location: ./login.php?msg=2');

}

?>