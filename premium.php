<?php include"header";
?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--DataTable CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body style="margin-top: 30px">
   <div class="container">
 <div class="col-lg-4">
<input type="text" id="myCustomSearchBox" class="form-control" placeholder="Search Anything here">
        </div>
<</div>
            </div>
        </div>
    </div>
    <!--Container Ends Here-->

    <!--datatable div starts here-->
    <div style="margin-top: 30px">
        <table id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Account Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sam</td>
                    <td>10/11/2019</td>
			<td>02/02/1990</td>
		    </tr>
            </tbody>
        </table>
    </div>
</body>

















<script type="text/javascript">
   dTable=$('#myTable').DataTable({
          "bLengthChange": false, // this gives option for changing the number of records shown in the UI table
          "lengthMenu": [4], // 4 records will be shown in the table
          "columnDefs": [
          {"className": "dt-center", "targets": "_all"} //columnDefs for align text to center
        ],
          "dom":"lrtip" //to hide default searchbox but search feature is not disabled hence customised searchbox can be made.
   });
   
      $('#myCustomSearchBox').keyup(function(){  
        dTable.search($(this).val()).draw();   // this  is for customized searchbox with datatable search feature.
   })
         $('#myCustomSearchBox').keyup(function(){  
        dTable.search($(this).val()).draw();   // this  is for customized searchbox with datatable search feature.
   })
   
</script>
