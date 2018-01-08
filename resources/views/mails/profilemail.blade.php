<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Explodan User Story</title>
 </head>
 <body>
   <h3>Explodan user story suggestion from, {{ $name }}</h3>
   <p>User e-mail:</p>
   <p>{{ $email_address }}</p>
   <br>
   <p>Trip category type:</p>
   <p>{{ $categories }}</p>
   <br>
   <p>Destination city:</p>
   <p>{{ $city }}</p>
   <br>
   <p>Destination country:</p>
   <p>{{ $country }}</p>
   <br>
   <p>Best travel session of year:</p>
   <p>{{ $travel_session }}</p>
   <br>
   <p>Estimated time:</p>
   <p>{{ $est_time }}</p>
   <br>
   <p>Title:</p>
   <p>{{ $title }}</p>
   <br>
   <p>Banner</p>
   <img src="{{ $img1 }}" alt="">
   <br>
   <p>Description:</p>
   <p>{{ $excerpt }}</p>
   <br>
   <p>Extra image 1</p>
   <img src="{{ $img2 }}" alt="">
   <br>
   <p>Content</p>
   <p>{{ $msg }}</p>
   <br>
   <p>Extra image 2</p>
   <img src="{{ $img3 }}" alt="">
 </body>
</html>
