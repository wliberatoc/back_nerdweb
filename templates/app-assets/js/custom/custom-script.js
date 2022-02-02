

$(document).on('submit', "#editar", function (e) {
	e.preventDefault();
	let conteudo = quill.root.innerHTML;
	let id = $("#id").val();
	let titulo = $("#titulo").val();
	let url = $("#url").val();

    $.ajax({
        url:'./edit',
		type: 'POST',
        data: {
			"id": id,
			"titulo": titulo,
			"url": url,
			"conteudo": conteudo
		},
        dataType: 'json',
        success: function (result) {
			M.toast({
				html: result.mensagem, 
				classes: 'rounded'
			});
            if (result.sucesso == true) {
				setTimeout(function () {
					window.location = './';
				}, 5000)							
			}
		}
	})
})	

$(document).on('submit', "#cadastrar", function (e) {
	e.preventDefault();
	let conteudo = quill.root.innerHTML;
	let id = $("#id").val();
	let titulo = $("#titulo").val();
	let url = $("#url").val();

    $.ajax({
        url:'./add',
		type: 'POST',
        data: {
			"id": id,
			"titulo": titulo,
			"url": url,
			"conteudo": conteudo
		},
        dataType: 'json',
        success: function (result) {
			M.toast({
				html: result.mensagem, 
				classes: 'rounded'
			});
            if (result.sucesso == true) {
				setTimeout(function () {
					window.location = './';
				}, 5000)							
			}
		}
	})
})	

$(document).ready( function () {
    $('#myTable').DataTable({
		responsive: true,
		"order": [["data","desc"]],
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.11.4/i18n/pt_br.json"
		}
	});
} );