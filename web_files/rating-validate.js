(function () {
  'use strict'
  var forms = document.getElementsByClassName("ratingForm");



  Array.prototype.slice.call(forms).forEach(function (form) {
    // var radio = form.elements;
    // for (var i = 0; i < radio.length; i++) {
    //   radio[i].addEventListener('change', function(event){

    //   }, true) 
    // }
    // form.addEventListener('submit', function (event) {
    //   event.preventDefault()
    // })
  })
  jQuery(document).ready(function ($) {
    console.log("Ready function call");
    
    $('input[type=radio]').on('change', function () {
      $(this).closest("form").on('submit', function (event) {
        $.ajax({
          type: "get",
          url: "add_rating_script.php",
          data: $(this).closest("form").serialize(),
          success: function (data) {
            console.log("Rating added: " + data)
          }
        })
        event.preventDefault();
      });
      $(this).closest("form").submit();
      $(this).closest("fieldset").prop('disabled', true);
      $(this).closest("form").unbind('submit');
    });
  });
})()


