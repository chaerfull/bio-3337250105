const btnToggle = document.querySelector("#btnToggle");
const body = document.body;

btnToggle.addEventListener("click", ()=>{
    body.classList.toggle("dark");

    if (body.classList.contains("dark")){
        btnToggle.textContent = "Light Mode☀️";
    }else{
        btnToggle.textContent = "Dark Mode🌙";
    }
})

// ===== FETCH API: FAKTA KUCING =====

const isiFakta   = document.querySelector("#isi-fakta");
const btnRefresh = document.querySelector("#btnRefresh");
const daftarFakta = document.querySelector("#daftar-fakta");
const koleksiFakta = [];

async function ambilFakta() {
  // Tampilkan loading indicator
  isiFakta.textContent = "⏳ Memuat fakta...";

  try {
    const response = await fetch("https://catfact.ninja/fact");

    // Cek apakah HTTP response OK (status 200-299)
    if (!response.ok) {
      throw new Error("HTTP Error: " + response.status);
    }

    const data = await response.json();

    // Tampilkan fakta ke DOM
    isiFakta.textContent = data.fact;
    koleksiFakta.push(data.fact);

daftarFakta.innerHTML = koleksiFakta
    .map(fakta => `<li>${fakta}</li>`)
    .join("");

  } catch (error) {
    // Tampilkan pesan error yang ramah
    isiFakta.textContent = "⚠️ Gagal memuat fakta. Cek koneksi internet Anda.";
    console.error("Error:", error.message);
  }
}

// Jalankan saat halaman pertama kali dimuat
ambilFakta();

// Jalankan ulang saat tombol diklik
btnRefresh.addEventListener("click", ambilFakta);
