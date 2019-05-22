<?php
// if($conn){echo "con";}
class Reward_system {

    function __construct() {
        require "../../config.php"; 
        $this->hostname = $hostname;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect_database() 
    { 
      $this->conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
      mysqli_set_charset( $this->conn,"utf8");
    }

    public function get_salary_level(){
        $this->connect_database();
        $output = array();
        $result=mysqli_query($this->conn,"CALL proc_get_salary_level()");
        if(mysqli_num_rows($result) > 0){
            $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        return $output;
        mysqli_close($this->conn);
    }


    public function get_salary_level_by_id($id){
        $this->connect_database();
        $output = array();
        $result=mysqli_query($this->conn,"CALL proc_get_salary_level_by_id('$id')");
        if(mysqli_num_rows($result) > 0){
            $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $output = $output[0];
        }
        return $output;
        mysqli_close($this->conn);
    }

    public function get_person_type(){
        $this->connect_database();
        $output = array();
        $result=mysqli_query($this->conn,"CALL proc_get_person_type()");
        if(mysqli_num_rows($result) > 0){
            $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        return $output;
        mysqli_close($this->conn);
    }


    public function get_sal_level_code(){
        $this->connect_database();
        $output = array();
        $result=mysqli_query($this->conn,"CALL proc_get_sal_level_code()");
        if(mysqli_num_rows($result) > 0){
            $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        return $output;
        mysqli_close($this->conn);
    }


    public function insert_salary_level($data){

        $code = $data['code'];
        $level_id = $data['level_id'];
        $type_id = $data['type_id'];
        $create_date = date("Y-m-d H:i:s"); 
        $create_by = 1;
        $status =  $data['status'];

        $this->connect_database();
        $output = 0;
        $result=mysqli_query($this->conn,"CALL proc_insert_salary_level('$code','$level_id','$type_id','$create_date','$create_by','$status');");
        if ($result) {
            $output = 1;
        } else {
            $output = 0;
        }
        echo $output;
        mysqli_close($this->conn);
    }


    public function update_salary_level($data){

        $code = $data['code'];
        $level_id = $data['level_id'];
        $type_id = $data['type_id'];
        $modify_date = date("Y-m-d H:i:s"); 
        $modify_by = 1;
        $status =  $data['status'];
        $id = $data['id'];

        $this->connect_database();
        $output = 0;
        $result=mysqli_query($this->conn,"CALL proc_edit_salary_level('$code','$level_id','$type_id','$modify_date','$modify_by','$status','$id');");
        if ($result) {
            $output = 1;
        } else {
            $output = 0;
        }
        echo $output;
        mysqli_close($this->conn);
    }


    public function delete_salary_level($data){
        $modify_date = date("Y-m-d H:i:s"); 
        $modify_by = 1;
        $id = $data['id'];
        $this->connect_database();
        $output = 0;
        $result=mysqli_query($this->conn,"CALL proc_delete_salary_level('$modify_date','$modify_by','$id');");
        if ($result) {
            $output = 1;
        } else {
            $output = 0;
        }
        echo $output;
        mysqli_close($this->conn);
    }
    
    
}




