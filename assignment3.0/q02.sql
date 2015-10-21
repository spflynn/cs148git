select distinct tblSections.fldDays, tblSections.fldStart
from tblSections,tblTeachers
where concat(tblTeachers.fldFirstName,' ',tblTeachers.fldLastName) Like 'Robert%Snapp' and tblTeachers.pmkNetId=tblSections.fnkTeacherNetId

