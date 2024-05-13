document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = 'block';
            } else {
                slide.style.display = 'none';
            }
        });
    }

    function prevSlide() {
        currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
        showSlide(currentIndex);
    }

    function nextSlide() {
        currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
        showSlide(currentIndex);
    }

    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    showSlide(currentIndex);
});

// Slider
//   function showProductDetails(productId) {
//     // Assuming you have an array or object containing product details
//     var productDetails = getProductDetails(productId);

//     // Display product details in a modal or separate section
//     // For example, you can create a modal using Bootstrap
//     // Here's a basic example of how you can create a modal:
//     var modalContent = `
//       <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
//         <div class="modal-dialog modal-lg">
//           <div class="modal-content">
//             <div class="modal-header">
//               <h5 class="modal-title" id="productModalLabel">${productDetails.title}</h5>
//               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//             </div>
//             <div class="modal-body">
//               <img src="${productDetails.image}" class="img-fluid" alt="${productDetails.title}">
//               <p>${productDetails.description}</p>
//               <p>Price: ${productDetails.price}</p>
//               <!-- Add more details here as needed -->
//             </div>
//             <div class="modal-footer">
//               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
//             </div>
//           </div>
//         </div>
//       </div>
//     `;

//     // Append modal content to the body
//     document.body.innerHTML += modalContent;

//     // Show the modal
//     var productModal = new bootstrap.Modal(document.getElementById('productModal'));
//     productModal.show();
//   }

//   // Function to retrieve product details
//   function getProductDetails(productId) {
//     // Assuming you have a function to fetch product details from a database or API
//     // You can replace this with your actual implementation
//     // For example, you might have an array of products and you can filter by productId
//     // Here's a basic example:
//     var products = [
//       { id: 1, title: 'Product 1', description: 'Description of Product 1', price: '$10', image: './images/product1.jpg' },
//       { id: 2, title: 'Product 2', description: 'Description of Product 2', price: '$20', image: './images/product2.jpg' },
//       // Add more products as needed
//     ];

//     // Find the product with the specified productId
//     return products.find(product => product.id === productId);
//   }