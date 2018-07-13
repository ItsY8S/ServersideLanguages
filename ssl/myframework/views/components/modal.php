<?php

echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
Launch demo modal
</button>";
echo "<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModal' aria-hidden='true'>";
echo "<div class='modal-dialog' role='document'>";
echo "<div class='modal-content'>";
echo "<div class='modal-header'>";
echo "<h5 class='modal-title' id='exampleModal'>Modal title</h5>";
echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
echo "<span aria-hidden='true'>&times;</span>";
echo "</button>";
echo "</div>";
echo "<div class='modal-body'>Modal Body</div>";
echo "<div class='modal-footer'>";
echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
echo "<button type='button' class='btn btn-primary'>Save changes</button>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>
