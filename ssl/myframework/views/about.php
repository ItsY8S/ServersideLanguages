<div class="row">
    <div class="col-sm">
        <h1>About</h1>
        <p><a href="/about/showAddForm">Add New</a></p>
        <?php
            foreach($data as $fruit) {
                echo "<p>". $fruit['name'];
                echo " <a href='/about/deleteAction/" . $fruit['id'] . "'>Delete</a>";
                echo " <a href='/about/showUpdateForm/" . $fruit['id'] . "'>Update</a>";
                echo "</p>";
           }

        ?>
    </div>
</div>