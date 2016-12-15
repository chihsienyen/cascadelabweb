<?php
if ($_GET['randomId'] != "DH_2mo6ImX9WoqC93ju_WpS93dDnp1gmCQnphBBlLw3YjuZItx6ceBczIiIQzJzB") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
