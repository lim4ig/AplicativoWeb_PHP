<!-- Menu de navegação comum para todas as páginas do sistema -->
<?php $pagina_atual = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-sm navbar-light bg-success bg-opacity-10 rounded shadow-sm mb-4">
    <div class="container-fluid px-3 py-2">
        <span class="navbar-brand mb-0 h5 text-success">Spotify</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#appMenu" aria-controls="appMenu" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="appMenu">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link text-success fw-semibold <?= $pagina_atual === 'index.php' ? 'active' : '' ?>" <?= $pagina_atual === 'index.php' ? 'aria-current="page"' : '' ?> href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success fw-semibold <?= $pagina_atual === 'admin.php' ? 'active' : '' ?>" <?= $pagina_atual === 'admin.php' ? 'aria-current="page"' : '' ?> href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success fw-semibold <?= $pagina_atual === 'discografia-listagem.php' ? 'active' : '' ?>" <?= $pagina_atual === 'discografia-listagem.php' ? 'aria-current="page"' : '' ?> href="discografia-listagem.php">Discografia</a>
                </li>
            </ul>
        </div>
    </div>
</nav>