    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    	<head>
			<!-- Fevicon -->
			<link rel="icon" href="{{ url('/Images/logo.png') }}">
			<meta charset="utf-8">
    		<!-- Responsive -->
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<!-- CSRF Token -->
    		<meta name="csrf-token" content="{{ csrf_token() }}" />
    		<!-- Bootstrap version 5.0 -->
    		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    		<!-- ajax libraries -->
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    		<!-- Google Fonts -->
    		<link rel="preconnect" href="https://fonts.googleapis.com">
    		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    		<!-- Bootstrap Tags -->
    		<link href="{{asset('/bootstrap-tagsinput.css')}}" rel="stylesheet">
    		<link href="https://fonts.googleapis.com/css2?family=Proza+Libre&display=swap" rel="stylesheet">
    		<!-- Datatables -->
    		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    		<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    		<script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.11.5/datatables.min.js"></script>
    		<!-- FOR ARROWS SIGN -->
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    		<!-- Date Picker -->
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    		<!-- Action icons cds -->
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    		<!-- /////////////////////////////////// Style //////////////////////////////////// -->
    		<style>
    			.container-fluid {
    				width: 100%;
    				background-color: #ffffff;
					
    			}

    			#logo {
    				margin-top: 2%;
    				margin-left: 4%;
    			}

    			#pl {
    				margin-top: 3%;
    				text-align: center;
    				font-family: 'Merriweather', serif;
    				font-size: 30px;
    			}

    			.py-5 {
    				width: 45%;
    				margin-left: auto;
    				margin-top: 0%;
    			}

    			.thead {
    				max-width: 100%;
    				padding: auto;
    				text-align: center;
    				margin: auto;
    			}

    			#datatable_wrapper {
    				width: 50%:
    			}

    			#datatable {
    				background-color: #F9F9F8;
    				font-family: 'Roboto', sans-serif;
    			}

    			#datatable_filter {
    				margin-left: 70%;
    				margin-bottom: 2%;
    				text-align: left;
    				margin-top: 0%;
    				font-family: 'Proza Libre', sans-serif;
    			}

    			.fg-toolbar {
    				background-color: #ffffff;
    				border-style: none;
    			}

    			#h5 {
    				font-family: 'Merriweather', serif;
    				background-color: #F9F9F8;
    			}

    			#datatable_length {
    				width: 10%;
    				height: 0px;
    				font-size: 14px;
    				margin-top: 1%;
    				margin-left: 0%;
    				text-align: right;
    				font-family: 'Proza Libre', sans-serif;
    			}

    			#datatable_length select {
    				width: 35%;
    				margin-bottom: 0%;
    			}

    			#datatable_paginate {
    				margin-left: 72%;
    			}

    			#pdf {
    				margin-bottom: 0%;
    			}

    			.card-btn {
    				width: 40%;
    				text-align: left;
    				margin-top: 0%;
    			}

    			.mode {
    				float: right;
    				margin-top: 20px;
    				margin-right: 20px;
    			}

    			.change {
    				cursor: pointer;
    				border: 1px solid #555;
    				border-radius: 10%;
    				width: 20px;
    				text-align: center;
    				padding: 8px;
    				margin-left: 8px;
    			}

    			.dark {
    				background-color: #222;
    				color: #e6e6e6;
    			}
    		</style>
    		<!-- Project Title -->
    		<title>Projects</title>
    	</head>
    	<body>
    		<div class="container-fluid">
    			<div id="row">
    				<img id="logo" src="/Images/logo 2.png" width="160px">
    				<h4 id="pl">PROJECTS</h4>
    			</div> @if (Session::has('msg')) <div class="col-sm-3">
    				<div class="alert alert-success" role="alert">{{Session::get('msg')}}</div>
    			</div> @endif @if (Session::has('errormsg')) <div class="col-sm-3">
    				<div class="alert alert-danger" role="alert">{{Session::get('errormsg')}}</div>
    			</div> @endif 
                <div class="container">
    				<section class="py-5">
    					<div class=" dates">
    						<div class="row justify-content-center">
    							<div class="col-md-12">
    								<div class="card">
    									<div class="card header bg-light text-black text-center ">
    										<h5 id="h5">Get The Records Between Two Dates</h5>
    									</div>
    									<div class="card-body">
    										<div class="row justify-content-center input-daterange">
    											<div class="col-md-4">
    												<div class="form-group">
    													<input type="text" id="from_date" class=" fa-solid fa-calendar date form-control dates" name="from_date" placeholder="From Date">
    												</div>
    											</div>
    											<div class="col-md-4">
    												<div class="form-group">
    													<input type="text" id="to_date" class=" fa-solid fa-calendar date form-control dates" name="to_date" placeholder="To Date">
    												</div>
    											</div>
    											<div class="col-md-4">
    												<div class="form-group">
    													<i class="bi bi-calendar"></i>
    													<button href="" id="btn-filter" class="btn btn-outline-dark btn-sm">Filter</button>
    												</div>
    											</div>
    										</div>
    										<div>
    											<div>
    												<div>
    													</form>
    													<div>
    														<div>
    															<div>
    				</section>
    				<div class="card-btn">
    					<a href="" id="multiplepdf" class="btn btn-outline-dark btn-sm multipage">Generate PDF</a>
    					<a href="{{route('projects.add')}}" class="btn btn-outline-dark btn-sm">New Project</a>
    				</div>
    				<table id="datatable" class="table table-bordered  yajra-datatable" data-url="{{route('projects.list')}}">
    					<thead class="thead ">
    						<tr>
    							<th>
    								<input type="checkbox" name="main_checkbox" class="project_check" data-id="'.$row->id.'" />
    							</th>
    							<th data-sotable="true">Name</th>
    							<th data-sotable="true">Email</th>
    							<th data-sotable="false">Title</th>
    							<th data-sotable="false">Technology</th>
    							<th data-sotable="false">Type</th>
    							<th data-sotable="false">Status</th>
    							<th data-sotable="false">Create</th>
    							<th width="150">Action</th>
    						</tr>
    					</thead>
    				</table>
    			</div>
    		</div>
    		</div>
    		</div>
    		<!-- MAIN CONATINER FLUID END -->
    		</div>
    	</body>
    	<script>
    		// Datatables
    		$(document).ready(function() {
    			var table = $('#datatable').DataTable({
    				processing: true,
    				serverSide: true,
    				ordering: true,
    				columnDefs: [{
    					targets: 0,
    					orderable: false
    				}],
    				responsive: true,
    				ajax: " {{route('projects.list')}}",
    				columns: [{
    					data: 'id'
    				}, {
    					data: 'Client_Name'
    				}, {
    					data: 'Client_Email'
    				}, {
    					data: 'Project_Title'
    				}, {
    					data: 'Project_Technology'
    				}, {
    					data: 'Project_Type'
    				}, {
    					data: 'Project_Status'
    				}, {
    					data: 'created_at'
    				}, {
    					data: 'action',
    					name: 'actionBtn',
    					orderable: false,
    					searchable: false,
    				}, ],
    			});
    			// Landscape View FOR MULTIPLE PAGES
    			$("#multiplepdf").click(function(e) {
    				e.preventDefault();
    				var Checked = [];
    				$("input:checkbox[name=ch]:checked").each(function() {
    					Checked.push($(this).attr('data-id'));
    				});
    				window.open('http://localhost:8000/projects/m_pdf?ids=' + Checked.join(), '_blank');
    			});
    		});
    		// Main Checkbox to select all Rows
    		$(document).on('click', 'input[name="main_checkbox"]', function() {
    			if (this.checked) {
    				$('input[name="ch"]').each(function() {
    					this.checked = true;
    				});
    			} else {
    				$('input[name="ch"]').each(function() {
    					this.checked = false;
    				});
    			}
    		});
    		// Date Rangepicker Function using Ajax call 
    		$('.dates').on('click', function() {
    			$('.input-daterange').datepicker({
    				todayBtn: 'linked',
    				foramt: 'yyyy-mm-dd',
    				autoclose: true
    			});
    			// it will load data in datatables 
    			load_data();
    			// load data table for ajax call server side
    			function load_data(from_date = '', to_date = '') {
    				var table = $('#datatable').DataTable({
    					Process: true,
    					serverSide: true,
    					ajax: {
    						url: " {{route('projects.list')}}",
    						data: {
    							from_date: from_date,
    							to_date: to_date
    						}
    					},
    					columns: [{
    						data: 'id'
    					}, {
    						data: 'Client_Name'
    					}, {
    						data: 'Client_Email'
    					}, {
    						data: 'Project_Title'
    					}, {
    						data: 'Project_Technology'
    					}, {
    						data: 'Project_Type'
    					}, {
    						data: 'Project_Status'
    					}, {
    						data: 'created_at'
    					}, {
    						data: 'action',
    						name: 'actionBtn',
    						orderable: false,
    						searchable: false,
    					}, ],
    					method: "POST",
    					success: function(data) {
    						window.open(window.location.origin + data, '_blank');
    						console.log(data);
    					}
    				})
    			}
    			$('#btn-filter').click(function() {
    				var from_date = $('#from_date').val();
    				var to_date = $('#to_date').val();
    				if (from_date != '' && to_date != '') {
    					$('#datatable').DataTable().destroy();
    					load_data(from_date, to_date);
    				} else {
    					alert('Both Date Is Required');
    				}
    			});
    		});
    		
    	</script>
    </html>