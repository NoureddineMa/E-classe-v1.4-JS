<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php 
include_once 'connexion.php';
$result = mysqli_query($conn,"SELECT * FROM payments");
?>
    <?php 
          $title = 'Payments';
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
                <h5 class=" fw-bolder d-none d-sm-block mx-3">Payment Details</h5>
                <div class="d-flex align-items-center">
                    <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                </div>
            </div>
        <hr>
        <main class="row">
            <div class="container ">
                <div class="table-responsive-sm table-responsive-md px-4">
        <table class="table align-middle table-borderless ">
            <thead>
              <tr>
                <th scope="col" class="text-muted h6 ">Name</th>
                <th scope="col" class="text-muted h6 ">Payment Schedule</th>
                <th scope="col" class="text-muted h6 ">Bill Number</th>
                <th scope="col" class="text-muted h6 ">Amount Paid</th>
                <th scope="col" class="text-muted h6 ">Balance amount</th>
                <th scope="col" class="text-muted h6 ">Date </th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
                     
                    
                     while($row = mysqli_fetch_array($result)) {
                     ?>
                    
                    <tr class='bg-white'>
                         <td><?php echo $row["name"]?></td>
                         <td><?php echo $row["payment_schedule"]?></td>                          
                         <td><?php echo $row["bill_number"]?></td>                          
                         <td><?php echo $row["amount_paid"]?></td>
                         <td><?php echo $row["balance_amount"]?></td>
                         <td><?php echo $row["date"]?></td>
                         <td>                     
                        <a><i class="fas fa-eye text-info"></i></a>
                               
                             
                         </td> 

                         
                     </tr>
                     <?php
                      
                     }
                    ?>  
            </tbody>
          </table>
         
  </div>
  </div>
  </body>
</table>
</div>
</div>  
</html>
