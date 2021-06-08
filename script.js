let userAgentData = navigator.userAgent
let button = document.getElementById("button")
let buttonInfo = document.getElementById("button-info")
let body = document.getElementById("body")

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

    body.style.overflow = "visible";

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

//------------------------------------------------------------------------------------------------------------------------------

let errorScreen = document.querySelector('.error_resolution');

let width = window.innerWidth;
let height = window.innerHeight;
//* Credits: https://www.codegrepper.com/code-examples/javascript/addeventlistener+resize+get+screen+width+javasscripot

const min_width = 1297;
const min_height = 680;

if (width < min_width || height < min_height) {
    console.log('MENOR A 720');
    errorScreen.style.visibility = 'visible';
}

addEventListener('resize', function() {
    width = window.innerWidth;
    height = window.innerHeight;

    let a = width >= min_width;
    let b = width < min_width;
    let c = height >= min_height;
    let d = height < min_height;

    let index = 0;

    if (b) {
        console.log('MENOR A 720');
        errorScreen.style.visibility = 'visible';
        index = 1;
    }

    if (d) {
        console.log('MENOR A 720');
        errorScreen.style.visibility = 'visible';
        index = 1;
    }

    if (a && index == 0) {
        console.log('MAYOR A 720');
        errorScreen.style.visibility = 'hidden';
    }
    
    if (c && index == 0) {
        console.log('MAYOR A 720');
        errorScreen.style.visibility = 'hidden';
    }

    /*
    index = 0;
    
    //! VIEW SCHEME IN additional_files FOLDER

    if (a && index == 0) {
        if (c) {
            console.log('MAYOR A 720');
            errorScreen.style.visibility = 'hidden';
            index++;
        }

        if (d) {
            console.log('MENOR A 720');
            errorScreen.style.visibility = 'visible';
            index++;
        }

    }

    if (b && index == 0) {
        if (c) {
            console.log('MAYOR A 720');
            errorScreen.style.visibility = 'hidden';
            index++;
        }

        if (d) {
            console.log('MAYOR A 720');
            errorScreen.style.visibility = 'hidden';
            index++;
        }
    }

    if (c && index == 0) {
        if (a) {
            console.log('MAYOR A 720');
            errorScreen.style.visibility = 'visible';
            index++;
        }

        if (b) {
            console.log('MAYOR A 720');
            errorScreen.style.visibility = 'hidden';
            index++;
        }
    }

    if (d && index == 0) {
        if (a) {
            console.log('MAYOR A 720');
            errorScreen.style.visibility = 'hidden';
            index++;
        }

        if (b) {
            console.log('MAYOR A 720');
            errorScreen.style.visibility = 'visible';
            index++;
        }
    }

    /*

    if (height < 720 || width < 1280) {
        console.log('MENOR A 720');
        errorScreen.style.visibility = 'visible'
    }

    
    if (height >= 720 || width >= 1280) {
        console.log('MAYOR A 720');
        errorScreen.style.visibility = 'hidden'

    }*/
})


