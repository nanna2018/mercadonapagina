
<h1>Mi primer formulario</h1>

<?php


echo "Nome:" .$_REQUEST["Nome"];
echo "Apelidos:".$_REQUEST["Apelidos"];
echo "Email:".$_REQUEST["Email"];
echo "Pws:".$_REQUEST["Pws"];

?>
<pre>
<?php

print_r($_REQUEST);

?>
</pre>



 