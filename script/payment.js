document.addEventListener('DOMContentLoaded', () => {
    const product = JSON.parse(localStorage.getItem('selectedProduct'));
    const kuantitasInput = document.getElementById("night");
    const totalHargaElement = document.querySelector('#total-Harga');

    if (product) {
        document.querySelector('h2').textContent = product.name;

        const updateTotal = () => {
            const kuantitas = parseInt(kuantitasInput.value) || 0; 
            const totalHarga = product.price * kuantitas;
            totalHargaElement.textContent = `Rp. ${totalHarga.toLocaleString()}`; 
            const simpanTotal = {
                hargaFix: totalHarga
            };

            localStorage.setItem('simpanHarga', JSON.stringify(simpanTotal));
        };

        updateTotal();

        kuantitasInput.addEventListener('input', updateTotal);
    }
});

const simpanHarga = JSON.parse(localStorage.getItem('simpanHarga'))
const FixHarga = simpanHarga.hargaFix;

const inputUang = document.getElementById('uang');
const bayarButton = document.getElementById('bayar-fix');
const keteranganElement = document.getElementById('keterangan');
const Total = document.getElementById("total");

Total.innerText = `Rp. ${FixHarga}`;

bayarButton.addEventListener('click', () => {
    const uang = parseInt(inputUang.value) || 0; 

    if (uang >= FixHarga) {
        keteranganElement.textContent = 'Transaksi Sukses';
        keteranganElement.style.color = 'green';
    } else {
        keteranganElement.textContent = 'Transaksi Gagal';
        keteranganElement.style.color = 'red';
    }
});

ScrollReveal().reveal(".payment .left", {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
    reset: true,
})

