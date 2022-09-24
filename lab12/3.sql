# =================================================
# -- Get all students with faculties and groups ---
# =================================================

USE University;

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
