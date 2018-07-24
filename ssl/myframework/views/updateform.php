<? $fruit = $data[0]; ?>

<br>
<br>
<?php var_dump($fruit[1]) ?>
<div class="row">
<div class="col-6 offset-1" style="margin-top: 15px; margin-left: 70px;">
<form action="/about/updateAction" method="PUT">
    <h3>Update: <? echo $fruit["name"]; ?></h3>
    <input name="fruit" type="text" value="<?php echo $fruit["name"] ?>" placeholder="<?php echo $fruit["name"] ?>"  />
    <input name="id" type="text" value="<?php echo $fruit["id"] ?>" placeholder="<?php echo $fruit["id"] ?>" />
    <input type="submit" />

    </form>
</div>
    
</div>
