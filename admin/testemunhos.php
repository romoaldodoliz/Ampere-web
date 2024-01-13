<?php
include 'config/config.php';
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$admin_id = 1;

// Processar o formulário de adição de dados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $cargo = $_POST['cargo'];
    $testemunho = $_POST['testemunho'];

    // Processar o upload da imagem
    $uploadPath = "../images/";
    $imageName = $_FILES['image']['name'];
    $imagePath = $uploadPath . $imageName;
    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $sql = "INSERT INTO testemunhos (admin_id, name, cargo, testemunho, image) VALUES ('$admin_id', '$name', '$cargo', '$testemunho', '$imageName')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Dados adicionados com sucesso!";
    } else {
        echo "Erro ao adicionar dados: " . mysqli_error($conn);
    }
}

// Consultar dados da tabela 'home'
$sql = "SELECT * FROM testemunhos";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Painel de Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Pesquisar por .." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo  $_SESSION['username']; ?> <i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Definições</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!--  fim de navbar  -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
							<!-- Todas seccoes editaveis da pagina -->
                            <div class="sb-sidenav-menu-heading">Definições</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="landing.php">Home</a>
                                    <a class="nav-link" href="sobre.php">Sobre</a>
                                    <a class="nav-link" href="clientes.php">Logotipo clientes</a>
                                    <a class="nav-link" href="servicos.php">Serviços</a>
                                    <a class="nav-link" href="projectos.php">Projectos</a>
                                    <a class="nav-link" href="testemunhos.php">Testemunhos</a>
                                </nav>
                            </div>
							<!-- Fim da seccao editavel da pagina -->


							<!-- Utilizadores -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Utilizadores
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Lista de utilizadores
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Todos users</a>
                                            <a class="nav-link" href="#">Adicionar</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                    </div>
                </nav>
            </div>

            <!-- Lista -->
        <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Adicionar Testemunhos</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Gestāo de Testemunhos</li>
        </ol>

        <!-- Your data list -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Testimonials
            </div>

            <div class="card-body">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Nome do cliente:</strong> <?php echo $row ['name']; ?>
                    </div>

                    <div class="col-md-3ß">
                        <strong>Cargo:</strong> <?php echo $row ['cargo']; ?>
                    </div>
                    <div class="col-md-3">
                        <strong>Testemunho:</strong> <?php echo $row ['testemunho']; ?>
                    </div>

                    <div class="col-md-3">
                    <strong>Imagem:</strong> <img src="../images/<?php echo $row['image']; ?>" height="80px" width="" alt="Imagem">
                    </div>
                </div>
    <?php endwhile ?>

             <!-- Formulário para adicionar dados -->
    <div class="card mb-4">
        <div class="card-body">
            <h2>Adicionar Testemunhos</h2>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome do cliente:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="cargo" class="form-label">Cargo:</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" required>
                </div>
                <div class="mb-3">
                    <label for="testemunho" class="form-label">Testemunho:</label>
                    <textarea class="form-control" id="testemunho" name="testemunho" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imagem:</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Adicionar</button>
            </form>
        </div>
    </div>

        <!-- Additional content -->
        <div class="card mb-4">
            <div class="card-body">
            <p class="mb-0">
    Esta página funciona como um Sistema de Gerenciamento de Conteúdo (CMS) para a sua aplicação web. Você tem a liberdade de personalizar o título, o subtítulo e a imagem de fundo no início da página de forma fácil e intuitiva. </p>

            </div>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4">
        </div>
    </div>
</main>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
