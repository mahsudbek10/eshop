<?php

if(isset($_GET['url'])){
    echo $_GET['url'];
} else {
    header("Location: 404.php");
}

