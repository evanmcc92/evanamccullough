var mac = navigator.userAgent.match(/(Mac)/i) ? true : false;

if (mac) {
document.getElementById('nav').className += 'mac';
}