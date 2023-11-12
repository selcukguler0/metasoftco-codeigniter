var converter = new showdown.Converter();

var loader = document.getElementById('loader');
var contentWrapper = document.getElementById('contentWrapper');

var blogId = window.location.search.split('=')[1];
var title = document.getElementById('title');
var date = document.getElementById('date');
var timeToRead = document.getElementById('timeToRead');
var tag = document.getElementById('tag');
var picture = document.getElementById('picture');
var content = document.getElementById('content');

var timeToReadMobile = document.getElementById('timeToReadMobile');
var dateMobile = document.getElementById('dateMobile');

function getBlogDetails() {
	fetch("https://api.metasoftco.com/api/getBlogDetails?id=".concat(blogId)).then(function (response) {
		return response.json();
	}).then(function (data) {
		var markdown = converter.makeHtml(data.content);
		content.innerHTML = markdown;

		date.innerHTML = formatDate(data.date);
		dateMobile.innerHTML = formatDate(data.date);

		title.innerHTML = data.title;

		var readMin = data.content.length / 1000;
		if (readMin < 1) {
			readMin = 1;
		} else {
			readMin = readMin;
		}
		//Math.trunc(readMin) removes decimal part
		timeToRead.innerHTML = Math.trunc(readMin) + ' dk'; 
		timeToReadMobile.innerHTML = Math.trunc(readMin) + ' dk';

		// tag.innerHTML = data.tag;
		loader.style.display = 'none';
	});
}
getBlogDetails();

function formatDate(dateString) {
	const date = new Date(dateString);

	const monthNames = ['OCAK', 'ŞUBAT', 'MART', 'NİSAN', 'MAYIS', 'HAZİRAN', 'TEMMUZ', 'AĞUSTOS', 'EYLÜL', 'EKİM', 'KASIM', 'ARALIK'];

	const month = monthNames[date.getMonth()];
	const day = date.getDate();
	const year = date.getFullYear();

	const formattedDate = `${day} ${month} ${year}`;

	return formattedDate;
}

var otherBlogPosts = document.getElementById('otherBlogPosts');
//other articles
function getOtherBlogPosts() {
	fetch('https://api.metasoftco.com/api/getBlogPosts')
		.then(response => response.json())
		.then(data => {
			data.forEach(element => {
				otherBlogPosts.innerHTML += otherPosts(element.id, formatDate(element.date), element.title, element.tag, element.picture);
			});
		});
}
getOtherBlogPosts();

function otherPosts(id, date, title, tag, picture) {
	var location = window.location.origin;
	return	`
<div role="group" class="swiper-slide w-dyn-item data-swiper-slide-index="${id}">
	<div class="article__wrap">
			<div class="article__news-info"><a
					href="${location}/blogDetails.html?id=${id}"
					class="article__img-link w-inline-block"><img
						src="${picture}"
						loading="lazy" alt="" sizes="(max-width: 767px) 254px, 30vw"
						class="article__img"></a>
				<div class="article__date">${date}</div><a
					href="${location}/blogDetails.html?id=${id}"
					class="article__title">${title}</a>
			</div>
			<div class="article__cat-wrap w-dyn-list">
				<div role="list" class="article__cat-list w-dyn-items">
					<div role="listitem" class="article__cat-item w-dyn-item">
						<div class="article__cat-name">${tag}</div>
					</div>
				</div>
			</div>
	</div>
</div>
`}