/**
 * @author Puji Ermanto <pujiermanto@gmail.com>
 * @param num
 * @param data
 * @return object dom
**/
const loading = document.querySelector('#loading')
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

function isMobileDevice() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function domElement (data) {
  const blogSelector = document.querySelector('.blog-content')
  const newEl = document.createElement("div")
  if(isMobileDevice()) {
    newEl.classList.add("col-span-full")
  }
  newEl.innerHTML = `
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
    <img class="rounded-t-lg" src="https:${data.cover.fields.file.url}" alt="" />
    </a>
    <div class="p-5">
    <a href="#">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${data.title}</h5>
    </a>
    
    <a href="/blog/${data.slug}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Read more
    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
    </div>
    </div>
  `
  blogSelector.appendChild(newEl);
}


getBlogContent()
.then((data) => {
  data.map((blog) => {
    domElement(blog.fields)
  })
})
.finally(() => {
  setTimeout(() => {
    loading.classList.remove('block')
    loading.classList.add('hidden')
  }, 1500)
})
.catch(err => console.error(err))