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
let number = 2;

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
purbajs(remove,()=>{
	remove.addEventListener('click', (e) => {
	e.preventDefault();
	
	if (number <= 2) {
		return null
	} else {
		root.removeChild(root.lastChild);
		number--;
		console.log(number)
	}

})
})
purbajs(tambah,()=>{
	tambah.addEventListener('click', (e) => {
		e.preventDefault();
		let newinput = document.createElement('div');
		let input = document.createElement('textarea');
		input.name = '2[]';
		input.cols = 50;
		input.rows = 4;
		input.placeholder = 'langkah ke ' + number;	
		newinput.appendChild(input);
		root.appendChild(newinput);
		number++
	})
})
purbajs(tombolsolusi, () => {
	tombolsolusi.addEventListener('click', () => {
		containersolusi.classList.replace('hider', 'shower');
		console.log(containersolusi);
		console.log(tomboltambah);
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
		console.log(number)
	}

})

function purbajs(e, callback) {
	if (e != null) {
		callback()
	} else {
		return null;
	}
	
}