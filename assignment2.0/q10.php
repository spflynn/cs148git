<?php 
//now print out each record
    include 'top.php';
    $queryfile = fopen("q10.sql","r");
    //$query = "SELECT `pmkNetId` FROM `tblTeachers`";
    $query = fread($queryfile,  filesize("q10.sql"));
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
    
    
    print '<article>';
    print '<h1>Total Records: 44</h1>';
    print '<h1>' .$query .'</h1>';
    print '<br>';
    print '<aside>';
    print '<table>';
    
    $columns = 2 ;
    print '<tr>';
    print '<td><strong>Building</strong></td>';
    print '<td><strong># of Students</strong></td>';
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