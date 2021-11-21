/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }
  
  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }

  var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

myVideo.addEventListener('click', function() {
    myVideo.style.display ="none";
});

// function makeBig() { 
//     myVideo.width = 560; 
// } 

// function makeSmall() { 
//     myVideo.width = 320; 
// } 

// function makeNormal() { 
//     myVideo.width = 420; 
// } 

  