const loading = document.querySelector('#loading')
let client = contentful.createClient({
  space: 'hm3eztweb2rs',
  accessToken: 'Ja5jwDNyj2buGBSyQpO3MLiiigOs8ayyo8V6wWt5EL4',
});

async function getBlogContent() {
  try {
    if (!client) return 0;
    const response = await client.getEntries({
      content_type: "news",
      order: "-sys.createdAt",
      limit: 100,
    });
    if (response.items.length > 0) return  response.items;
  } catch (err) {
    console.error(err);
  }
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
    
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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