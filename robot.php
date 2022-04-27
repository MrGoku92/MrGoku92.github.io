<?php

$robot=$_POST['rob'];

if ($robot=="Si"){
    header("Location: index.html");
}
else{
    echo "Sos un robot pete";
}

?>