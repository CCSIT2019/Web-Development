<?php
$database = mysqli_connect("localhost", "root", "", "store");
if (mysqli_connect_errno())
    echo mysqli_connect_error();