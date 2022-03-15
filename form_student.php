<?php

   $err_name='';
   $err_email='';
   $err_phone='';
   $err_enroll_number='';
   $err_date_of_addmision='';


  
     if(isset($_POST['save']))
     {
       if(empty($_POST['name']))
       {
        $err_name = "veuillez Entrer le nom !!";
       }
       else{
        $name_student = $_POST['name'];
       }
       if(empty($_POST['email']))
       {
        $err_email = "veuillez entrez l'email !!";
       }
       else{
        $email = $_POST['email']; 
       }
       if(empty($_POST['phone']))
       {
        $err_phone = "veuillez entrer le numéro de telephone !!";
       }
       else{
        $phone  = $_POST['phone']; 
       }
       if(empty($_POST['enroll_number']))
       {
        $err_enroll_number = "veuillez remplir ce champ !!";
       }
       else{
        $enroll_number  = $_POST['enroll_number'];
       }
       if(empty($_POST['date_of_addmision']))
       {
        $err_date_of_addmision = "veuillez remplir ce champ !!";
       }
       else{
         $date_of_addmision = $_POST['date_of_addmision'];
       }
      
     }


?>