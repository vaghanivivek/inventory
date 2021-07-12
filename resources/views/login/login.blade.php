<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
      <center><img src="dist/img/logo.png" width="300" ></center>
      <ul class="tab-group">
        <li class="tab"><a href="register">Sign Up</a></li>
        <li class="tab"><a href="login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="login">  
        @if(Session::get('status'))
              <div class="alert alert-sucess alert-dismissible fade show" role="alert">
                <h1>Your Are Register Successfull</h1>
                </button>
                </div>
              @endif 
              
        <h1>Welcome Back!</h1>
 
          <form action="logs" method="POST">
          @csrf
          
            <div class="field-wrap">
            <!--<label>
              Email Address<span class="req">*</span>
            </label>-->
            <input type="email"required autocomplete="off" name="email" placeholder="EMAIL"/>
          </div>
          
          <div class="field-wrap">
            <!--<label>
              Password<span class="req">*</span>
            </label>-->
            <input type="password"required autocomplete="off" name="password" placeholder="PASSWORD"/>


            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="forget" style="font-size:20px;text-align:center;">Forgot Password</a>
            <br/>
            <br/>
          
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <a href="register" style="font-size:20px;text-align:center;">Create An Account</a>

            
          </div>

         
          
          
          
          <button type="submit" class="button button-block">Log In</button>
          @if (Session::get('loginerr'))
          
            <h3 STYLE="color: white; text-align: center;">{{Session::get('loginerr')}}<h3>
         
          @endif
        </form>
          
          

        </div>
        
        
        <div id="login">   
          

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>-->

</body>
</html>
