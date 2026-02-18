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
        <a href="/notes" class="text-blue-500 hover:underline">Go Back ...</a>
        
        <p class="text-white-500 pt-5 pb-3"><?= $note['body'] ?></p> 
    </div>
</main>



<?php require("partials/footer.php"); ?>