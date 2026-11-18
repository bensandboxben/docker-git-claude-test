<?php
$pageTitle = "Docker + GitHub + Claude";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f5f8;
            margin: 0;
            padding: 60px 20px;
            text-align: center;
        }

        main {
            background: white;
            max-width: 650px;
            margin: auto;
            padding: 40px;
            border-radius: 12px;
        }

        h1 {
            color: #336699;
        }
    </style>
</head>
<body>
    <main>
        <h1>Hello from Docker!</h1>
        <p>This website is running inside a PHP 8.4 container.</p>
        <p>Source code is managed through GitHub.</p>
        <p>Claude Code is our AI development assistant.</p>
        <p>PHP version: <?= PHP_VERSION ?></p>
    </main>
</body>
</html>
