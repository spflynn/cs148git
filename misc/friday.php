<?php 
//now print out each record
    include 'top.php';
    $queryfile = fopen("friday.sql","r");
    //$query = "SELECT `pmkNetId` FROM `tblTeachers`";

//    if (isset($_GET("offset"))){
//        $offset=($_GET("offset"));
//            
//    }
        
    $query = fread($queryfile,  filesize("friday.sql")).$offset;
    $records = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
    print '<article>';
    print '<aside>';

    $fields = array_keys($records[0]);
    $labels = array_filter($fields, "is_string");
    $columns = count($labels);
    
    print("Number of Records = " .$columns);
    
    
print '<table>';
print '<tr><th colspan="' . $columns . '">' . $query . '</th></tr>';
// print out the column headings, note i always use a 3 letter prefix
// and camel case like pmkCustomerId and fldFirstName
print '<tr>';
foreach ($labels as $label) {
    print '<th>';
    $camelCase = preg_split('/(?=[A-Z])/', substr($label, 3));
    foreach ($camelCase as $one) {
        print $one . " ";
    }
    print '</th>';
}
print '</tr>';
//now print out each record
foreach ($records as $record) {
    print '<tr>';
    for ($i = 0; $i < $columns; $i++) {
        print '<td>'. $record[$i] . '</td>';
    }
    print '</tr>';
}
print '<a href=';
// all done
print '</table>';
include "footer.php";
?>