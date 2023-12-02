// veriable
var currentSelection = {
    brand: null,
    vehicle: null,
    year: null,
    version: null,
    color: null,
    kilomet: null,
    status: null,
};
$("#vehiclesFieldsp").on('focus', function () {
	let pops = document.querySelector(".popup");

	if(pops.style.display=="block"){
		$("body").css('overflow','hidden');
	}
});
// Hàm hiển thị popup
function showPopupsp(tabName) {
    document.getElementById('popup').style.display = 'block';
    showPopupTabsp(tabName);
}


// Hàm để hiển thị dữ liệu trên tab popup được chọn
function showPopupTabsp(tabName) {
    var tabContents = document.querySelectorAll('#popup .tab-content');
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove('active');
    }
    document.getElementById(tabName + 'Popup').classList.add('active');

    // fetch
    fetchData()
        .then(function (data) {
            if (tabName === 'brand') {
                // Tạo danh sách dữ liệu cho car-one và car-two
                var carOneList = [];
                var carTwoList = [];
                var caroneItem = [];
                var cartwoItem = [];
                var carthreeItem = [];
                var carfourItem = [];
                var carfiveItem = [];
                var carsixItem = [];
                var carsevenItem = [];
                var careightItem = [];
                var carnineItem = [];

                data.forEach(function (item) {
                    var matt = item.matt;
                    var brand = item.brand;
                    var logo = item.logo;
                    var listItem = `${brand}`;
                    var logoItem = `<img src="${item.logo}" alt="${item.listItem}" />`;

                    // Phân tách dữ liệu vào car-one hoặc car-two dựa vào giá trị "matt"
                    if (matt === '49' || matt === '46' || matt === '53' || matt === '47' || matt === '48' || matt === '42' || matt === '41' || matt === '50' || matt === '44') {
                        carOneList.push('<li><a onclick="selectBrandsp(\'' + brand + '\')"><img src="' + logo + '" alt="' + listItem + '" /><div>' + brand + '</div></a></li>');
                    } else if (matt === '30' || matt === '25' || matt === '20' || matt === '22' || matt === '28' || matt === '57' || matt === '63' || matt === '04') {
                        carTwoList.push('<li><a onclick="selectBrandsp(\'' + brand + '\')"><img src="' + logo + '" alt="' + listItem + '" /><div>' + brand + '</div></a></li>');

                    } else if (matt === '19' || matt === '90' || matt === '21' || matt === '01' || matt === '58' || matt === '79' || matt === '06' || matt === '07') {
                        caroneItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    } else if (matt === '40' || matt === '92' || matt === '08' || matt === '33' || matt === '02' || matt === '46' || matt === '34' || matt === '23' || matt === '72' || matt === '73') {
                        cartwoItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    } else if (matt === '59' || matt === '60' || matt === '09') {
                        carthreeItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    } else if (matt === '61' || matt === '56' || matt === '03' || matt === '62' || matt === '10' || matt === '93' || matt === '94' || matt === '95' || matt === '24' || matt === '43' || matt === '74') {
                        carfourItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    } else if (matt === '96' || matt === '64' || matt === '65' || matt === '11' || matt === '45' || matt === '97' || matt === '32' || matt === '75') {
                        carfiveItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    } else if (matt === '98' || matt === '78') {
                        carsixItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    } else if (matt === '66' || matt === '55' || matt === '67' || matt === '35' || matt === '36' || matt === '99' || matt === '68' || matt === '100' || matt === '12' || matt === '101' || matt === '102' || matt === '26' || matt === '69' || matt === '51' || matt === '54' || matt === '76') {
                        carsevenItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    }else if (matt === '27' || matt === '13' || matt === '37' || matt === '103' || matt === '70' || matt === '104' || matt === '29' || matt === '106' || matt === '31' || matt === '14' || matt === '107' || matt === '52') {
                        careightItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');

                    }else if (matt === '38' || matt === '15' || matt === '39' || matt === '71' || matt === '05' || matt === '108' || matt === '16' || matt === '17' || matt === '18' || matt === '77') {
                        carnineItem.push('<li><a onclick="selectBrandsp(\'' + brand + '\')">' + brand + '</li>');
                    }
                });

                // Hiển thị dữ liệu trong car-one và car-two
                document.querySelector('.nihon-car-item ul').innerHTML = carOneList.join('');
                document.querySelector('.world-car-item ul').innerHTML = carTwoList.join('');
                document.querySelector('.link-item-one ul').innerHTML = caroneItem.join('');
                document.querySelector('.link-item-two ul').innerHTML = cartwoItem.join('');
                document.querySelector('.link-item-three ul').innerHTML = carthreeItem.join('');
                document.querySelector('.link-item-four ul').innerHTML = carfourItem.join('');
                document.querySelector('.link-item-five ul').innerHTML = carfiveItem.join('');
                document.querySelector('.link-item-six ul').innerHTML = carsixItem.join('');
                document.querySelector('.link-item-seven ul').innerHTML = carsevenItem.join('');
                document.querySelector('.link-item-eight ul').innerHTML = careightItem.join('');
                document.querySelector('.link-item-nine ul').innerHTML = carnineItem.join('');
                
            } else if (tabName === 'vehicles') {
                var ninkiData = [];
                var numberData = [];
                var textaData = [];
                var textkaData = [];
                var textsaData = [];
                var texttaData = [];
                var textnaData = [];
                var texthaData = [];
                var textmaData = [];
                var textyaData = [];
                var textraData = [];

                // Hiển thị danh sách các loại xe trong popup
                if (currentSelection.brand) {
                    var brandData = data.find(function (item) {
                        return item.brand === currentSelection.brand;
                    });

                    if (brandData) {
                        brandData.maqh.forEach(function (vehicle) {

                            // Kiểm tra giá trị của thuộc tính "group" và thêm vào mảng tương ứng
                            if (vehicle.group === 'ninki') {
                                ninkiData.push(vehicle);
                            } else if (vehicle.group === 'number') {
                                numberData.push(vehicle);
                            } else if (vehicle.group === 'texta') {
                                textaData.push(vehicle);
                            } else if (vehicle.group === 'textka') {
                                textkaData.push(vehicle);
                            } else if (vehicle.group === 'textsa') {
                                textsaData.push(vehicle);
                            } else if (vehicle.group === 'textta') {
                                texttaData.push(vehicle);
                            } else if (vehicle.group === 'textna') {
                                textnaData.push(vehicle);
                            } else if (vehicle.group === 'texha') {
                                texthaData.push(vehicle);
                            } else if (vehicle.group === 'textma') {
                                textmaData.push(vehicle);
                            } else if (vehicle.group === 'texya') {
                                textyaData.push(vehicle);
                            } else if (vehicle.group === 'texra') {
                                textraData.push(vehicle);
                            }
                        });


                        // Hiển thị dữ liệu trong div "number" và "text"
                        var ninkiList = ninkiData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const ninkiHeading = document.createElement('h4');
                        ninkiHeading.textContent = '人気の車種';

                        if (ninkiData.length > 0) {
                            document.getElementById('ninki').innerHTML = '<ul>' + ninkiHeading.outerHTML + ninkiList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('ninki').innerHTML = '<ul>' + ninkiList + '</ul>';
                        }
                        


                        var numberList = numberData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const numberHeading = document.createElement('h4');
                        numberHeading.textContent = '英数字';

                        if (numberData.length > 0) {
                            document.getElementById('number').innerHTML = '<ul id="test-1">' + numberHeading.outerHTML + numberList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('number').innerHTML = '<ul>' + numberList + '</ul>';
                        }
                        


                        var textaList = textaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const textaHeading = document.createElement('h4');
                        textaHeading.textContent = 'ア行';

                        if (textaData.length > 0) {
                            document.getElementById('text-a').innerHTML = '<ul id="test-2">' + textaHeading.outerHTML + textaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-a').innerHTML = '<ul>' + textaList + '</ul>';
                        }


                        var textkaList = textkaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const textkaHeading = document.createElement('h4');
                        textkaHeading.textContent = 'カ行';

                        if (textkaData.length > 0) {
                            document.getElementById('text-ka').innerHTML = '<ul id="test-3">' + textkaHeading.outerHTML + textkaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-ka').innerHTML = '<ul>' + textkaList + '</ul>';
                        }



                        var textsaList = textsaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const textsaHeading = document.createElement('h4');
                        textsaHeading.textContent = 'サ行';

                        if (textsaData.length > 0) {
                            document.getElementById('text-sa').innerHTML = '<ul id="test-4">' + textsaHeading.outerHTML + textsaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-sa').innerHTML = '<ul>' + textsaList + '</ul>';
                        }
                        

                        var texttaList = texttaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const texttaHeading = document.createElement('h4');
                        texttaHeading.textContent = 'タ行';

                        if (texttaData.length > 0) {
                            document.getElementById('text-ta').innerHTML = '<ul id="test-5">' + texttaHeading.outerHTML + texttaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-ta').innerHTML = '<ul>' + texttaList + '</ul>';
                        }
                        

                        var textnaList = textnaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const textnaHeading = document.createElement('h4');
                        textnaHeading.textContent = 'ナ行';

                        if (textnaData.length > 0) {
                            document.getElementById('text-na').innerHTML = '<ul id="test-6">' + textnaHeading.outerHTML + textnaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-na').innerHTML = '<ul>' + textnaList + '</ul>';
                        }
                        

                        var texthaList = texthaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const texthaHeading = document.createElement('h4');
                        texthaHeading.textContent = 'ハ行';

                        if (texthaData.length > 0) {
                            document.getElementById('text-ha').innerHTML = '<ul id="test-7">' + texthaHeading.outerHTML + texthaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-ha').innerHTML = '<ul>' + texthaList + '</ul>';
                        }


                        var textmaList = textmaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const textmaHeading = document.createElement('h4');
                        textmaHeading.textContent = 'マ行';

                        if (textmaData.length > 0) {
                            document.getElementById('text-ma').innerHTML = '<ul id="test-8">' + textmaHeading.outerHTML + textmaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-ma').innerHTML = '<ul>' + textmaList + '</ul>';
                        }


                        var textyaList = textyaData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const textyaHeading = document.createElement('h4');
                        textyaHeading.textContent = 'ヤ行';

                        if (textyaData.length > 0) {
                            document.getElementById('text-ya').innerHTML = '<ul id="test-9">' + textyaHeading.outerHTML + textyaList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-ya').innerHTML = '<ul>' + textyaList + '</ul>';
                        }


                        var textraList = textraData.map(function (vehicle) {
                            return '<li><a onclick="selectVehiclesp(\'' + vehicle.name + '\')">' + vehicle.name + '</li>';
                        }).join('');
                        const textraHeading = document.createElement('h4');
                        textraHeading.textContent = 'ラ行';

                        if (textraData.length > 0) {
                            document.getElementById('text-ra').innerHTML = '<ul id="test-10">' + textraHeading.outerHTML + textraList + '</ul>';
                        } else {
                            // Nếu danh sách không có dữ liệu, không hiển thị thẻ <h3>
                            document.getElementById('text-ra').innerHTML = '<ul>' + textraList + '</ul>';
                        }
                        

                    }

                }
            } else if (tabName === 'year') {
                // Xóa nội dung cũ của tab "vehicles" nếu tồn tại
                var yearPopupsp = document.getElementById('yearPopup');
                yearPopupsp.innerHTML = '';
                // Hiển thị danh sách các năm sản xuất trong popup
                if (currentSelection.brand && currentSelection.vehicle) {
                    var brandData = data.find(function (item) {
                        return item.brand === currentSelection.brand;
                    });

                    if (brandData) {
                        var vehicleData = brandData.maqh.find(function (vehicle) {
                            return vehicle.name === currentSelection.vehicle;
                        });

                        if (vehicleData) {
                            var yearList = vehicleData.mapx.map(function (year) {
                                return '<li><a onclick="selectYearsp(\'' + year.name + '\')">' + year.name + '</li>';
                            }).join('');

                            // Tạo và chèn tiêu đề cho tab "vehicles" bằng thẻ <div>
                            var titleDiv = document.createElement('h3');
                            titleDiv.textContent = '年式を選択してください';
                            document.getElementById('yearPopup').appendChild(titleDiv);

                            // Chèn danh sách xe vào phía dưới tiêu đề
                            var yearListContainer = document.createElement('ul');
                            yearListContainer.innerHTML = yearList;
                            document.getElementById('yearPopup').appendChild(yearListContainer);
                        }
                    }
                }
            } else if (tabName === 'version') {
                // Xóa nội dung cũ của tab "vehicles" nếu tồn tại
                var versionPopupsp = document.getElementById('versionPopup');
                versionPopupsp.innerHTML = '';
                // Hiển thị danh sách các phiên bản trong popup
                if (currentSelection.brand && currentSelection.vehicle && currentSelection.year) {
                    var brandData = data.find(function (item) {
                        return item.brand === currentSelection.brand;
                    });

                    if (brandData) {
                        var vehicleData = brandData.maqh.find(function (vehicle) {
                            return vehicle.name === currentSelection.vehicle;
                        });

                        if (vehicleData) {
                            var yearData = vehicleData.mapx.find(function (year) {
                                return year.name === currentSelection.year;
                            });

                            if (yearData) {
                                var versionList = yearData.makp.map(function (version) {
                                    return '<li><a onclick="selectVersionsp(\'' + version.name + '\')">' + version.name + '</li>';
                                }).join('');

                                // Thêm dòng "version name" vào cuối danh sách phiên bản
                                versionList += '<li><a onclick="selectVersionsp(\'不明(ベースグレードでの査定となります)\')">不明(ベースグレードでの査定となります)</li>';

                                // Tạo và chèn tiêu đề cho tab "vehicles" bằng thẻ <div>
                                var titleDiv = document.createElement('h3');
                                titleDiv.textContent = 'グレードを選択してください';
                                document.getElementById('versionPopup').appendChild(titleDiv);

                                // Chèn danh sách xe vào phía dưới tiêu đề
                                var versionListContainer = document.createElement('ul');
                                versionListContainer.innerHTML = versionList;
                                document.getElementById('versionPopup').appendChild(versionListContainer);
                            }
                        }
                    }
                }
            }
            else if (tabName === 'color') {
                var colorPopupsp = document.getElementById('colorPopupSp ul');
                colorPopupsp.innerHTML = '';
                colorPopupsp.classList.add('active');

            } else if (tabName === 'kilomet') {
                var kilometPopupsp = document.getElementById('kilometPopup ul');
                kilometPopupsp.innerHTML = '';
                kilometPopupsp.classList.add('active');

            } else if (tabName === 'status') {
                var statusPopupsp = document.getElementById('statusPopup status-content');
                statusPopupsp.innerHTML = '';
                statusPopupsp.classList.add('active');
            }


        })
        .catch(function (error) {
            console.error('Lỗi khi tải dữ liệu:', error);
        });
}

// Hàm để tải dữ liệu từ tệp JSON
function fetchData() {
    // Sử dụng fetch để tải dữ liệu từ tệp JSON
    return fetch('https://ctn-net.jp/kaitori/car/wp-content/themes/ctnkaitori/resource-parts/data-newz.json', {
        cache: 'no-store', // Tắt cache
    })
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        return data;
    })
    .catch(function (error) {
        console.error('Lỗi khi tải dữ liệu:', error);
    });
}


// // Mặc định hiển thị tab "brand" trong popup
// showPopupTabsp('brand');


