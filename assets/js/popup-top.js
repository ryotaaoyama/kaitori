document.addEventListener("DOMContentLoaded", function () {
  // Lấy tham chiếu đến popup
  const popup_top = document.getElementById('popup-top');

  // Kiểm tra xem popup đã được hiển thị trước đó
  if (localStorage.getItem('popupShown') !== 'true') {
    // Nếu chưa hiển thị trước đó, hiển thị popup
    popup_top.style.display = 'block';

  }

  // Lặp qua các thẻ li trong popup và thêm sự kiện click để đóng popup
  const liElements = popup_top.querySelectorAll('li');
  liElements.forEach(li => {
    li.addEventListener('click', function () {
      // Ẩn popup khi người dùng click vào thẻ li
      popup_top.style.display = 'none';
      // Lưu trạng thái đã hiển thị vào localStorage
      localStorage.setItem('popupShown', 'true');
    });
  });

  // Sử dụng sự kiện "load" để đảm bảo rằng popup hiển thị lại sau khi tải lại trang
  window.addEventListener('load', function () {
    // Kiểm tra xem popup đã được hiển thị trước đó
    if (localStorage.getItem('popupShown') === 'true') {
      // Nếu chưa hiển thị trước đó, hiển thị popup
      popup_top.style.display = 'block';
    }
  });
});
