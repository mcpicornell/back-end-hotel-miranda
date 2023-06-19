const menu = document.getElementsByClassName("header__inner-li")[0];
const burger = document.getElementsByClassName("inner__burger")[0];


burger.addEventListener("click", (event) => {
    if (menu.style.visibility == "visible") {
        menu.style.visibility = "hidden";

    }
    else {
        menu.style.visibility = "visible";

    }
});

const roomTag = document.getElementsByClassName("section-selection-rooms__rooms");

for(i=0; i<roomTag.length; i++){
    roomTag[i].addEventListener("click", (event) => {
        const newUrl = "roomDetails";
        window.location.href = newUrl;
    })
}

const headerTag = document.getElementsByClassName("header__inner")[0];

headerTag.addEventListener("click", (event) => {
    const newUrl = "controllers/index";
    window.location.href = newUrl;
})


// const aboutUs = document.getElementById("about")[0];

// aboutUs.addEventListener("click", (event) => {
//     const newUrl = "about.html";
//     window.location.href = newUrl;
// })

// const rooms = document.getElementById("rooms")[0];

// rooms.addEventListener("click", (event) => {
//     const newUrl = "rooms.html";
//     window.location.href = newUrl;
// })

// const offers = document.getElementById("offers")[0];

// rooms.addEventListener("click", (event) => {
//     const newUrl = "offers.html";
//     window.location.href = newUrl;
// })

// const contact = document.getElementById("contact")[0];

// rooms.addEventListener("click", (event) => {
//     const newUrl = "contact.html";
//     window.location.href = newUrl;
// })