@extends('layout.layout')
@section('head')
	@include('imports.import')
@endsection
@section('contact')
	<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
       		@if(session('status'))
				    <div class="alert alert-danger" role="alert">
					   {{session('status')}}
				    </div>
			     @endif
          <div class="panel panel-default">
            <div id="background-color" class="panel-heading" style="font-size: 120%">{{$title}}</div>
              <div class="panel-body">
                  <form class="form-horizontal" action="{{URL::route($route)}}" method="POST">
                    {{csrf_field()}}
                  	<div class="form-group">
                        <label for="contact" class="col-sm-2 control-label">Id of contact</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="contact">
                            @foreach($contacts as $contact)
                              <option value="{{$contact->id}}">{{$contact->id}}</option>
                            @endforeach-->
                          </select>
                        </div>
                      </div>
                  	<div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="button btn btn-default">{{$valueButton}}</button>
                        </div>
                    </div>
                  </form>
              </div>        
          </div>
     	  </div>
     </div>
	</div>
@endsection