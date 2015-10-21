<?php 
//now print out each record
    include 'top.php';
    $queryfile = fopen("q11.sql","r");
    //$query = "SELECT `pmkNetId` FROM `tblTeachers`";
    $query = fread($queryfile,  filesize("q11.sql"));
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 1, false, false);
    
    
    print '<article>';
    print '<h1>Total Records: 3</h1>';
    print '<h1>' .$query .'</h1>';
    print '<br>';
    print '<aside>';
    print '<table>';
    
    $columns = 1 ;
    print '<tr><th><strong>Course ID</strong></th></tr>';
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