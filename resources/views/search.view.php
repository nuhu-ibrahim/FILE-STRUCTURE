<?php require 'partials/head.php'; ?>
  <section class="container">
    <?php echo flash()->display() ?>
    <h1 class="large text-primary text-center">Search</h1>
    <p class="lead text-center"><i class="fas fa-user"></i> Search for a file/path</p>
    <form class="form" method="POST" action="/search">
      <div class="form-group">
        <input
          type="text"
          placeholder="Search key"
          name="search"
          required
        />
      </div>
      <div class="text-center">
        <input type="submit" class="btn btn-primary text-center" value="Search" />
        <a href="/" class="btn btn-light">Go to home</a>
      </div>
    </form>
  </section>

<?php require 'partials/footer.php'; ?>
