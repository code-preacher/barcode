<?php
if(isset($_POST['generate_barcode']))
{
    $text=$_POST['barcode_text'];
    $show="barcode.php?codetype=Code39&size=100&text=".$text."&print=true";
    echo "<img alt='testing' src=".$show."/>";

}



?>
    
<html>
    <body>
        <form method="post" action="">
            <input type="text" name="barcode_text">
            <input type="submit" name="generate_barcode" value="GENERATE">
        </form>
    </body>
</html>
