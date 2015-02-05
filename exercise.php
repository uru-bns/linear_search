<?php

require_once('./linear_search.php');

$data = explode(',', $argv[1]);
$needle = $argv[2];

$index = linear_search($data, $needle);
if ($index == -1) {
  echo "$needle は見つかりませんでした。\n";
}
else {
  echo "$needle が $index 番目に見つかりました。\n";
}
