SELECT fldBuilding, COUNT(fldNumStudents) as NumStudents FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY NumStudents DESC
