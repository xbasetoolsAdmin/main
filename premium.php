
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIMK</title>
</head>

<body>
    <?php 
      $a=3; $b=4; $c=5; $d=6;
      echo Vlera Fillestare e a=.$sa.<br>;
    ?>
   
l
<script>
document.addEventListener('DOMContentLoaded',
 function () {
    let table = new DataTable('#example', {
        ajax: 
        function (d, cb) {
            fetch('../ajax/data/objects.php')
                .then(response => response.json())
                .then(data => cb(data));
        },
        columns: [
            { data: 'name' },
            { data: 'position' },
            { data: 'office' },
            { data: 'extn' },
            { data: 'start_date' },
            { data: 'salary' }
        ]
    } );
} );
</script>      
</body>
</html>