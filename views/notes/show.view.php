<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>

<style>
    li {
        list-style: none;
    }
</style>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-white">
        <a href="/notes" class="text-blue-500 hover:underline">Go Back ...</a>

        <p class="text-white-500 pt-5 pb-3"><?= $note['body'] ?></p>

        <form method="POST" action="/note/delete" class="mt-6">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
        </form>

    </div>
</main>



<?php require base_path("views/partials/footer.php"); ?>