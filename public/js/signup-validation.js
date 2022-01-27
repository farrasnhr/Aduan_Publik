const showKewarganegaraan = () => {
    const sel = document.getElementById("kewarganegaraan")
    let wni = document.querySelector('.input-nik')
    let wna = document.querySelector('.input-nvisa')
    let value = sel.options[sel.selectedIndex].value

    if (value == "wna") {
        wna.classList.remove("d-none")
        wni.classList.add("d-none")
    } else {
        wna.classList.add("d-none")
        wni.classList.remove("d-none")
    }
}

document.addEventListener('DOMContentLoaded', function () {
    window.addEventListener("load", () => {
        document.getElementById("kewarganegaraan").addEventListener("change", showKewarganegaraan)
        showKewarganegaraan()
    })
})