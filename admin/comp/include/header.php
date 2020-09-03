<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/admin/include/header.php";

require_once "stats.php";
require_once "navbar.php";
?>

<script>
    function error(message, error_msg) {
        if (typeof error_msg !== "undefined") 
            console.error(error_msg)
        
        const tr = document.createElement('tr');
        tr.innerHTML = "<td colspan='100%' style='text-align:center'>" + message + "</td>";
        document.querySelector('table tbody').appendChild(tr)
    }
</script>