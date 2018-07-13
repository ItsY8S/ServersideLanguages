<?php

echo "<nav>";
echo "<ul>";
foreach($data as $menuTitle) {

    if($current == 'home') {
        echo "<li><a class='" . $menuTitle . "'" . "href='/" . $menuTitle . "'>" . $menuTitle . "</a></li>";
    }
    elseif($current == 'api') {
        echo "<li><a class='" . $menuTitle . "'" . "href='/" . $menuTitle . "'>" . $menuTitle . "</a></li>";
    }
    elseif($current == 'crud') {
        echo "<li><a class='" . $menuTitle . "'" . "href='/" . $menuTitle . "'>" . $menuTitle . "</a></li>";
    }

    // echo "<li><a href='/" . $menuTitle . "'>" . $menuTitle . "</a></li>";
}
echo "</ul>";
echo "</nav>";

?>