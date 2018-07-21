<nav class='navbar navbar-expand-lg navbar-light bg-light'>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false'
        aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav'>
        <span style="color:red"><?=@$_REQUEST["msg"]?$_REQUEST["msg"]:''; ?></span>

<?php

if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"] == 1) {
    echo "<form class='navbar-form navbar-right'>";
    echo "<a href='/profile'>Profile</a>";
    echo "<a href='/auth/logout'>Logout</a>";
    echo "</form>";
}
else {
    echo "<form class='navbar-form navbar-right' role='search' method='post' action='/auth/login'>";

    echo "<div class='form-group'>";
    echo "<input type='email' class='form-control' name='email' placeholder='Email' />";
    echo "</div>";

    echo "<div class='form-group'>";
    echo "<input type='text' class='form-control' name='password' placeholder='Password' />";
    echo "</div>";

    echo "<button type='submit' class='btn btn-default'>Sign In</button>";

    echo "</form>";
}

foreach($data as $menuTitle) {

if($this->parent->urlPathParts[0] == $menuTitle) {
    echo "<li class='nav-item'>";
    echo "<a class='nav-link' style='color:blue !important;' href='/" . $menuTitle . "'>" . $menuTitle . "</a>";
    echo "</li>";
}
else {
    echo "<li class='nav-item'>";
    echo "<a class='nav-link' href='/" . $menuTitle . "'>" . $menuTitle . "</a>";
    echo "</li>";
}
}
?>

        </ul>
    </div>
</nav>