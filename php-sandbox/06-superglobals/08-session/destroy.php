<?php
    session_start();

    // Delete individual key from session
    unset($_SESSION['name']);
    
    session_destroy();    // Destroys all data registered to a session

    echo 'Session destroyed!';