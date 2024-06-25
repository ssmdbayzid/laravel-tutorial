<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container border p-2 mt-5" >
    <h2 class="text-center my-3 text-primary">{{$title}}</h2>
<form action="{{$url}}" class="px-3" method="post">
    @csrf
    @php
    $demo = 1;
    @endphp
        <div class="form-row ">
        <!-- Name -->
            <div  style="width: 50%;" class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                value="{{old('name')}} {{$customer->name}}" placeholder="Enter your name">
                <span class="text-danger">
                    @error("name")
                    {{$message}}
                    @enderror
                </span>
            </div>

            <!-- Email -->
            <div  style="width: 50%;" class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                value="{{old('email')}} {{$customer->email}}" placeholder="Enter your email">
                <span class="text-danger">
                    @error("email")
                    {{$message}}
                    @enderror
                </span>
            </div>
            </div>            
            <div class="form-row gap-2">
            <!-- Password -->
            <div  style="width: 50%;" class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                value="{{old('password')}} {{$customer->password}}" placeholder="Enter your password">
                <span class="text-danger">
                    @error("password")
                    {{$message}}
                    @enderror
                </span>
            </div>

            <!-- Confirm Password -->
            <div  style="width: 50%;" class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirm_password" 
                value="{{old('confirmPassword')}} {{$customer->confirmPassword}}" placeholder="Confirm your password">
                <span class="text-danger">
                    @error("confirm_password")
                    {{$message}}
                    @enderror
                </span>
            </div>

            </div>

            <div class="form-row gap-2">
            <!-- Country -->
            <div  style="width: 50%;" class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country"
                value="{{old('country')}} {{$customer->country}}" placeholder="Enter your country">
                <span class="text-danger">
                    @error("country")
                    {{$message}}
                    @enderror
                </span>
            </div>

            <!-- State -->
            <div  style="width: 50%;" class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state"
                value="{{old('state')}} {{$customer->state}}" placeholder="Enter your state">
                <span class="text-danger">
                    @error("state")
                    {{$message}}
                    @enderror
                </span>
            </div>
            </div>

            
            <!-- Address -->
            <div class="">
                <label for="address">Address</label>
                <textarea type="text" class="form-control" id="address" name="address"
                value="{{old('address')}} {{$customer->address}}" placeholder="Enter your address"></textarea>
                <span class="text-danger">
                    @error("address")
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-row gap-2">
            <!-- Gender -->
            <div  style="width: 50%;" class="form-group">
                <label>Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male"
                     name="gender" value="male" {{ old( 'gender', $customer->gender ) == 'male' ? 'checked' : '' }} >
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" 
                    name="gender" value="female" {{ old( 'gender', $customer->gender ) == 'female' ? 'checked' : '' }}>                   
                    <label class="form-check-label" for="female">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="other" 
                    name="gender" value="other" {{old( 'gender', $customer->gender ) == 'other' ? 'checked' : ''}} >
                    <label class="form-check-label" for="other">Other</label>                
                </div>
                <span class="text-danger">
                    @error("gender")
                    {{$message}}
                    @enderror
                </span>
                </div>
                  <!-- Date of Birth -->
            <div  style="width: 50%;" class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob"
                value="{{old('dob')}} {{$customer->dob}}" class="form-control" id="dob">
                <span class="text-danger">
                    @error("dob")
                    {{$message}}
                    @enderror
                </span>
            </div>
            </div>
                
                 <!-- Submit Button -->
            <button style="width: 100%;" type="submit" class="btn btn-primary d-block  mx-auto ">Submit</button>                                       
            </div>                   
</form>
</div>
</body>
</html>