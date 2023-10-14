@extends("user.layout")

@section("main")
    <div class="container">
        <!-- Heading -->
        <h1>SIGN IN</h1>
        
        <!-- Links -->
        <ul class="links">
          <li>
            <a href="signin.blade.php" id="signin">SignIn</a>
          </li>
          </li>
        </ul>
        
        <!-- Form -->
        <form  action="/sign_in" method="post" class="sign_form">
             @csrf
          <!-- email input -->
          <div class="first-input input__block first-input__block">
             <input type="email" placeholder="Email" name="email" class="input" id="email"   />
          </div>
          <!-- password input -->
          <div class="input__block">
             <input type="password" placeholder="Password" name="password" class="input" id="password"    />
          </div>
          <!-- sign in button -->
          <button class="signin__btn">
            Sign in
          </button>
        </form>
         <!-- forgot -->
         <div class="content">
            <div class="pass-link">
               <a href="#">Forgot password?</a>
            </div>
         </div>
        <!-- separator -->
        <div class="separator">
          <p>OR</p>
        </div>
        <!-- google button -->
        <button class="github__btn">
          <i class="fa fa-github"></i>
          Dont't have an account
          <a href="signup">create account</a>
        </button>
        <!-- google button -->
        <button class="google__btn">
          <i class="fa fa-google"></i>
          Sign in with Google
        </button>
      </div>
      
    

 @endsection