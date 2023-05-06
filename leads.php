<?php
include "header.php";
?>
<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>

    <div class="container">
        <div class="col-lg-4">
 
            <input type="text" id="myCustomSearchBox" class="form-control" placeholder="Search Anything here">
        </div>
 
        <div class="col-lg-2">
            <span class="input-group-btn">
			<button class="btn btn-primary">Button 1</button>
			<button class="btn btn-info">Button 2</button>
		    </span>
        </div>
 
        <div class="col-lg-6">
            <div class="input-group">
 
                <select id="listsearch" class="form-control" style="width:40%">
                    <option value="0">Select Filter</option>
                    <option value="name">Name</option>
                    <option value="id">ID</option>
                    <option value="birthday">birthday</option>
                </select>
 
                <input type="text" name="value" id="value" class="form-control" style="width:60%" placeholder="Enter Filter Value">
 
                <span class="input-group-btn">
				    <button class="btn btn-secondary"><i class="glyphicon glyphicon-search"></i></button>
				</span>
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
    dTable = $('#myTable').DataTable({
        "bLengthChange": false, // this gives option for changing the number of records shown in the UI table
        "lengthMenu": [4], // 4 records will be shown in the table
        "columnDefs": [{
                "className": "dt-center",
                "targets": "_all"
            } //columnDefs for align text to center
        ],
        "dom": "lrtip" //to hide default searchbox but search feature is not disabled hence customised searchbox can be made.
    });
 
    $('#myCustomSearchBox').keyup(function() {
        dTable.search($(this).val()).draw(); // this  is for customized searchbox with datatable search feature.
    })
</script>
 
</html>

<!doctype html>
<html>
 
<head>

<script type="text/javascript">
    function ajaxinfo() {
        $.ajax({
            type: 'GET',
            url: 'ajaxinfo.html',
            timeout: 10000,
 
            success: function(data) {
                if (data != '01') {
                    var data = JSON.parse(data);
                    for (var prop in data) {
                        $("#" + prop).html(data[prop]).show();
                    }
                } else {
                    window.location = "logout.html";
                }
            }
        });
 
    }
    setInterval(function() {
        ajaxinfo()
    }, 3000);
 
    ajaxinfo();
 
    $(document).keydown(function(event) {
        if (event.which == "17")
            cntrlIsPressed = true;
    });
 
    $(document).keyup(function() {
        cntrlIsPressed = false;
    });
 
    var cntrlIsPressed = false;
 
 
    function pageDiv(n, t, u, x) {
        if (cntrlIsPressed) {
            window.open(u, '_blank');
            return false;
        }
        var obj = {
            Title: t,
            Url: u
        };
        if (("/" + obj.Url) != location.pathname) {
            if (x != 1) {
                history.pushState(obj, obj.Title, obj.Url);
            } else {
                history.replaceState(obj, obj.Title, obj.Url);
            }
 
        }
        document.title = obj.Title;
        $("#mainDiv").html('').show();
        $.ajax({
            type: 'GET',
            url: 'divPage' + n + '.html',
            success: function(data) {
                $("#mainDiv").html(data).show();
                newTableObject = document.getElementById('table');
                sorttable.makeSortable(newTableObject);
                $(".sticky-header").floatThead({
                    top: 60
                });
                if (x == 0) {
                    ajaxinfo();
                }
            }
        });
        if (typeof stopCheckBTC === 'function') {
            var a = stopCheckBTC();
        }
 
    }
 
    $(window).on("popstate", function(e) {
        location.replace(document.location);
 
    });
 
 
    $(window).on('load', function() {
        $('.dropdown').hover(function() {
            $('.dropdown-toggle', this).trigger('click');
        });
        pageDiv(6, 'Main - FeluxShop', '', 1);
        var clipboard = new Clipboard('.copyit');
        clipboard.on('success', function(e) {
            setTooltip(e.trigger, 'Copied!');
            hideTooltip(e.trigger);
            e.clearSelection();
        });
 
    });
 
 
    function setTooltip(btn, message) {
        console.log("hide-1");
        $(btn).tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
        console.log("show");
    }
 
    function hideTooltip(btn) {
        setTimeout(function() {
            $(btn).tooltip('hide');
            console.log("hide-2");
        }, 1000);
    }
</script>
<style>
    .navbar {
        background-color: #910606;
    }
</style>
 
<body style="padding-top: 70px; padding-bottom: 70px;">
 
        <div id="mainDiv">
                
 
    </div>

</body>


</html>

