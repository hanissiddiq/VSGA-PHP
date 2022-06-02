function cekform()
{
    nama = document.getElementById('txtnama');
    olahraga = document.getElementById('olahraga');
    if(nama.value==''){
        alert('Maaf Nama tidak boleh kosong');
        nama.focus();
        return false;
    }
    else if(nama.value.length <= 3)
    {
        alert('Nama minimal berisi 3 karakter');
        nama.focus();
        return false;
    }
    else if(olahraga.value=="")
    {
        alert('olahraga belum dipilih');
        olahraga.focus();
        return false;
    }
    else
    {
        alert('Terimakasih anda telah mengisi form');
        return true;
    }
    
}