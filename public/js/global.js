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
