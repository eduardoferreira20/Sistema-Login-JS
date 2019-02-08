function login(){

	var login = document.getElementById("login").value;
	var senha = document.getElementById("senha").value;

	$.ajax({

		type:'post',
		url:'login.php',
		data:{ 'login': login, 'senha':senha },
		success: function(response){

			console.log(response);

			if(response == "SUCCESS"){
			
				window.location.href = "user.php";
			
			}else{

				var label = document.getElementById("response");
				label.innerHTML = "Usuário ou senha inválidos";
			}
		},
		
		error: function(){
		
			alert('Erro, tente novamente');
		
		}
	});

}