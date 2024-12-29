<?php
$host = 'localhost';
$dbname = 'students';  // Database name is 'students'
$username = 'root';    // Username is root
$password = 'root';    // Password is also root

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students ORDER BY MARKS ASC"; // Table name is 'students'
$result = $conn->query($sql);
$students = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
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

        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>Student Records</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Marks</th>
            </tr>
            <?php if (!empty($students)) : ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo $student['ID']; ?></td>
                        <td><?php echo $student['NAME']; ?></td>
                        <td><?php echo $student['MARKS']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No records found</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>
