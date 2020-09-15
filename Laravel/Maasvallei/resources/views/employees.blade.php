@extends('layouts/main')

@section('title', 'Employees')

@section('styles')
<link href="/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
<link href="/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css">
<link href="/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css">
<link href="/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Employees</h4>
				<p class="text-muted font-13 mb-4">Here you can find information about an employee based on your access level.</p>

				<table id="basic-datatable" class="table dataTable no-footer" role="grid" aria-describedby="basic-datatable_info">
					<thead>
						<tr role="row">
							<th class="sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="firstname: activate to sort column descending">firstname</th>
							<th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="lastname: activate to sort column descending">lastname</th>
							<th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="email: activate to sort column descending">email</th>
							<th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="email_verified_at: activate to sort column descending">email_verified_at</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($employees as $employee)
							<tr>
								<td>{{ $employee->firstname }}</td>
								<td>{{ $employee->lastname }}</td>
								<td>{{ $employee->email }}</td>
								<td>{{ $employee->email_verified_at }}</td>
							</tr>
						@endforeach

					</tbody>
				</table>

			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div>
</div>
@endsection

@section('scripts')

<script src="/libs/datatables/jquery.dataTables.js"></script>
<script src="/libs/datatables/dataTables.bootstrap4.js"></script>
<script src="/libs/datatables/dataTables.responsive.min.js"></script>
<script src="/libs/datatables/responsive.bootstrap4.min.js"></script>
<script src="/libs/datatables/dataTables.buttons.min.js"></script>
<script src="/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="/libs/datatables/buttons.html5.min.js"></script>
<script src="/libs/datatables/buttons.flash.min.js"></script>
<script src="/libs/datatables/buttons.print.min.js"></script>
<script src="/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="/libs/datatables/dataTables.select.min.js"></script>

<script src="/libs/pdfmake/pdfmake.min.js"></script>
<script src="/libs/pdfmake/vfs_fonts.js"></script>

<script>
	$('#basic-datatable').DataTable();
</script>
@endsection