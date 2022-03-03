const arrow = document.querySelector("#arrow");
const logout = document.querySelector("#menu-logout");
const hider = document.querySelector("#hider");
const menu = document.querySelectorAll(".menu-primer");
const indikator = document.querySelector(".indikator");
const contentAlert = document.querySelector("#content-alert");
const childContent = document.querySelector("#child-content");
const close = document.querySelector("#close");
const btnShow = document.querySelector("#btn-show");
hider.onclick = ()=>{
	logout.classList.remove("show");
	hider.classList.remove("tampil");
}
arrow.onclick = ()=>{
	logout.classList.toggle("show");
	hider.classList.toggle("tampil");
	console.log(menu);
	console.log("hai")
}
btnShow.onclick = ()=>{
	contentAlert.classList.add("tampil");
	console.log("tes");
	childContent.classList.add("showw");
	console.log(childContent);
}
close.onclick = ()=>{
	contentAlert.classList.remove("tampil");
	childContent.classList.remove("showw");
}
contentAlert.onclick = ()=>{
	contentAlert.classList.remove("tampil");
	childContent.classList.remove("showw");
}
