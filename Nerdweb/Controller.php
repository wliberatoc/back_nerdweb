<?php

namespace Nerdweb
{
    require_once __DIR__ . "/Template.php";
    require_once __DIR__ . "/Database.php";

    define('__PATH__', 'http://localhost/nerdweb', false);

    class Controller extends Template
    {
        private $database;
        public function __construct() {
            $configDB = [
                "host" => "localhost",
                "database" => "nerdweb",
                "user" => "root",
                "password" => "",
                "tipo" => "sqlite",
            ];
            $this->database = new Database($configDB);
        }

        public function exibePaginaNoticia()
        {
            $selecao = $this->database->customQueryPDO('SELECT * FROM tbl_noticia ORDER BY data DESC'); 
            $this->insert('index.php',$selecao,'./templates/noticia/');
        }

        public function exibePaginaAddNoticia()
        {
            if (!empty($_POST)) {
                header('Content-type:application/json;charset=utf-8');
                if( !empty($_POST['titulo']) && !empty($_POST['url'] && !empty($_POST['conteudo']))){
                    $this->database->insertPrepared('tbl_noticia', ['id', 'titulo','url_noticia', 'conteudo'], [uniqid(), $_POST['titulo'], $_POST['url'], $_POST['conteudo']]);    
                    $reponse = [
                        'sucesso' => true,
                        'mensagem' => "Notícia cadastrada com sucesso",
                    ];
                }else {
                    $reponse = [
                        'sucesso' => false,
                        'mensagem' => "Falha ao tentar cadatrar a notícia",
                    ];
                }
                echo json_encode($reponse);
                
            }else {
                $this->insert('Add.php',[],'./templates/noticia/');
            }
        }

        public function exibePaginaEditarNoticia()
        {
            if (!empty($_POST)) {
                header('Content-type:application/json;charset=utf-8');
                if( !empty($_POST['titulo']) && !empty($_POST['url'] && !empty($_POST['conteudo']) && !empty($_POST['id']))){
                    $this->database->updatePrepared('tbl_noticia', ['titulo','url_noticia', 'conteudo'], [$_POST['titulo'], $_POST['url'], $_POST['conteudo']], ["id"], [$_POST['id']]);    
                    $reponse = [
                        'sucesso' => true,
                        'mensagem' => "Notícia editada com sucesso",
                    ];
                }else {
                    $reponse = [
                        'sucesso' => false,
                        'mensagem' => "Falha ao tentar editar a notícia",
                    ];
                }
                echo json_encode($reponse);
            }else if(isset($_GET['id'])){
                $selecao = $this->database->customQueryPDO('SELECT * FROM tbl_noticia WHERE id = ? LIMIT 1', [$_GET['id']]); 
                if (!empty($selecao)) {
                    $this->insert('Edit.php',$selecao[0],'./templates/noticia/');
                    return true;
                }
                header('Location: ./');   
            }
            
            
        }

        public function exibePaginaVisualizarNoticia()
        {
            if(isset($_GET['id'])){
                $selecao = $this->database->customQueryPDO('SELECT * FROM tbl_noticia WHERE id = ? LIMIT 1', [$_GET['id']]); 
                if (!empty($selecao)) {
                    $this->insert('View.php',$selecao[0],'./templates/noticia/');
                    return true;
                }   
            }
            header('Location: ./');
            
        }

        public function paginaDeletarNoticia()
        {
            if(isset($_GET['id'])){
                $selecao = $this->database->customQueryPDO('SELECT * FROM tbl_noticia WHERE id = ? LIMIT 1', [$_GET['id']]); 
                if (!empty($selecao)) {
                    $this->database->customQueryPDO("DELETE FROM tbl_noticia WHERE id = ?", [$_GET['id']]);
                }   
            }
            header('Location: ./');
            
        }
    }
}

