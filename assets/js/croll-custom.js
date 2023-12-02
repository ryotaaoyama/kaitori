// Lấy tất cả các liên kết menu
const menuLinks = document.querySelectorAll('.carmodelAnchorList a');

// Lặp qua từng liên kết menu và thêm sự kiện click
menuLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

        const targetId = link.getAttribute('href').substring(1); // Lấy ID cần cuộn đến

        const targetElement = document.getElementById(targetId); // Tìm phần tử có ID tương ứng

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' }); // Cuộn đến phần tử với hiệu ứng mượt
        }
    });
});


$(document).ready(function() {
    // Thiết lập các biến
    var slideWrapper = $('.sample-slider-test .wrapper');
    var slides = $('.sample-slider-test .slide-sp-cus');
    var slideWidth = $('.sample-slider-test .slide-sp-cus').width();file:///C:/xampp/htdocs/form-final/img/log3.png
    var currentSlide = 0;

    // Hàm di chuyển slide liên tục
    function continuousSlide() {
      // Nếu đã đến slide cuối cùng, di chuyển về slide đầu tiên mà không có hiệu ứng
      if (currentSlide >= slides.length - 1) {
        slideWrapper.css('transition', 'none');
        slideWrapper.css('marginLeft', 0);
        currentSlide = 0;
      }

      // Di chuyển slider sang phải mỗi lần gọi hàm
      currentSlide++;
      slideWrapper.css('marginLeft', -currentSlide * slideWidth);

      // Kích hoạt lại hiệu ứng transition
      setTimeout(function() {
        slideWrapper.css('transition', 'margin-left 500ms');
      }, 50);
    }

    // Thiết lập interval cho continuousSlide
    var slideInterval = setInterval(continuousSlide, 3000);

    // Dừng autoSlide khi rê chuột vào slider
    slideWrapper.on('mouseenter', function() {
      clearInterval(slideInterval);
    });

    // Bắt đầu autoSlide khi rê chuột ra khỏi slider
    slideWrapper.on('mouseleave', function() {
      slideInterval = setInterval(continuousSlide, 3000);
    });
  });

// const groupA = document.querySelectorAll('.groupA');
// const groupB = document.querySelectorAll('.groupB');
// const groupC = document.querySelectorAll('.groupC');
// const message_one = document.getElementById('message-one');
// const message_two = document.getElementById('message-two');

// groupA.forEach(checkbox => {
//     checkbox.addEventListener('click', () => {
//       // Không cần xử lý gì khi click vào Group A
//     });
// });

// groupB.forEach(checkbox => {
//     checkbox.addEventListener('click', () => {
//       validateSelection();
//     });
// });

// groupC.forEach(checkbox => {
//     checkbox.addEventListener('click', () => {
//       validateSelection();
//     });
// });

// function validateSelection() {
//     let isGroupASelected = false;
//     groupA.forEach(checkbox => {
//       if (checkbox.checked) {
//         isGroupASelected = true;
//       }
//     });

//     let isGroupBSelected = false;
//     groupB.forEach(checkbox => {
//       if (checkbox.checked) {
//         isGroupBSelected = true;
//       }
//     });

//     if (!isGroupASelected) {
//       groupB.forEach(checkbox => {
//         if (checkbox.checked) {
//           checkbox.checked = false;
//         }
//       });
//       groupC.forEach(checkbox => {
//         if (checkbox.checked) {
//           checkbox.checked = false;
//         }
//       });
//       message_one.textContent = "車両状態を選択してください";
    
//       //alert("Hãy chọn Group A trước!");
//     } else if (!isGroupBSelected) {
//       groupC.forEach(checkbox => {
//         if (checkbox.checked) {
//           checkbox.checked = false;
//         }
//       });
//         message_two.textContent = "自走可否を選択してください";
//       //alert("Hãy chọn Group B trước!");
//     } else {
//         message_one.textContent = "";
//         message_two.textContent = "";
//     }
// }

