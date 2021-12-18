document.addEventListener('deviceready', onDeviceReady, false);
var ref;
function onDeviceReady() {
    //INICIO DE BROWSER
    var options = "location=no,zoom=no";
    ref = cordova.InAppBrowser.open('https://treiz.mx/treizApp', '_blank', options);
    //SCRIPT INYECCION PARA BOTONES CALLBACK MSG
    var excode = "\
      $('.cordovaBtn').click(function (e) {\
        var message = {\
          tipo: $(this).attr('t-tipo')\
        };\
        var msgJson = JSON.stringify(message);\
        if (!webkit.messageHandlers.cordova_iab) {\
          console.warn('Cordova IAB postMessage API not found!');\
          throw 'Cordova IAB postMessage API not found!';\
        } else {\
          webkit.messageHandlers.cordova_iab.postMessage(msgJson);\
        }\
        return false;\
      })";
    //LISTENER LOCAL PARA MENSAJES DE LA PAGINA
    ref.addEventListener("message", function (message) {
        console.log(message);
        switch (parseInt(message.data.tipo)) {
            case 0:
                scanQR(checkin,"Escanear QR sector");
                break;
            case 1:
                scanQR(checkout,"Escanear QR sector");
                //QRScanner.prepare(onDone);
                break;
        }
    })
    /**
     * Callback para check
     * @param {*} result 
     */
    function checkin(result){
        alert(result.text);
        ref.executeScript({ code: "registroQR("+result.text+", 0)" });
    }

    function checkout(result){
        alert(result.text);
        ref.executeScript({ code: "registroQR("+result.text+", 1)" });
    }

    function scanQR(callback, displayText = "Escanee el QR del Sector") {
        cordova.plugins.barcodeScanner.scan(
            callback,
            function (error) {
                alert("Scanning failed: " + error);
            },
            {
                preferFrontCamera: false, // iOS and Android
                showFlipCameraButton: false, // iOS and Android
                showTorchButton: false, // iOS and Android
                torchOn: false, // Android, launch with the torch switched on (if available)
                saveHistory: false, // Android, save scan history (default false)
                prompt: displayText, // Android
                resultDisplayDuration: 0, // Android, display scanned text for X ms. 0 suppresses it entirely, default 1500
                formats: "QR_CODE", // default: all but PDF_417 and RSS_EXPANDED
                orientation: "portrait", // Android only (portrait|landscape), default unset so it rotates with the device
                disableAnimations: true, // iOS
                disableSuccessBeep: false // iOS and Android
            }
        );
    }

    ref.addEventListener("loadstop", function (pagina) {
        console.log(pagina);
        ref.executeScript({ code: excode });
    })
}