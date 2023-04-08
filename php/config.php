<?php
    $conn = mysqli_connect("localhost", 'ixocjpfk_frankie', 'FRANKIENYAGA', 'ixocjpfk_talkfofree');
    if ($conn) {
        echo "DB Connected";
    }
    else {
        mysqli_connect_error();
    }
?>