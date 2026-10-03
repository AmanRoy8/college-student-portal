<?php
session_start();
require_once "../config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit;
}

$enrollment = trim($_POST["enrollment"] ?? "");
$password = $_POST["password"] ?? "";

$stmt = $conn->prepare("SELECT id, enrollment_no, student_name, course, semester, percentage, grade FROM students WHERE enrollment_no = ? AND password = ?");
$stmt->bind_param("ss", $enrollment, $password);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Result</title><link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="form-page">
<div class="container">
<a href="../index.php">← Back to portal</a>
<?php if (!$student): ?>
    <div class="form-card" style="margin-top:25px">
        <div class="alert">Invalid enrollment number or password.</div>
        <a class="btn" href="login.php">Try Again</a>
    </div>
<?php else: ?>
    <div class="result">
        <p class="eyebrow">EXAMINATION RESULT</p>
        <h2><?= htmlspecialchars($student["student_name"]) ?></h2>
        <p>Enrollment: <?= htmlspecialchars($student["enrollment_no"]) ?></p>
        <div class="result-grid">
            <div><strong>Course</strong><br><?= htmlspecialchars($student["course"]) ?></div>
            <div><strong>Semester</strong><br><?= htmlspecialchars($student["semester"]) ?></div>
            <div><strong>Percentage</strong><br><?= htmlspecialchars($student["percentage"]) ?>%</div>
            <div><strong>Grade</strong><br><?= htmlspecialchars($student["grade"]) ?></div>
        </div>
    </div>
<?php endif; ?>
</div>
</div>
</body>
</html>
