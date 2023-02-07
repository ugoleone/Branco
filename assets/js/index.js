function openMenu() {
    var menu = document.getElementById("mobileMenu");
    var openMenuB = document.getElementById("openMenuB");
    var closeMenuB = document.getElementById("closeMenuB");
    menu.style.display = "flex"
    menu.style.opacity = "1"
    openMenuB.style.display = "none"
    closeMenuB.style.display = "block"
}

function closeMenu() {
    var menu = document.getElementById("mobileMenu");
    var openMenuB = document.getElementById("openMenuB");
    var closeMenuB = document.getElementById("closeMenuB");
    if (menu.style.display == 'flex') {
        menu.style.opacity = "0"
        setTimeout(() => {
            menu.style.display = "none";
            openMenuB.style.display = ""
            closeMenuB.style.display = "none"
        }, 1000)
    }
}

currentSlide = 0

function openLightBox(imNumber) {
    currentSlide = imNumber
    var grid = document.getElementById('galleryContainer')
    var lightBox = document.getElementById('lightBox')
    var footer = document.getElementById('footer')
    var images = document.getElementsByClassName('galleryItem')
    var imgSource = images[imNumber].children.item(0).getAttribute('src')
    var imgTitle = images[imNumber].children.item(1).textContent
    var lightBoxImage = document.getElementById('lightBoxImage')
    var lightBoxTitle = document.getElementById('lightBoxTitle')
    lightBoxImage.setAttribute('src', imgSource)
    lightBoxTitle.innerText = imgTitle + ","
    grid.style.display = "none"
    footer.style.display = "none"
    lightBox.style.display = "flex"
}

function closeLightBox(image) {
    var grid = document.getElementById('galleryContainer')
    var footer = document.getElementById('footer')
    var lightBox = document.getElementById('lightBox')
    grid.style.display = "flex"
    footer.style.display = "flex"
    lightBox.style.display = "none"
}

function slideNext() {
    var images = document.getElementsByClassName('galleryItem')
    if (currentSlide + 1 < images.length)
        openLightBox(currentSlide + 1)
    else
        openLightBox(0)
}

function slidePrevious() {
    var images = document.getElementsByClassName('galleryItem')
    if (currentSlide - 1 >= 0)
        openLightBox(currentSlide - 1)
    else
        openLightBox(images.length - 1)
}

function galleryRandomizer() {
    var images = document.getElementsByClassName('galleryItem')
    for (var i = 0; i < images.length; i++) {
        images[i].style.marginLeft = (Math.floor(Math.random() * 10) + 5) + "%"
        images[i].style.marginTop = Math.floor(Math.random() * 20) + "px"
    }
}

window.onload = galleryRandomizer()

Promise.all(Array.from(document.images).filter(img => !img.complete).map(img => new Promise(resolve => {
    img.onload = img.onerror = resolve;
}))).then(() => {
    document.getElementById('loadingS').style.display = "none"
    scrollingColumnsSetup()
});

function scrollingColumnsSetup() {
    scrollColumsEqualizer()
    maxCentralscroll = secondGalleryCont.scrollHeight
    secondGalleryCont.scroll(0, maxCentralscroll)
    maxCentralscroll = secondGalleryCont.scrollTop
}

addEventListener("resize", scrollingColumnsSetup);


firstGalleryCont = document.getElementById("firstGallerycol")
secondGalleryCont = document.getElementById("centralGallerycol")
thirdGalleryCont = document.getElementById("thirdGallerycol")
firstGalleryCont.addEventListener("scroll", scrollFunction);
thirdGalleryCont.addEventListener("scroll", scrollFunction);
secondGalleryCont.addEventListener("scroll", centralScrollFunction);

function getMaxScrollHeight(h1, h2, h3) {
    if (h1 >= h2 && h1 >= h3)
        return h1
    else if (h2 >= h1 && h2 >= h3)
        return h2
    else
        return h3
}

function scrollColumsEqualizer() {
    var firstScrollHeight = firstGalleryCont.scrollHeight
    var secondScrollHeight = secondGalleryCont.scrollHeight
    var thirdScrollHeight = thirdGalleryCont.scrollHeight

    var maxScrollHeight = getMaxScrollHeight(firstScrollHeight, secondScrollHeight, thirdScrollHeight)

    console.log("firstScrollHeight" + firstScrollHeight)
    console.log("secondScrollHeight" + secondScrollHeight)
    console.log("thirdScrollHeight" + thirdScrollHeight)
    console.log("maxScrollHeight" + maxScrollHeight)


    if (firstScrollHeight <= maxScrollHeight)
        document.getElementById('firstGallerySpacer').style.height = (maxScrollHeight - firstScrollHeight)  + "px"

    if (secondScrollHeight <= maxScrollHeight)
        document.getElementById('secondGallerySpacer').style.height = (maxScrollHeight - secondScrollHeight) + "px"

    if (thirdScrollHeight <= maxScrollHeight)
        document.getElementById('thirdGallerySpacer').style.height = (maxScrollHeight - thirdScrollHeight) + "px"
}

function scrollFunction(evt) {
    var scrollAmount = evt.currentTarget.scrollTop
    firstGalleryCont.scroll(0, scrollAmount)
    thirdGalleryCont.scroll(0, scrollAmount)
    secondGalleryCont.scroll(0, maxCentralscroll - scrollAmount)
}

function centralScrollFunction(evt) {
    var scrollAmount = maxCentralscroll - evt.currentTarget.scrollTop
    firstGalleryCont.scroll(0, scrollAmount)
    thirdGalleryCont.scroll(0, scrollAmount)
}