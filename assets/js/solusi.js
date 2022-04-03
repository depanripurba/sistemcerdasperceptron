const root = document.querySelector("#root-solusi");
const tombolsolusi = document.querySelector("#tombol-solusi")
const containersolusi = document.querySelector(".container-solusi");
const tomboltambah = document.querySelector('.tambah');
const tombolkurang = document.querySelector('.remove');
const tomboledit = document.querySelector('.edit');
const textareas = document.querySelectorAll('textarea');
const form = document.querySelector(".form")
const tambah = document.querySelector(".tambahedit")
const remove = document.querySelector(".removeedit")
let ntext = document.querySelectorAll(".step");
let number = 2;
if (ntext.length > 0) {
	number = ntext.length * 1 + 1
}




purbajs(tomboledit, () => {

	tomboledit.addEventListener('click', (e) => {
		e.preventDefault();
	
		textareas.forEach((value) => {
			value.disabled = false;
		})
		tomboledit.innerHTML = "simpan";
		tomboledit.classList.remove('edit');
		tomboledit.remove();

		let button = document.createElement('button');
		button.type = 'submit';
		button.innerHTML = 'simpan'
		tambah.classList.remove('hide')
		remove.classList.remove('hide')
		form.appendChild(button);
	

	})
})
purbajs(remove, () => {
	remove.addEventListener('click', (e) => {
		ntext = document.querySelectorAll(".step");
		e.preventDefault();
		if (ntext.length<= 1) {
			return null
		} else {
			ntext[ntext.length - 1].remove()
			number--;
		}

	})
})
purbajs(tambah, () => {
	tambah.addEventListener('click', (e) => {
		e.preventDefault();
		let newinput = document.createElement('div');
		let input = document.createElement('textarea');
		input.name = '2[]';
		input.cols = 50;
		input.rows = 4;
		input.classList.add('step');
		input.placeholder = 'langkah ke ' + number;	
		newinput.appendChild(input);
		root.appendChild(newinput);
		number++
	})
})
purbajs(tombolsolusi, () => {
	tombolsolusi.addEventListener('click', () => {
		containersolusi.classList.replace('hider', 'shower');
		tombolsolusi.remove();
	})
})

purbajs(tomboltambah, () => {
	tomboltambah.addEventListener('click', (e) => {
		e.preventDefault();
		let newinput = document.createElement('div');
		let input = document.createElement('textarea');
		input.name = '2[]';
		input.cols = 50;
		input.rows = 4;
		input.classList.add = 'step'
		input.placeholder = 'langkah ke ' + number;	
		newinput.appendChild(input);
		root.appendChild(newinput);
		number++
	})
})

tombolkurang.addEventListener('click', (e) => {
	e.preventDefault();
	
	if (number <= 2) {
		return null
	} else {
		root.removeChild(root.lastChild);
		number--;
	}

})

function purbajs(e, callback) {
	if (e != null) {
		callback()
	} else {
		return null;
	}
	
}