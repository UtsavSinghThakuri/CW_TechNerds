// script.js

document.addEventListener('DOMContentLoaded', function () {
    // Example of dynamic cart update (e.g., using AJAX to add items)
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const productId = this.dataset.productId;
            const quantity = this.previousElementSibling.value;
            
            fetch('cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `product_id=${productId}&quantity=${quantity}`
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Handle the response if needed
                window.location.reload();
            });
        });
    });
});
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('sidebar-show');
}
