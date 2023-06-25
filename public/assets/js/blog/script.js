const loading = document.querySelector('#loading')

const currentURL = window.location.href;

const url = new URL(currentURL);

const path = url.pathname;

const slug = path.substring(path.lastIndexOf('/') + 1);


function backTo() {
	history.go(-1);
}

function getTimezoneOffset(offset) {
  const sign = offset > 0 ? '-' : '+';
  offset = Math.abs(offset);
  const hours = Math.floor(offset / 60);
  const minutes = offset % 60;
  return `${sign}${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}`;
}

function formatTime(dateString) {
	const date = new Date(dateString);

	const year = date.getFullYear();
	const month = String(date.getMonth() + 1).padStart(2, '0');
	const day = String(date.getDate()).padStart(2, '0');
	const hours = String(date.getHours()).padStart(2, '0');
	const minutes = String(date.getMinutes()).padStart(2, '0');
	const seconds = String(date.getSeconds()).padStart(2, '0');

	const formatDate = `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;

	// const formattedDate = `${year}-${month}-${day}T${hours}:${minutes}${getTimezoneOffset(timezoneOffset)}`;
	// const formattedDate = `${year}-${month}-${day}T${hours}:${minutes}:${seconds}.${milliseconds}Z`

	return formatDate

}

function domElement (data) {
  const blogDetail = document.querySelector('#blog-content')
  const heroSelector = document.querySelector('#blog-detail-hero');
  const newEl = document.createElement("div")
  
 
  newEl.innerHTML = `
  <div class="flex justify-center mb-6">
  	<div>
	   	<h4 class="font-bold text-2xl text-gray-800 dark:text-white">
	   		${data.post.title}
	   	</h4>
  	</div>
   </div>

   <div class="flex justify-center mb-12">
   	<div>
  		<span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">By : ${data.post.authorName.fields.name}</span>
  	</div>
  	<div>
  		<span>${formatTime(data.post.authorName.sys.createdAt)}
  	</div>
   </div>

   	<article class="w-10/12 mx-auto whitespace-normal leading-loose text-md lg:text-lg text-gray-800 dark:text-white">
   		${data.content}
   	</article>
  `

  heroSelector.classList.add(`bg-[url('https:${data.post.cover.fields.file.url}')]`)
  blogDetail.appendChild(newEl);
}


// Contentful fetch
getBlogContent()
.then((data) => {
	const posts = data.map((post) => post)
	const post = posts.filter((post) => post.fields.slug == slug)[0].fields
	const postContent = marked.parse(post.content)
	domElement({post: post, content: postContent})
})
.finally(() => {
  setTimeout(() => {
    loading.classList.remove('block')
    loading.classList.add('hidden')
  }, 1500)
})
.catch(err => console.error(err))
