const root = document.querySelector("#root-solusi");
const tombolsolusi = document.querySelector("#tombol-solusi")
const containersolusi = document.querySelector(".container-solusi");
const tomboltambah = document.querySelector('.tambah');
const tombolkurang = document.querySelector('.remove');


tombolsolusi.addEventListener('click', () => {
	containersolusi.classList.replace('hider', 'shower');
	console.log(containersolusi);
	console.log(tomboltambah);
	tombolsolusi.remove();
})
let number = 2;
tomboltambah.addEventListener('click', (e) => {
	e.preventDefault();
	let newinput = document.createElement('div');
	let span = document.createElement('span');
	let input = document.createElement('textarea');
	input.name = '2[]';
	input.cols = 50;
	input.rows = 4;
	span.innerHTML = number;
	newinput.appendChild(span);
	newinput.appendChild(input);
	root.appendChild(newinput);
	console.log(number)
	number++
})

tombolkurang.addEventListener('click',(e)=>{
	e.preventDefault();
	root.removeChild(root.lastChild);
	number--;
})

function purbajs(e, callback) {
	if (e != null) {
		callback()
	} else {
		return null;
	}
	
}