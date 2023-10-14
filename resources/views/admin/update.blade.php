<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<form method="POST" action="/conedit/{{ $user->id }}">
      @csrf
        <h1>update contact</h1>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">name</label>
          <input type="text" value={{ $user->name }} name="name" class="form-control" id="exampleInputPassword1">
        </div>
       
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">email</label>
          <input type="email" value={{ $user->email }} name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">message</label>
            <input type="text" value={{ $user->message }} name="message" class="form-control" id="exampleInputPassword1">

            <div class="mb-3">             
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
          </div>
    
         
        <button type="submit" class="btn btn-primary">update</button>
      </form>


</body>
</html>




