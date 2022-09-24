DROP DATABASE university;
CREATE DATABASE university;
USE university;

CREATE TABLE faculty (
	id INT NOT NULL AUTO_INCREMENT,
    `name` NVARCHAR(30) NOT NULL,

    PRIMARY KEY(id)
);

CREATE TABLE `group` (
	id INT NOT NULL AUTO_INCREMENT,
    faculty_id INT NOT NULL,
    `name` NVARCHAR(30) NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY(faculty_id) REFERENCES faculty(id)
);

CREATE TABLE student(
	id INT NOT NULL AUTO_INCREMENT,
    group_id INT NOT NULL,
	first_name NVARCHAR(30) NOT NULL,
	last_name NVARCHAR(30) NOT NULL,
    age INT NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY(group_id) REFERENCES `group`(id)
);

INSERT INTO `faculty` 
	(`name`) 
VALUES 
	('AllGrob'),
	('EveryGrob'),
	('AnyoneGrob');

# ======================================
# ------------ Groups ------------------
# ======================================

INSERT INTO `group` 
	(`name`, `faculty_id`) 
VALUES 
	('Group1', 1), ('Group2', 1), ('Group3', 1),    
	('Group4', 2), ('Group5', 2), ('Group6', 2),    
	('Group7', 3), ('Group8', 3), ('Group9', 3);

# ======================================
# ------------ students ----------------
# ======================================

INSERT INTO `student`
	(`first_name`, `last_name`, `age`, `group_id`)
VALUES 
	('student', 'Boq', 18, 1), 
	('student', 'Foq', 24, 1), 
	('student', 'Moq', 88, 1), 
	('student', 'Goq', 19, 1), 
	('student', 'Noq', 18, 1),

	('student', 'Loq', 18, 2),
	('student', 'Qoq', 46, 2),
	('student', 'Toq', 52, 2),
	('student', 'Xoq', 31, 2),
	('student', 'Zoq', 19, 2),

	('student', 'Poq', 12, 3),
	('student', 'Coq', 7, 3),
	('student', 'Hoq', 14, 3),
	('student', 'Gorka', 33, 3),
	('student', 'Morka', 19, 3),

	('student', 'Torka', 66, 4),
	('student', 'Porka', 15, 4),
	('student', 'Dorka', 19, 4),
	('student', 'Rorka', 19, 4),
	('student', 'Lorka', 2, 4),

	('student', 'Qorka', 24, 5),
	('student', 'Korka', 18, 5),
	('student', 'Corka', 25, 5),
	('student', 'Zorka', 17, 5),
	('student', 'Xorka', 11, 5),

	('student', 'Jorka', 39, 6),
	('student', 'Gog', 27, 6),
	('student', 'Mog', 36, 6),
	('student', 'Log', 15, 6),
	('student', 'Pog', 46, 6),

	('student', 'Tog', 19, 7),
	('student', 'Rog', 19, 7),
	('student', 'Qog', 19, 7),
	('student', 'Sog', 19, 7),
	('student', 'Zog', 19, 7),

	('student', 'Xog', 19, 8),
	('student', 'Hog', 19, 8),
	('student', 'Vog', 19, 8),
	('student', 'Bog', 19, 8),
	('student', 'Nog', 19, 8),

	('student', 'Kalt', 19, 9),
	('student', 'Malt', 19, 9),
	('student', 'Halt', 19, 9),
	('student', 'Walt', 19, 9),
	('student', 'Nalt', 18, 9);

SELECT 
	first_name,
    last_name AS family_name,
    age
FROM 
	student 
WHERE 
	age = 19;
  
# =================================================
# -------- Get all students with groups -----------
# =================================================
SELECT 
	student.first_name,
    student.last_name AS family_name,
    student.age,
    `group`.`name` AS group_name
FROM 
	student
JOIN 
	`group` ON `group`.id = student.group_id
WHERE
	`group`.`name` = 'Group6';
  
# =================================================
# -- Get all students with faculties and groups ---
# =================================================

SELECT 
	student.first_name,
    student.last_name AS family_name,
    student.age,
    `group`.`name` AS group_name,
    faculty.`name` AS faculty_name
FROM 
	student
JOIN 
	`group` ON `group`.id = student.group_id
JOIN 
	faculty ON faculty.id = `group`.faculty_id
WHERE
	faculty.`name` = 'EveryGrob';
    
# =================================================
# ----------- Get student info by id --------------
# =================================================  

SELECT 
	student.first_name,
    student.last_name AS family_name,
    student.age,
    `group`.`name` AS group_name,
    faculty.`name` AS faculty_name
FROM 
	student
JOIN 
	`group` ON `group`.id = student.group_id
JOIN 
	faculty ON faculty.id = `group`.faculty_id
WHERE 
	student.last_name = 'Malt';