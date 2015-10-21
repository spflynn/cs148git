select fldFirstName, fldPhone
from tblTeachers
where tblTeachers.fldSalary<(select avg(fldSalary) from tblTeachers)