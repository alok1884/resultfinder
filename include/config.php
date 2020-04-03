<?php 

function redirect($page){
    
    echo "<script>window.open('$page.php','_self')</script>";

}

class Datacrud{
    
    public $connect;
    
    public function __construct(){
        $this->connect = mysqli_connect('localhost','root','','result_finder');
        
    }
    
    //insert function //
    
    public function insertData($table,$fields){
        $col = implode(",",array_keys($fields));
        $row = implode("','",array_values($fields));
        
        $query = mysqli_query($this->connect,"INSERT INTO $table ($col) value ('$row')");
        
        if($query):
   return true;
        else:
return false;
        endif;
    }
    
    // calling function //
    
    public function callingData($table,$cond= NULL){
        $array = array();
        if($cond =NULL):
            $query = mysqli_query($this->connect,"SELECT * FROM $table");
        else:
           $query = mysqli_query($this->connect,"SELECT * FROM $table $cond");
        endif;
        
        while($row = mysqli_fetch_array($query)){
            $array[] = $row;
        }
        return $array;
    }
    
    // delete function //
    
    public function deleteItem($table,$cond){
        $query = mysqli_query($this->connect,"DELETE FROM $table WHERE $cond");
        
        return $query;
    }
    
    // TRYING UPDATE FUNCTION //
   /*     public function updateData($table,$fields,$cond){
        $col = implode(",",array_keys($fields));
        $row = implode("','",array_values($fields));
        
        $query = mysqli_query($this->connect,"UPDATE $table SET $col='$row' WHERE $cond");
        
        if($query):
   return true;
        else:
return false;
        endif;
    }
   */
    
}

$new= new Datacrud(); ?>
