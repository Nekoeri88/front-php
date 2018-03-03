//smooth scroll
$(document).ready(function () {
  $("a[href^='#']").on("click", function () {
    $("html, body").animate({scrollTop: $($(this).attr("href")).offset().top}, "slow", "swing");
    
    return false;
  });
});

//language selector
$(document).ready(function () {
  var button = $("#header .language p a");
  var contents = $("#header .language ul");
  
  button.on("click", function () {
    contents.slideToggle();
    
    return false;
  });
});

//chart.js
$(document).ready(function () {
  var glaphWrapperDom = $("#aboutGlaphWrapper");
  var glaphDom = $("#aboutGlaph");
  var isShow = false;
  var config = {
    type: "pie",
    data: {
      datasets: [{
        data: [55, 25, 10, 10],
        backgroundColor: ["#ff6384", "#ff9f40", "#4bc0c0", "#36a2eb"],
        borderColor: "#0a2539"
      }],
    },
    options: {
      legend: {
        display: false
      },
      tooltips: {
        enabled: false
      },
      layout: {
        padding: {
          top: 0
        }
      }
    }
  };
  
  resize();
  
  $("#about").on("webkitAnimationEnd", function () {
    var waypoints = glaphDom.waypoint({
      handler: function (direction) {
        if(!isShow) {
          var aboutGlaph = new Chart(glaphDom, config);
          isShow = true;
        }
      },
      offset: "80%"
    });
  });
  $(window).on("resize", resize);
  
  function resize() {
    glaphDom.width(glaphWrapperDom.width()).height(glaphWrapperDom.width());
  }
});

//fadein contents
$(document).ready(function () {
  var pointArea = $(".fadeInContents");
  
  var waypoints = pointArea.waypoint({
    handler: function (direction) {
      $(this.element).find(".container").addClass("fadeIn");
    },
    offset: $(window).height() - 200
  });
});

//header video
$(document).ready(function () {
  //setting
  var headerVideoDom = $("#headerVideo");
  var videoWrapperDom = headerVideoDom.find(".video");
  var videoDom = headerVideoDom.find("video");
  var videoAspect = 1.834;
  var videos = new Array(
    [0, "img/header_mov_01_sp.mp4"],
    [768, "img/header_mov_01.mp4"]
  );
  
  //variable
  var offsetX = 0;
  var offsetY = 0;
  var videoSrc = "";
  var windowWidth = $(window).width();
  
  resize();
  for(var i = 0, j = videos.length; i < j; i++) {
    if(windowWidth < videos[i][0]) {
      break;
    }
    videoSrc = videos[i][1];
  };
  videoDom.attr("src", videoSrc);
  
  videoDom.on("canplay", function () {
    var res = videoDom.get(0).play();
    
    headerVideoDom.show();
    setTimeout(function () {
      if(videoDom.get(0).currentTime <= 0 || videoDom.get(0).currentTime == void(0)) {
        headerVideoDom.hide();
      }
    }, 500);
  });
  $(window).on("resize", resize);
  function resize() {
    var wrapperWidth = headerVideoDom.width();
    var wrapperHeight = headerVideoDom.height();
    var videoWidth = 0;
    var videoHeight = 0;
    
    if(wrapperHeight < wrapperWidth / videoAspect) {
      videoWidth = wrapperWidth;
    } else {
      videoWidth = wrapperHeight * videoAspect;
    }
    videoWrapperDom.width(videoWidth);
    offsetX = -Math.abs((wrapperWidth - videoWidth) / 2);
    offsetY = -Math.abs((wrapperHeight - (videoWidth / videoAspect)) / 2);
    videoWrapperDom.css({
      "left": offsetX,
      "top": offsetY
    });
  }
});

// //Air Drop validation
// $(document).ready(function () {
//   var formDom = $("#airdrop form");
//   var statusDom = $("#airdrop .status p");
//   var isSubmitted = false;
//   var blackList = new Array(
//     "0x751537d0e0189c24fd7e0e4dab4b83d90f926a87",
//     "0xFFE02ee4C69eDf1b340fCaD64fbd6b37a7b9e265"
//   );
//
//   formDom.on("submit", function () {
//     var isError = false;
//     var walletAddressVal = formDom.find(".walletAddress").val();
//     var emailAddressVal = formDom.find(".emailAddress").val();
//     if(isSubmitted) return false;
//     statusDom.removeClass("show");
//     if(walletAddressVal.match(/^0x\w{40}$/) == null) {
//       isError = true;
//       statusDom.filter(".error").addClass("show");
//     }
//     blackList.forEach(function (item) {
//       if(walletAddressVal == item) {
//         isError = true;
//         statusDom.filter(".error").addClass("show");
//       }
//     });
//     if(emailAddressVal.match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/) == null) {
//       isError = true;
//       statusDom.filter(".error03").addClass("show");
//     }
//     if(!isError) {
//       $.ajax({
//         type: "POST",
//         url: formDom.attr("action"),
//         data: $(this).serialize(),
//         success: function (res) {
//           isSubmitted = true;
//           formDom.find("input").prop("disabled", true);
//           statusDom.filter(".thanks").addClass("show");
//         },
//         error: function () {
//           statusDom.filter(".error02").addClass("show");
//         }
//       });
//     }
    
//     return false;
//   });
// });

//Count down
$(document).ready(function () {
  var countdoenFields = function countdoenFields() {
    this.wrapper = $("#countdown");
    this.day = this.wrapper.find(".days");
    this.hour = this.wrapper.find(".hours");
    this.min = this.wrapper.find(".minutes");
    this.sec = this.wrapper.find(".seconds");
  }
  var endTime = new Date(Date.UTC(2018, 2, 16, 21 - 9, 0, 1)).getTime();
  var dom = new countdoenFields();
  var aDay = 24 * 60 * 60 * 1000;
  
  window.requestAnimationFrame(reflesh);
  function reflesh() {
    var now = new Date().getTime();
    var delta = endTime - now;
    var day = Math.floor(delta / aDay);
    var hour = Math.floor((delta % aDay) / (60 * 60 * 1000));
    var min = Math.floor((delta % aDay) / (60 * 1000)) % 60;
    var sec = Math.floor((delta % aDay) / 1000) % 60 % 60;
    
    dom.day.text(("0" + day).substr(-2));
    dom.hour.text(("0" + hour).substr(-2));
    dom.min.text(("0" + min).substr(-2));
    dom.sec.text(("0" + sec).substr(-2));
    window.requestAnimationFrame(reflesh);
  }
});