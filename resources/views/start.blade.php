@extends('layout.layout')
@section('head')
	@include('imports.import')
@endsection
@section('contact')
	<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div id="background-color" class="panel-heading" style="font-size: 120%">Contacts list</div>
                <div class="panel-body">
                	<div class="table-responsive">
                		<table class="table">
                	<thead><tr>
					  <th id="background-color">Id</th>
					  <th id="background-color">Names and surnames</th>
					  <th id="background-color">Email</th>
					  <th id="background-color">Communication device</th>
					  <th id="background-color">Contact number</th>				  
					  <th id="background-color">Address</th>
					</tr></thead>
					<tbody>
						@foreach ($contacts as $contact)
    						<tr>
								<th>{{$contact->id}}</th>
								<td>{{$contact->name." ".$contact->surname}}</td>
								<td>{{$contact->email}}</td>
								<td>{{$contact->id_device}}</td>
								<td>{{$contact->contact_number}}</td>	  
								<td>{{$contact->address}}</td>
							</tr>
						@endforeach
					</tbody>
					</table>
                	</div>
                	
                	</div>       	
                </div>
     		</div>
     	</div>
	</div>
@endsection