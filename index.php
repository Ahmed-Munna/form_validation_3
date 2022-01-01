<?php








// select option start

    $country = ["Bangladesh","Papua New-gini","Uganda","Africa","Hundoraj","Tinishio","Zimbabue"];
    function sOption($Options){
        foreach($Options as $option){
            printf("<option value='%s'>%s</option>",strtolower($option),strtoupper($option));
        }
    }
// select option end

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Regestation form</title>
  </head>
  <body>
  

  
    <section>
        <div class="container">
            <div class="row mt-5 border-1">
                <h3 class="text-center">Regestation form</h3>
                <div class="col-3"></div>
                <div class="col-6">
                    <?php
                        if(isset($_GET["success"])){ ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET["success"] ?>
                            </div>
                      <?php  }
                    ?>
                    <form action="post.php" method="post">
                    <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" name="name">
                            <strong class="text-danger"><?php if(isset($_GET["nameErr"])){ 
                                echo $_GET["nameErr"];
                                } ?>
                            </strong>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <strong class="text-danger"><?php if(isset($_GET["mailErr"])){ 
                                echo $_GET["mailErr"];
                                } ?>
                            </strong>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="exampleInputPassword1">
                            <strong class="text-danger"><?php if(isset($_GET["passErr"])){ 
                                echo $_GET["passErr"];
                                } ?>
                            </strong>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="conPassword" id="exampleInputPassword2">
                            <strong class="text-danger"><?php if(isset($_GET["cpassErr"])){ 
                                echo $_GET["cpassErr"];
                                } ?>
                            </strong>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="male" name="gender" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="female" name="gender" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                female
                            </label>
                            <strong class="text-danger"><?php if(isset($_GET["genErr"])){ 
                                echo $_GET["genErr"];
                                } ?>
                            </strong>
                        </div>
                        <select class="form-select my-3" name="country" aria-label="select">
                            <option selected disabled>Country</option>
                            <?php sOption($country) ?>
                        </select>
                        <strong class="text-danger"><?php if(isset($_GET["conErr"])){ 
                                echo $_GET["conErr"];
                                } ?>
                            </strong>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>