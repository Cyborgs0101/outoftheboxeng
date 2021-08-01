window.onscroll = () => {
	const distanceScrolled = document.documentElement.scrollTop;
	if (distanceScrolled > 350) {
		const counters = document.querySelectorAll('.counter');

		counters.forEach(counter => {
			const updateCount = () => {
				const target = +counter.getAttribute('data-target');
				const count = +counter.innerText;
				const inc = 1;
				if (count < target) {
					counter.innerText = count + inc;
					setTimeout(updateCount, 150);
				} else
					counter.innerText = target;
			};

			updateCount();
		});
	}
}
