<?php
//GET AGE BY BDAY
$bday = '1990-11-01';
$from = new DateTime($bday);
$to   = new DateTime(date('Y-m-d'));
$age  = $from->diff($to)->y;
?>
@extends('admin_template')
@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
				<h1>
					<h3>Patients</h3>
					<p>Please use the table below to navitage or filter the results. You can download the table as PDF or Excel file.</p>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addNewPatient"><span class="fa fa-plus"></span> Add New</button>
				</h1>
			</div>
			<!-- /.box-header -->
			<div class="box-body" style="width:99%;">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Address</th>
						<th>Gender</th>
						<th>Birthday</th>
						<th>Age</th>
						<th>Contact</th>
						<th>Email</th>
						<th>Option</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mark Spencir</td>
							<td>Bacolod City</td>
							<td>Male</td>
							<td>{{ $bday }}</td>
							<td>{{ $age }}</td>
							<td>+639098123344</td>
							<td>mark@yahoo.com</td>
							<td>
							<div class="btn-group">
									<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Actions<span class="caret"></span></button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><a href="#" data-toggle="modal" data-target="#editPatient"><span class="fa fa-pencil"></span>Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#deletePatient"><span class="fa fa-trash"></span>Delete</a></li>
									</ul>
							</div>
							</td>
						</tr>
						<tr href="test">
							<td>2</td>
							<td>Joanna Dela Cruz</td>
							<td>Bacolod City</td>
							<td>Female</td>
							<td>{{ $bday }}</td>
							<td>{{ $age }}</td>
							<td>+6390132123212</td>
							<td>joanna@yahoo.com</td>
							<td>
							<div class="btn-group">
									<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Actions<span class="caret"></span></button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><a href="#" data-toggle="modal" data-target="#editPatient"><span class="fa fa-pencil"></span>Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#deletePatient"><span class="fa fa-trash"></span>Delete</a></li>
									</ul>
							</div>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Rowella Tan</td>
							<td>Bacolod City</td>
							<td>Female</td>
							<td>{{ $bday }}</td>
							<td>{{ $age }}</td>
							<td>+639098123344</td>
							<td>rewella@yahoo.com</td>
							<td>
							<div class="btn-group">
									<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Actions<span class="caret"></span></button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><a href="#" data-toggle="modal" data-target="#editPatient"><span class="fa fa-pencil"></span>Edit</a></li>
										<li><a href="#" data-toggle="modal" data-target="#deletePatient"><span class="fa fa-trash"></span>Delete</a></li>
									</ul>
							</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>



@endsection
