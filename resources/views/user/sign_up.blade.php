@extends("user.layout")

@section("main")
    <div class="container">
        <!-- Heading -->
        <h1>SIGN UP</h1>
        
        <!-- Links -->
        <ul class="links">
          <li>
            <a href="signup.blade.php" id="signin">SignUp</a>
          </li>
          </li>
        </ul>
        
        <!-- Form -->
        <form  action="/sign_up" method="post" class="sign_form">
          @csrf
          <!-- name input -->
          <div class="first-input input__block first-input__block">
             <input type="name" placeholder="name" name="name" class="input" id="name"   />
          </div>
          <!-- email input -->
          <div class="input__block">
            <input type="email" placeholder="Email"  name="email" class="input" id="email"   />
         </div>
          <!-- password input -->
          <div class="input__block">
             <input type="password" placeholder="Password" name="password" class="input" id="password" />
          </div>
          <!-- repeat password input -->
          <div class="input__block">
             <input type="password" placeholder="confirm password" name=confirmpass class="input" id="confirm password"    />
          </div>
          <!-- sign in button -->
          <button class="signin__btn">
            Sign up
          </button>
        </form>

        <!-- separator -->
        <div class="separator">
          <p>OR</p>
        </div>
        <!-- google button -->
        <button class="github__btn">
          <i class="fa fa-github"></i>
          Already have an account
          <a href="signin">Login Now</a>
        </button>
        <!-- google button -->
        <button class="google__btn">
          <i class="fa fa-google"></i>
          Sign in with Google
        </button>
    </div>
      
@endsection