var swiper = new Swiper(".home-slider", {
    spaceBetween: 10,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
  });

    let menu = document.querySelector('#menu');
    let navbar = document.querySelector('.navbar');


    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }
    
    let cart = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
cart.classList.add('active');
}

document.querySelector('#close-form').onclick = () =>{
cart.classList.remove('active');
}

let cartCount = 0;
let cartDetails = [];

function addToCart(item, price) {
    cartCount++;
    document.getElementById('cart').style.display = 'block';
    document.getElementById('cart').textContent = cartCount;

    cartDetails.push({ item, price });

    updateCartDetails();
}

function updateCartDetails() {
    let cartDetailsList = document.getElementById('cart-details');
    let totalBillElement = document.getElementById('total-bill');
    let totalBill = 0;

    // Clear previous details
    cartDetailsList.innerHTML = "";

    // Update cart details
    cartDetails.forEach(detail => {
        let listItem = document.createElement('li');
        listItem.textContent = `${detail.item} - Rs.${detail.price}`;
        cartDetailsList.appendChild(listItem);

        totalBill += detail.price;
    });
    totalBillElement.textContent = totalBill.toFixed(2);
}
function checkout(id) {
  cartDetails = cartDetails.filter(item => item.id !== id);
  document.getElementById('cart').textContent = 0;

  updateCartDetails();
}



