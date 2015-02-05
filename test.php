<?php

require_once('./linear_search.php');

$data = [10, 1, -1, 5, 3, 8, 0];

var_dump(linear_search($data, -1) == 2);
var_dump(linear_search($data, 10) == 0);
var_dump(linear_search($data, 0) == 6);
var_dump(linear_search($data, 123) == -1);
