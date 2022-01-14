

document.addEventListener('DOMContentLoaded', function(){
	if (document.querySelector('#formLogin')) {
		let formLogin = document.querySelector('#formLogin');
		formLogin.onsubmit = function(e){
			e.preventDefault();

			const strEmail = document.querySelector('#txtEmail').value;
			const strPassword =  document.querySelector('#txtPassword').value;

			if (strEmail==''||strPassword=='') {
				Swal.fire(
				  'Por favor',
				  'Ingrese su correo y contraseña.',
				  'error'
				)
				return false;
			}else{
				let request =(window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				const ajaxUrl = base_url+'/Login/loginUser';
				const formaData = new FormData(formLogin);
				request.open("POST", ajaxUrl,true);
				request.send(formaData);
				request.onreadystatechange = function(){
					if (request.readyState !=4) return;

					if (request.status==200) {
						let objData = JSON.parse(request.responseText);
						if (objData.status) {
							Swal.fire(
							  'Buen trabajo!',
							  objData.msg,
							  'success'
							)
							window.location = base_url+'/dashboard';
						}else{
							Swal.fire(
							  'Atencón!!',
							  objData.msg,
							  'error'
							)
							document.querySelector('#txtEmail').value='';
							document.querySelector('#txtPassword').value='';
						}
					}else{
						Swal.fire(
							'Atencón!!',
							'Error en el proceso!!',
							'error'
						)
					}
				}	
			}
		}
	}
},false);
