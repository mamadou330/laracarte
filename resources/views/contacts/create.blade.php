@extends('layouts.default', ['title' => 'Contact'])

@section('content')
     <div class="conatainer">
          <div class="row">
               <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <h2>Get In Touch</h2>
                    <p class="text-muted">Si vous avez besoin d'aide  veuillez me contacter à l'adresse suivante :
                         <a href="mailto:{{ config('laracarte.admin_support_email') }}">mon email</a>
                    </p>

                    <form action="{{ route('valid_request') }}" method="POST">
                         {{ csrf_field() }}

                         <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                              <label for="name" class="control-label">Name </label>
                              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                              {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                         </div>

                         <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                              <label for="email" class="control-label">Email </label>
                              <input type="email" class="form-control" id="email" name="email" value=" {{ old('email') }}">
                              {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                         </div>

                         <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                              <label for="message" class="control-label sr-only">Message </label>
                              <textarea name="message" class="form-control" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                              {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
                         </div>

                         <div class="form-group">
                             <button type="submit" class="btn btn-primary btn-block">Envoyer &raquo;</button>
                         </div>
                    </form>
               </div>
          </div>

     </div>

@stop
