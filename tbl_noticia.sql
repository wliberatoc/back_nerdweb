CREATE TABLE if not exists `tbl_noticia` (
    `id` VARCHAR(11) PRIMARY KEY NOT NULL,
    `data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `url_noticia` VARCHAR(50) NOT NULL,
    `titulo` VARCHAR(100) NOT NULL,
    `conteudo` text NOT NULL
);