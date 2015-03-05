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
		clicado = true;
	}else{
		$(".campo-senha").attr("type", "password");
		clicado = false;
	}
})