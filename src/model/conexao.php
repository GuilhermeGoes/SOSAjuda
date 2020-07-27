<?php
$conn = new PDO('mysql:host=localhost;dbname=sos_ajuda', "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);