<?php
if ($_GET['randomId'] != "4M3xrxRTTxELDQQD6TSodZOTUQl8DzPRXFBEA4MZOfJsrK248kmhFZX4LLhxPEcE") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
