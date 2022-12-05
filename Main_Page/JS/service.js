/* fonction click découverte */
var acc = document.getElementsByClassName("service"); // prendre tous mes services

      
      for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            var panel = this.nextElementSibling;
            if (panel.classList.contains('vanish')) {
            //   if(panel.classList.contains('vanish')){
            //     panel.classList.remove('vanish');
            //   }
              // panel.classList.remove('hidden');
              
              setTimeout(function() {panel.classList.remove('hidden'), 1000});
              setTimeout(function() {panel.classList.remove('vanish'), 1000});
              // setTimeout(function() {panel.classList.remove('visuallyhidden'), 1000});
              setTimeout(function() {panel.classList.add('appearPanel'), 1000});
            }
        else{
            // acc[i].addEventListener("mouseout", function() {
            //     var panel = document.getElementById("panel"); 
            //     var panel = this.nextElementSibling;
                panel.classList.remove('appearPanel');
                setTimeout(function() {panel.classList.add('vanish'), 1000});
                // setTimeout(function() {if(panel.classList.contains('vanish')){panel.classList.add('hidden')}}, 950);
            //  });
            //   panel.classList.remove('appearPanel');
        
            //   setTimeout(function() {panel.classList.add('vanish'), 1000});

            //   setTimeout(function() {if(panel.classList.contains('vanish')){panel.classList.add('hidden')}}, 950);
        }

        // if(acc[i-1].classList.contains('hidden')){
        //     console.log("élément avant",i);
         // var j = i-1;
        // var panelName = "panel"+ j ;
        // var panel1 = document.getElementById(panelName);
        // if(panel1.classList?.contains('appearPanel')){
        //     panel1.classList.remove('appearPanel');
        //     setTimeout(function() {panel1.classList.add('vanish'), 1000});
        //     setTimeout(function() {if(panel1.classList.contains('vanish')){panel1.classList.add('hidden')}}, 950);
        // };

        // var t = i+1;
        // var panelName = "panel"+ t ;
        const panel2 = document.querySelectorAll('.panel');
        for (var j = 0; j < panel2.length; j++){
          console.log(j);

          if(panel2[j].classList.contains('appearPanel')){
            
            panel2[j].classList.remove('appearPanel');
            panel2[j].classList.add('vanish');
            // panel2[j].classList.add('hidden');
          }
          // setTimeout(function() {panel2[j].classList.add('hidden'), 500});
        }
        });
       
      

      
      };

    //   for (let i = 0; i < acc.length; i++) {
    //     acc[i].addEventListener("mouseout", function() {

    //         console.log("quitte", i);
    //         var panel = document.getElementById("panel"); 
    //         var panel = this.nextElementSibling;
    //         panel.classList.remove('appearPanel');
    //         setTimeout(function() {panel.classList.add('vanish'), 1000});
    //         setTimeout(function() {if(panel.classList.contains('vanish')){panel.classList.add('hidden')}}, 950);
    //     });
    // }

    //   for (let i = 0; i < acc.length; i++) {
        
    // }
        

        // else{
        //   panel.classList.remove('appearPanel');
        
        //   setTimeout(function() {panel.classList.add('vanish'), 1000});

        //   setTimeout(function() {if(panel.classList.contains('vanish')){panel.classList.add('hidden')}}, 950);
        // };