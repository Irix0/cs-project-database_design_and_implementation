<?php
   // Check if page is directely accessed
   isset($title) or die("403 - Forbidden");
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo($title); ?> - WeND(Y)'s</title>
<!-- Le nom est bien WeND(Y) et non WeND(Y)'s -->
<!-- Le 's n'est là que quand on parle du WeND(Y)’s Party Management System, et sert à indiquer la possession. -->
<!-- Soit pour ne pas dire "Party Management System of WeND(Y)" -->
<!-- Dans l'énoncé de la partie 1, dans la description de l'entreprise, il est bien dit :
    <<My company is called “WeND(Y),” which stands for “We’re not dead (yet).”>>
-->
<script src="https://cdn.tailwindcss.com"></script>
<link href="#">
</head>
