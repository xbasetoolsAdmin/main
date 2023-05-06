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

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1">
		<link rel="stylesheet" type="text/css" href="files/css/flags.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
		<script type="text/javascript" src="files/js/jquery.js?1"></script>
		<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
		<script type="text/javascript" src="files/js/sorttable.js"></script>
		<script type="text/javascript" src="files/js/table-head.js?3334"></script>
		<script type="text/javascript" src="files/js/bootbox.min.js"></script>
		<script type="text/javascript" src="files/js/clipboard.min.js"></script>
		<link rel="shortcut icon" href="files/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE">
		<meta name="referrer" content="no-referrer">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>JeruxShop</title>
		<style>
		
		
<style>
:root{--dt-row-selected: 13, 110, 253;--dt-row-selected-text: 255, 255, 255;--dt-row-selected-link: 9, 10, 11}table.dataTable td.dt-control{text-align:center;cursor:pointer}table.dataTable td.dt-control:before{height:1em;width:1em;margin-top:-9px;display:inline-block;color:white;border:.15em solid white;border-radius:1em;box-shadow:0 0 .2em #444;box-sizing:content-box;text-align:center;text-indent:0 !important;font-family:"Courier New",Courier,monospace;line-height:1em;content:"+";background-color:#31b131}table.dataTable tr.dt-hasChild td.dt-control:before{content:"-";background-color:#d33333}table.dataTable thead>tr>th.sorting,table.dataTable thead>tr>th.sorting_asc,table.dataTable thead>tr>th.sorting_desc,table.dataTable thead>tr>th.sorting_asc_disabled,table.dataTable thead>tr>th.sorting_desc_disabled,table.dataTable thead>tr>td.sorting,table.dataTable thead>tr>td.sorting_asc,table.dataTable thead>tr>td.sorting_desc,table.dataTable thead>tr>td.sorting_asc_disabled,table.dataTable thead>tr>td.sorting_desc_disabled{cursor:pointer;position:relative;padding-right:26px}table.dataTable thead>tr>th.sorting:before,table.dataTable thead>tr>th.sorting:after,table.dataTable thead>tr>th.sorting_asc:before,table.dataTable thead>tr>th.sorting_asc:after,table.dataTable thead>tr>th.sorting_desc:before,table.dataTable thead>tr>th.sorting_desc:after,table.dataTable thead>tr>th.sorting_asc_disabled:before,table.dataTable thead>tr>th.sorting_asc_disabled:after,table.dataTable thead>tr>th.sorting_desc_disabled:before,table.dataTable thead>tr>th.sorting_desc_disabled:after,table.dataTable thead>tr>td.sorting:before,table.dataTable thead>tr>td.sorting:after,table.dataTable thead>tr>td.sorting_asc:before,table.dataTable thead>tr>td.sorting_asc:after,table.dataTable thead>tr>td.sorting_desc:before,table.dataTable thead>tr>td.sorting_desc:after,table.dataTable thead>tr>td.sorting_asc_disabled:before,table.dataTable thead>tr>td.sorting_asc_disabled:after,table.dataTable thead>tr>td.sorting_desc_disabled:before,table.dataTable thead>tr>td.sorting_desc_disabled:after{position:absolute;display:block;opacity:.125;right:10px;line-height:9px;font-size:.8em}table.dataTable thead>tr>th.sorting:before,table.dataTable thead>tr>th.sorting_asc:before,table.dataTable thead>tr>th.sorting_desc:before,table.dataTable thead>tr>th.sorting_asc_disabled:before,table.dataTable thead>tr>th.sorting_desc_disabled:before,table.dataTable thead>tr>td.sorting:before,table.dataTable thead>tr>td.sorting_asc:before,table.dataTable thead>tr>td.sorting_desc:before,table.dataTable thead>tr>td.sorting_asc_disabled:before,table.dataTable thead>tr>td.sorting_desc_disabled:before{bottom:50%;content:"▲";content:"▲"/""}table.dataTable thead>tr>th.sorting:after,table.dataTable thead>tr>th.sorting_asc:after,table.dataTable thead>tr>th.sorting_desc:after,table.dataTable thead>tr>th.sorting_asc_disabled:after,table.dataTable thead>tr>th.sorting_desc_disabled:after,table.dataTable thead>tr>td.sorting:after,table.dataTable thead>tr>td.sorting_asc:after,table.dataTable thead>tr>td.sorting_desc:after,table.dataTable thead>tr>td.sorting_asc_disabled:after,table.dataTable thead>tr>td.sorting_desc_disabled:after{top:50%;content:"▼";content:"▼"/""}table.dataTable thead>tr>th.sorting_asc:before,table.dataTable thead>tr>th.sorting_desc:after,table.dataTable thead>tr>td.sorting_asc:before,table.dataTable thead>tr>td.sorting_desc:after{opacity:.6}table.dataTable thead>tr>th.sorting_desc_disabled:after,table.dataTable thead>tr>th.sorting_asc_disabled:before,table.dataTable thead>tr>td.sorting_desc_disabled:after,table.dataTable thead>tr>td.sorting_asc_disabled:before{display:none}table.dataTable thead>tr>th:active,table.dataTable thead>tr>td:active{outline:none}div.dataTables_scrollBody>table.dataTable>thead>tr>th:before,div.dataTables_scrollBody>table.dataTable>thead>tr>th:after,div.dataTables_scrollBody>table.dataTable>thead>tr>td:before,div.dataTables_scrollBody>table.dataTable>thead>tr>td:after{display:none}div.dataTables_processing{position:absolute;top:50%;left:50%;width:200px;margin-left:-100px;margin-top:-26px;text-align:center;padding:2px}div.dataTables_processing>div:last-child{position:relative;width:80px;height:15px;margin:1em auto}div.dataTables_processing>div:last-child>div{position:absolute;top:0;width:13px;height:13px;border-radius:50%;background:rgb(13, 110, 253);background:rgb(var(--dt-row-selected));animation-timing-function:cubic-bezier(0, 1, 1, 0)}div.dataTables_processing>div:last-child>div:nth-child(1){left:8px;animation:datatables-loader-1 .6s infinite}div.dataTables_processing>div:last-child>div:nth-child(2){left:8px;animation:datatables-loader-2 .6s infinite}div.dataTables_processing>div:last-child>div:nth-child(3){left:32px;animation:datatables-loader-2 .6s infinite}div.dataTables_processing>div:last-child>div:nth-child(4){left:56px;animation:datatables-loader-3 .6s infinite}@keyframes datatables-loader-1{0%{transform:scale(0)}100%{transform:scale(1)}}@keyframes datatables-loader-3{0%{transform:scale(1)}100%{transform:scale(0)}}@keyframes datatables-loader-2{0%{transform:translate(0, 0)}100%{transform:translate(24px, 0)}}table.dataTable.nowrap th,table.dataTable.nowrap td{white-space:nowrap}table.dataTable th.dt-left,table.dataTable td.dt-left{text-align:left}table.dataTable th.dt-center,table.dataTable td.dt-center,table.dataTable td.dataTables_empty{text-align:center}table.dataTable th.dt-right,table.dataTable td.dt-right{text-align:right}table.dataTable th.dt-justify,table.dataTable td.dt-justify{text-align:justify}table.dataTable th.dt-nowrap,table.dataTable td.dt-nowrap{white-space:nowrap}table.dataTable thead th,table.dataTable thead td,table.dataTable tfoot th,table.dataTable tfoot td{text-align:left}table.dataTable thead th.dt-head-left,table.dataTable thead td.dt-head-left,table.dataTable tfoot th.dt-head-left,table.dataTable tfoot td.dt-head-left{text-align:left}table.dataTable thead th.dt-head-center,table.dataTable thead td.dt-head-center,table.dataTable tfoot th.dt-head-center,table.dataTable tfoot td.dt-head-center{text-align:center}table.dataTable thead th.dt-head-right,table.dataTable thead td.dt-head-right,table.dataTable tfoot th.dt-head-right,table.dataTable tfoot td.dt-head-right{text-align:right}table.dataTable thead th.dt-head-justify,table.dataTable thead td.dt-head-justify,table.dataTable tfoot th.dt-head-justify,table.dataTable tfoot td.dt-head-justify{text-align:justify}table.dataTable thead th.dt-head-nowrap,table.dataTable thead td.dt-head-nowrap,table.dataTable tfoot th.dt-head-nowrap,table.dataTable tfoot td.dt-head-nowrap{white-space:nowrap}table.dataTable tbody th.dt-body-left,table.dataTable tbody td.dt-body-left{text-align:left}table.dataTable tbody th.dt-body-center,table.dataTable tbody td.dt-body-center{text-align:center}table.dataTable tbody th.dt-body-right,table.dataTable tbody td.dt-body-right{text-align:right}table.dataTable tbody th.dt-body-justify,table.dataTable tbody td.dt-body-justify{text-align:justify}table.dataTable tbody th.dt-body-nowrap,table.dataTable tbody td.dt-body-nowrap{white-space:nowrap}table.dataTable{width:100%;margin:0 auto;clear:both;border-collapse:separate;border-spacing:0}table.dataTable thead th,table.dataTable tfoot th{font-weight:bold}table.dataTable thead th,table.dataTable thead td{padding:10px;border-bottom:1px solid rgba(0, 0, 0, 0.3)}table.dataTable thead th:active,table.dataTable thead td:active{outline:none}table.dataTable tfoot th,table.dataTable tfoot td{padding:10px 10px 6px 10px;border-top:1px solid rgba(0, 0, 0, 0.3)}table.dataTable tbody tr{background-color:transparent}table.dataTable tbody tr.selected>*{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.9);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected), 0.9);color:rgb(255, 255, 255);color:rgb(var(--dt-row-selected-text))}table.dataTable tbody tr.selected a{color:rgb(9, 10, 11);color:rgb(var(--dt-row-selected-link))}table.dataTable tbody th,table.dataTable tbody td{padding:8px 10px}table.dataTable.row-border tbody th,table.dataTable.row-border tbody td,table.dataTable.display tbody th,table.dataTable.display tbody td{border-top:1px solid rgba(0, 0, 0, 0.15)}table.dataTable.row-border tbody tr:first-child th,table.dataTable.row-border tbody tr:first-child td,table.dataTable.display tbody tr:first-child th,table.dataTable.display tbody tr:first-child td{border-top:none}table.dataTable.cell-border tbody th,table.dataTable.cell-border tbody td{border-top:1px solid rgba(0, 0, 0, 0.15);border-right:1px solid rgba(0, 0, 0, 0.15)}table.dataTable.cell-border tbody tr th:first-child,table.dataTable.cell-border tbody tr td:first-child{border-left:1px solid rgba(0, 0, 0, 0.15)}table.dataTable.cell-border tbody tr:first-child th,table.dataTable.cell-border tbody tr:first-child td{border-top:none}table.dataTable.stripe>tbody>tr.odd>*,table.dataTable.display>tbody>tr.odd>*{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.023)}table.dataTable.stripe>tbody>tr.odd.selected>*,table.dataTable.display>tbody>tr.odd.selected>*{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.923);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.923))}table.dataTable.hover>tbody>tr:hover>*,table.dataTable.display>tbody>tr:hover>*{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.035)}table.dataTable.hover>tbody>tr.selected:hover>*,table.dataTable.display>tbody>tr.selected:hover>*{box-shadow:inset 0 0 0 9999px #0d6efd !important;box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 1)) !important}table.dataTable.order-column>tbody tr>.sorting_1,table.dataTable.order-column>tbody tr>.sorting_2,table.dataTable.order-column>tbody tr>.sorting_3,table.dataTable.display>tbody tr>.sorting_1,table.dataTable.display>tbody tr>.sorting_2,table.dataTable.display>tbody tr>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.019)}table.dataTable.order-column>tbody tr.selected>.sorting_1,table.dataTable.order-column>tbody tr.selected>.sorting_2,table.dataTable.order-column>tbody tr.selected>.sorting_3,table.dataTable.display>tbody tr.selected>.sorting_1,table.dataTable.display>tbody tr.selected>.sorting_2,table.dataTable.display>tbody tr.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.919);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.919))}table.dataTable.display>tbody>tr.odd>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.054)}table.dataTable.display>tbody>tr.odd>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.047)}table.dataTable.display>tbody>tr.odd>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.039)}table.dataTable.display>tbody>tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.954);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.954))}table.dataTable.display>tbody>tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.947);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.947))}table.dataTable.display>tbody>tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.939);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.939))}table.dataTable.display>tbody>tr.even>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.even>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.019)}table.dataTable.display>tbody>tr.even>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.even>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.011)}table.dataTable.display>tbody>tr.even>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.even>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.003)}table.dataTable.display>tbody>tr.even.selected>.sorting_1,table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.919);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.919))}table.dataTable.display>tbody>tr.even.selected>.sorting_2,table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.911);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.911))}table.dataTable.display>tbody>tr.even.selected>.sorting_3,table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.903);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.903))}table.dataTable.display tbody tr:hover>.sorting_1,table.dataTable.order-column.hover tbody tr:hover>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.082)}table.dataTable.display tbody tr:hover>.sorting_2,table.dataTable.order-column.hover tbody tr:hover>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.074)}table.dataTable.display tbody tr:hover>.sorting_3,table.dataTable.order-column.hover tbody tr:hover>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(0, 0, 0, 0.062)}table.dataTable.display tbody tr:hover.selected>.sorting_1,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_1{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.982);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.982))}table.dataTable.display tbody tr:hover.selected>.sorting_2,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_2{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.974);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.974))}table.dataTable.display tbody tr:hover.selected>.sorting_3,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_3{box-shadow:inset 0 0 0 9999px rgba(13, 110, 253, 0.962);box-shadow:inset 0 0 0 9999px rgba(var(--dt-row-selected, 0.962))}table.dataTable.no-footer{border-bottom:1px solid rgba(0, 0, 0, 0.3)}table.dataTable.compact thead th,table.dataTable.compact thead td,table.dataTable.compact tfoot th,table.dataTable.compact tfoot td,table.dataTable.compact tbody th,table.dataTable.compact tbody td{padding:4px}table.dataTable th,table.dataTable td{box-sizing:content-box}.dataTables_wrapper{position:relative;clear:both}.dataTables_wrapper .dataTables_length{float:left}.dataTables_wrapper .dataTables_length select{border:1px solid #aaa;border-radius:3px;padding:5px;background-color:transparent;padding:4px}.dataTables_wrapper .dataTables_filter{float:right;text-align:right}.dataTables_wrapper .dataTables_filter input{border:1px solid #aaa;border-radius:3px;padding:5px;background-color:transparent;margin-left:3px}.dataTables_wrapper .dataTables_info{clear:both;float:left;padding-top:.755em}.dataTables_wrapper .dataTables_paginate{float:right;text-align:right;padding-top:.25em}.dataTables_wrapper .dataTables_paginate .paginate_button{box-sizing:border-box;display:inline-block;min-width:1.5em;padding:.5em 1em;margin-left:2px;text-align:center;text-decoration:none !important;cursor:pointer;color:inherit !important;border:1px solid transparent;border-radius:2px;background:transparent}.dataTables_wrapper .dataTables_paginate .paginate_button.current,.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{color:inherit !important;border:1px solid rgba(0, 0, 0, 0.3);background-color:rgba(230, 230, 230, 0.1);background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(230, 230, 230, 0.1)), color-stop(100%, rgba(0, 0, 0, 0.1)));background:-webkit-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:-moz-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:-ms-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:-o-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);background:linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%)}.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{cursor:default;color:#666 !important;border:1px solid transparent;background:transparent;box-shadow:none}.dataTables_wrapper .dataTables_paginate .paginate_button:hover{color:white !important;border:1px solid #111;background-color:#585858;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));background:-webkit-linear-gradient(top, #585858 0%, #111 100%);background:-moz-linear-gradient(top, #585858 0%, #111 100%);background:-ms-linear-gradient(top, #585858 0%, #111 100%);background:-o-linear-gradient(top, #585858 0%, #111 100%);background:linear-gradient(to bottom, #585858 0%, #111 100%)}.dataTables_wrapper .dataTables_paginate .paginate_button:active{outline:none;background-color:#2b2b2b;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));background:-webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);box-shadow:inset 0 0 3px #111}.dataTables_wrapper .dataTables_paginate .ellipsis{padding:0 1em}.dataTables_wrapper .dataTables_length,.dataTables_wrapper .dataTables_filter,.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_processing,.dataTables_wrapper .dataTables_paginate{color:inherit}.dataTables_wrapper .dataTables_scroll{clear:both}.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody{-webkit-overflow-scrolling:touch}.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td{vertical-align:middle}.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th>div.dataTables_sizing,.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td>div.dataTables_sizing{height:0;overflow:hidden;margin:0 !important;padding:0 !important}.dataTables_wrapper.no-footer .dataTables_scrollBody{border-bottom:1px solid rgba(0, 0, 0, 0.3)}.dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,.dataTables_wrapper.no-footer div.dataTables_scrollBody>table{border-bottom:none}.dataTables_wrapper:after{visibility:hidden;display:block;content:"";clear:both;height:0}@media screen and (max-width: 767px){.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_paginate{float:none;text-align:center}.dataTables_wrapper .dataTables_paginate{margin-top:.5em}}@media screen and (max-width: 640px){.dataTables_wrapper .dataTables_length,.dataTables_wrapper .dataTables_filter{float:none;text-align:center}.dataTables_wrapper .dataTables_filter{margin-top:.5em}}

</style>
		
	
	<style>
		
		
table 
    content: " \25BE" 
}

.label-as-badge {
    border-radius: 0.5em;
}

body {
    padding-top:50px;
}
table.floatThead-table {
    border-top: none;
    border-bottom: none;
    background-color: #fff;
}
@media (min-width: 768px) {
  .dropdown:hover .dropdown-menu {
    display: block;
  }
}

#mydiv {
  height: 400px;
  position: relative;
}
.box {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  margin: auto; /* presto! */

}

   
    


		</style>
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

$(document).keydown(function(event){
    if(event.which=="17")
        cntrlIsPressed = true;
});

$(document).keyup(function(){
    cntrlIsPressed = false;
});

var cntrlIsPressed = false;


function pageDiv(n,t,u,x){
  if(cntrlIsPressed){
    window.open(u, '_blank');
    return false;
  }
        var obj = { Title: t, Url: u };
        if ( ("/"+obj.Url) != location.pathname) {
        	if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
        	else{history.replaceState(obj, obj.Title, obj.Url);}

    	}
      document.title = obj.Title;
    $("#mainDiv_info").html('<div id="mydiv"><img src="files/img/load2.gif" class="box"></div>').show();
    $.ajax({
    type:       'GET',
    url:        'divPage'+n+'.html',
    success:    function(data)
    {
$("#mainDiv_info").html(data).show();
newTableObject = document.getElementById('table');
        //sorttable.makeSortable(newTableObject);
      //  $(".sticky-header").da({top:60});
        if(x==0){ajaxinfo();}
      }});
    if (typeof stopCheckBTC === 'function') { 
    var a = stopCheckBTC();
     }

}

$(window).on("popstate", function(e) {
        location.replace(document.location);

});


$(window).on('load', function() {
$('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
   pageDiv(7,' - JeruxShop','',1);
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
  setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
}

		</script>
		<style>
            .navbar {
                background-color: #001f3f;
            }
        
		</style>
	</head>
	<body style="padding-top: 70px; padding-bottom: 70px;">
		<nav class="navbar navbar-default navbar-fixed-top ">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand" onclick="location.href='index.html'" onmouseover="this.style.cursor='pointer'">
						<b>
							<span class="glyphicon glyphicon-fire"></span>
							Jerux SHOP
							<small>
								<span class="glyphicon glyphicon-refresh"></span>
							</small>
						</b>
					</div>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="topFixedNavbar1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts
								<span class="glyphicon glyphicon-chevron-down" id="alhosts"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="rdp.html" onclick="pageDiv(1,'RDP - JeruxShop','rdp.html',0); return false;">RDPs
										<span class="label label-primary label-as-badge" id="rdp"></span>
									</a>
								</li>
								<li>
									<a href="cPanel.html" onclick="pageDiv(2,'cPanel - JeruxShop','cPanel.html',0); return false;">cPanels
										<span class="label label-primary label-as-badge" id="cpanel"></span>
									</a>
								</li>
								<li>
									<a href="shell.html" onclick="pageDiv(3,'Shell - JeruxShop','shell.html',0); return false;">Shells
										<span class="label label-primary label-as-badge" id="shell"></span>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send
								<span class="glyphicon glyphicon-chevron-down" id="mail"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - JeruxShop','mailer.html',0); return false;">Mailers
										<span class="label label-primary label-as-badge" id="mailer"></span>
									</a>
								</li>
								<li>
									<a href="smtp.html" onclick="pageDiv(5,'SMTP - JeruxShop','smtp.html',0); return false;">SMTPs
										<span class="label label-primary label-as-badge" id="smtp"></span>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads
								<span class="glyphicon glyphicon-chevron-down" id="all_leads"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="leads.html" onclick="pageDiv(6,'Leads - JeruxShop','leads.html',0); return false;">Leads
										<span class="label label-primary label-as-badge" id="leads"></span>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts
								<span class="glyphicon glyphicon-chevron-down" id="accounts"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - JeruxShop','premium.html',0); return false;">Premium/Dating/Shop
										<span class="label label-primary label-as-badge" id="premium"></span>
									</a>
								</li>
								<li>
									<a href="banks.html" onclick="pageDiv(8,'Banks - JeruxShop','banks.html',0); return false;">Banks
										<span class="label label-primary label-as-badge" id="banks"></span>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others
								<span class="glyphicon glyphicon-chevron-down" id="accounts"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="scampage.html" onclick="pageDiv(9,'Scampages - JeruxShop','scampage.html',0); return false;">Scampage
										<span class="label label-primary label-as-badge" id="scams"></span>
									</a>
								</li>
								<li>
									<a href="tutorial.html" onclick="pageDiv(10,'Tutorials - JeruxShop','tutorial.html',0); return false;">Tutorial
										<span class="label label-primary label-as-badge" id="tutorials"></span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						
						<!--?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error());
$r         = mysqli_fetch_assoc($q);
$reselerif = $r['resseller'];
if ($reselerif == "1") {
    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo '<li-->
						<a href="https://jerux.to/seller/index.html">
							<span class="badge" title="Seller Panel">
								<span class="glyphicon glyphicon-cloud"></span>
								<span id="seller"></span>
							</span>
						</a>'; } else { } ?&gt;
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets
								<span id="alltickets">
									
									<!--?php
$sze112  = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r844941 = mysqli_num_rows($sze112);
if ($r844941 == "1") {
    echo '<span class="label label-danger"-->1</span>'; } ?&gt;
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="tickets.html" onclick="pageDiv(11,'Tickets - JeruxShop','tickets.html',0); return false;">Tickets
										<span class="label label-info">
											<span id="tickets"></span>
										</span>
										<!--?php
$s1 = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"--> 1 New'; } ?&gt;</a>
								</li>
								<li>
									<a href="reports.html" onclick="pageDiv(12,'Reports - JeruxShop','reports.html',0); return false;">Reports
										<span class="label label-info">
											<span id="reports"></span>
										</span>
										
										<!--?php
$s1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE uid='$uid' and seen='1'");
$r1 = mysqli_num_rows($s1);
if ($r1 == "1") {
    echo '<span class="label label-success"--> 1 New'; } ?&gt;
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;">
								<span class="badge">
									<b>
										<span id="balance"></span>
									</b>
									<span class="glyphicon glyphicon-plus"></span>
									<span>
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account
								<span class="glyphicon glyphicon-user"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="setting.html" onclick="pageDiv(14,'Setting - JeruxShop','setting.html',0); return false;">Setting
										<span class="glyphicon glyphicon-cog pull-right"></span>
									</a>
								</li>
								<li>
									<a href="orders.html" onclick="pageDiv(15,'Orders - JeruxShop','orders.html',0); return false;">My Orders
										<span class="glyphicon glyphicon-shopping-cart pull-right"></span>
									</a>
								</li>
								<li>
									<a href="addBalance.html" onclick="pageDiv(13,'Add Balance - JeruxShop','addBalance.html',0); return false;">Add Balance
										<span class="glyphicon glyphicon-usd pull-right"></span>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="logout.html">Logout
										<span class="glyphicon glyphicon-off pull-right"></span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
				<!-- /.navbar-collapse -->
			</div>
			
			<!-- /.container-fluid -->
		</nav>
			<div id="mainDiv_info" class="box"></div>
			<div id="cpanel_data_wrapper" class="dataTables_wrapper">
				<div class="dataTables_length" id="cpanel_data_length">
					<label>Show
						<select name="cpanel_data_length" aria-controls="cpanel_data" class="">
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
						entries
					</label>
				</div>
				<div id="cpanel_data_filter" class="dataTables_filter">
					<label>Search:<input type="search" class="" placeholder="" aria-controls="cpanel_data">
					</label>
				</div>
				<div id="mainDiv">
					<script>
$(window).on('load', function() {
$('.dropdown').hover(function(){
$('.dropdown-toggle', this).trigger('click'); });
   pageDiv(7,'Main - FeluxShop','cPanel.html',1);
   var clipboard = new Clipboard('.copyit');
    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
      e.clearSelection();  }); });
function setTooltip(btn, message) {  console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     console.log("show");
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
}

			
					</script>
				</div>
			</div>
		</div>
	</body>
</html>