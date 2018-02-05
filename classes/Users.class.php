<?php
/**
 * Created by PhpStorm.
 * User: Michael Porten
 * Date: 2/5/2018
 * Time: 10:10 AM
 */

class Users
{
    //properties
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;

    //methods
    function __construct($user_level){
        $this->user_level = $user_level;
    }

    function setUser($first_name, $last_name, $email_address) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email_address = $email_address;
    }

    function getUserID() {
        return $this->user_id;
    }

    function getUserType() {
        if ($this->user_level == 1){
            return "Regular User";
        }else if($this->user_level == 2){
            return "Administrator";
        }else{
            return "Invalid User Type";
        }
    }

    function getFirstName() {
        return $this->first_name;
    }

    function getLastName(){
        return $this->last_name;
    }

    function getEmailAddress() {
        return $this->email_address;
    }

    function getUserLevel() {
        return $this->user_level;
    }

    function __destruct() {

    }


}