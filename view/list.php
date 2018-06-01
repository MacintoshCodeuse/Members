<?php require 'view/header.php'; ?>
<?php require 'view/menu.php'; ?>

<header>
    <h1>Membres</h1>
</header>

<main>
    <section>
        <table class="table table-bordered table-hover table-sm">

            <!-- Table head -->
            <thead class="mdb-color darken-3">
                <tr class="text-white">
                    <th>Nom</th>
                    <th>Mot de passe</th>
                    <th>Email</th>
                </tr>
            <!-- Table head -->
            </thead>

            <!-- Table body -->
            <tbody>

                <?php
                foreach($members as $member) :
                ?>

                <tr>
                    <td><?= $member->getUserName(); ?></td>
                    <td><?= $member->getPassword(); ?></td>
                    <td><?= $member->getMail(); ?></td>
                </tr>

                <?php endforeach; ?>

            <!-- Table body -->
            </tbody>
        <!-- Table -->
        </table>
    </section>
</main>

<?php require 'view/footer.php';
