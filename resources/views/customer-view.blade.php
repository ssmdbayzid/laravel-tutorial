<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <!-- Add Customer  -->
    <a href="{{route('customer.create')}}">
<button type="button" class="btn btn-primary d-inline-block m-2 float-right">Add</button>
</a>
<table class="table">
   
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Country</th>
      <th scope="col">State</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $customer) <tr>
      
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->gender}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->country}}</td>
      <td>{{$customer->state}}</td>
      <td>{{$customer->dob}}</td>
      <td>
        @if($customer->status =="1")
        <a href="">
       <span class="badge badge-success">Active</span> 
       </a>
        @else
        <a href="">
        <span class="badge badge-danger">Inactive</span> 
        </a>
        @endif
    </td>
      <td class="d-flex">
        <!-- <a href="{{url('/customer/delete')}}/{{$customer->customer_id}}"> useing url --> 
        <a href="{{route('customer.delete', ['id' => $customer->customer_id])}}" class="mr-2"> <!---- Using route name -->
        <div class="btn btn-danger">Delete</div>
        </a>
        <a href="{{route('customer.edit', ['id' => $customer->customer_id])}}">
        <div class="btn btn-primary">Edit</div>
        </a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
</div>
</body>
</html>