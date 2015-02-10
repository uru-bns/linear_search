<?php

function linear_search($data, $needle)
{
  $last_index = count($data) - 1;
  for ($i = 0; $i <= $last_index; $i++) {
    if ((int)$data[$i] == $needle) {
      return $i;
    }
  }

  return false;
}
