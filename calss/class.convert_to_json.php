<?php
/**
 * Created by PhpStorm.
 * User: LIBCASTING
 * Date: 11/11/2017
 * Time: 5:53 PM
 */

/**
 * Class JsonDataConvert, this class serve the conversion between PHP and JAVASCRIPT (JQUERY).
 */
class JsonDataConvert{

    /**
     * @var $dataToJson: To get the data array and put it in an object, before it return to a JSON array.
     */
    private $dataToJson;

    private $convertToJson;

    /**
     * @param $data: The data we want to convert to JSON it can be (STRING, INTEGER, ... etc).
     * @return true if data was converted in JSON.
     */
    public function convertToJson($data){

        /**
         * @var $error: Is an array of errors messages.
         */
        $error = array(
            "ERR-DATA-EMPTY"=>"The data object is empty please give a valid data object, and try again.",
            "ERR-DATA-NOT-ARRAY"=>"The data object is not array, the app will convert it to an array.",
        );

        /**
         * * @var $error: Is an array of explination messages.
         */
        $message = array(
            "MSG-DATA-NOT-EMPTY"=>"The data object is not empty.",
            "MSG-DATA-IS-ARRAY"=>"The data object is an array.",
            "MSG-DATA-IS-OBJECT"=>"The data object array is an object.",
            "MSG-DATA-IS-STRING"=>"The data object array is a string.",
            "MSG-DATA-IS-INT"=>"The data object array is an integer.",
            "MSG-DATA-IS-FLOAT"=>"The data object array is a float.",
            "MSG-DATA-IS-BOOL"=>"The data object array is a boolean.",
            "MSG-DATA-IS-RESOURCE"=>"The data object array is a resource.",
            "MSG-DATA-CONVERTED-TO-ARRAY"=>"The data object was converted to an array.",
            "MSG-DATA-CONVERTED-TO-JSON"=>"The data object was converted to json."
        );

            // If data was empty STRING or empty Array
        if($data == "" || $data == [] || $data == [""]){

            // if the data is empty will send this message.
            $err = array($error["ERR-DATA-EMPTY"]);

            //Then we set the message and data in one array to convert it to JSON.
            $json_array = array(
                "MSG"=>"Message:"." ".$err,
                "DATA"=>"Data:"." "."Data object is empty"
            );

            // set the message and data's array in (json_encode) and forcing the object type.
            $conv = json_encode($json_array, JSON_FORCE_OBJECT);

            // Set the object $this->dataToJson to $conv's array.
            $this->dataToJson = $conv;

            //Convert the object $this->dataToJson array to a variable again -> $converted.
            $converted = $this->dataToJson;

            //send the JSON data to server
            echo $converted;
            return false;
        }
        else{

        }

        /**
         * Check if the data entered is an array or no.
         */
        if(is_array($data)){
            // if the data is an array will send this message.
            $msg = array($message["MSG-DATA-IS-ARRAY"]);

            //Convert the message in array to convert it to JSON.
            $json_msg = json_encode($msg, JSON_FORCE_OBJECT);

            //Then we set the message and data in one array to convert it to JSON.
            $json_array = array(
                "MSG"=>$msg,
                "DATA"=>$data
            );

            // set the message and data's array in (json_encode) and forcing the object type.
            $conv = json_encode($json_array, JSON_FORCE_OBJECT);

            // Set the object $this->dataToJson to $conv's array.
            $this->dataToJson = $conv;

            //Convert the object $this->dataToJson array to a variable again -> $converted.
            $converted = $this->dataToJson;

            //send the JSON data to server
            echo $converted;

            return true;
        }
        else // if the data is not an array
        {
            //Set the error message.
            $err = array($error["ERR-DATA-NOT-ARRAY"]);

            //Convert data to an array.
            $data = array($data);

            //Convert the error in array to convert it to JSON.
            $json_err = json_encode($err, JSON_FORCE_OBJECT);

            //Then we set the message and data in one array to convert it to JSON.
            $json_array = array(
                "MSG"=>$err,
                "DATA"=>$data
            );

            // set the error and data's array in (json_encode) and forcing the object type.
            $conv = json_encode($json_array, JSON_FORCE_OBJECT);

            // Set the object $this->dataToJson to $conv's array.
            $this->dataToJson = $conv;

            //Convert the object $this->dataToJson array to a variable again -> $converted.
            $converted = $this->dataToJson;

            //send the JSON data to server
            echo $converted;

            return true;
        }
    }

    public function printtext($data){
        $data = $this->convertToJson($data);
        return $data;
    }
}
