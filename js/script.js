function serverRequest(url, method, formData, callback) {

     let headers;

     if(method == "GET" || !formData) {
         headers = {
             method: method
         };
     } else {
         headers = {
             method: method,
             body: formData
         }
     }
    fetch(url, headers)
    .then((data) => {
        return data.json();
    }).then((result) => {
        callback(result);
    }).catch((err) => {
        console.log(err);
    });
}

function viewHoroscope() {
    var address = "./php/viewHoroscope.php";
    var result = document.querySelector('.result');

    serverRequest(address, "GET", undefined, (response) => {

        if(response) {
            console.log(response);
            result.innerHTML = `Your horoscope sign is: ${response[0].sign}`;
        }
    });
}

function addHoroscope() {

    var userData = new FormData();
    var address = "./php/addHoroscope.php";
    var selectedDate = new Date(document.querySelector('#date').value);
    selectedDate.setFullYear("2019");
    var convertDate = selectedDate.toISOString().substring(0,10);
    


    userData.set("selectedDate", convertDate);
    console.log(convertDate);

    serverRequest(address, "POST", userData, (response) => {
        viewHoroscope();
    });
}

function deleteHoroscope() {
    var result = document.querySelector('.result');
    var address = "./php/deleteHoroscope.php";
    serverRequest(address, "DELETE", undefined, (response)=> {
        viewHoroscope();
        result.innerHTML = "";
    });
}

function updateHoroscope() {
    var address = "./php/updatedHoroscope.php";
    serverRequest(address, "POST", formData, (response)=> {
        viewHoroscope();
    })
}