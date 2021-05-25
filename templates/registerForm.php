<?php
include __DIR__ . "/header.php";
?>
<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <form class="form-signin" method="POST" action="?action=register">
            <h2 class="form-signin-heading" style="color: black;">S'incrire</h2>
            <?php
            if (isset($errorMsg)) {
                echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
            }
            ?>
            <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur (4 caractères)" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Mot de passe (8 caractères)" required="" />
            <label style="color: black;">Confirmation mot de passe:</label>
            <input type="password" class="form-control" name="passwordRetype" placeholder="Mot de passe" required="" />
            <button class="btn btn-lg btn-primary btn-block" type="submit">S'incrire</button>
        </form>
    </div>
</div>
<?php
include __DIR__ . "/footer.php";
?>