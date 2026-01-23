<!DOCTYPE html>
<html>
   <!-- this lab showed me the importance of separating php logic from
    html to create maintainable and scalable code, which i will use
    for the project phase one -->
<head>
    <title>My PHP Page</title>
</head>
<body>

<h1>Welcome</h1>

<ul>
<?php foreach ($items as $item): ?>
    <li><?= $item ?></li>
<?php endforeach; ?>
</ul>

<footer>
    <p>&copy; 2026</p>
</footer>

</body>
</html>
