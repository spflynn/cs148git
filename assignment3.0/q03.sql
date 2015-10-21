select distinct tblCourses.fldCourseName, tblSections.fldStart, tblSections.fldDays
from tblCourses, tblSections
where fnkTeacherNetId= 'jlhorton' and tblCourses.pmkCourseId=tblSections.fnkCourseId