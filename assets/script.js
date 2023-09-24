const navbar = document.getElementById('navbar')
const menuBtn = document.getElementById('menu-btn')
const sideMenu = document.getElementById('side-menu')
const closeSideMenu = document.getElementById('close-side-menu')
const aboutPage = document.getElementById('about')
let clicked = true

window.onscroll = () => {
  if (Math.ceil(window.scrollY) > 0) {
    navbar.classList.add('primary-navbar-color')
  } else {
    navbar.classList.remove('primary-navbar-color')
  }
}

menuBtn.onclick = () => {
  sideMenu.style.transform = 'none'
  sideMenu.style.width = '100%'
  sideMenu.classList.remove('visually-hidden')
  document.body.classList.add('lock-scroll')
  clicked = false
}

closeSideMenu.onclick = () => {
  sideMenu.style.transform = 'translateX(-100%)'
  document.body.classList.remove('lock-scroll')
  clicked = true
}

function scrollDown() {
  aboutPage.scrollIntoView()
}


const facilityContainer = document.getElementById('facility-container')
const facilityImgContents = document.getElementsByClassName('facility-img-content')
const facilityImgs = document.getElementsByClassName('facility-img')
let width = screen.width
let facilityImgWidth = 0
let tempFacilityImgWidth = 0
let facilityImgsWidth = 0
let tempFacilityImgsWidth = 0
let tempWidth = 0
const duplicateInnerHtml = facilityContainer.innerHTML

for (var i = 0; i < facilityImgs.length; i++) {
  facilityImgWidth = facilityImgs[i].width
  facilityImgsWidth += facilityImgs[i].width
}

for (var i = 0; i < 3; i++) {
  tempFacilityImgWidth = facilityImgs[i].width
  tempFacilityImgsWidth += facilityImgs[i].width
}
let widthCalc = -((tempFacilityImgsWidth - width) / 2)
facilityContainer.style.marginLeft = widthCalc.toString() + 'px'
tempWidth = widthCalc

// 1460
setInterval(function setWidth() {
  if (tempWidth == -1460) {
    facilityContainer.innerHTML += duplicateInnerHtml
  }

  if (tempWidth == -3260) {
    // tempWidth = widthCalc
    for (let i = 0; i < 6; i++) {
      // TODO: gimana caranya remove gambar sebelumnya tanpa mempengaruhi collection baru
      // facilityImgs[i].remove()
    }
  }
  // 3260 
  // console.log(tempWidth, 'tempWidth');
  tempWidth += -(tempFacilityImgWidth)
  facilityContainer.style.marginLeft = tempWidth.toString() + 'px'
  facilityContainer.style.transition = 'margin-left 3s ease'
  facilityContainer.style.WebkitTransition = 'margin-left 3s ease'
  facilityContainer.style.MozTransition = 'margin-left 3s ease'
}, 7000)

