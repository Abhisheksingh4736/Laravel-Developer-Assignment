$(document).ready(function () {
    // Show/hide dropdown on button click
    $('#toggleBtn').click(function (e) {
      e.stopPropagation(); // stop bubbling
      $('#dropdown').toggle();
    });
  
    // Hide dropdown on click outside
    $(document).click(function (e) {
      if (!$(e.target).closest('#dropdown, #toggleBtn').length) {
        $('#dropdown').hide();
      }
    });
  });
  