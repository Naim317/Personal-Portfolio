@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container-fluid homeImg m-0 my-3">
<div class="row m-0 d-flex justify-content-center">
    <div class="col-md-4 text-white text-center topDiv ">
    <h1>Md. Jannat UL Naim</h1>
    <h2>Computer Engineer</h2>
    <h4>Back-End Web Devloper</h4>
    <button class = "btn btn-primary">Let's Gooo...</button>


    </div>


</div>

</div>

<div class="mx-3 text-center">
    <h2>My Services</h2>
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



<div class="mx-3 text-center">
    <h2>My Recent Projects</h2>
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


<div class="container my-5 text-center">
    <h2 class="my-3">Contact Me</h2>
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
  
  <button type="submit" class="btn btn-block btn-primary">Submit</button>
</form>

</div>

<div class="col-md-6">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14607.605510543724!2d90.37550716977539!3d23.750896050000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1614019659737!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>



</div>

</div>





@endsection