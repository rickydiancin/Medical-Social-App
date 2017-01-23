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
					<h3>Prescription <small>add</small></h3>
					<p>Please use the table below to navitage or filter the results. You can download the table as PDF or Excel file.</p>
				</h1>
			</div>
			<!-- /.box-header -->
			<div class="box-body" style="width:99%;">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label for="name" style="clear:both;"> Prescription Id</label>
						</div>
						<div class="col-md-3">
							<input type="text" name="prescription_id" value="1"  readonly="readonly" class="form-control"/>
						</div>
					</div>
        </div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label for="name" style="clear:both;"> Patient</label>
						</div>
						<div class="col-md-3">
							<select name="" class="form-control chzn">
								<option value="">--Select Patient--</option>
								<option value="">Mark Spencir	</option>
								<option value="">Joanna Dela Cruz</option>
								<option value="">Rowella Tan</option>
							</select>
						</div>
						<div class="col-md-2">
	            <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#addNewPatient">Add New Patient</button>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label for="name" style="clear:both;"> Case History</label>
						</div>
						<div class="col-md-3">
							<select name="" class="form-control chzn">
								<option value="">--Select an option--</option>
								<option value="">Cancer Treatment</option>
								<option value="">Malaria</option>
								<option value="">Skin Disorder</option>
							</select>
						</div>
						<div class="col-md-2">
	            <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#addCase">Add Case</button>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label for="name" style="clear:both;"> Diagnosis</label>
						</div>
						<div class="col-md-3">
							<textarea class="form-control"></textarea>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>

@endsection
