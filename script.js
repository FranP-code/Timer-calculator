let userAgentData = navigator.userAgent
let button = document.getElementById('button')
let buttonInfo = document.getElementById('button-info')

console.log(userAgentData)

if(userAgentData.indexOf("Firefox") > -1) {
    button.className = "fix-button-for-firefox";
}

//* Credits: https://www.geeksforgeeks.org/how-to-detect-the-user-browser-safari-chrome-ie-firefox-and-opera-using-javascript/ && https://developer.mozilla.org/en-US/docs/Web/API/NavigatorID/userAgent

button.addEventListener('mouseenter', () => buttonInfo.style.opacity = '100%')
button.addEventListener('mouseleave', () => buttonInfo.style.opacity = '0%')

//* Credits: https://stackoverflow.com/questions/52274130/css-transition-on-javascript-changing-style