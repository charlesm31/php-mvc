<?php require('partials/header.php'); ?>


<h1 class='page-header'>Filtering Arrays</h1>

<div class="well">
    <h2>Array Filter</h2>
    <p>
        <strong>array_filter: </strong>
        sort the values of an array.
    </p>

    <hr>

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>Unpublished Posts Only</th>
                <th>Author</th>
        </thead><!-- thead -->

        <tbody>
            <?php foreach ($unpublishedPosts as $post): ?>
                <tr class="danger">
                    <td><?= $post->title; ?></td>
                    <td><?= $post->author; ?></td>                                   
                </tr>
            <?php endforeach; ?>
        </tbody><!-- tbody -->
    </table><!-- table -->
</div><!-- well -->

<div class="well">
    <h2>Array Map</h2>
    <p>
        <strong>array_map: </strong>
        modify or override value of an array.
    </p>

    <hr>

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>All Posts Are Published</th>
                <th>Author</th>
                <th>Published</th>
            </tr>
        </thead><!-- thead -->

        <tbody>
            <?php foreach ($mappedPosts as $post): ?>
                <tr class="success">
                    <td><?= $post->title; ?></td>
                    <td><?= $post->author; ?></td>
                    <td>
                        <?php
                        if ($post->published) {
                            echo 'published';
                        } else {
                            echo 'unpublished';
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody><!-- tbody -->
    </table><!-- table -->
</div><!-- well -->

<div class="well">
    <h2>Array Column</h2>
    <p>
        <strong>array_column: </strong>
        return specific fields from an array.
    </p>

    <hr>

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>Published Posts Only</th>
                <th>Author</th>
            </tr>
        </thead><!-- thead -->

        <tbody>
            <?php foreach ($titles as $post): ?>
                <tr>
                    <td><?= $post->title; ?></td>
                    <td><?= $post->author; ?></td>                    
                </tr>
            <?php endforeach; ?>
        </tbody><!-- tbody -->
    </table><!-- table -->
</div><!-- well -->



<?php require('partials/footer.php'); ?>