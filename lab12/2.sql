# =================================================
# -------- Get all students with groups -----------
# =================================================
USE University;

SELECT 
	Student.FirstName,
    Student.LastName AS FamilyName,
    Student.Age,
    `Group`.`Name` AS GroupName
FROM 
	Student
JOIN 
	`Group` ON `Group`.Id = Student.GroupId;