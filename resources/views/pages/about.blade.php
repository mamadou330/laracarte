@extends('layouts.default', ['title' => 'Home'])

@section('content')
     <div class="conatainer">
          <h2> What is {{config('app.name') }} ?</h2>
          <p>{{config('app.name') }} is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

          <div class="row">
               <div class="col-md-6">
                    <p class="alert alert-warning">
                         <strong>Lorem ipsum dolor sit amet com dolores am, ipsam odio @etsom nisi soluta!</strong>
                    </p>
               </div>
          </div>
          <p>Lorem ipsum dolor sit  ipsa impedit quo, explicabo dolorepiente suscipit. the  <a href="#">source code</a></p>

          <hr>
          <h2>What is Laramp</h2>
          <p>Laramap is the website by which {{config('app.name') }} was inspired </p>
          <p>More info <a href="https://laramap.com/p/about">here</a></p>

          <hr>
          <h2>Which tools and services are used in {{config('app.name') }}? </h2>

          <p>Lorem, ipsum dolor sit amet consrit exercitationem  &amp; eos rem necessitatibus? Tempore tempora, ad fuga quas blanditiis voluptatum reprehenderit id.</p>
          <ul>
               <li>Laravel</li>
               <li>Bootstrap</li>
               <li>Amazon</li>
               <li>Mandril</li>
               <li>Google Maps</li>
               <li>Gravatar</li>
               <li>Heroku</li>
          </ul>
     </div>    

@stop
