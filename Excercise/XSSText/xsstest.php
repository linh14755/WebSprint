<!DOCTYPE html>
<html>

<head>
    <title>XSS Test</title>
</head>

<body>
    <h1>XSS Test</h1>
<?php
    $fname = $_POST['fname'];
    echo "<p>Welcome, $fname</p>\n";
?>
    <h2>This is the end of the test</h2>
</body>

</html>