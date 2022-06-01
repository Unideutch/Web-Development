DROP DATABASE University;
CREATE DATABASE University;
USE University;

CREATE TABLE Faculty (
	Id INT NOT NULL AUTO_INCREMENT,
    `Name` NVARCHAR(30),

    PRIMARY KEY(Id)
);

CREATE TABLE `Group` (
	Id INT NOT NULL AUTO_INCREMENT,
    FacultyId INT,
    `Name` NVARCHAR(30),

    PRIMARY KEY(Id),
    FOREIGN KEY(FacultyId) REFERENCES Faculty(Id)
);

CREATE TABLE Student(
	Id INT NOT NULL AUTO_INCREMENT,
    GroupId INT,
	FirstName NVARCHAR(30),
	LastName NVARCHAR(30),
    Age INT,

    PRIMARY KEY(Id),
    FOREIGN KEY(GroupId) REFERENCES `Group`(Id)
);

INSERT INTO `Faculty` 
	(`Name`) 
VALUES 
	('AllGrob'),
	('EveryGrob'),
	('AnyoneGrob');

# ======================================
# ------------ Groups ------------------
# ======================================

INSERT INTO `Group` 
	(`Name`, `FacultyId`) 
VALUES 
	('Group1', 1), ('Group2', 1), ('Group3', 1),    
	('Group4', 2), ('Group5', 2), ('Group6', 2),    
	('Group7', 3), ('Group8', 3), ('Group9', 3);

# ======================================
# ------------ Students ----------------
# ======================================

INSERT INTO `Student`
	(`FirstName`, `LastName`, `Age`, `GroupId`)
VALUES 
	('Student', 'Boq', 18, 1), 
	('Student', 'Foq', 24, 1), 
	('Student', 'Moq', 88, 1), 
	('Student', 'Goq', 19, 1), 
	('Student', 'Noq', 18, 1),

	('Student', 'Loq', 18, 2),
	('Student', 'Qoq', 46, 2),
	('Student', 'Toq', 52, 2),
	('Student', 'Xoq', 31, 2),
	('Student', 'Zoq', 19, 2),

	('Student', 'Poq', 12, 3),
	('Student', 'Coq', 7, 3),
	('Student', 'Hoq', 14, 3),
	('Student', 'Gorka', 33, 3),
	('Student', 'Morka', 19, 3),

	('Student', 'Torka', 66, 4),
	('Student', 'Porka', 15, 4),
	('Student', 'Dorka', 19, 4),
	('Student', 'Rorka', 19, 4),
	('Student', 'Lorka', 2, 4),

	('Student', 'Qorka', 24, 5),
	('Student', 'Korka', 18, 5),
	('Student', 'Corka', 25, 5),
	('Student', 'Zorka', 17, 5),
	('Student', 'Xorka', 11, 5),

	('Student', 'Jorka', 39, 6),
	('Student', 'Gog', 27, 6),
	('Student', 'Mog', 36, 6),
	('Student', 'Log', 15, 6),
	('Student', 'Pog', 46, 6),

	('Student', 'Tog', 19, 7),
	('Student', 'Rog', 19, 7),
	('Student', 'Qog', 19, 7),
	('Student', 'Sog', 19, 7),
	('Student', 'Zog', 19, 7),

	('Student', 'Xog', 19, 8),
	('Student', 'Hog', 19, 8),
	('Student', 'Vog', 19, 8),
	('Student', 'Bog', 19, 8),
	('Student', 'Nog', 19, 8),

	('Student', 'Kalt', 19, 9),
	('Student', 'Malt', 19, 9),
	('Student', 'Halt', 19, 9),
	('Student', 'Walt', 19, 9),
	('Student', 'Nalt', 18, 9);
    
    USE University;

SELECT 
	FirstName,
    LastName AS FamilyName,
    Age
FROM 
	Student 
WHERE 
	Age = 19;
  
# =================================================
# -------- Get all students with groups -----------
# =================================================
SELECT 
	Student.FirstName,
    Student.LastName AS FamilyName,
    Student.Age,
    `Group`.`Name` AS GroupName
FROM 
	Student
JOIN 
	`Group` ON `Group`.Id = Student.GroupId;
  
# =================================================
# -- Get all students with faculties and groups ---
# =================================================

SELECT 
	Student.FirstName,
    Student.LastName AS FamilyName,
    Student.Age,
    `Group`.`Name` AS GroupName,
    Faculty.`Name` AS FacultyName
FROM 
	Student
JOIN 
	`Group` ON `Group`.Id = Student.GroupId
JOIN 
	Faculty ON Faculty.Id = `Group`.FacultyId;

# =================================================
# ----------- Get student info by id --------------
# =================================================  

SELECT 
	Student.FirstName,
    Student.LastName AS FamilyName,
    Student.Age,
    `Group`.`Name` AS GroupName,
    Faculty.`Name` AS FacultyName
FROM 
	Student
JOIN 
	`Group` ON `Group`.Id = Student.GroupId
JOIN 
	Faculty ON Faculty.Id = `Group`.FacultyId
WHERE 
	Student.Id = 1;