<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="{{url('/')}}/register" method="post">
    @csrf
    @php
    $demo = 1;
    @endphp
    <div class="container">  
      <div class="d-flex ">
      <x-input type="text" class="w-50 inline-block " name="name" label="Name" :demo="$demo"/>
      <x-input type="email" class="w-50 inline-block" name="email" label="Email" />
      </div>
      <x-input type="password" name="password" label="Password" />
      <x-input type="password" name="confirm_password" label="Confirm Password" />
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>