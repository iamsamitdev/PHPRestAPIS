<?php
namespace Genius;

class User
{
    // properties (variable)
    public $first_name = "";
    public $last_name = "";
    public $email = "";

    // method (function)
    public function loginprocess()
    {
        echo $this->first_name;
        echo $this->last_name;
        echo $this->email;
    }

}
