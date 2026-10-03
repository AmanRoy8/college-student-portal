<?php
session_start();
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Login</title><link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="form-page">
<div class="form-card">
<p class="eyebrow">STUDENT PORTAL</p>
<h2>View Examination Result</h2>
<p>Enter your enrollment number and password.</p>
<?php if($error): ?><div class="alert"><?= htmlspecialchars($error) ?></div><?php endif; ?>
<form method="post" action="result.php">
<label for="enrollment">Enrollment Number</label>
<input id="enrollment" name="enrollment" required placeholder="e.g. GRU2024001">
<label for="password">Password</label>
<input id="password" type="password" name="password" required>
<br><br>
<button class="btn" type="submit">Login & View Result</button>
</form>
<br><a href="../index.php">← Back to portal</a>
</div>
</div>
</body>
</html>
