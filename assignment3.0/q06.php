<?php 
//now print out each record
    include 'top.php';
    $queryfile = fopen("q06.sql","r");
    //$query = "SELECT `pmkNetId` FROM `tblTeachers`";
    $query = fread($queryfile,  filesize("q06.sql"));
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 1, false, false);
    
    
    print '<article>';
    print '<h1>Total Records: 514</h1>';
    print '<h1>select fldFirstName, fldPhone
from tblTeachers
where tblTeachers.fldSalary &lt; (select avg(fldSalary) from tblTeachers)</h1>';
    print '<br>';
    print '<aside>';
    print '<table>';
    
    print '<tr>';
    print '<td>First Name</td>';
    print '<td>Phone</td>';
    print '</tr>';
    
    
    $columns = 2 ;
    
    $highlight =  0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }

        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print '</aside>';

    print '</article>';
    include "footer.php";
?>