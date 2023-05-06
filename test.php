
<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables Editor - accounts</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/date-1.4.1/r-2.4.1/sl-1.6.2/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/date-1.4.1/r-2.4.1/sl-1.6.2/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/table.accounts.js"></script>
	</head>
	<body class="dataTables">
		<div class="container">

			<h1>
				DataTables Editor <span>accounts</span>
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="accounts" width="100%">
				<thead>
					<tr>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
						<th>Website Name</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>
</html>

<script type="text/javascript" language="javascript">
$(document).ready(function() { /// Wait till page is loaded
   $('#detailed').click(function(){
      $('#main').load('divPage0.php #main', function() {
           /// can add another function here
      });
   });
}); //// End of Wait till page is loaded
</script>
