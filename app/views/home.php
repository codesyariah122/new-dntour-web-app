<!-- <div class="relative mx-auto px-90 rounded-[2.5rem] h-[600px] w-[300px]">
</div> -->

<?php require_once $partials['navbar']; ?>

<body class="flex flex-col min-h-screen">
	<main class="bg-white dark:bg-gray-800 dark:text-white">
		<?php
		foreach($partials['views'] as $home):
			require_once $home;
		endforeach;
		?>
	</main>
