<?php


print("github");
function displayGreeting($hourofday) {
    print ($hourofday);
    $hourofday = 11;
    if ($hourofday > 6 and $hourofday < 12)
        print"Good morning\n";
    if ($hourofday > 12 and $hourofday < 17)
        print"Good afternoon\n";
    if ($hourofday > 17 and $hourofday < 24)
        print"Good night\n";
}
function buildPhp ($isHtml){
    
}
print displayGreeting($hourofday);


?>