const root = document.querySelector("#root-solusi");
const tombolsolusi = document.querySelector("#tombol-solusi")
const containersolusi = document.querySelector(".container-solusi");
const tomboltambah = document.querySelector('.tambah');
const tombolkurang = document.querySelector('.remove');


tombolsolusi.addEventListener('click', () => {
	containersolusi.classList.replace('hider', 'shower');
	console.log(containersolusi);
	console.log(tomboltambah);
})
let number = 2;
tomboltambah.addEventListener('click', () => {
	let newinput = document.createElement('div');
	let span = document.createElement('span');
	let input = document.createElement('textarea');
	span.innerHTML = number;
	newinput.appendChild(span);
	newinput.appendChild(input);
	root.appendChild(newinput);
	console.log(number)
	number++
})

tombolkurang.addEventListener('click',()=>{
	console.log('hy my name is depanri purba');
})

function purbajs(e, callback) {
	if (e != null) {
		callback()
	} else {
		return null;
	}
	
}