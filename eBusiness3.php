<!DOCTYPE html>
<html>
    <head><h1>Purchase Receipt</h1></head>
    <body>
        <!-- //Starting the session to get the session variable from last page-->
    <?php
    
    session_start();
    $totalValue2 = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
    echo "Name : ".$fullNameValue.".";
    echo "<br></br>";
    echo "Total Price : ".$totalValue2.".";
    ?>
    
    </body>
</html>

