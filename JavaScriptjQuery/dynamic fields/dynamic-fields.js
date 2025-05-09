$(document).ready(function () {
    let count = 0;
  
    // Add dynamic field
    $('#addFieldBtn').click(function () {
      count++;
      $('#fieldContainer').append(`
        <div class="field-group">
          <input type="text" class="dynamic-input" name="field_${count}" placeholder="Enter value ${count}" />
          <button type="button" class="removeBtn">Remove</button>
        </div>
      `);
    });
  
    // Remove field
    $('#fieldContainer').on('click', '.removeBtn', function () {
      $(this).closest('.field-group').remove();
    });
  
    // Get values
    $('#getValuesBtn').click(function () {
      let values = [];
      $('.dynamic-input').each(function () {
        values.push($(this).val());
      });
      console.log("Dynamic Field Values:", values);
      alert("Values: " + values.join(', '));
    });
  });
  