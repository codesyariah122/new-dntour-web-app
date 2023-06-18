/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param num
 * @param data
 * @return object dom
**/

const sendingWhatsapp = (num) => {
	const url = `https://wa.me/${num}?text=`;
	const textWa = "Hello,D & N Tour saya ingin memesan paket perjalanan dari D & N Tour, bisa infokan saya harga terbaik dari D & N Tour.";
	
	window.open(`${url}${encodeURIComponent(textWa)}`);
}

const sendOrderWhatsapp = (data) => {
	const url = `https://wa.me/6283165539138?text=`;
	const encodeText = encodeURIComponent(data);
	console.log(data);
	window.open(`${url}${encodeText}`)
}

const orderNow = (data) => {
	Swal.fire({
		title: `D & N ${data.category} - ${data.title}`,
		text: `Order ${data.category} - ${data.title} (Rp. ${data.price}) dari D & N Tour Travel`,
		imageUrl: data.img,
		imageWidth: 400,
		imageHeight: 600,
		background: 'rgba(23, 24, 28, 0.8)',
		color: '#fff',
		imageAlt: `${data.category} - ${data.title}`,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, lanjut!'
	}).then((result) => {
		if (result.isConfirmed) {
			const text = `Hello,D & N Tour saya ingin ${data.category === 'Sewa Mobil' ? data.category : 'memesan'} ${data.category !== 'Sewa Mobil' ? 'paket' : ''} dari D & N Tour, berikut rincian pesanan saya:<br>`
				+`Category : ${data.category}<br>`
				+`Mobil : ${data.title}<br>`
				+`Price : ${data.price}<br>`;

			sendOrderWhatsapp(text);
		}
	})
}

const sendMobileOrder = (data) => {
	const url = `https://wa.me/6283165539138?text=`;
	const text = `Hello,D & N Tour saya ingin ${data.category === 'Sewa Mobil' ? data.category : 'memesan'} ${data.category !== 'Sewa Mobil' ? 'paket' : ''} dari D & N Tour, berikut rincian pesanan saya:<br>`
				+`Category : ${data.category}<br>`
				+`Mobil : ${data.title}<br>`
				+`Price : ${data.price}<br>`;
	const encodeText = encodeURIComponent(text);
	window.open(`${url}${encodeText}`)
}