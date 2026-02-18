<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>

<style>
    li {
        list-style: none;
    }
</style>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-white">
        <ul>
            <?php
            foreach ($notes as $note) {
            ?>
                <li><a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($note['body']) ?></a></li>
            <?php
            }
            ?>
        </ul>

        <p>
            <a href="/note/create" class="text-blue-500 hover:underline mt-5">Create note</a>
        </p>
    </div>
</main>



<?php require("partials/footer.php"); ?>