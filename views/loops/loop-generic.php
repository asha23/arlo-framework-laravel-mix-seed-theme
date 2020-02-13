<?php

use Samrap\Acf\Acf;

$content = Acf::field('content')->get();

?>

<main class="row">
	<div class="col">
		<?= $content; ?>
	</div>
</main>


