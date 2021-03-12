<?php require 'partials/head.php'; ?>
<section class="container">
    <?php echo flash()->display() ?>
    <h1 class="large text-primary text-center">
        Paths
    </h1>
    <div class="dash-buttons text-center">
        <a href="/" class="btn btn-primary">
            <i class="fas fa-user-circle text-light"></i> Home
        </a>

        <a href="/search" class="btn btn-primary">
            <i class="fab fa-black-tie text-light"></i> Search Paths
        </a>
    </div>

    <!-- <h2 class="my-1">All paths</h2> -->
    <table class="table mt-1" id="table_box_native">
        <thead>
            <tr>
                <th>Name</th>
                <th class="hide-sm">Full Path</th>
                <th class="hide-sm">Item Type</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($paths as $path): ?>
            <tr>
                <td><?php echo $path->name ?></td>
                <td class="hide-sm"><?php echo $path->directory."\\".$path->name ?></td>
                <td class="hide-sm">
                    <?php echo $path->type ?>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div id="index_native"></div>
</section>

<script type="text/javascript">
    paginator({
        table: document.getElementsByTagName("table")[0],
        box: document.getElementById("index_native"),
        active_class: "color_page"
    });
</script>
<?php require 'partials/footer.php'; ?>
