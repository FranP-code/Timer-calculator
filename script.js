let userAgentData = navigator.userAgent

console.log(userAgentData)

if(userAgentData.indexOf("Firefox") > -1) {
    document.getElementById('button').className = "fix-button-for-firefox";
}