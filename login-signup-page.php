
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <STYLE>
            .left img {
            width: 112px;
            filter: invert(100%);
            /* font-size: 25px; */
        }
body{
   margin: 0px;
   padding: 0px;
   background-image: url('2.jpeg');
   
   /* height: 50%; */
width: 100%;
/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
  }
*, *:before, *:after {
    box-sizing: border-box;
  }
  html {
    overflow-y: scroll;
  }
  a {
    text-decoration: none;
    color: #1da1f2;
    transition: .5s ease;
  }
  a:hover {
    color: #fdbaba;
  }
  .form {
    background: rgb(46 28 9 / 100%);
    padding: 40px;
    max-width: 600px;
    margin: 40px 8px;
    border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(188, 222, 248, 0.3);
  }
  .top-area {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
  }
  .top-area:after {
    content: "";
    display: table;
    clear: both;
  }
  .top-area li a {
    display: block;
    text-decoration: none;
    padding: 15px;
    background: #2b353b;
    color: #a0b3b0;
    font-size: 20px;
    float: left;
    width: 50%;
    text-align: center;
    cursor: pointer;
    transition: .5s ease;
  }
  .top-area li a:hover {
    background: #2b353b;
    color: #ffffff;
  }
  .top-area .active a {
    background: #737f86;
    color: #ffffff;
  }
   
  .tab-content > div:last-child {
    display: none;
  }
   
  h1 {
    text-align: center;
    color: #ffffff;
    font-weight: 300;
    margin: 0 0 40px;
  }
  label {
    /* position: absolute;
    -webkit-transform: translateY(1px);
            transform: translateY(2px);
    left: 13px;
    color: black
    transparent: all 0.25s ease;
    -webkit-backface-visibility: hidden;
    pointer-events: none; */
    font-size: 22px;
  }
  /* label .req {
    margin: 2px;
    color: #1da1f2;
  } */
  /* label.active {
    -webkit-transform: translateY(50px);
            transform: translateY(50px);
    left: 2px;
    font-size: 14px;
  } */
  /* label.active .req {
    opacity: 0;
  } */
  /* label.highlight {
    color: #fcf4f4;
  } */
  input, textarea {
    font-size: 22px;
    display: block;
    width: 100%;
    height: 10%;
    background: none;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: #0a0a0a;
    border-radius: 0;
    transition: border-color .25s ease, box-shadow .25s ease;
  }
  input:focus, textarea:focus {
    outline: 0;
    border-color: #1da1f2;
  }
  textarea {
    border: 2px solid #a0b3b0;
    resize: vertical;
  }
  .label-field {
    position: relative;
    margin-bottom: 20px;
    background-color: rgb(236, 228, 228);
    color: black;
  }
  .top-row:after {
    content: "";
    display: table;
    clear: both;
  }
  .top-row > div {
    float: left;
    width: 48%;
    margin-right: 4%;
  }
  .top-row > div:last-child {
    margin: 0;
  }
  .button {
    border: 0;
    outline: none;
    border-radius: 0;
    padding: 15px 0;
    font-size: 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .1em;
    background: #2b353b;
    color: #f8f0f0;
    transition: all 0.5s ease;
    -webkit-appearance: none;
  }
  .button:hover, .button:focus {
    background: #0080ff;
  }
  .button-block {
    display: block;
    width: 100%;
  }
  .forgot {
    margin-top: -20px;
    text-align: right;
  }
  @media (max-width: 765px) {
      label {
        left: 0;
      }    }
  }
   .navbar{
   color: white;
   font-size: 25px;
  } 
    </STYLE>
    <title>login page</title>
</head>
<body>
    <?php require '_nav.php';?>
    <h1>ठेका 24x7</h1>
    <div class="form">   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account has been created and now you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>   
      <ul class="top-area">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        
        <div id="signup">   
          
          <h1>Sign Up for Free</h1>
          
          <form action="registration.php" method="post">
          
          <div class="top-row">
            <div class="label-field">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="off" />
              <!-- <label for="fname"> First Name<span class="req">*</span></label><br>
             <input type="text" id="fname" name="fname"> -->
            </div>
        
            <div class="label-field">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name = "lname" required autocomplete="off"/>
              <!-- <label for="lname"> Last Name<span class="req">*</span></label><br>
  <input type="text" id="lname" name="lname"> -->
            </div>
          </div>
          
          <div class="label-field">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required name = "email" autocomplete="off"/>
          </div>
          <div class="label-field">
            <label>
              Moblie No<span class="req">*</span>
            </label>
            <input type="MOBILE" required name="mobile" autocomplete="off"/>
          </div>
          <div class="label-field">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" required name = "password" autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>
          <a href="home.html">
          Get Started</a>
        </button>
          
          </form>
 
        </div>
        
        <div id="login">   
          <!-- <h1>Welcome Back!</h1> -->
          
          <form action="login.php" method="post">
          
            <div class="label-field">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required name="email" autocomplete="off"/>
          </div>
          
          <div class="label-field">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required name="password" autocomplete="off"/>
          </div>
          
         <!-- <p class="forgot"><a href="#">Forgot Password?</a></p>  -->
          
          <button class="button button-block"><!--<a href="index.html">-->Log in<!-- </a>--></button>
          
          </form>
 
        </div>
        
      </div>  
</div>
 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
    $('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');
 
   if (e.type === 'keyup') {
 if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
     if( $this.val() === '' ) {
     label.removeClass('active highlight'); 
 } else {
     label.removeClass('highlight');   
 }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
     label.removeClass('highlight'); 
 } 
      else if( $this.val() !== '' ) {
     label.addClass('highlight');
 }
    }
 
});
 
$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');
 
  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
</script>
 
</body>
</html>