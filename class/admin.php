<?php
session_start();
class admin{
    public $host="localhost";
    public $username="root";
    public $pass="";
    public $db_name="quiz";
    public $conn;


    public function __construct()
    {
      $this->conn=new mysqli ($this->host,$this->username,$this->pass,$this->db_name);

      if($this->conn->connect_errno)
      {
          die ("database connection faild".$this->conn->connect_errno);
      }

    }

    public function cat_shows()
    {
      $query=$this->conn->query ("select * from catagory");
      while($row=$query->fetch_array(MYSQLI_ASSOC))
      
      {
        
        $this->cat[]=$row;
    
      }
    
      return $this->cat;
     }

    public function add_quiz($rec)
{
    $a=$this->conn->query ($rec);
    return true;
    
 }







public function url($url)
{
    header("location:".$url);
}
}
