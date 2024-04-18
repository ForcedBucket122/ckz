const radioButtons = document.querySelectorAll('input[type="radio"]');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const selectedOptionsText = document.getElementById('selectedOptions');
    
    function updateSelectedOptions() {
      const selectedRadioOption = Array.from(document.querySelectorAll('input[type="radio"]:checked')).map(radioButton => radioButton.value);
      const selectedCheckboxOptions = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(checkbox => checkbox.value);
      
      const selectedOptions = selectedRadioOption.concat(selectedCheckboxOptions);
      
      selectedOptionsText.textContent = selectedOptions.join(', ');
    }
    
    radioButtons.forEach(radioButton => {
      radioButton.addEventListener('change', updateSelectedOptions);
    });
    
    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', updateSelectedOptions);
    });