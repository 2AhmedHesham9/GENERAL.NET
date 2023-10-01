<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currency view</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    <div class="container">
    <table style=" " class="table" id="myTable">
        <thead>
            

   <th style=" padding-right:130px;">id</th>
    <th style=" padding-right:130px;">currency</th>
    <th style=" padding-right:130px;">price</th>
    
    <tr>
        <hr>
   </thead>
   
   <tbody>
            
            <?php
                $sql="SELECT * FROM currency ";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc()){
                        
            ?>
           
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['cur_name'];?></td>
                        <td><?php echo $row['cur_price'];?></td>
                        
                        <td><a class="btn btn-info" href="edit.php?id=<?php echo
                        $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php
                        echo $row['id']; ?>">Delete</a>&nbsp;<a class="btn btn-info" href="editrow.php?id=<?php echo
                        $row['id']; ?>">Edit Row </a></td>

                
      </tr>
      
        
     
         
    
    <?php }
    
        }
       ?> 
       
    </tbody>
    

    </table>

    </div>
    <script>
function myFunction() {
  // Declare variables
//   var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
 tr = table.tBodies[0].getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
   var td = tr[i].getElementsByTagName("td");
    tr[i].style.display = "none";
    for(j=0;j<td.length-3 ;j++)
    {
    //   txtValue = td.textContent || td.innerText;
      if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
       
        tr[i].style.display = "";
        continue;
      }
    
    }
  }
}
</script>
</body>
</html>


