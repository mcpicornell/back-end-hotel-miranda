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

// const roomTag = document.getElementsByClassName("section-selection-rooms__rooms");

// for(i=0; i<roomTag.length; i++){
//     roomTag[i].addEventListener("click", (event) => {
//         const newUrl = "roomDetails.php";
//         window.location.href = newUrl;
//     })
// }

const headerTag = document.getElementsByClassName("header__inner")[0];

headerTag.addEventListener("click", (event) => {
    const newUrl = "/controllers/";
    window.location.href = newUrl;
})