<div class="row">
    <div class="col-sm">
        <h1>CRUD</h1>
        <a href="/crud/addform">Add</a>

        <?php
            foreach($data["fruits"] as $fruit) {
                 echo "<p>". $fruit['name'];
                 echo " <a href='/crud/delete/" . $fruit['id'] . "'>Delete</a>";
                 echo " <a href='/crud/update/" . $fruit['id'] . "'>Update</a>";
                 echo "</p>";
            }
        ?>
    </div>
</div>