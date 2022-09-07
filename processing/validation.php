<?php

    function validate( $data , $key)
    {
       static $error = [];
        if( empty($data) )
        {
            $error[$key] = "Please enter $key";
        } 
        else{
            $da = trim($data);
            if( empty($da) )
            {
                $error[$key] = "Please dont enter only spaces in $key";
            }
        }
        return $error;
    }

    function PageValidate($check)
    {
        if(isset($check['validate']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>