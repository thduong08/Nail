$(document).ready(function () {
  // Ban đầu, ẩn phần thông tin
  $("#hide-more-info").hide();

  // Xử lý sự kiện khi người dùng nhấn vào "Show More Info"
  $("#show-more-info").click(function () {
    $("#referralImage_webView").show();
    $("#sidebar").show();
    $("#hide-more-info").show();
    $("#show-more-info").hide();
  });

  // Xử lý sự kiện khi người dùng nhấn vào "Hide More Info"
  $("#hide-more-info").click(function () {
    $("#referralImage_webView").hide();
    $("#sidebar").hide();
    $("#hide-more-info").hide();
    $("#show-more-info").show();
  });

});

document.addEventListener("DOMContentLoaded", function () {
  const manicuresTab = document.getElementById("category_mani");
  const pedicuresTab = document.getElementById("category_pedi");
  const manicuresServices = document.querySelectorAll(".service-mani");
  const pedicuresServices = document.querySelectorAll(".service-pedi");

  manicuresTab.addEventListener("click", function (event) {
    event.preventDefault();

    pedicuresTab.classList.remove("tabactive");
    manicuresTab.classList.add("tabactive");

    pedicuresServices.forEach(function (service) {
      service.style.display = "none";
    });

    manicuresServices.forEach(function (service) {
      service.style.display = "block";
    });
  });

  pedicuresTab.addEventListener("click", function (event) {
    event.preventDefault();

    manicuresTab.classList.remove("tabactive");
    pedicuresTab.classList.add("tabactive");

    manicuresServices.forEach(function (service) {
      service.style.display = "none";
    });

    pedicuresServices.forEach(function (service) {
      service.style.display = "block";
    });
  });

  manicuresTab.click(); // Default to Manicures tab
});



// Lấy các phần tử select
const yearSelect = document.getElementById("yearSelect");
const monthSelect = document.getElementById("monthSelect");
const daySelect = document.getElementById("daySelect");

// Hàm để tạo danh sách năm, tháng và ngày
function populateYears() {
  const currentYear = new Date().getFullYear();
  for (let year = currentYear - 5; year <= currentYear + 5; year++) {
    const option = document.createElement("option");
    option.value = year;
    option.textContent = year;
    yearSelect.appendChild(option);
  }
}

function populateMonths() {
  const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  for (let i = 0; i < months.length; i++) {
    const option = document.createElement("option");
    option.value = i + 1;
    option.textContent = months[i];
    monthSelect.appendChild(option);
  }
}

function populateDays() {
  const year = parseInt(yearSelect.value);
  const month = parseInt(monthSelect.value);
  const daysInMonth = new Date(year, month, 0).getDate();
  daySelect.innerHTML = "";

  for (let day = 1; day <= daysInMonth; day++) {
    const option = document.createElement("option");
    option.value = day;
    option.textContent = day;
    daySelect.appendChild(option);
  }
}

// Sự kiện khi thay đổi năm
yearSelect.addEventListener("change", function () {
  populateDays();
});

// Sự kiện khi thay đổi tháng
monthSelect.addEventListener("change", function () {
  populateDays();
});


// Khởi tạo
populateYears();
populateMonths();
populateDays();

function updateMonth() {
  var selectedMonth = document.getElementById('monthSelect').value;
  var selectedYear = document.getElementById('yearSelect').value;

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'update_date.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById('datePicker').innerHTML = xhr.responseText;
    }
  };

  xhr.send('month=' + selectedMonth + '&year=' + selectedYear);
}






