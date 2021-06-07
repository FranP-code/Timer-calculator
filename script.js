let userAgentData = navigator.userAgent
let button = document.getElementById("button")
let buttonInfo = document.getElementById("button-info")

console.log(userAgentData)

if(userAgentData.indexOf("Firefox") > -1) {
    button.className = "fix-button-for-firefox";
}

//* Credits: https://www.geeksforgeeks.org/how-to-detect-the-user-browser-safari-chrome-ie-firefox-and-opera-using-javascript/ && https://developer.mozilla.org/en-US/docs/Web/API/NavigatorID/userAgent

button.addEventListener("mouseenter", () => buttonInfo.style.opacity = "100%")
button.addEventListener("mouseleave", () => buttonInfo.style.opacity = "0%")

//* Credits: https://stackoverflow.com/questions/52274130/css-transition-on-javascript-changing-style

//----------------------------------------------------------------------------------------------------------------------------

let form = document.querySelector(".input-container")
let codeBlockTemplate = document.querySelector('.input-child')
let codeBlock = codeBlockTemplate.cloneNode(true)
let c = 1;

console.log(codeBlock)

function addInput() {

    for (let i = 0; i <= 5; i++) {
        if (i == 1 || i == 3 || i == 5) {
            codeBlock.childNodes[i].childNodes[3].setAttribute('name', 'input_s' + c + '_n' + i)
                console.log(codeBlock.childNodes[i].childNodes[3])
            }
        }

    codeBlock.className = "input-child input-child-border"
        console.log(codeBlock)

    form.appendChild(codeBlock)
    codeBlockTemplate = codeBlock.cloneNode(true)
    codeBlock = codeBlockTemplate.cloneNode(true)
    c++
}
