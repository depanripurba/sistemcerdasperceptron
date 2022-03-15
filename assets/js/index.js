const arrow = document.querySelector("#arrow");
const logout = document.querySelector("#menu-logout");
const hider = document.querySelector("#hider");
const menu = document.querySelectorAll(".menu-primer");
const indikator = document.querySelector(".indikator");
const contentAlert = document.querySelector("#content-alert");
const childContent = document.querySelector("#child-content");
const close = document.querySelector("#close");
const closebutton = document.querySelector("#closebutton");
let btnShow = document.querySelector("#btn-show");
const formedit = document.querySelector("#form-edit");
const checkbox = document.querySelector("#checkbox");
hider.onclick = () => {
	logout.classList.remove("show");
	hider.classList.remove("tampil");
}
arrow.onclick = () => {
	logout.classList.toggle("show");
	hider.classList.toggle("tampil");
	console.log(menu);
	console.log("hai")
}


purbajs(btnShow, () => {
	btnShow.addEventListener('click', () => {
		contentAlert.classList.add("tampil");
		childContent.classList.add("showw");
	})
})

purbajs(close, () => {
	close.addEventListener('click', () => {
		contentAlert.classList.remove("tampil");
		childContent.classList.remove("showw");
	})
})

purbajs(contentAlert, () => {
	contentAlert.addEventListener('click', () => {
		contentAlert.classList.remove("tampil");
		childContent.classList.remove("showw");
		formedit.classList.remove("showw");
	})
})

purbajs(closebutton, () => {
	closebutton.addEventListener('click', () => {
		contentAlert.classList.remove("tampil");
		formedit.classList.remove("showw");
	})
})


purbajs(checkbox, () => {
	checkbox.addEventListener("change", (e) => {
		console.log(e.target.value)
		location.href = e.target.value
	})
})



function purbajs(e, callback) {
	if (e != null) {
		callback()
	} else {
		return null;
	}
	
}