<?php

    $message = '';
    $error = '';

    if(isset($_POST["submit"])){

        if(file_exists('friends.json')){

            $current_data = file_get_contents('friends.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                'Friend_Name' => $_POST['Friend_Name'],
                'Friend_Location' => $_POST['Friend_Location'],
                'Friend_Mobile' => $_POST['Friend_Mobile']
            );

            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            if(file_put_contents('friends.json',$final_data))
            {
                $message = "<label class='text-success'>Success fully Submited!</label>"
            }

        }
        else{
            $error = 'Json File not exits.';
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .form-wrap{
        max-width: 500px;
        margin: 0 auto;
      }
      .page-header {
        color: #fff;
        text-align: center;
        background-color: #159957;
        background-image: linear-gradient(120deg, #155799, #159957);
        padding: 30px 0;
        padding-bottom: 55px;
      }
      .project-tagline {
          font-size: 1.25rem;
          margin-bottom: 2rem;
          font-weight: normal;
          opacity: 0.7;
      }
      .preview-img{
        border-radius: 100%;
    margin-top: -50px;
    margin-bottom: 30px;
      }
      .btn-primary{
        background-color: #159957;
        background-image: linear-gradient(120deg, #155799, #159957);
        border:1px solid #159957;
        margin-top: 50px;
        margin-bottom: 100px;
      }
      .btn-primary:hover{
        border:1px solid #0a743f;
      }

      @media screen and (min-width: 64em){
        .page-header {
            padding: 5rem 6rem;
        }
      }
    </style>
  </head>
  <body>
    <section class="page-header">
      <h1 class="project-name">friendsbook</h1>
      <h2 class="project-tagline">signup form</h2>
      
    </section>
    <div class="container">
      
      <section class="main-content">
      <div class="form-wrap">
       <form action="" method="post">
           <?php
                if(isset($error))
                {
                    echo $error;
                }
           ?>
           <div class="preview text-center">
               <img class="preview-img" src="https://vimcare.com/assets/empty_user-e28be29d09f6ea715f3916ebebb525103ea068eea8842da42b414206c2523d01.png" alt="Preview Image" width="100" height="100"/>
               
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <label>Full Name:</label>
               <input class="form-control" type="text" name="Friend_Name" required placeholder="Enter Your Full Name"/>
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <label>Location:</label>
               <input class="form-control" type="text" name="Friend_Location" required placeholder="Enter Your Location"/>
               <span class="Error"></span>
           </div>
           <div class="form-group">
               <label>Mobile:</label>
               <input class="form-control" type="text" name="Friend_Mobile" required placeholder="Enter Mobile"/>
               <span class="Error"></span>
           </div>
           
           <div class="form-group">
               <input class="btn btn-primary btn-block" type="submit" value="Submit"/>
           </div>

           <?php
                if(isset($message))
                {
                    echo $message;
                }
           ?>
       </form>
      </div>
      </div>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
