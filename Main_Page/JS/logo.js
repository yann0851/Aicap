// var loader= document.getElementById("preloader");
//     window.addEventListener("load", function(){
//     // loader.style.opacity = "0";
//     // loader.style.display = "none";
//     loader.classList.add("animationLogo");
//     });

// var video = document.getElementById("myVideo");
// video.onended = function() {
//     var loader = document.getElementById("preloader")
//     var loaderMessage = document.getElementById("loaderMessage");
//     var message = document.getElementById("message");
//     // document.body.style.overflow = '';
//     loader.style.display = "none";
//     message.style.transition = "all 1s";
//     message.classList.add("animationMsg");
// };

    // Wrap every letter in a span

    var loader = document.getElementById("preloader")
    // var loaderMessage = document.getElementById("loaderMessage");
    // var message = document.getElementById("message");

    var textWrapper = document.querySelector('.ml13');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    anime.timeline({loop: false})
    .add({
        targets: '.ml13 .letter',
        translateX: [40,0],
        translateZ: 0,
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 1200,
        delay: (el, i) => 4000 + 30 * i
    }).add({
        targets: '.ml13 .letter',
        translateX: [0,-30],
        opacity: [1,0],
        easing: "easeInExpo",
        duration: 1000,
        delay: (el, i) => 100 + 30 * i
    });

    // setTimeout( function() {loader.style.display = "none";}, 24000);
    // setTimeout( function() {message.style.transition = "all 1s";}, 9000);
    // setTimeout( function() {message.classList.add("animationMsg");}, 9000);
    document.body.classList.add("BlockBar");
    
    setTimeout( function() {loader.classList.add("animationMessage")}, 21500);

    setTimeout(function () {
    const navBtn1 = document.getElementById("nav-btn-1");
    const navBtn2 = document.getElementById("nav-btn-2");
    const navBtn3 = document.getElementById("nav-btn-3");
    const navBtn4 = document.getElementById("nav-btn-4");
    const navBtn5 = document.getElementById("nav-btn-5");
    
    const scroller = document.querySelector('#scroller');
          
          const locoScroll = new LocomotiveScroll({
            el: scroller,
            smooth: true,
            smoothMobile: true,
            getDirection: true,
            smartphone: {
              breakpoint:0,
              smooth: false,
              getDirection: true
            },
            tablet: {
              breakpoint:0,
              smooth: false,
              getDirection: true
            },
          });
          // each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)
          locoScroll.on("scroll", ScrollTrigger.update);
          
          // tell ScrollTrigger to use these proxy methods for the ".smooth-scroll" element since Locomotive Scroll is hijacking things
          ScrollTrigger.scrollerProxy(scroller, {
            scrollTop(value) {
              return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
            }, // we don't have to define a scrollLeft because we're only scrolling vertically.
            getBoundingClientRect() {
              return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
            },
            // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
            pinType: scroller.style.transform ? "transform" : "fixed"
          });
          
          ScrollTrigger.defaults({
            scroller: scroller
          })
          
          
          
          /* Scroll locomotive + horizontal */
          const horizontalSections = gsap.utils.toArray('section.horizontal')
          
          horizontalSections.forEach(function (sec, i) {	
            
            var thisPinWrap = sec.querySelector('.pin-wrap');
            var thisAnimWrap = thisPinWrap.querySelector('.animation-wrap');
            
            var getToValue = () => -(thisAnimWrap.scrollWidth - window.innerWidth); 
          
            gsap.fromTo(thisAnimWrap, { 
              x: () => 0
            }, { 
              x: () => getToValue(), 
              ease: "none",
              scrollTrigger: {
                trigger: sec,		
                scroller: scroller,
                start: "top top",
                end: () => "+=" + (thisAnimWrap.scrollWidth - window.innerWidth),
                pin: thisPinWrap,
                invalidateOnRefresh: true,
                anticipatePin: 1,
                scrub: true,
                //markers: true
              }
            });
          
          });	
          
          locoScroll.on("call", callValue => {
          if (callValue === "navServicio") {
            navBtn1.classList.add("active");
            navBtn2.classList.remove("active");
            navBtn4.classList.remove("active");
            console.log(callValue);
          } else {
            navBtn1.classList.remove("active");
          };
    
          if (callValue === "navQuienesSomos") {
            navBtn2.classList.add("active");
            navBtn1.classList.remove("active");
            navBtn3.classList.remove("active");
            navBtn4.classList.remove("active");
            console.log(callValue);
          } else {
            navBtn2.classList.remove("active");
          };
    
          if (callValue === "navOpiniones") {
            navBtn3.classList.add("active");
            navBtn1.classList.remove("active");
            navBtn2.classList.remove("active");
            navBtn4.classList.remove("active");
            console.log(callValue);
          } else {
            navBtn3.classList.remove("active");
          };
    
          if (callValue === "navColaboradores") {
            navBtn4.classList.add("active");
            navBtn1.classList.remove("active");
            navBtn2.classList.remove("active");
            navBtn3.classList.remove("active");
            console.log(callValue);
          } else {
            navBtn4.classList.remove("active");
          };
    
          // if (callValue === "navColaboradores") {
          //   navBtn5.classList.add("active");
          //   navBtn4.classList.remove("active");
          //   navBtn1.classList.remove("active");
          //   navBtn2.classList.remove("active");
          //   navBtn3.classList.remove("active");
          //   console.log(callValue);
          // } else {
          //   navBtn5.classList.remove("active");
          // };
      });
    
    
          
      var mmnav = document.getElementById("mm-projects-nav");
      var btns = mmnav.getElementsByClassName("mm-projects-nav-btn");
          for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }
          
          // each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll. 
          ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
          
          // after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
          ScrollTrigger.refresh(); 
    
    
    
    /* a remettre pt */
    const anchorLinks = document.querySelectorAll('.fixed-nav .location');
    
    anchorLinks.forEach((anchorLink) => {
      let hashval = anchorLink.getAttribute('href');
      let target = document.querySelector(hashval);
    
      anchorLink.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
    
        locoScroll.scrollTo(target);
      });
    });
   }, 21500);
