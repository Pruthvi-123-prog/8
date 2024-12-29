<?php
$filename = "counter.txt";
$visitorCount = file_exists($filename) ? (int)file_get_contents($filename) + 1 : 1;
file_put_contents($filename, $visitorCount);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .counter-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2em;
            color: #333;
        }

        p {
            font-size: 1.5em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="counter-container">
        <h1>Visitor Counter</h1>
        <p>Total Visitors: <?php echo $visitorCount; ?></p>
    </div>
</body>
</html>
