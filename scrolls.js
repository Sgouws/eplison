var ypos, image;

function parallax() {
	ypos = window.pageYOffset;
	image = document.getElementById('main-image');
	image.style.top = ypos * .4 + 'px';
}

window.addEventListener('scroll', parallax);
