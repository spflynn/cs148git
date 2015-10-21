<?php 
//now print out each record
    include 'top.php';
    $queryfile = fopen("q03.sql","r");
    //$query = "SELECT `pmkNetId` FROM `tblTeachers`";
    $query = fread($queryfile,  filesize("q03.sql"));
    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 4, 0, false, false);
    
    
    print '<article>';
    print '<h1>Total Records: 10</h1>';
    print '<h1>' .$query .'</h1>';
    print '<br>';
    print '<aside>';
    print '<table>';
    
    $columns = 12 ;
    
    print '<tr>';
    print '<td>Course ID</td>';
    print '<td>CRN #</td>';
    print '<td>Teacher Net ID</td>';
    print '<td>Max Students</td>';
    print '<td>Num. of Students</td>';
    print '<td>Section</td>';
    print '<td>Type</td>';
    print '<td>Start</td>';
    print '<td>Stop</td>';
    print '<td>Days</td>';
    print '<td>Building</td>';
    print '<td>Room</td>';
    
    
    print '</tr>';
    
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