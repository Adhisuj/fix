<?php
          $con=mysqli_connect('localhost','root','','sqq');
          if(isset($_POST['ss']))
          {
          $name=$_POST['em'];
          $password=$_POST['pws'];
          $query="INSERT INTO login(name,password) values ('$name','$password')";
          $run=mysqli_query($con,$query);
          }
          echo"thankyou";
          ?>
          