
<style type="text/css" scoped>
	.container-arrow {
		position: relative;
		width: 24px;
		height: 24px;
	}

	.chevron {
		position: absolute;
		width: 28px;
		height: 8px;
		opacity: 0;
		transform: scale3d(0.5, 0.5, 0.5);
		animation: move 3s ease-out infinite;
	}

	.chevron:first-child {
		animation: move 3s ease-out 1s infinite;
	}

	.chevron:nth-child(2) {
		animation: move 3s ease-out 2s infinite;
	}

	.chevron:before,
	.chevron:after {
		content: ' ';
		position: absolute;
		top: 0;
		height: 100%;
		width: 51%;
		background: #fff;
	}

	.chevron:before {
		left: 0;
		transform: skew(0deg, 30deg);
	}

	.chevron:after {
		right: 0;
		width: 50%;
		transform: skew(0deg, -30deg);
	}

	@keyframes move {
		25% {
			opacity: 1;

		}
		33% {
			opacity: 1;
			transform: translateY(30px);
		}
		67% {
			opacity: 1;
			transform: translateY(40px);
		}
		100% {
			opacity: 0;
			transform: translateY(55px) scale3d(0.5, 0.5, 0.5);
		}
	}

	.text {
		display: block;
		margin-top: 75px;
		margin-left: -30px;
		font-family: "Helvetica Neue", "Helvetica", Arial, sans-serif;
		font-size: 12px;
		color: #fff;
		text-transform: uppercase;
		white-space: nowrap;
		opacity: .25;
		animation: pulse 2s linear alternate infinite;
	}

	@keyframes pulse {
		to {
			opacity: 1;
		}
	}
</style>

<section id="blog-detail-hero" class="bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-multiply h-[100vh]">
	<div class="px-4 mx-auto max-w-screen-xl text-center py-24">
		<center>		
			<div class="container-arrow">
				<div class="chevron"></div>
				<div class="chevron"></div>
				<div class="chevron"></div>
				<span class="text">&nbsp;</span>
				<a class="text" href="#blog-detail">Continue Reading</a>
			</div>
		</center>
	</div>
</section>