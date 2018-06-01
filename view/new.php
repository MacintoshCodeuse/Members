<?php require 'view/header.php' ?>
<?php require 'view/menu.php' ?>

        <header>
            <h1>Nouveau membre</h1>
        </header>

        <main>
            <section class="row">
            <div class="col-3"></div>
                <form id="form" action="" method ="post" class="col-6">
                    <!-- Pseudo -->
                    <div class="form-group mt-2">
                        <label for="username" class="mt-2">Pseudo</label>
                        <input id="username" class="form-control" type="text" name="username">
                        <p class="comments" style="color: red;"></p>
                    </div>
                    <!-- Password -->
                    <div id="password" class="form-group mt-2">
                        <label for="password" class="mt-2">Mot de passe</label>
                        <input id="password" class="form-control" type="password" name="password">
                        <p class="comments" style="color: red;"></p>
                    </div>
                    <!-- Email -->
                    <div class="form-group mt-2">
                        <label for="mail" class="mt-2">Email</label>
                        <input id="mail" class="form-control" type="text" name="mail">
                        <p class="comments" style="color: red;"></p>
                    </div>

                    <!-- Valider -->
                    <input type="submit" value="valider" class="btn btn-deep-orange btn-sm mt-5">

                    </form>
            </section>
        </main>

<?php require 'view/footer.php';
