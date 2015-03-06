$('.nav-tabs a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
});

// Exibir ou ocultar a senha nas partes onde há cadastro / edição de senha
var clicado = false;
$('.showPass').click(function (e){
	e.preventDefault()
	if(clicado == false){
		$(".campo-senha").attr("type", "text");
		$(this).removeClass("glyphicon-eye-open").addClass("glyphicon-eye-close");
		clicado = true;
	}else{
		$(".campo-senha").attr("type", "password");
		$(this).removeClass("glyphicon-eye-close").addClass("glyphicon-eye-open");
		clicado = false;
	}
});

$('.input-group.date').datepicker({
	language: "pt-BR",
	orientation: "top auto"
});

$("#arquivosProjeto").fileinput({
    uploadUrl: '#', // you must set a valid URL here else you will get an error
    //allowedFileExtensions : ['jpg', 'png','gif'],
    fileType: "any",
    overwriteInitial: false,
    showPreview: true,
    maxFileSize: 1000,
    maxFilesNum: 10,
    //allowedFileTypes: ['image', 'video', 'flash'],
    slugCallback: function(filename) {
        return filename.replace('(', '_').replace(']', '_');
    }
});