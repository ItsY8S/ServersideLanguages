<div class="row">
    <div class="col-sm">
        <h1>API</h1>
        <?php
            foreach ($data as $item) {
                echo $item['volumeInfo']['title'], "<br /> \n";
            }
        ?>
    </div>
</div>