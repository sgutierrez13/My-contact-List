@extends('layout.layout')
@section('head')
	@include('imports.import')
@endsection
@section('contact')
	<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="panel panel-default">
            <div id="background-color" class="panel-heading" style="font-size: 120%">{{$title}}</div>
              <div class="panel-body">
                  <form class="form-horizontal" action="{{URL::route($route,['id'=>$id])}}" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Names</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Names" value="{{$names}}">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="surname" class="col-sm-2 control-label">Surnames</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="surname" placeholder="Supernames" value="{{$surnames}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="device" class="col-sm-2 control-label">Type of device</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="device">
                            @foreach($deviceList as $device)
                              @if($device->id==$typeOfDevice)
                                <option value="{{$device->id}}" selected>{{$device->description}}</option>
                              @else
                                <option value="{{$device->id}}">{{$device->description}}</option>
                              @endif
                            @endforeach-->
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="contact_number" class="col-sm-2 control-label">Contact number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="contact_number" placeholder="Contact number" value="{{$contactNumber}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" placeholder="Email" value="{{$email}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="address" placeholder="Address" value="{{$address}}">
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
          @if(session('status'))
            <div class="alert alert-danger" role="alert">
              {{session('status')}}
            </div>
          @endif
          @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
              <div class="form-group has-error has-feedback">
                <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>{{$error}}
              </div>
            @endforeach
            </div>
          @endif
     	  </div>
     </div>
	</div>
@endsection