<!-- /*This project is Designed and Developed by Team AKH in 2020 at ABES ENgineering College.
Team Name -> AKH
Mentor -> Mr. Anand Kumar Srivastava (Asst. Professor)
Members -> 1. Harsh Tyagi(CSE, 2017-2021)     
           2. Kanak Goel (CSE, 2017-2021)   
           3. Vaibhav Ojha(CSE, 2017-2021)
 Technologies Used -> 
 1. HTML5
 2. CSS3
 3. PHP 7
 4. Javascript
 5. Bootstrap 3.5
 6. Codeigniter*/  -->


(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })
  var z;
  function validate(){

    const z = document.getElementById('ifrm').value;
    localStorage.setItem("x", z);
    
        
    
}
function validate2(){
  // var y = localStorage.getItem("x");
  // if (y =="123"){
    var name= document.forms["personal"]["admn"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  return true;
  }

