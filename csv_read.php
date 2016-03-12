<?php

/**
 * @param string   $path The path to the file to be read
 * @param string[] $keys An optional array of column names
 */
function csv_read($path, $keys = []) {
  $input = fopen($path, 'r'); // open the file
  $keys = $keys ?: fgetcsv($input); // use the keys provided, or read them from the first row
  $count = count($keys); // count the expected number of columns
  while (($row = fgetcsv($input)) !== false) { // parse each line of the file
    $values = array_pad($row, $count, null); // ensure that each column has a value
    yield array_combine($keys, $values); // yield an associative array
  }
  fclose($input); // close the file
}
