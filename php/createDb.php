<?php

class CreateDb{
    public $servername;
    public $username;
    public $pass;
    public $dbname;
    public $tablename;
    public $con;

    //constructor
    public function _construct(
        $dbname = "the_artwizards",
        $tablename = "productdb",
        $servername = "localhost",
        $username = "root",
        $pass = "",
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->pass= $pass;

        //create connection
        $this->con = mysqli_connect($servername,$username,$pass);
        if(!$this->con){
            die("connection failed".mysqli_connect_error());
        }

        //querry
        $sql = "create database if not exists $dbname";

        //execute querry
        if(mysqli_query($this->con,$sql)){
            $this->con = mysqli_connect($servername,$username,$pass);

            // sql create new table
            $sql = "create table if not exists $tablename (id int(11) not null auto_increment primary key,
            product_name varchar(25) not null,
            product_price float,
            product_img varchar(100)
        );";

        if(!mysqli_query($this->con,$sql)){
            echo "Error creating table ".mysqli_error($this->con);
        }
        }else{
            return false;
        }
    }
}

?>