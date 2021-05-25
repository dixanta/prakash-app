<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//code.jquery.com/jquery.min.js"></script>
</head>
<body>
    <h1><?php echo 'PHP WORKS';?></h1>

    <script>
        $(function(){
            $('h1').html('now jquery pushed');
        });
    </script>
</body>
</html>