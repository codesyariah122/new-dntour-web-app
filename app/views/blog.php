<?php require_once $partials['navbar']; ?>


<main class="bg-white dark:bg-gray-800 dark:text-white">
	
	<?php
		foreach($partials['views'] as $home):
			require_once $home;
		endforeach;
	?>

</main>
