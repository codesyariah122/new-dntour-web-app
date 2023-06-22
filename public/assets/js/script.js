/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param num
 * @param data
 * @return object dom
**/

const ads_center = document.querySelector('#google-center-div')
const ads_wrapper = document.querySelector('#mys-wrapper')
const ads_mys = document.querySelector('#mys-content')
const ads_mys_class = document.querySelector('.mys-wrapper')

if (ads_center) {
    ads_center.remove();
}

if(ads_wrapper) {
	ads_wrapper.remove();
}

if(ads_mys) {
	ads_mys.remove();
}

if(ads_mys_class) {
	ads_mys_class.remove();
}


const sendingWhatsapp = (num) => {
	const url = `https://wa.me/${num}?text=`;
	const textWa = "Hello, DN Tour saya ingin memesan paket perjalanan dari DN Tour, bisa infokan saya harga terbaik dari DN Tour.";
	
	window.open(`${url}${encodeURIComponent(textWa)}`);
}

const sendOrderWhatsapp = (data) => {
	const url = `https://wa.me/6283165539138?text=${data}`;
	// const encodeText = encodeURIComponent(data);
	window.open(url)
}

const orderNow = (data) => {
	Swal.fire({
		title: `DN Tour ${data.category} - ${data.title}`,
		text: `Order ${data.category} - ${data.title} (Rp. ${data.price}) dari DN Tour Travel`,
		imageUrl: data.img,
		imageWidth: 400,
		imageHeight: 300,
		background: 'rgba(23, 24, 28, 0.8)',
		color: '#fff',
		imageAlt: `${data.category} - ${data.title}`,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, lanjut!'
	}).then((result) => {
		if (result.isConfirmed) {
			const text = `Hello, D%20%26%20N%20Tour.%20Saya%20ingin%20${data.category === 'Sewa Mobil' ? data.category : 'memesan'}%20${data.category !== 'Sewa Mobil' ? 'paket' : ''}%20dari%20D%20%26%20N%20Tour,%20berikut%20rincian%20pesanan%20saya:%0A`
			+ `Category%20:%20${encodeURIComponent(data.category)}%0A`
			+ `Mobil%20:%20${encodeURIComponent(data.title)}%0A`
			+ `Price%20:%20${encodeURIComponent(data.price)}`;

			sendOrderWhatsapp(text);
		}
	})
}

const sendMobileOrder = (data) => {
	const url = `https://wa.me/6283165539138?text=`;
	Swal.fire({
		title: `DN Tour ${data.category} - ${data.title}`,
		text: `Order ${data.category} - ${data.title} (Rp. ${data.price}) dari DN Tour Travel`,
		imageUrl: data.img,
		imageWidth: 400,
		imageHeight: 300,
		background: 'rgba(23, 24, 28, 0.8)',
		color: '#fff',
		imageAlt: `${data.category} - ${data.title}`,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, lanjut!'
	}).then((result) => {
		if (result.isConfirmed) {
			const text = `Hello, D%20%26%20N%20Tour.%20Saya%20ingin%20${data.category === 'Sewa Mobil' ? data.category : 'memesan'}%20${data.category !== 'Sewa Mobil' ? 'paket' : ''}%20dari%20D%20%26%20N%20Tour,%20berikut%20rincian%20pesanan%20saya:%0A` +
			`Category%20:%20${encodeURIComponent(data.category)}%0A` +
			`$Mobil%20:%20${encodeURIComponent(data.title)}%0A` +
			`Price%20:%20${encodeURIComponent(data.price)}`;

			sendOrderWhatsapp(text);
		}
	})
}