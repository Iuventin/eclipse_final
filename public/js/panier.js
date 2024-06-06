// Focntions de Ange

document.addEventListener("DOMContentLoaded", function () {
  updateCartTotal();

  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const msg = urlParams.get("msg");
  console.log(msg);

  switch (msg) {
    case "row":
      Swal.fire({
        title: "Erreur !",
        text: "Veuillez remplir tous les champs.",
        icon: "error",
        confirmButtonText: "D'accord",
      });
      break;
    case "empty":
      Swal.fire({
        title: "Erreur !",
        text: "Votre panier est vide.",
        icon: "error",
        confirmButtonText: "D'accord",
      });
      break;
    case "success":
      Swal.fire({
        title: "Votre commande a bien été traitée !",
        icon: "success",
        confirmButtonText: "D'accord",
      });
      break;
  }

  document.querySelectorAll(".item-quantity").forEach((input) => {
    input.addEventListener("change", function () {
      const itemId = this.closest(".cart-item").dataset.id;
      const newQuantity = parseInt(this.value);
      updateCartItem(itemId, newQuantity);
    });
  });

  document.querySelectorAll(".remove-item").forEach((button) => {
    button.addEventListener("click", function () {
      const itemId = this.closest(".cart-item").dataset.id;
      removeCartItem(itemId);
    });
  });

  function updateCartItem(itemId, quantity) {
    let panier = getCart();
    if (quantity <= 0) {
      delete panier[itemId];
      document.querySelector(`.cart-item[data-id="${itemId}"]`).remove();
    } else {
      panier[itemId] = quantity;
    }
    setCart(panier); // Mettre à jour le cookie avec le panier modifié
    updateCartTotal();
  }

  function removeCartItem(itemId) {
    let panier = getCart();
    delete panier[itemId];
    setCart(panier); // Mettre à jour le cookie avec le panier modifié
    document.querySelector(`.cart-item[data-id="${itemId}"]`).remove();
    updateCartTotal();
  }

  function updateCartTotal() {
    let total = 0;
    const cartItems = document.querySelectorAll(".cart-item");
    if (cartItems.length === 0) {
      document.querySelector(".cart").innerHTML =
        "<p>Votre panier est vide.</p>";
      return; // Quittez la fonction car le panier est vide
    }

    cartItems.forEach((item) => {
      const price = parseFloat(item.getAttribute("data-price"));
      if (!isNaN(price)) {
        const quantity = parseInt(item.querySelector(".item-quantity").value);
        const itemTotal = price * quantity;
        total += itemTotal;
        item.querySelector(".item-details p").textContent =
          "Prix: " + itemTotal.toFixed(2) + "€";
      } else {
        console.error("Prix invalide pour cet article:", item);
      }
    });
    document.getElementById("cart-total").textContent = total.toFixed(2) + "€";
    setCartTotalInCookie(total);
  }

  function setCartTotalInCookie(total) {
    let panier = getCart();
    //panier['total'] = total.toFixed(2);
    setCart(panier);
  }

  function getCart() {
    return JSON.parse(getCookie("panier") || "{}");
  }

  function setCart(panier) {
    setCookie("panier", JSON.stringify(panier), 7 * 7 * 7 * 7 ** 2);
  }

  function getCookie(name) {
    let dc = document.cookie;
    let prefix = name + "=";
    let begin = dc.indexOf("; " + prefix);
    if (begin === -1) {
      begin = dc.indexOf(prefix);
      if (begin !== 0) return null;
    } else {
      begin += 2;
      let end = document.cookie.indexOf(";", begin);
      if (end === -1) {
        end = dc.length;
      }
      return decodeURIComponent(dc.substring(begin + prefix.length, end));
    }
    return decodeURIComponent(dc.substring(begin + prefix.length));
  }

  function setCookie(name, value, days) {
    let expires = "";
    if (days) {
      let date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie =
      name + "=" + (encodeURIComponent(value) || "") + expires + "; path=/";
  }
});
