var colorElementId = "img1";
var appliedElementId = "img2";

var colorMask = document.getElementById(colorElementId);
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
var originalPixels = null;
var currentPixels = null;

// Change hex value to RGB values
function HexToRGB(Hex) {
  var Long = parseInt(Hex.replace(/^#/, ""), 16);
  return {
    R: (Long >>> 16) & 0xff,
    G: (Long >>> 8) & 0xff,
    B: Long & 0xff
  };
}

// Color changing function
function changeColor(hex) {
  // Check if image has loaded
  if(!originalPixels) return;

  var newColor = HexToRGB(hex);

  for(var I = 0, L = originalPixels.data.length; I < L; I += 4) {
    if(currentPixels.data[I + 3] > 0) {
      currentPixels.data[I] = originalPixels.data[I] / 255 * newColor.R;
      currentPixels.data[I + 1] = originalPixels.data[I + 1] / 255 * newColor.G;
      currentPixels.data[I + 2] = originalPixels.data[I + 2] / 255 * newColor.B;
    }
  }

  // copy pixel data and apply to canvas
  ctx.putImageData(currentPixels, 0, 0);

  // img element src to base64 encoded
  colorMask.src = canvas.toDataURL("image/png");

  // delay before applying blending function
  setTimeout(function(){
    pixasticEffects();
  },500);
}


// Get pixel data for image before color change, image loaded should be white to achieve ideal effect.
function getPixels(img) {
  canvas.width = img.width;
  canvas.height = img.height;

  // draw to hidden canvas to get pixel data information for manipulation
  ctx.drawImage(img, 0, 0, img.naturalWidth, img.naturalHeight, 0, 0, img.width, img.height);
  originalPixels = ctx.getImageData(0, 0, img.width, img.height);
  currentPixels = ctx.getImageData(0, 0, img.width, img.height);

  img.onload = null;
}


// PIXASTIC FUNCTION: http://www.pixastic.com/lib/docs/actions/blend/
function pixasticEffects() {
  // undo any current image effects
  Pixastic.revert(document.getElementById(appliedElementId));

  // elements used as layers
  var overImg = document.getElementById(colorElementId);
  var underImg = document.getElementById(appliedElementId);

  // effect method
  Pixastic.process(underImg, "blend", {
    amount : 1,
    mode : 'overlay',   // blend method
    image : overImg     // color image
  });
}

jQuery(window).load(function() {
  // on image load get pixel data
  getPixels(colorMask);

  // hide image after pixel data is stored (webkit fix)
  colorMask.style.display="none";

  // init from hex code
  $('#applyColor').on('click', function(){
    // change mask w/ new hex color
    changeColor($('#color').val());
  });

  // color picker
  $('#hue-change').minicolors({
    inline: 'true',
    position: 'bottom left',
    changeDelay: '200',
    theme: 'default',
    change: function(hex) {
      // update text input w/ new hex
      $('#color').val(hex);

      // trigger click to initialize
      $('#applyColor').trigger('click');
    }
  });
});