<?php

// echo "<nav>";
// echo "<ul>";
// foreach($data as $menuTitle) {
//     echo "<li><a href='/" . $menuTitle . "'>" . $menuTitle . "</a></li>";
// }
// echo "</ul>";
// echo "</nav>";


echo "<nav class='navbar navbar-expand-lg navbar-light bg-light'>";
echo "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>";
echo "<span class='navbar-toggler-icon'></span>";
echo "</button>";
echo "<div class='collapse navbar-collapse' id='navbarNav'>";
echo "<ul class='navbar-nav'>";

foreach($data as $menuTitle) {
    echo "<li class='nav-item'>";
    echo "<a class='nav-link' href='/" . $menuTitle . "'>" . $menuTitle . "</a>";
    echo "</li>";
}

echo "</ul>";
echo "</div>";
echo "</nav>";

?>