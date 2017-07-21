<?php
function make_safe($conn,$variable) {
    $variable = strip_tags(mysqli_real_escape_string($conn,trim($variable)));
    return $variable; }

?>