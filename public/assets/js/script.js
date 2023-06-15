const sendingWhatsapp = (num) => {
	const url = `https://wa.me/${num}?text=`;
	const textWa = "Hello,D & N Tour saya ingin memesan paket perjalanan dari D & N Tour, bisa infokan saya harga terbaik dari D & N Tour.";
	
	window.open(`${url}${encodeURIComponent(textWa)}`);
}