console.log('hy my name is depanri purba');
console.log('im from aekdakka barus tapteng');

const root = document.querySelector("#root-solusi");
const tombolsolusi = document.querySelector("#tombol-solusi")
console.log(root);
console.log(tombolsolusi);
let addbutton
tombolsolusi.addEventListener('click', () => {
	let component = `
	<textarea></textarea><button id='addbutton' class='add'>add</button>
	<br/>
	<textarea></textarea>
	`;
	root.innerHTML = component;
	console.log("you clicked the button solution");
	addbutton = document.querySelector('#addbutton')
	console.log(addbutton);

})



purbajs(addbutton,()=>{
	console.log('you clicked add button')
})

function purbajs(e, callback) {
	if (e != null) {
		callback()
	} else {
		return null;
	}
	
}