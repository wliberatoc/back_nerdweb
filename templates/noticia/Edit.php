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
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>Editor de Notícia</span></h5>
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
                                                <h4 class="card-title">Editar notícia</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view-borderless-table">
                                        <div class="row">
                                            <div class="col s12">
                                                <form id="editar">
                                                    <input type="hidden" name="id" id="id" value="<?=$this->data['id']?>">
                                                    <label>Titulo</label>
                                                    <input type="text" name="titulo" id="titulo" value="<?=$this->data['titulo'];?>">
                                                    <label>Url</label>
                                                    <input type="text" name="url" id="url" value="<?=$this->data['url_noticia']?>">
                                                    <label>Conteúdo</label>
                                                    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

                                                        <!-- Create the editor container -->
                                                        <div id="editor">
                                                            <?=$this->data['conteudo']?>
                                                        </div>

                                                        <!-- Include the Quill library -->
                                                        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

                                                        <!-- Initialize Quill editor -->
                                                        <script>
                                                            var toolbarOptions = [
                                                                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                                                                ['blockquote', 'code-block'],
                                                            
                                                                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                                                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                                                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                                                                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                                                                [{ 'direction': 'rtl' }],                         // text direction
                                                            
                                                                ['clean']                                         // remove formatting button
                                                            ];
                                                            
                                                                var quill = new Quill('#editor', {
                                                                modules: {
                                                                    toolbar: toolbarOptions
                                                                },
                                                                theme: 'snow'
                                                            });
                                                        </script>
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                </form>
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