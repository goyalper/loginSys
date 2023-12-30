<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login With Google</title>
    <!-- bootstrap scripts start -->
    <!-- Favicon -->
    <link rel="icon" href="img/AWAZTAK-ICO.png" type="image/x-icon">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
      />
      <!-- bootstrap scripts ends here -->
      
    </head>
    <body>
        <div class="container" style="margin-top:100px;">
        <a href="loginSys">Go To Login Page</a> | <a href="login">Go To Login Page2</a>    
        <img src="img/png/logo-no-background.png" alt="logo" style="display:table; margin:0 auto; max-width:150px;">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="inputPass">Password</label>
                    <input type="password" name="password" id="inputPass" class="form-control" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-danger">Login With Google</button>
            </form>
        </div>
        
        <style>
            input, button{
                margin:10px;
                /* width: 600pxt; */
            }
            input{
                /* max-width: 600px; */
                /* width: 1000px; */
            }
            .container{
                /* border: 2px solid black; */
                max-width: 0 auto;
            }
            img{
                padding-bottom: 50px;
            }
            .form-group{
                /* max-width: max-content; */

            }
        </style>
        




    <!-- bootstrap scripts start -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap scripts end -->

  </body>
</html>