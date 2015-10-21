select tblSections.fldCRN, tblStudents.fldFirstName, tblStudents.fldLastName
from tblSections
join tblEnrolls on tblSections.fldCRN = tblEnrolls.fnkSectionId
join tblStudents on pmkStudentId = fnkStudentId
where tblSections.fnkCourseId=392 
order by fldCrn,fldLastName,fldFirstName