
<div id="logoCarousel" class="logo-carousel-container bgs mb-3 rounded-3">
    <div class="logo-carousel-inner">
        @foreach($logos as $index => $logo)
            <div class="logo-carousel-item">
                <img src="{{ asset($logo->logo_path) }}" class="d-block w-100 p-5 " alt="Logo">
            </div>
        @endforeach
    </div>
</div>




<script>
 document.addEventListener('DOMContentLoaded', (event) => {
    const items = document.querySelectorAll('.logo-carousel-item');
    const totalItems = items.length;
    const itemsPerPage = 5;
    let currentIndex = 0;

    function showNextItem() {
        // Calculate the index of the item to be replaced
        const oldItemIndex = currentIndex % itemsPerPage;
        const newItemIndex = (currentIndex + itemsPerPage) % totalItems;

        // Hide the old item
        items[oldItemIndex].classList.remove('active', 'slide-in-blurred-bottom');

        // Update the content of the old item with the new item's content
        const newItemSrc = items[newItemIndex].querySelector('img').src;
        items[oldItemIndex].querySelector('img').src = newItemSrc;

        // Show the updated item with animation
        setTimeout(() => {
            items[oldItemIndex].classList.add('active', 'slide-in-blurred-bottom');
        }, 50); // Adding a small delay to ensure the animation is triggered

        // Update the current index
        currentIndex = (currentIndex + 1) % totalItems;
    }

    // Initialize the first set of items
    for (let i = 0; i < itemsPerPage; i++) {
        items[i].classList.add('active', 'slide-in-blurred-bottom');
    }

    setInterval(showNextItem, 4000); // Cambia el conjunto de imágenes cada 4 segundos
});

</script>
