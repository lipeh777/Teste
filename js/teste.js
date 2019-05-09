function get(id){
	return document.getElementById(id);
	}

	var perfilDiscente = get('perfil-discente');
	var perfilDocente = get('perfil-docente');
	var perfilVisitante = get('perfil-visitante');

	var formulario = get('formulario');
	var formuall = get('formuall');

	perfilDiscente.addEventListener('click', function add(evt) {
			evt.preventDefault();
			var div = document.createElement('div');
			var i = document.createElement('i');
			var ipt = document.createElement('input');
			var label = document.createElement('label');
			div.className = 'input-field col s12';
			i.className = 'material-icons prefix';
			ipt.type = 'text';
			ipt.name = 'matricula';
			ipt.id = 'matricula';
			label.for ='matricula';
			label.innerHTML = 'Matrícula';
			i.innerHTML = 'power_input';


			formuall.appendChild(div);
			div.appendChild(i);
			div.appendChild(ipt);
			div.appendChild(label);
	});

	perfilDocente.addEventListener('click', function add1(evt) {
			evt.preventDefault();
			var div = document.createElement('div');
			var i = document.createElement('i');
			var ipt = document.createElement('input');
			var label = document.createElement('label');
			div.className = 'input-field col s12';
			i.className = 'material-icons prefix';
			ipt.type = 'text';
			ipt.name = 'siape';
			ipt.id = 'siape';
			label.for ='siape';
			label.innerHTML = 'SIAPE';
			i.innerHTML = 'power_input';


			formuall.appendChild(div);
			div.appendChild(i);
			div.appendChild(ipt);
			div.appendChild(label);
	});

	perfilVisitante.addEventListener('click', function add1(evt) {
			evt.preventDefault();
			var div = document.createElement('div');
			var i = document.createElement('i');
			var ipt = document.createElement('input');
			var label = document.createElement('label');
			div.className = 'input-field col s12';
			i.className = 'material-icons prefix';
			ipt.type = 'text';
			ipt.name = 'cpf';
			ipt.id = 'cpf';
			label.for ='cpf';
			label.innerHTML = 'CPF';
			i.innerHTML = 'power_input';


			formuall.appendChild(div);
			div.appendChild(i);
			div.appendChild(ipt);
			div.appendChild(label);
	});
