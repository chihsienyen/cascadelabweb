<?php
if ($_GET['randomId'] != "b4QZ1JVl90QW41XcYqVxOHay2PKwP_nQPIJQy_tkNiBxfzADhCgLgHY5h93arpV7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
