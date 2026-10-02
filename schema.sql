CREATE DATABASE IF NOT EXISTS college_portal;
USE college_portal;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    enrollment_no VARCHAR(30) NOT NULL UNIQUE,
    student_name VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL,
    semester VARCHAR(30) NOT NULL,
    percentage DECIMAL(5,2) NOT NULL,
    grade VARCHAR(5) NOT NULL,
    password VARCHAR(100) NOT NULL
);

INSERT INTO students
(enrollment_no, student_name, course, semester, percentage, grade, password)
VALUES
('GRU2024001', 'Demo Student', 'B.Sc. Information Technology', 'Semester VI', 82.50, 'A', 'demo123');
