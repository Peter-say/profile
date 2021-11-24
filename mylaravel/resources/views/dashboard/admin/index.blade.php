<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard\index.css">
    <title>Admin || Dashboard</title>

    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.top-nav {
    display: flex;
    background: #234567;
  width: 100%;
  padding: 20px 50px 20px 0px;
  justify-content: space-between;
 
}

 .header h1 a{
    color: white;
    font-size: 24px;
}

 
    </style>
</head>
<body>
   
  <!-- navbar -->
    <div class="row">
        <div class="col-xl-6 col-lg-4 col-sm-none col-md-none top-nav" >
         <h1 class="hearder"> <a href="" class="text-warning">Dashboard</a></h1>
           <ul class="authentication">
              <select name="authentication" id="authentication">
                  <option disabled  selected value="sign-out">Authentication</option>
                  <option value="sign-out"> Change Password</option></option>
              </select>
           </ul>
           <ul class="authentication">
              <select name="authentication" id="authentication">
                  <option disabled selected value="sign-out">Profile Info</option>
                  <option value="sign-out">Profile</option>
                  <option value="sign-out">Profile</option>
              </select>

              <li class="menu">

<i class="fa fa-sign-out" style="font-size:30px;color:black"></i>

<form action="{{ route('logout')}}" method="post">@csrf
    <button class="dropdown-item text-danger" type="submit">Sign-Out</button>
</form>
</li>
           </ul>

        </div>
    </div>
</body>
</html>