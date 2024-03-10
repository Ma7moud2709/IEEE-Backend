<?php

echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'];
echo '<br>########<br>';
echo "Server Name: " . $_SERVER['SERVER_NAME'];
echo '<br>########<br>';

echo $_SERVER['SystemRoot'];
echo '<br>########<br>';
echo getenv('OPENSSL_CONF');
echo '<br>########<br>';
?>