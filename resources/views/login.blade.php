<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Halaman Login</title>
     <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>
     <div class="container" id="container">
          <div class="form-container sign-in-container">
               <form action="#">
                    <h1>Login</h1>
                    <span>Silahkan login disini</span>
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <!-- <a href="#">Forgot your password ?</a> -->
                    <a href="register">Belum punya akun?</a>
                    <button><a href="profile" style="color:white;">Login</a></button>
                    
               </form>
          </div>
          <div class="overlay-container">
               <div class="overlay">
                    <div class="overlay-panel overlay-right">
                         <div class="image">
                            <img src="{{asset('assets/img/logo wikrama.png')}}">
                         </div>
                         <h1>Hello, Friend !</h1>
                         <p>Silakan Login terlebih dahulu, untuk masuk kedalam website</p>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>