let ajaxinput = document.querySelector("#ajaxinput")
let tempatajax = document.querySelector("#isi-halaman");
let url = document.getElementById("url").value
let querysql = ""

function query() {
	let xhr = new XMLHttpRequest();

	xhr.onloadstart = function () {
		document.getElementById("loading").style.display = "block";
	}

	xhr.onerror = function () {
		alert("Gagal mengambil data");
	};

	xhr.onloadend = function () {
		if (this.responseText !== "") {
			let data = JSON.parse(this.responseText);
			let render = "";
			let nomor = 1
			if(data.length==0){
				render = `tidak ditemukan hasil untuk "${querysql}"`
			}else{
				data.forEach((item) => {
				let solusi = "";
				if (item['solusi'].length == 0) {
					solusi = "tidak ada solusi"
				} else {
					item['solusi'].forEach((value)=>{
						if(value['jenis']==1){
							solusi+=`<tr><td colspan="2">${value['aksi']}</td></tr>`
						}
						if(value['jenis']==2){
							solusi+=`<tr><td colspan="2"><b>- </b> ${value['aksi']}</td></tr>`
						}
						if(value['jenis']==3){
							solusi+=`<tr><td colspan="2"><b><i>note : </i></b> ${value['aksi']}</td></tr>`
						}
					})
					
				}
				render += `<div class="content-hasil">
				<div class="index">${nomor}</div>
				<div>
					<table class="tabel-hasil" cellpadding="3" cellspacing="0">
						<tr>
							<td width="140">Kode Kerusakan</td>
							<td>:</td>
							<td class="alert"><b> ${item['kode']}</b></td>
						</tr>
						<tr>
							<td>Nama Kerusakan</td>
							<td>:</td>
							<td width="350" class="alert"><b>${item['namakerusakan']['namaKerusakan']}</b></td>
								</tr>
						<tr>
							<td class="tabel-pengantar"><i>Solusi</i></td>
							<td class="tabel-pengantar">:</td>
							<td class="solusi-tabel">
								<table class="tabel-solusi">
										${solusi}										
								</table>
										
							</td>
						</tr>
					</table>
				</div>
				</div>`
				nomor++
			})
			}

			

			tempatajax.innerHTML = render;

			setTimeout(function () {
				document.getElementById("loading").style.display = "none";
			}, 3000);
		}
	};

	xhr.open("GET", url + "/" + querysql, true);
	xhr.send();
}

ajaxinput.addEventListener('input', () => {
	querysql = ajaxinput.value; 
	query()
})