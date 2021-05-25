<?php
include __DIR__ . "/header.php";
?>
<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <form class="form-signin" method="POST" action="?action=new">
            <h2 class="form-signin-heading" style="color: black;">New Source Code</h2>
            <?php
            if (isset($errorMsg)) {
                echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
            }
            ?>
            <input type="text" class="form-control" name="name" placeholder="Nom du jeu (>= 2 characters)" required="" autofocus="" />
            <input type="text" class="form-control" name="platform" placeholder="PS4" required="" />
            <input type="text" class="form-control" name="price" placeholder="19.99€" required="" />
            <textarea class="form-control" id="desc" name="desc" rows="6" placeholder="Description (>= 2 characters)"></textarea>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
        </form>
    </div>
</div>
<?php
include __DIR__ . "/footer.php";
?>