<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<img src="<?php echo base_url('images/logo2.png');  ?>" />
		<a class="navbar-brand " href="<?php echo site_url('about') ?>">Sailing adventure</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('about') ?>">Главная </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('services') ?>">
						Наши услуги</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('photo') ?>">
						Фото</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('video') ?>">Видео</a>
				</li>
			</ul>
		</div>
	</div>
</nav>