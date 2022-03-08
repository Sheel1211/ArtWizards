<?php

class createdb{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $conn;


    //class constructor
    public function __construct(
        $dbname = "Newdb", 
        $tablename = "Productdb", 
        $servername = "localhost", 
        $username = "root", 
        $password = ""
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // create connection
        $this->conn = mysqli_connect($servername, $username, $password);
        if(!$this->conn){
            die("Connection failed : ". mysqli_connect_error());
        }
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        //excute query
        if(mysqli_query($this->conn, $sql)){
            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            //sql to create new table

            $sql = "CREATE TABLE IF NOT EXISTS $tablename
                    (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    product_name VARCHAR(25) NOT NULL,
                    product_price FLOAT,
                    product_image VARCHAR(100)
                    );";
            if(! mysqli_query($this->conn, $sql)){
                echo "Error creating table : ". mysqli_error($this->conn);
            }
            else{
                return false;
            }
        }
    }
}

?>