
  const stopPropagation = (e) => {
    e.stopPropagation();
  }

  // const card = document.querySelector(".commodity_card");
  const card2 = document.querySelector(".commodity_card_controll");

  const main_picture = document.getElementById("main_picture");
  const radioButtons = document.getElementsByName('picture');
  
  // card.onclick = function (e) {
  //   let target = e.currentTarget;
  //   target.className = (target.className == "commodity_card") ? "commodity_card full" : "commodity_card";
  // };

  card2.onclick = function (e) {
    let target = e.currentTarget;
    target.className = (target.className == "commodity_card_controll") ? "commodity_card_controll expand" : "commodity_card_controll";
  };

  document.addEventListener("DOMContentLoaded", function() {
    radioButtons.forEach(input => input.addEventListener('change', changePicture));
  
    
  });
  var changePicture = (e) => {

    main_picture.src = e.currentTarget.value;
    console.log(e.currentTarget);
  }

  

