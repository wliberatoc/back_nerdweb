<?php include('components/Head.php')?>
    <link rel="stylesheet" type="text/css" href="<?=__PATH__?>/templates/app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=__PATH__?>/templates/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=__PATH__?>/templates/app-assets/vendors/data-tables/css/select.dataTables.min.css">
<?php include('components/Header.php')?>
<?php include('components/SideNav.php')?>
<!-- BEGIN: Page Main-->
<main id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../templates/app-assets/images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>Veja todas as notícias</span></h5>
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
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Listando notícias</h4>
                                                </div>
                                                <div class='col s12 m4 l2'>
                                                <a class="waves-effect waves-light gradient-45deg-green-teal btn" href="add"><i class="material-icons">add_circle</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-borderless-table">
                                            <div class="row">
                                                <div class="col s12">
                                                    <table id="myTable">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="id">Id da Notícia</th>
                                                                <th data-field="titulo">Titulo da Notícia</th>
                                                                <th data-field="data">Data da Notícia</th>
                                                                <th data-field="url">Url da Notícia</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($this->data as $noticia):?>
                                                            <tr>
                                                                <td><?=$noticia['id']?></td>
                                                                <td><?=$noticia['titulo']?></td>
                                                                <td><?=date("d/m/Y H:i:s", strtotime($noticia['data']))?></td>
                                                                <td><?=$noticia['url_noticia']?></td>
                                                                <td>
                                                                    <a class="waves-effect waves-light  btn-small" href="edit?id=<?=$noticia['id']?>"><i class="material-icons">edit</i></a>
                                                                    <a class="waves-effect waves-light  gradient-45deg-green-teal btn-small" href="view?id=<?=$noticia['id']?>"><i class="material-icons">remove_red_eye</i></a>
                                                                    <a class="waves-effect red btn-small" href="delete?id=<?=$noticia['id']?>"><i class="material-icons">delete_forever</i></a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
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
