const sendMobileOrder = (data) => {
	const url = `https://wa.me/6283165539138?text=`;
	const text = `Hello, DN Tour saya ingin ${data.category === 'Sewa Mobil' ? data.category : 'memesan'} ${data.category !== 'Sewa Mobil' ? 'paket' : ''} dari DN Tour, berikut rincian pesanan saya:<br>`
				+`Category : ${data.category}<br>`
				+`Mobil : ${data.title}<br>`
				+`Price : ${data.price}<br>`;
	const encodeText = encodeURIComponent(text);
	window.open(`${url}${encodeText}`)
}