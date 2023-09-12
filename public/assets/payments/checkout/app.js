/* global Frames */
var payButton = document.getElementById("pay-button");
var form = document.getElementById("payment-form");
var errorStack = [];

Frames.init("pk_sbox_wbdnr3xsbjvw2edskpuxz773wqr");

Frames.addEventHandler(
  Frames.Events.CARD_VALIDATION_CHANGED,
  onCardValidationChanged
);
function onCardValidationChanged(event) {
  console.log("CARD_VALIDATION_CHANGED: %o", event);
  payButton.disabled = !Frames.isCardValid();
}

Frames.addEventHandler(
  Frames.Events.FRAME_VALIDATION_CHANGED,
  onValidationChanged
);
function onValidationChanged(event) {
  console.log("FRAME_VALIDATION_CHANGED: %o", event);

  var errorMessageElement = document.querySelector(".error-message");
  var hasError = !event.isValid && !event.isEmpty;

  if (hasError) {
    errorStack.push(event.element);
  } else {
    errorStack = errorStack.filter(function (element) {
      return element !== event.element;
    });
  }

  var errorMessage = errorStack.length
    ? getErrorMessage(errorStack[errorStack.length - 1])
    : "";
  errorMessageElement.textContent = errorMessage;
}

function getErrorMessage(element) {
  var errors = {
    "card-number": "Please enter a valid card number",
    "expiry-date": "Please enter a valid expiry date",
    cvv: "Please enter a valid cvv code",
  };

  return errors[element];
}

Frames.addEventHandler(
  Frames.Events.CARD_TOKENIZATION_FAILED,
  onCardTokenizationFailed
);
function onCardTokenizationFailed(error) {
  console.log("CARD_TOKENIZATION_FAILED: %o", error);
  Frames.enableSubmitForm();
}

Frames.addEventHandler(Frames.Events.CARD_TOKENIZED, onCardTokenized);
function onCardTokenized(event) {
  // var el = document.querySelector(".success-payment-message");
  // el.innerHTML =
  //   "Card tokenization completed<br>" +
  //   'Your card token is: <span class="token">' +
  //   event.token +
  //   "</span>";
  

  // Replace these with your actual URL and data
var url = "/user/booking";
var data = {
  day: document.getElementById('day').value,
  time: document.getElementById('time').value,
  stadium: document.getElementById('stadium').value,
  token: event.token,
  payment:'checkout'
}

// Replace this with your actual CSRF token
var csrfToken = window.csrfToken;

// Set the headers with the CSRF token
var headers = {
  // "Content-Type": "application/json", // Adjust the content type if necessary
  "X-CSRFToken": csrfToken,
};

// Send the POST request with data and headers using $.ajax
$.ajax({
  url: url,
  type: "POST",
  headers: headers,
  data: data,
  dataType: "json",
  async:false,
  success: function (data) {
    console.log("this is work");
  },
  error: function(data){
    console.log("this is error");
  }
});

}

form.addEventListener("submit", function (event) {
  event.preventDefault();
  Frames.submitCard();
});