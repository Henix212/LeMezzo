window.addEventListener("DOMContentLoaded", function() {
    const splash = document.getElementById("splash");
    const img = document.getElementById("temp-fullscreen-img");
    const main = document.getElementById("main-content");

    img.addEventListener("load", function() {
        setTimeout(() => {
            img.classList.add("splash-hide");
            setTimeout(() => {
                splash.style.display = "none";
                main.style.display = "";
            }, 1000);
        }, 1000); 
    });

    if (img.complete) {
        img.dispatchEvent(new Event("load"));
    }
});
