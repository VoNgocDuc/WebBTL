document.addEventListener('DOMContentLoaded',()=>{
    
        document.querySelector('.home').style.display = 'block';
        document.querySelector('.chothue').style.display = 'none';
        document.querySelector('.baiviet').style.display = 'none';
        document.querySelector('.lienhe').style.display = 'none';
        document.querySelector('.thongtin').style.display = 'none';

    document.querySelector('#pageMain').onclick = ()=>{
        document.querySelector('.home').style.display = 'block';
        document.querySelector('.chothue').style.display = 'none';
        document.querySelector('.baiviet').style.display = 'none';
        document.querySelector('.lienhe').style.display = 'none';
        document.querySelector('.thongtin').style.display = 'none';
    }
    
    document.querySelector('#pageThongTin').onclick = ()=>{
        document.querySelector('.home').style.display = 'none';
        document.querySelector('.chothue').style.display = 'none';
        document.querySelector('.baiviet').style.display = 'none';
        document.querySelector('.lienhe').style.display = 'none';
        document.querySelector('.thongtin').style.display = 'block';
    }
    document.querySelector('#pageChoThe').onclick = ()=>{
        document.querySelector('.home').style.display = 'none';
        document.querySelector('.chothue').style.display = 'block';
        document.querySelector('.baiviet').style.display = 'none';
        document.querySelector('.lienhe').style.display = 'none';
        document.querySelector('.thongtin').style.display = 'none';
    }

    document.querySelector('#pageBaiViet').onclick = ()=>{
        document.querySelector('.home').style.display = 'none';
        document.querySelector('.chothue').style.display = 'none';
        document.querySelector('.baiviet').style.display = 'block';
        document.querySelector('.lienhe').style.display = 'none';
        document.querySelector('.thongtin').style.display = 'none';
    }

    document.querySelector('#pageLienHe').onclick = ()=>{
        document.querySelector('.home').style.display = 'none';
        document.querySelector('.chothue').style.display = 'none';
        document.querySelector('.baiviet').style.display = 'none';
        document.querySelector('.lienhe').style.display = 'block';
        document.querySelector('.thongtin').style.display = 'none';
    }

})