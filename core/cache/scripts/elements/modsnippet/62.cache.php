<?php  return '/**
 * units
 *
 * Snippet for the formation of the correct form
 * of the word in the plural
 * (For example, "21 рубль", "42 рубля", "7 рублей")
 *
 * @author Ilya Utkin
 * 
 * CALL EXAMPLE
 * 
 * [[+price:units]]
 * [[+quantity:units=`штука|штуки|штук`]]
 * [[units? &$input=`[[*id]]` &$options=`статья|статьи|статей`]]
 * 
 */

$output = array();
$input = isset($input) ? (float) str_replace(\',\',\'.\',$input) : 0;
$options = isset($options) ? explode("|", $options) : explode("|", "рубль|рубля|рублей");
$options[1] = isset($options[1]) ? $options[1] : $options[0];
$options[2] = isset($options[2]) ? $options[2] : $options[1];
if ($input - round($input) != 0) {
    $output = $options[1];
} else {
    if ($input % 10 == 1 && $input % 100 != 11) {
        $output = $options[0];
    } elseif ($input % 10 >= 2 && $input % 10 <= 4 && ($input % 100 >= 20 || $input % 100 < 10)) {
        $output = $options[1];
    } else {
        $output = $options[2];
    }
}

return $output;
return;
';