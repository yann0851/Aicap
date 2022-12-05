var opinions = document.querySelectorAll(".itemOpinion"); // prendre tous mes services
var Avatar = document.querySelectorAll(".imgOpinion")
    var textOpinion = document.querySelectorAll(".textOpinionHidden");
    for (let i = 0; i < opinions.length; i++) {
    opinions[i].addEventListener("mouseover", function() {
          // console.log('textOpinion : ', i)
          Avatar[i].classList.add("imgOpinionMove");
      setTimeout(function () {textOpinion[i].classList.remove('textOpinionHiddenNone'), 1000});
      setTimeout(function () {textOpinion[i].classList.remove('textOpinionVisibilityNone'), 1000});
      setTimeout(function () {textOpinion[i].classList.add('textOpinionVisibility'), 1000});
    });
    opinions[i].addEventListener("mouseout", function() {
      textOpinion[i].classList.remove('textOpinionVisibility');
      Avatar[i].classList.remove("imgOpinionMove");
          setTimeout(function() {textOpinion[i].classList.add('textOpinionVisibilityNone'), 1000});
        });
      };