<?php  
 $connect = mysqli_connect("localhost", "root", "", "test1");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM jobtitle WHERE job_title LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["job_title"].'</li>';  
           }  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  