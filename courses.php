<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php 
include_once 'connexion.php';
$result = mysqli_query($conn,"SELECT * FROM course");
?>

<?php 
          $title = 'Courses';

          include 'head.php';
      
   ?>


<body>
  <!-- start side bar -->
  <?php include 'sidebar.php' ;?>   
                 <!-- end side bar -->
<div class="col overflow-auto">
            <!-- start nav bar  -->
            <?php include 'navbar.php' ;?>
         <!-- end nav bar -->
         
    
     <div class="bg-light py-2  ">
            <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                <h5 class=" fw-bolder d-none d-sm-block mx-3">Courses list</h5>
                <div class="d-flex align-items-center">
                    <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                    <a class="add btn btn-info text text-white text-uppercase mx-4 py-2 " href="Add_courses.php">
                        add new course
                    </a>
                </div>
            </div>
        <hr>


        <main class="row">
            <div class="container ">
                <div class="table-responsive-sm table-responsive-md px-4">
                <table class="table align-middle table-borderless ">
                    <thead>
                    <tr class="text-capitalize  ">
                    <th scope="col" class="text-muted h6 ">name</th>
                        <th scope="col" class="text-muted h6 ">image</th>
                        <th scope="col" class="d-none d-sm-table-cell text-muted h6">lien</th>
                        
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                     
                      $i=0;
                      while($row = mysqli_fetch_array($result)) {
                      ?>
                    
                     <tr class='bg-white'>
                          
                          <td><?php echo $row["name"]?></td>
                          <td><?php echo $row["image"]?></td>                          
                          <td><?php echo $row["lien"]?></td>                          
                          <td>                     
                               <a href="update-course.php?id=<?php echo $row["id"]; ?>"><i class="fal fa-pen fs-6 text-info mx-2"></a></i>
                               <a href="delete-courses.php?id=<?php echo $row["id"]; ?>"><i class="fal fa-trash fs-6 mx-2 text-info"></i></a> 
                          </td> 

                          
                      </tr>
                      <?php
                       $i++;
                      }
                     ?>
                    </tbody>
                </table>
                </div>
            </div>    
        </main>
</div>
</div>
</body>
</html>