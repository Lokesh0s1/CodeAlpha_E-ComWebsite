let carts = document.querySelectorAll(".add-cart");
console.log(carts);

let products = [
  {
    name: "Dosa",
    tag: "Dosa",
    price: 120,
    inCart: "0",
  },
  {
    name: "Momos",
    tag: "Momos",
    price: 70,
    inCart: "0",
  },
  {
    name: "Pop Corn",
    tag: "Pop Corn",
    price: 80,
    inCart: "0",
  },
  {
    name: "Cake",
    tag: "Cake",
    price: 250,
    inCart: "0",
  },
  {
    name: "Sandwich",
    tag: "Sandwich",
    price: 50,
    inCart: "0",
  },
  {
    name: "Ice Cream",
    tag: "Ice Cream",
    price: 30,
    inCart: "0",
  },
  {
    name: "Veg Biryani",
    tag: "Veg Biryani",
    price: 40,
    inCart: "0",
  },
  {
    name: "Burger",
    tag: "Burger",
    price: 60,
    inCart: "0",
  },
  {
    name: "Pizza",
    tag: "Pizza",
    price: 300,
    inCart: "0",
  },
  {
    name: "Hot Coffee",
    tag: "Hot Coffee",
    price: 65,
    inCart: "0",
  },
  {
    name: "Coca Cola",
    tag: "Coca Cola",
    price: 55,
    inCart: "0",
  },
];

for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener("click", () => {
    cartNumbers(products[i]);
    totalCost(products[i]);
  });
}

function onloadCartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");

  if (productNumbers) {
    document.querySelector("cartNumber").innerHTML =
      parseInt(productNumbers) + 1;
  }
}

function cartNumbers(product) {
  console.log("cartNumbers", product);
  let productNumbers = localStorage.getItem("cartNumbers");

  productNumbers = parseInt(productNumbers);

  if (productNumbers) {
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector("#cart span").textContent = productNumbers + 1;
  } else {
    localStorage.setItem("cartNumbers", 1);
    document.querySelector("#cart span").textContent = 1;
  }

  setItems(product);
}
function setItems(product) {
  console.log("setItems", product);
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  if (cartItems != null) {
    if (cartItems[product.tag] == undefined) {
      cartItems = {
        ...cartItems,
        [product.tag]: product,
      };
    }
    cartItems[product.tag].inCart = parseInt(cartItems[product.tag].inCart) + 1;
  } else {
    product.inCart = 1;
    cartItems = {
      [product.tag]: product,
    };
  }

  localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
  console.log("totalCost", product);
  // console.log("The product price is",product.price);
  let cartCost = localStorage.getItem("totalCost");

  cartCost = parseInt(cartCost);

  if (cartCost) {
    localStorage.setItem("totalCost", cartCost + parseInt(product.price));
  } else {
    localStorage.setItem("totalCost", parseInt(product.price));
  }
}

function displayCart() {
  console.log("displayCart");
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".products");
  let cartCost = localStorage.getItem("totalCost");

  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    Object.values(cartItems).map((item) => {
      productContainer.innerHTML += `
            <div class="product">
               <ion-icon name="close-circle"></ion-icon>
              <img src="./img/${item.tag}.jpg">
              <span>${item.name}</span>
              </div>
              <div class="price">${item.price}</div>
              <div class="quantity">
              <ion-icon class="decrease"
              name="arrow-dropleft-circle"></ion-icon>
              <span> ${item.inCart}</span>
              </div>
              <div class="total">
              ${item.inCart * item.price}
              </div>
             
              `;
    });
    productContainer.innerHTML += `
              <div class="basketTotalContainer">
              <h4 class="basketTotalTitle">
                  Basket Total  
              </h4>
              <h4 class="basketTotal">
                  ${cartCost}
              </h4>

              </div>
              `;
  }
}

onloadCartNumbers();
displayCart();
