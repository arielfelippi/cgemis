<?php $url = $this->uri->segment(1);?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>C-Gemis</i></title>
    <link href="./content/bootstrap.min.css" rel="stylesheet"/>
    <link href="./content/dataTables.css" rel="stylesheet"/>
    <link href="./content/Site.css" rel="stylesheet" />
    <link href="./content/fontawesome-5/css/all.min.css" rel="stylesheet" />
    <script src="./scripts/jquery-3.3.1.min.js"></script>
    <script src="./scripts/bootstrap.min.js"></script>
    <script src="./content/fontawesome-5/js/all.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>home'><i class="fas fa-dna fa-1x"></i> C-Gemis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>tcga'><i class="fas fa-flask"></i> TCGA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>geo'><i class="fas fa-mortar-pestle"></i> GEO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>contact'><i class="fas fa-at"></i> Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>publications'><i class="fas fa-newspaper"></i> Publications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href='<?php echo base_url(); ?>about' ><i class="fas fa-address-card"></i> About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <partial name="_CookieConsentPartial" />
        <main role="main" class="pb-3">
            <?php $this->load->view($paginaMeio); ?>
        </main>
    </div>

    <style>
        /* Information Developer */
        div.dev{
            height: 2%;
            text-align: right;
            float: right;
            margin-right: 7em;;
            font-style: italic;
        }
        /* GitHub */
        div.dev a.git:link {
            text-decoration: none;
            text-decoration-color: #6C757D;
            color: #6C757D;
        }
        div.dev a.git:visited {
            color: #6C757D;
        }
        div.dev a.git:hover {
            color: #000000;
        }
        div.dev a.git:active {
            color: #6C757D;
        }
        /*Instagram*/
        div.dev a.insta:link {
            text-decoration: none;
            text-decoration-color: #6C757D;
            color: #6C757D;
        }
        div.dev a.insta:visited {
            color: #6C757D;
        }
        div.dev a.insta:hover {
            color:#FFC34F;
        }
        div.dev a.insta:active {
            color: #6C757D;
        }
    </style>

    <footer class="border-top footer text-muted">
        <div class=" dev">
            Dev<i class="fas fa-terminal"></i> Ariel Felippi <a target="_blank" class="insta" href="https://www.instagram.com/arielfelippi/" > <i class="fab fa-instagram"></i></a>  <a target="_blank" class="git" href="https://github.com/arielfelippi/cgemis/" ><i class="fab fa-github"></i></a>
        </div>
        <div class="container">
            <span><i class="fas fa-dna fa-1x"></i> C-Gemis <?php echo date('Y')?> &copy;</span>
        </div>
    </footer>

</body>
</html>
