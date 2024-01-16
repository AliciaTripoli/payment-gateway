const openPaymentPopupBtn = document.getElementById("open-payment-popup");
const paymentPopup = document.getElementById("payment-popup");
const closePopupBtn = document.getElementById("close-popup");

openPaymentPopupBtn.addEventListener("click", () => {
  paymentPopup.classList.remove("hidden");
});

closePopupBtn.addEventListener("click", () => {
  paymentPopup.classList.add("hidden");
});