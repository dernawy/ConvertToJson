<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 11/12/2017
 * Time: 2:55 PM
 */

require_once ('../class/class.convert_to_json.php');

$json = new JsonDataConvert;

$data = ["zero","one","two","three","four","five","six","seven","eight","nine","ten"];

$json->printtext($data);

?>
