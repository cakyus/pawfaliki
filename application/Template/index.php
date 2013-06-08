<?php include('header.php'); ?>

<article class="entry">
    <header>
        <h2>
            <?php echo htmlentities($this->title); ?>
        </h2>
    </header>
    <div class="entry-content">
        <?php echo $this->content; ?>
    </div>
</article>

<?php include('footer.php'); ?>
