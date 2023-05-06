
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <script type="text/javascript" src="http:// ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
</head>
<body>
<a id="detailed">LINK</a>
<div id="main">Hello - This is my main Div that will be reloaded using Jquery.</div>
1
<div id="main">Hello - This is the div that will be loading



<script type="text/javascript" language="javascript">
$(document).ready(function() { /// Wait till page is loaded
   $('#detailed').click(function(){
      $('#main').load('property-detailed.php #main', function() {
           /// can add another function here
      });
   });
}); //// End of Wait till page is loaded
</script>