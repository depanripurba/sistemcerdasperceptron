function tes(){
    console.log('function ini dari header');
}
function cek(q){
    console.log(q[0]);
    const formedit = document.querySelector("#form-edit");
    const kodeKerusakan = document.querySelector("#kodekerusakan");
    const hideKodeKerusakan = document.querySelector("#hidekodekerusakan");
    const kontenalert = document.querySelector("#content-alert");
    const namaKerusakan = document.querySelector("#namekerusakan");
    formedit.classList.add("showw");
    kodeKerusakan.value = q[0];
    hideKodeKerusakan.value = q[0];
    namaKerusakan.value = q[1];
    kontenalert.classList.add("tampil");
}

const hapus = (e)=>{
    var cek = confirm("Yakin menghapus "+e['code']+"?");
    if(cek===true){
        location.href = e['url']
    }else{

    }

}

const delet = (e,param)=>{
    e.preventDefault();
    var cek = confirm("Yakin menghapus data untuk kode "+param['kode']+" dengan id "+param['id']+" ?");
    if(cek===true){
        document.location.href = param['url']+"+"+param['kode']      
    }else{

    }

}