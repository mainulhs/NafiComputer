<?php
    
    function connect() {
        
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_pass = '';

        $mysql_db = 'naficomputer';
    
    
        static $connection;

        if(!isset($connection)) {
        
            $connection = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
        }

        if($connection === false) {
            return mysqli_connect_error(); 
        }

        return $connection;
    }


    function error() {
        $connection = connect();
        return mysqli_error($connection);
    }


    function query($query) {

        $connection = connect();

        $result = mysqli_query($connection,$query);

        return $result;
    }

    
    function fetchData($query) {
        $rows = array();
        $result = query($query);

        if($result === false) {
            return false;
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function fetchDataWithID($query) {
        $result = query($query);
        $rows = array();
        if($result === false) {
            return false;
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $rows = $row;
        }
        return $rows;
    }


    // $rows = fetchData("SELECT userName, password FROM users");
    // if($rows === false) {
    //     $error = error();
        
    // }

    //print_r($rows)
    // $run_query = query("INSERT INTO `users` (`userName`,`password`) VALUES ('demo', '1234')");

    // if($run_query === false)
    // {
    //     echo "Does Not Inserted ! Try again ... ";
    // }
    // else
    // {
    //     echo "Succesfully Inserted.";
    // }

    // Getting User Data [Need to more Generic]

    function getDataUsers($data){
        $query = "SELECT $data FROM users WHERE username='".$_SESSION['username']."'";
        if($query_run = mysql_query($query)){
            if($query_result = mysql_result($query_run, 0, $data)){
                return $query_result;
            }
        }
    }

    function getDataInfo($data){
        $query = "SELECT $data FROM info WHERE username='".$_SESSION['username']."'";
        if($query_run = mysql_query($query)){
            if($query_result = mysql_result($query_run, 0, $data)){
                return $query_result;
            }
        }
    }


    function quote_smart($value, $handle) {
       if (get_magic_quotes_gpc()) {
           $value = stripslashes($value);
       }
       if (!is_numeric($value)) {
           $value = "'" . mysql_real_escape_string($value, $handle) . "'";
       }
       return $value;
    }

    function removeBadChars($strWords) {
        $bad_string = array("select", "drop", ";", "--", "insert","delete", "xp_", "%20union%20", "/*", "*/union/*", "+union+", "load_file", "outfile", "document.cookie", "onmouse", "<script", "<iframe", "<applet", "<meta", "<style", "<form", "<img", "<body", "<link", "_GLOBALS", "_REQUEST", "_GET", "_POST", "include_path", "prefix", "http://", "https://", "ftp://", "smb://" );
        for ($i = 0; $i < count($bad_string); $i++){
            $strWords = str_replace ($bad_string[$i], "", $strWords);
        }
        return $strWords;
    }
    //function for GUID generation 
    function GUID()
    {
        if (function_exists('com_create_guid') === true)
         {
            return trim(com_create_guid(), '{}');
         }
        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
   //function for login form

    function login($log_query){
            $check = numRows($log_query);
            return $check;
    }

    function stripQuotes($strWords) {
        return str_replace("'", "''", $strWords);
    }


    function affectedRows($result)
    {
        return (@mysql_affected_rows(query($result)));
    }


    function numRows($result)
    {
        return (@mysqli_num_rows(query($result)));
    }


    function numCols($result)
    {
        return @mysqli_num_fields(query($result));
    }

    
    function fieldName($field)
    {
       return (@mysqli_fetch_field(query($result)));
    }
    

    function insertID()
    {
        return (@mysqli_insert_id($connection));
    }
    

    function fetchObject($result)
    {
        return (@mysqli_fetch_object(query($result), MYSQL_ASSOC));
    }


    function fetchArray($result)
    {
        return (@mysqli_fetch_array(query($result), MYSQL_BOTH));
    }


    function fetchAssoc($result)
    {
        return (@mysqli_fetch_assoc(query($result)));
    }


    function freeResult($result)
    {
        return (@mysqli_free_result(query($result)));
    }
    
    //Function for load data in array list
    function loadData()
    {
        //
    }
    //Function for List Creation
    
    function createList()
    {
        //
    }
    //Read a CSV File
    function readCSV($csvFile)
    {
	   $file_handle = fopen($csvFile, 'r');
	   while (!feof($file_handle) ) {
		  $line_of_text[] = fgetcsv($file_handle, 1024);
	   }
	   fclose($file_handle);
	   return $line_of_text;
    }
    //Image Resize
?>