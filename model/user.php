<?php

class User
{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $mail, $pass)
    {
        $this->name = $name;
        $this->email = $mail;
        $this->password = $pass;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_password()
    {
        return $this->password;
    }
}
