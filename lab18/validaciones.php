<?php
class validaciones
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $password;
    protected $re_password;


    function verificar_email($email)
    {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
            return true;
        }
        return false;
    }

    function verificar_password_strenght($password)
    {
        if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password))
            echo "Su password es seguro.";
        else
            echo "Su password no es seguro.";
    }

    function verificar_ip($ip)
    {
        return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" .
            "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip);
    }
}