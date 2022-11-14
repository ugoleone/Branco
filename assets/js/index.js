
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
    if (currentSlide+1 < images.length)
        openLightBox(currentSlide+1)
    else
        openLightBox(0)
}

function slidePrevious() {
    var images = document.getElementsByClassName('galleryItem')
    if (currentSlide-1 >= 0)
        openLightBox(currentSlide-1)
    else
        openLightBox(images.length-1)
}

function galleryRandomizer() {
    var images = document.getElementsByClassName('galleryItem')
    for (var i=0; i<images.length; i++) {
        images[i].style.marginLeft = (Math.floor(Math.random() * 10)+5) + "%"
        images[i].style.marginTop= Math.floor(Math.random() * 20) + "px"
    }
}

window.onload = galleryRandomizer()

Promise.all(Array.from(document.images).filter(img => !img.complete).map(img => new Promise(resolve => { img.onload = img.onerror = resolve; }))).then(() => {
    document.getElementById('loadingS').style.display = "none"
});


var gallCont = document.getElementById("galleryContainer")
var centralGallerycol = document.getElementById("centralGallerycol")
gallCont.addEventListener("scroll", myFunction);
var oldTransformValue = centralGallerycol.style.transform.split(" ")[1]+""
oldTransformValue = parseInt(oldTransformValue.replace('%)',''))
//var minHeight = gallCont.scrollHeight - gallCont.offsetHeight;
var gallContHeight = gallCont.offsetHeight
var gallScrollHeight = gallCont.scrollHeight/2
function myFunction() {
  //console.log("scroolled " + gallCont.scrollTop +"  Offset -> " + gallCont.offsetHeight +"  HEIGHT -> " + gallCont.scrollHeight)
  if (gallCont.scrollTop <= gallCont.offsetHeight) {
    var scrollPercent = (gallCont.scrollTop*2/gallContHeight)*100
    var quantoTraslo = oldTransformValue + scrollPercent
    console.log("percent --> "+scrollPercent + "old value ---> "+oldTransformValue)
    
    centralGallerycol.style.transform = "translate(0%, "+quantoTraslo+"%)"
  }
  else {
    //centralGallerycol.style.height = gallScrollHeight + "px"
  }
}