
document.addEventListener("DOMContentLoaded", () => {
    // Featured coffee information
    const coffees = [
        {
            image: "/images/ICEDLATTE.png",
            title: "Signature Iced Latte",
            description: "Smooth espresso combined with creamy milk and served over ice. CSUans students top-tier coffee, a best seller indeed!"
        },
        {
            image: "/images/CAPPUCCINO.png",
            title: "Classic Cappuccino",
            description: "Rich espresso topped with velvety steamed milk foam. A timeless favorite among CSUans faculty and students, perfect for a morning boost or an afternoon treat."
        },
        {
            image: "/images/CARAMELMACCHIATO.png",
            title: "Caramel Macchiato",
            description: "A delicious combination of espresso, milk, and caramel. Top-pick and most suggested!"
        }
    ];

    // Get carousel elements from home.blade.php
    const carouselImage = document.getElementById("carouselImage");
    const carouselTitle = document.getElementById("carouselTitle");
    const carouselDescription = document.getElementById("carouselDescription");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    // Prevent errors when carousel elements are unavailable
    if (
        !carouselImage ||
        !carouselTitle ||
        !carouselDescription ||
        !prevBtn ||
        !nextBtn
    ) {
        return;
    }

    let currentIndex = 0;

    // Display the selected coffee
    function showCoffee(index) {
        currentIndex = (index + coffees.length) % coffees.length;

        const coffee = coffees[currentIndex];

        carouselImage.src = coffee.image;
        carouselImage.alt = coffee.title;
        carouselTitle.textContent = coffee.title;
        carouselDescription.textContent = coffee.description;
    }

    // Previous coffee button
    prevBtn.addEventListener("click", () => {
        showCoffee(currentIndex - 1);
    });

    // Next coffee button
    nextBtn.addEventListener("click", () => {
        showCoffee(currentIndex + 1);
    });

    // Display first coffee when the page loads
    showCoffee(0);
});
