

var myImage = document.getElementById('myPhoto');


imageArray = new Array();
	imageArray[0] = 'imga.png';
	imageArray[1] = 'imgb.png';
	imageArray[2] = 'imgc.png';
	imageArray[3] = 'imgd.png';
	imageArray[4] = 'imge.png';
	imageArray[5] = 'imgf.png';
	imageArray[6] = 'imgg.png';
	imageArray[7] = 'imgh.png';
	

var imgindex = 0;

function changeImage(){

		myPhoto.setAttribute("src",imageArray[imgindex]);
		imgindex++;

	if (imgindex==imageArray.length) {

		imgindex = 0;

	};


}

var intervalHandle = setInterval(changeImage,2000);

myPhoto.onclick = function(){

	clearInterval(intervalHandle);

} 
