<?php include('header.php'); ?>

<div class="templates template-page">
    <div class="hero-unit">
        <article>
            <header>
                <h1><?php echo $this->title; ?></h1>
            </header>
            <content>
                <?php echo $this->content; ?>
            </content>
            <footer class="muted pull-right">
                This page was last modified on 30 June 2013 at 17:36.
            </footer>
        </article>
    </div>
</div>

<button href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</button>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Login</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary">Save changes</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>

<?php include('footer.php'); ?>
