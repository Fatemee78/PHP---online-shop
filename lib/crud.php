<?php 

require_once("config.php");
class CRUD{

    //insert with 3 parameter

    public function insert($table, $columns, $values){

        $sql = "insert into $table ($columns) values($values)";

        $insert = mysqli_query($GLOBALS['DB'], $sql) or die("<br>not executed your insert...!");

        return $insert;

    }
    
    //select rows from form data
    public function select($table, $columns, $conditions){

        $sql = "select $columns from $table ";
       
        if($conditions != ""){
            $sql .="where $conditions";
        }

        $rows = mysqli_query($GLOBALS['DB'], $sql) or die("<br>not executed your insert...!");

        $array = [];

        while($re = mysqli_fetch_array($rows)){

            $array[] = $re ;

        }

        return $array;


    }


    //select raws
    // public function select_raw($sql){

    //     $rows = mysqli_query($GLOBALS['DB'], $sql) or die("not executed the insert query");

    //     $array = [];

    //     while($re = mysqli_fetch_array($rows)){

    //         $array[] = $re ;

    //     }

    //     return $array;


    // }

    //delete
	public function delete($table, $conditions){
	
        $sql = "delete from $table where $conditions";
        
            $row = mysqli_query($GLOBALS['DB'], $sql) or die(mysqli_error($GLOBALS['DB']));
        
            return $row;
        
    }
    function update($table, $data, $conditions){
	
		$sql = 
		"UPDATE
			$table
		SET
			$data
		WHERE
			$conditions
			
			";
            
            
		$row = mysqli_query($GLOBALS['DB'], $sql) or die(mysqli_error($GLOBALS['DB']));
	
		return $row;
	
    }

    
    //slect once
	public function select_one($table, $conditions){
	
        $sql = "select * from $table where $conditions";
        
        $rows = mysqli_query($GLOBALS['DB'],  $sql) or die("not executed the insert query");
        
         $row = mysqli_fetch_assoc($rows);
        
         
         return $row;
        }
        public function select_once($table, $conditions){
	
            $sql = "select * from $table where $conditions limit 1";
            
            $rows = mysqli_query($GLOBALS['DB'],  $sql) or die("not executed the insert query");
            
             $row = mysqli_fetch_assoc($rows);
            
             
             return $row;
            }
        

        
}

?>