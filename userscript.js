function addToCart(productId) {
    fetch(`add_to_cart.php?product_id=${productId}`, {
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Product added to cart successfully!');
        } else {
            alert('Failed to add product to cart.');
        }
    });
}

function buyNow(productId) {
    window.location.href = `checkout.php?product_id=${productId}`;
}

function redirectToProduct(element) {
    const url = element.getAttribute('data-url');
    window.location.href = url;
}
