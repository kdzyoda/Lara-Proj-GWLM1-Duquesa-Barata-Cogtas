// Read More / Read Less toggle for the About page

document.addEventListener('DOMContentLoaded', function () {
    // 1. Get the button and the hidden text
    const readMoreBtn = document.getElementById('readMoreBtn');
    const storyMore = document.getElementById('storyMore');

    // stop if this page doesn't have them
    if (!readMoreBtn || !storyMore) return;

    // 2. When the button is clicked...
    readMoreBtn.addEventListener('click', function () {
        // 3. open or close the extra text (CSS animates it)
        const isOpen = storyMore.classList.toggle('is-open');

        // 4. change the button label
        readMoreBtn.textContent = isOpen ? 'Read less' : 'Read more';

        // 5. tell screen readers if it is open
        readMoreBtn.setAttribute('aria-expanded', isOpen);
    });
});
