
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<link href="/www/css/style.css" rel="stylesheet"> 
<link href="/www/css/bootstrap.min.css" rel="stylesheet"> 
<script src="/www/js/bootstrap.min.js"> </script>

   <title>D-H Dating</title>
</head>

<body>

<div id="all">

  <div id="index_form_w">
  <div class="alert alert-danger col-4">You have entered a wrong username or password, please try again</div>
    <h1>Please Log In</h1>
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <div class="col-3">
    <input type="text" class="form-control"  name="username" aria-describedby="emailHelp">
    </div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <div class="col-3">
    <input type="password" name="password" class="form-control" >
    </div>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>


    <a href="registeration_form.php" ><button class="btn btn-success">Don't have an account?</button></a>
    <a href="registerform.php" >forgot your password?</a>
   

    </div></div>
</body>
