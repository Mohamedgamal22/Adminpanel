<?php

 /**
 * 
 */
 class add
 {
 	private $date;
 	private $table;
 	private $con;




 	function __construct($data,$table,$con)
 	{

 		if (is_array($data)) {
 			
 			$this->data=$data;
 			$this->table=$table;
 			$this->con=$con;

 		}
 		    $this->insert();
 	}


 	function insert(){

    

     foreach ($this->data as $key => $value) {
     	
     	  $keys[]=$key;
     	  $values[]=$value;

        }

               $table_keys=implode($keys," , ");
               $table_data=implode($values," , ");


           $sql = "INSERT INTO mainSettings (:key) VALUES (:value)";
           $q = $this->con->prepare( $sql, array() );
           if($q->execute(array(":key"=>$table_keys,":value"=>$table_data))){
            return true;
           }
      
        else
        {
            throw new Exception("not can insert into table");
            return FALSE;
        }  

 	}



 }

?>