
<!DOCTYPE html>
<html lang="en">
   <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIMK</title>
   <!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- DataTables CSS and JS library -->
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
</head>
<body>
<div class="post-search-panel">
    <input type="text" id="searchInput" placeholder="Type keywords..." />
    <select id="sortBy">
        <option value="">Sort by</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>
<table id="memListTable" class="display" style="width:100%">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
        </tr>
    </thead>
   
    <tfoot>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
        </tr>
    </tfoot>
</table>
<script>

// Initialize DataTables API object and configure table
var table = $('#memListTable').DataTable({
"searching": false,
"processing": true,
"serverSide": true,
"ajax": {
"url": "fetchData.php",
"data": function ( d ) {
         return $.extend( {}, d, {
           "search_keywords": $("#searchInput").val().toLowerCase(),
           "filter_option": $("#sortBy").val().toLowerCase()
         } );
       }
     }
});

$(document).ready(function(){
    // Redraw the table
    table.draw();
    
    // Redraw the table based on the custom input
    $('#searchInput,#sortBy').bind("keyup change", function(){
        table.draw();
    });
});
</script>
</body>
</html>