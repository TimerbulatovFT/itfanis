
document.getElementById('content').innerHTML='<style>body{font-family:Helvetica,Arial,sans-serif;font-size:12px;}h1{font-size:1.5em;}h2{font-size:1.2em;}</style><a href="#" id="size-12">12</a><br><a href="#" id="size-14">14</a><br><a href="#" id="size-16">16</a>';

function makeSizer(size) {
  return function() {
    document.body.style.fontSize = size + 'px';
  };
};

var size12 = makeSizer(12);
var size14 = makeSizer(14);
var size16 = makeSizer(16);

document.getElementById('size-12').onclick = size12;
document.getElementById('size-14').onclick = size14;
document.getElementById('size-16').onclick = size16;