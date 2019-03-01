
var mainPic = document.getElementById('mainPic');

function imgUpdate() {
  mainPic.innerHTML = this.innerHTML;//"<img src=" + this.innerHTML + " alt='Unable to display image'>";
}

var thumbnailArray = document.querySelectorAll(".img");
var maxRight = -162 * (thumbnailArray.length - 3);
var pos = 0;

thumbnailArray.forEach((element) => {
  element.addEventListener('click', imgUpdate);
});

document.querySelector('.right').addEventListener('click', function() {
  var slider = document.querySelector("#slider"); 

  if (pos <= maxRight) {
    return;
  } else {
    pos -= 486; 
    slider.style.left = pos + 'px'; 
  }
  
});

document.querySelector('.left').addEventListener('click', function() {
  var slider = document.querySelector("#slider");   
  
  if (pos >= 0) {
    return;
  } else {
    pos += 486; 
    slider.style.left = pos + 'px'; 
  }
  
});
