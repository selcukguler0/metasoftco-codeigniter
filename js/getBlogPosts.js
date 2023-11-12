var blogPostWrapper = document.getElementById('blogPostWrapper');

function blogPost(id, date, title, tag, picture) {
	var location = window.location.origin;

	return `<div id="${id}" onclick="redirectBlog(${id})" role="listitem" class="news w-dyn-item"><a data-w-id="51b30292-b908-dea2-7f77-b97ba7d54ed2"
									href="${location}/blogDetails.html?id=${id}"
									class="news-link anim--preloader w-inline-block"><img
										src="${picture}" loading="lazy" alt=""
										sizes="(max-width: 479px) 80vw, (max-width: 767px) 343px, 29vw"
										class="news-img">
									<div class="news__date">${date}</div>
									<h6 class="news__title">${title}</h6>
								</a>
								<div class="category-wrapper w-dyn-list">
									<div role="list" class="category-list mod--2 w-dyn-items">
										<div role="listitem" class="category-item w-dyn-item">
											<div fs-cmsfilter-field="category" class="category__text">${tag}</div>
										</div>
									</div>
								</div>
							</div>`
}

var swiper_index = 0;

function getBlogPosts() {
	fetch('https://api.metasoftco.com/api/getBlogPosts')
		.then(response => response.json())
		.then(data => {
			data.forEach(element => {
				//blog page
				blogPostWrapper.innerHTML += blogPost(element.id, formatDate(element.date), element.title, element.tag, element.picture);
			});
			loader.style.display = 'none';
		});
}
getBlogPosts();

function formatDate(dateString) {
	const date = new Date(dateString);

	const monthNames = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'];

	const month = monthNames[date.getMonth()];
	const day = date.getDate();
	const year = date.getFullYear();

	const formattedDate = `${day} ${month} ${year}`;

	return formattedDate;
}
