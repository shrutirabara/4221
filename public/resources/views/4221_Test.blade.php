<!DOCTYPE html>
<html>
<head>
    <title>4221 Laravel DB Test</title>
    <style>
        div {
            font-size: 22px;
        }
    </style>
</head>
<body>
    <div>
        <?php
            if(DB::connection()->getPdo())
            {
                echo "Successfully connected to the database => "
                             .DB::connection()->getDatabaseName();
            }
        ?>
    </div>
</body>
</html>