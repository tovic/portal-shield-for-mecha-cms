<?php if($config->is->post): ?>
<?php include CHUNK . DS . 'pager.php'; ?>
<?php else: ?>
<nav class="blog-pager"><?php echo $pager->step->html; ?></nav>
<?php endif; ?>