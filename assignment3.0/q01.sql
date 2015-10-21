select distinct tblCourses.fldCourseName, tblEnrolls.fldGrade
from tblCourses,tblEnrolls
where tblCourses.pmkCourseId=tblEnrolls.fnkCourseId and tblEnrolls.fldGrade='100'
