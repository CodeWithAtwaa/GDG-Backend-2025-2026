
<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/note/create" method="POST" enctype="multipart/form-data">
            <label for="body" class="text-white block mb-2">Description</label>
            <div>
                <textarea name="body" id="body" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Write your notes..."></textarea>
                <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Create Note</button>
            </form>
            </div>
    </div>
</main>



<?php require("partials/footer.php"); ?>