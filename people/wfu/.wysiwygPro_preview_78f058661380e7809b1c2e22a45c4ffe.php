<?php
if ($_GET['randomId'] != "LPApHVNXukc52ugqUX9qcAYEtbmq6Dlcr31xydrSMYK1fugykwClT_1OfSV8GkzT") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
