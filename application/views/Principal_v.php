<?php $url = $this->uri->segment(1);?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>C-Gemis</title>
    <environment exclude="Development">
        <link rel="stylesheet" href="./Content/bootstrap2.min.css"
              asp-fallback-href="./Content/bootstrap.min.css"
              asp-fallback-test-class="sr-only" asp-fallback-test-property="position" asp-fallback-test-value="absolute" />
              <link rel="stylesheet" href="./Content/dataTables.css"
                asp-fallback-href="./Content/bootstrap.min.css"
                asp-fallback-test-class="sr-only" asp-fallback-test-property="position" asp-fallback-test-value="absolute" />
    </environment>
    <link href="./Content/Site.css" rel="stylesheet" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" asp-area="" asp-controller="Home" asp-action="Index">C-Gemis</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>home'>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>tcga'>TCGA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>geo'>GEO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>contact'>Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"  href='<?php echo base_url(); ?>publications'>Publications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href='<?php echo base_url(); ?>about' >About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <environment exclude="Development">
        <script src="./Scripts/jquery-3.3.1.min.js"></script>
        <script src="./Scripts/bootstrap.min.js"></script>
    </environment>

    <div class="container">
        <partial name="_CookieConsentPartial" />
        <main role="main" class="pb-3">
            <?php $this->load->view($paginaMeio); ?>
        </main>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2019 - C-Gemis - <a asp-area="" asp-controller="Home" asp-action="About">About</a>
        </div>
    </footer>

</body>
</html>
