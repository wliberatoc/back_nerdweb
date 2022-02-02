<?php include('components/Head.php')?>
<?php include('components/Header.php')?>
<?php include('components/SideNav.php')?>
<!-- BEGIN: Page Main-->
<main id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../templates/app-assets/images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>Notícia completa</span></h5>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <!-- Borderless Table -->
                    <div class="row">
                        <div class="col s12">
                            <div id="borderless-table" class="card card-tabs">
                                <div class="card-content">
                                    <div id="view-borderless-table">
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="card-content">
                                                    <h1 class="card-title"><?=$this->data['titulo']?></h1>
                                                    <span><?=date("d/m/Y H:i:s", strtotime($this->data['data']))?></span>
                                                    <p><?=$this->data['conteudo']?></p>
                                                </div>
                                                <div>
                                                    <a class="waves-effect waves-light  btn-small" href="edit?id=<?=$_GET['id']?>"><i class="material-icons">edit</i></a>
                                                    <a class="waves-effect red btn-small" href="delete?id=<?=$_GET['id']?>"><i class="material-icons">delete_forever</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> 
<?php include('components/Footer.php')?>