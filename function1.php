<?php
	
	include 'db.php';
	 // $con = getdb();
  //    $tablename = 'info';
     // $tablename = (string)readline('Enter the table name to be created: ');


     //create new table
//      if(isset($_POST["createnew"])){
//       $createtable = mysqli_query("CREATE TABLE `$tablename` (
//     id int NOT NULL AUTO_INCREMENT,
//     first_name varchar(255),
//     last_name varchar(255),
//     email varchar(255) ,
//     reg_date varchar(255) ,
//     PRIMARY KEY (id)
// )");}
    //import data in the table created
     if(isset($_POST["Import"])){

    $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
			
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {

                 $sql = mysqli_query("INSERT into info (id,first_name,last_name,email,reg_date) 
                       values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')");
                       $result = mysqli_query($con, $sql);
            if(!isset($result))
            {
              echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                  window.location = \"index.php\"
                  </script>";    
            }
            else {
                echo "<script type=\"text/javascript\">
                alert(\"csv File has been successfully Imported.\");
                window.location = \"index.php\"
              </script>";
            }
               }
          
               fclose($file);  
         }
      }   

      //get all records function
	      function get_all_records(){
        $con = getdb();
        $Sql = mysqli_query("SELECT * FROM info");
        $result = mysqli_query($con, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr><th>EMP ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Registration Date</th>
                            </tr></thead><tbody>";
         while($row = mysqli_fetch_assoc($result)) {
             echo "<tr><td>" . $row['id']."</td>
                       <td>" . $row['first_name']."</td>
                       <td>" . $row['last_name']."</td>
                       <td>" . $row['email']."</td>
                       <td>" . $row['reg_date']."</td></tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "No Records Found..";
    }
    }
    //exprting data 
	     if(isset($_POST["Export"])){
         
          header('Content-Type: text/csv; charset=utf-8');  
          header('Content-Disposition: attachment; filename=data.csv');  
          $output = fopen("php://output", "w");  
		 
          fputcsv($output, array('ID', 'First Name', 'Last Name', 'Email', 'Registration Date'));  
          $query = mysqli_query("SELECT * from info ORDER BY id DESC");  
          $result = mysqli_query($con, $query);  
          while($row = mysqli_fetch_assoc($result))  
          {  
               fputcsv($output, $row);  
          }  
          fclose($output);  
     }  
//add new feild
     if(isset($_POST["field"])){
        $columnname= (string)readline('Enter the feild name to be added: ');
     $added= mysql_query("ALTER TABLE info ADD `$columnname` VARCHAR(50) NOT NULL");
     if($added !== FALSE)
    {
        echo("The column has been added.");
    }else{
        echo("The column has not been added.");
    }

     }
//deleting table
     if(isset($_POST["delete"])){
        $deletetable=(string)readline('Enter tablename to be deleted: ');
        $delete= mysql_query("DROP TABLE `$deletetable`");

     }
     //making the table empty deleting all rows from table
      if(isset($_POST["empty"])){
        $emptytable=(string)readline('Enter tablename to be cleared: ');
        $delete= mysql_query("TRUNCATE TABLE `$emptytable`");

     }
     //add row to a particular column
 if(isset($_POST["addrows"])){
    $addata=(string)readline('Enter the column name in which you want to add data: ');
$addvalue=(string)readline('Enter the column name in which you want to add data: ');
    $addrow=mysqli_query("INSERT INTO Student (`$addata`) VALUES (`$addvalue`)");
 }

     ?>
