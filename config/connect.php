<?php

class Database
{
  private $link;
  private $db_name, $db_username, $db_password, $db_host;

  function __construct($name,$username,$password,$host)
  {
       $this->db_name = $name;
       $this->db_username = $username;
       $this->db_password = $password;
       $this->db_host = $host;

       try {
           $this->link = new PDO('mysql:host='.$host.';dbname='.$name.'', $username, $password);
       } catch(PDOException $e){
           echo $e->getMessage();
           die();
       }
  }

}

?>
