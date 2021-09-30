@extends('layout.app')
@section('title','Service')
  

@section('content')

<div class="container-fluid">
<div class="row p-4">
    <div class="col-md-12 text-center bg-dark text-white">
        <h4>My Services</h4>
    </div>
</div>
</div>

<div class="container">
<div class="row my-3">
<div class="col-md-4 p-2">
<div class="card" style="width: 100%;">

  <img class="card-img-top" src="{{asset('img/cardImg.png')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

</div>

<div class="col-md-4 p-2">
<div class="card" style="width: 100%;">

  <img class="card-img-top" src="{{asset('img/cardImg.png')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

</div>

<div class="col-md-4 p-2">
<div class="card" style="width: 100%;">

  <img class="card-img-top" src="{{asset('img/cardImg.png')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

</div>

</div>

</div>

<div class="container">
<div class="row">
<div class="col-md-6">
<form>
  <div class="form-group">
    <label for="exampleInputEmail">Your Name</label>
    <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputMsg">Your Message</label>
    <input type="text" class="form-control" id="exampleInputMsg" placeholder="Write Ur Message">
  </div>
  
  <button type="submit" class="btn btn-block btn-primary ">Submit</button>
</form>

</div>

<div class="col-md-6">
<label for=""><h3>Address</h3></label>
<h4><i>

<pre>
52/8, West Raza Bazar
Mobile: 01737893253
Mail: jannat15-10526@diu.edu.bd
HomeTown: Debiganj,Panchagarh
Nationality: Bangladeshi
</pre>
</i></h4>



</div>

</div>
</div>



@endsection