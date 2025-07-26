(() => {
	document.addEventListener('DOMContentLoaded', () => {

		const observerVisible = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.classList.add('visible');
					observerVisible.unobserve(entry.target);
				}
			});
		}, {
			threshold: 0.2
		});

		document.querySelectorAll('.delaiUn, .delaiDeux').forEach(el => {
			observerVisible.observe(el);
		});

		const observer = new IntersectionObserver((entries, observer) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.classList.add('animate');
					observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.1 });

		document.querySelectorAll('.left, .right').forEach(el => {
			observer.observe(el);
		});
	});
})();