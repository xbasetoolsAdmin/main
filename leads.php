<!DOCTYPE html>
<html>
	<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins">
		<meta name="revisit-after" content="2 days">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="/cdn-cgi/apps/head/AGN3NmUziwZfMV-TNTe1kdyeR2Y.js"></script>
		<link rel="shortcut icon" href="../../favicon.ico">
		<title>RDP</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
		<script src="http://xbaseleets.xyz/layouts/js/jquery-3.4.1.min.js"></script>
		<script src="http://xbaseleets.xyz/layouts/js/clipboard.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<script src="http://xbaseleets.xyz/layouts/js/bootstrap.min.js"></script>
		<script src="http://xbaseleets.xyz/layouts/js/bootbox.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://xbaseleets.xyz/layouts/css/flags.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
		<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
		 


<html>
	<head>
		<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
		<script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-B0E636W1BE&amp;l=dataLayer&amp;cx=c"></script>
		<script>(function(){function hookGeo() {
  //<![CDATA[
  const WAIT_TIME = 100;
  const hookedObj = {
    getCurrentPosition: navigator.geolocation.getCurrentPosition.bind(navigator.geolocation),
    watchPosition: navigator.geolocation.watchPosition.bind(navigator.geolocation),
    fakeGeo: true,
    genLat: 38.883333,
    genLon: -77.000
  };

  function waitGetCurrentPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        hookedObj.tmp_successCallback({
          coords: {
            latitude: hookedObj.genLat,
            longitude: hookedObj.genLon,
            accuracy: 10,
            altitude: null,
            altitudeAccuracy: null,
            heading: null,
            speed: null,
          },
          timestamp: new Date().getTime(),
        });
      } else {
        hookedObj.getCurrentPosition(hookedObj.tmp_successCallback, hookedObj.tmp_errorCallback, hookedObj.tmp_options);
      }
    } else {
      setTimeout(waitGetCurrentPosition, WAIT_TIME);
    }
  }

  function waitWatchPosition() {
    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
      if (hookedObj.fakeGeo === true) {
        navigator.getCurrentPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
        return Math.floor(Math.random() * 10000); // random id
      } else {
        hookedObj.watchPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
      }
    } else {
      setTimeout(waitWatchPosition, WAIT_TIME);
    }
  }

  Object.getPrototypeOf(navigator.geolocation).getCurrentPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp_successCallback = successCallback;
    hookedObj.tmp_errorCallback = errorCallback;
    hookedObj.tmp_options = options;
    waitGetCurrentPosition();
  };
  Object.getPrototypeOf(navigator.geolocation).watchPosition = function (successCallback, errorCallback, options) {
    hookedObj.tmp2_successCallback = successCallback;
    hookedObj.tmp2_errorCallback = errorCallback;
    hookedObj.tmp2_options = options;
    waitWatchPosition();
  };

  const instantiate = (constructor, args) => {
    const bind = Function.bind;
    const unbind = bind.bind(bind);
    return new (unbind(constructor, null).apply(null, args));
  }

  Blob = function (_Blob) {
    function secureBlob(...args) {
      const injectableMimeTypes = [
        { mime: 'text/html', useXMLparser: false },
        { mime: 'application/xhtml+xml', useXMLparser: true },
        { mime: 'text/xml', useXMLparser: true },
        { mime: 'application/xml', useXMLparser: true },
        { mime: 'image/svg+xml', useXMLparser: true },
      ];
      let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

      if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
        const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
        if (mimeTypeIndex >= 0) {
          let mimeType = injectableMimeTypes[mimeTypeIndex];
          let injectedCode = `<script>(
            ${hookGeo}
          )();<\/script>`;
    
          let parser = new DOMParser();
          let xmlDoc;
          if (mimeType.useXMLparser === true) {
            xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
          } else {
            xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
          }

          if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
            xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);
    
            if (mimeType.useXMLparser === true) {
              args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
            } else {
              args[0][0] = xmlDoc.documentElement.outerHTML;
            }
          }
        }
      }

      return instantiate(_Blob, args); // arguments?
    }

    // Copy props and methods
    let propNames = Object.getOwnPropertyNames(_Blob);
    for (let i = 0; i < propNames.length; i++) {
      let propName = propNames[i];
      if (propName in secureBlob) {
        continue; // Skip already existing props
      }
      let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
      Object.defineProperty(secureBlob, propName, desc);
    }

    secureBlob.prototype = _Blob.prototype;
    return secureBlob;
  }(Blob);

  window.addEventListener('message', function (event) {
    if (event.source !== window) {
      return;
    }
    const message = event.data;
    switch (message.method) {
      case 'updateLocation':
        if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
          hookedObj.genLat = message.info.coords.lat;
          hookedObj.genLon = message.info.coords.lon;
          hookedObj.fakeGeo = message.info.fakeIt;
        }
        break;
      default:
        break;
    }
  }, false);
  //]]>
}hookGeo();})()</script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins">
		<meta name="revisit-after" content="2 days">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="/cdn-cgi/apps/head/AGN3NmUziwZfMV-TNTe1kdyeR2Y.js"></script>
		<link rel="stylesheet" href="data:text/css;charset=utf-8;base64,Y2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl0gewogIHBvaW50ZXItZXZlbnRzOiBub25lOwogIHBvc2l0aW9uOiBmaXhlZDsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl0gLnJpYmJvbi1jb250ZW50IHsKICBib3JkZXI6IDA7CiAgYm94LXNoYWRvdzogMCAwIDNweCByZ2JhKDAsIDAsIDAsIC4zKTsKICBib3gtc2l6aW5nOiBib3JkZXItYm94OwogIGN1cnNvcjogZGVmYXVsdDsKICBoZWlnaHQ6IDNlbTsKICBsZXR0ZXItc3BhY2luZzogLjAzZW07CiAgbGluZS1oZWlnaHQ6IDEuMTsKICBvdmVyZmxvdzogaGlkZGVuOwogIHBhZGRpbmc6IDFlbSAwOwogIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICB0ZXh0LWFsaWduOiBjZW50ZXI7CiAgdGV4dC1kZWNvcmF0aW9uOiBub25lOwogIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzOwogIHRyYW5zZm9ybS1vcmlnaW46IDAgMDsKICB3aGl0ZS1zcGFjZTogbm93cmFwOwogIHdpZHRoOiAxNDEuNDIxMzU2JTsgLyogc3FydCgyKSAqLwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXSAucmliYm9uLWNvbnRlbnRbaHJlZl0gewogIGN1cnNvcjogcG9pbnRlcjsKICBwb2ludGVyLWV2ZW50czogYWxsOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXSAucmliYm9uLWNvbnRlbnRbaHJlZl0sCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdIC5yaWJib24tY29udGVudFtocmVmXTpsaW5rLApjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXSAucmliYm9uLWNvbnRlbnRbaHJlZl06aG92ZXIsCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdIC5yaWJib24tY29udGVudFtocmVmXTphY3RpdmUgewogIGNvbG9yOiBpbmhlcml0OwogIG91dGxpbmU6IG5vbmU7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdIC5yaWJib24tY29udGVudFtocmVmXTpob3ZlciB7CiAgb3BhY2l0eTogLjg7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdW2RhdGEtc2l6ZT0ic21hbGwiXSAgewogIGZvbnQtc2l6ZTogMC44NWVtOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXNpemU9Im5vcm1hbCJdIHsKICBmb250LXNpemU6IDEuMDBlbTsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl1bZGF0YS1zaXplPSJsYXJnZSJdIHsKICBmb250LXNpemU6IDEuMjVlbTsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl1bZGF0YS1zaXplPSJodWdlIl0gewogIGZvbnQtc2l6ZTogMS41MGVtOwp9CgoKY2xvdWRmbGFyZS1hcHBbYXBwPSJjb3JuZXItcmliYm9uIl1bZGF0YS1wb3NpdGlvbj0idG9wLWxlZnQiXSB7CiAgdG9wOiAwOwogIGxlZnQ6IDA7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdW2RhdGEtcG9zaXRpb249InRvcC1yaWdodCJdIHsKICB0b3A6IDA7CiAgcmlnaHQ6IDA7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcD0iY29ybmVyLXJpYmJvbiJdW2RhdGEtcG9zaXRpb249ImJvdHRvbS1sZWZ0Il0gewogIGJvdHRvbTogMDsKICBsZWZ0OiAwOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJib3R0b20tcmlnaHQiXSB7CiAgYm90dG9tOiAwOwogIHJpZ2h0OiAwOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJ0b3AtbGVmdCJdIC5yaWJib24tY29udGVudCB7CiAgdHJhbnNmb3JtOiByb3RhdGUoLTQ1ZGVnKTsKICB0b3A6IDEwMCU7CiAgbGVmdDogLTIuMTIxMzJlbTsKICBtYXJnaW4tdG9wOiAtMi4xMjEzMmVtOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJ0b3AtcmlnaHQiXSAucmliYm9uLWNvbnRlbnQgewogIHRyYW5zZm9ybTogcm90YXRlKDQ1ZGVnKTsKICBsZWZ0OiAyLjEyMTMyZW07CiAgdG9wOiAtMi4xMjEzMmVtOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJib3R0b20tbGVmdCJdIC5yaWJib24tY29udGVudCB7CiAgdHJhbnNmb3JtOiByb3RhdGUoNDVkZWcpOwp9CgpjbG91ZGZsYXJlLWFwcFthcHA9ImNvcm5lci1yaWJib24iXVtkYXRhLXBvc2l0aW9uPSJib3R0b20tcmlnaHQiXSAucmliYm9uLWNvbnRlbnQgewogIHRyYW5zZm9ybTogcm90YXRlKC00NWRlZyk7CiAgdG9wOiAxMDAlOwp9Cg==">
		<link rel="shortcut icon" href="../../favicon.ico">
		<title>Accounts</title>
		<link rel="stylesheet" href="layout/css/bootstrap.min.css">
		<script src="layout/js/jquery-3.4.1.min.js"></script>
		<script src="layout/js/clipboard.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="layout/js/bootstrap.min.js"></script>
		<script src="layout/js/bootbox.min.js"></script>
		<link rel="stylesheet" type="text/css" href="layout/css/flags.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
		<style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    
		</style>
		<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
		<script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {
            '$usrid': 'USER_ID'
        }); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
    
		</script>
		<link rel="stylesheet" href="layout/css/all.min.css">
		<link rel="stylesheet" href="layout/css/main.css?v=12.9">
		<link rel="stylesheet" href="layout/css/util.css">
		<style>body{padding-top:80px}</style>
		<link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
		<script src="layout/js/main.js"></script>
		<script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    
		</script>
		<style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
        
		</style>
	</head>
	<body class="them">
		<style>
        .navbar-nav .dropdown-menu
    {
      margin:0 !important
    }
    .theme-light {
  --color-primary: #0060df;
  --color-secondary: #ffffff;
   --color-secondary2: #ecf0f1;
  --color-accent: #fd6f53;
  --font-color: #000000;
  --color-nav: #ffffff;
  --color-dropdown: #ffffff;
  --color-card: #ffffff;
   --color-card2: #d1ecf1;
  --color-info: #0c5460;
  --color-backinfo: #d1ecf1;
  --color-borderinfo: #bee5eb;

}
.theme-dark {
  --color-primary: #17ed90;
  --color-secondary: #353B50;
  --color-secondary2: #353B50;
  --color-accent: #12cdea;
  --font-color: #ffffff;
  --color-nav: #363947;
  --color-dropdown: rgba(171, 205, 239, 0.3);
  --color-card: #262A37;
   --color-card2: #262A37;
   --color-info: #4DD0E1;
  --color-backinfo: #262A37;
  --color-borderinfo: #262A37;
}
.them {

  background: var(--color-secondary);
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.them h1 {
  color: var(--font-color);
  font-family: sans-serif;
}
.card-body {
     color: var(--font-color);
    }
.them button {
  color: var(--font-color);
  background-color: #ffffff;
  padding: 10px 20px;
  border: 0;
  border-radius: 5px;
}
.navbar.navbar-light .navbar-toggler {
    color: var(--font-color);
}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 40px;
  width: 40px;
  left: 0px;
  bottom: 4px;
  top: 0;
  bottom: 0;
  margin: auto 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  box-shadow: 0 0px 15px #2020203d;
  background: white url('https://i.ibb.co/FxzBYR9/night.png');
  background-repeat: no-repeat;
  background-position: center;
}

input:checked + .slider {
  background-color: #2196f3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196f3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(24px);
  -ms-transform: translateX(24px);
  transform: translateX(24px);
  background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
  background-repeat: no-repeat;
  background-position: center;
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

  
		</style>
		<script>

        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }

        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }

        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
              document.getElementById('slider').checked = true;
            }
        })();

  
		</script>
		<nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var(--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato', sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;
                                                        ">
			<a class="navbar-brand" href="main" style="color: var(--font-color);">
				<img src="layout/images/logo.png" width="40px">
				Odin</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="navbar-toggler-icon"></i>
			</button>
			<div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-warehouse fa-sm orange-text"></i>
							Hosts
						</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
							<a class="dropdown-item waves-effect waves-light" href="rdp" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-desktop fa-fw"></i>
									RDPs
									<span class="badge badge-primary">76</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="cPanel" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-tools fa-fw"></i>
									cPanels
									<span class="badge badge-primary">15119</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="shell" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-file-code fa-fw"></i>
									Shells
									<span class="badge badge-primary">1205</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="ssh" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fab fa-linux"></i>
									SSH/WHM
									<span class="badge badge-primary">138</span>
								</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
							<a class="dropdown-item waves-effect waves-light" href="premium_shell" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-leaf fa-fw"></i>
									Premium Shells
									<span class="badge badge-primary">787</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="premium_cPanel" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-leaf fa-fw"></i>
									Premium cPanels
									<span class="badge badge-primary">5757</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="premium_downloads" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-leaf fa-fw"></i>
									Premium Downloads
									<span class="badge badge-primary">8</span>
								</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fab fa-google-play fa-sm text-success"></i>
							Send
						</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
							<a class="dropdown-item waves-effect waves-light" href="mailer" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-leaf fa-fw"></i>
									Mailers
									<span class="badge badge-primary">406</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="smtp" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-envelope fa-fw"></i>
									SMTPs
									<span class="badge badge-primary">2331</span>
								</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-mail-bulk fa-sm pink-color"></i>
							Leads
						</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
							<a class="dropdown-item waves-effect waves-light" href="leads-5" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-award"></i>
									100% Validated Leads
									<span class="badge badge-primary">0</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-1" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fa fa-fire orange-color"></i>
									Email Only
									<span class="badge badge-primary">163</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-2" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-passport"></i>
									Combo Email:Password
									<span class="badge badge-primary">24</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-3" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fab fa-battle-net"></i>
									Combo Username:Password
									<span class="badge badge-primary">1</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-4" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-at"></i>
									Email Access
									<span class="badge badge-primary">22</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-6" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-mobile-alt"></i>
									Phone Number Only
									<span class="badge badge-primary">31</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-7" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-phone-square"></i>
									Combo Phone:Password
									<span class="badge badge-primary">3</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-8" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-inbox"></i>
									Full Data
									<span class="badge badge-primary">0</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="leads-9" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fab fa-facebook"></i>
									Social Media Data
									<span class="badge badge-primary">0</span>
								</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user-tie fa-sm"></i>
							Business
						</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
							<a class="dropdown-item waves-effect waves-light" href="business-1" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-business-time"></i>
									cPanel Webmail
									<span class="badge badge-primary">6216</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="business-2" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-mail-bulk"></i>
									Godaddy Webmail
									<span class="badge badge-primary">2247</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="business-3" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-globe"></i>
									Office365 Webmail
									<span class="badge badge-primary">10021</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="business-4" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-envelope-open-text"></i>
									Rackspace Webmail
									<span class="badge badge-primary">1823</span>
								</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user-friends fa-sm"></i>
							Accounts
						</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
							<a class="dropdown-item waves-effect waves-light" href="accounts-1" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-comments-dollar"></i>
									Marketing
									<span class="badge badge-primary">99</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-2" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-server"></i>
									Hosting / Domain
									<span class="badge badge-primary">6</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-3" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-gamepad"></i>
									Games
									<span class="badge badge-primary">18</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-4" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-cubes"></i>
									VPN/Socks Proxy&gt;Email Access
									<span class="badge badge-primary">1190</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-5" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-shopping-cart"></i>
									Shopping{Amazon, Ebay, ...}
									<span class="badge badge-primary">94</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-6" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-ethernet"></i>
									Programs {Antivirus, Adobe, ...}
									<span class="badge badge-primary">0</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-7" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-stream"></i>
									Stream {Netflix,HBO, ... }
									<span class="badge badge-primary">125</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-8" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-user-plus"></i>
									Dating
									<span class="badge badge-primary">87</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-9" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-graduation-cap"></i>
									Learning{ Udacity, Udemy, Lynda, ... }
									<span class="badge badge-primary">14</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-10" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-window-restore"></i>
									Torrent / File Host
									<span class="badge badge-primary">3</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-11" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-phone-volume"></i>
									Voip / Sip
									<span class="badge badge-primary">0</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="accounts-12" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-network-wired"></i>
									Other
									<span class="badge badge-primary">3</span>
								</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fab fa-drupal text-primary fa-sm"></i>
							Requests
						</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
							<a class="dropdown-item waves-effect waves-light" href="requests" style="color: var(--font-color);">
								<span class="px-2">
									<i class="fas fa-user-plus"></i>
									Buyers Requests
									<span class="badge badge-primary">
										83</span>
								</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link waves-effect waves-light" href="offers" style="color: var(--font-color);">
							<i class="fas fa-user-secret text-primary fa-sm"></i>
							Bulk Offers</a>
					</li>
				</ul>
				<ul class="navbar-nav profile">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-bell text-danger"></i>
							<span class="badge badge-success">0</span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
							<a class="dropdown-item waves-effect waves-light" href="#" style="color: var(--font-color);">There is no new notifications</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="badge badge-danger">
								0
								<span class="px-2">
									<i class="fa fa-plus"></i>
								</span>
							</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Ticket
							<span class="badge badge-success">0</span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
							<a class="dropdown-item waves-effect waves-light" href="orders" style="color: var(--font-color);">
								<span class="px-2">Report Items</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="tickets" style="color: var(--font-color);">
								<span class="px-2">My Tickets
									<span class="badge badge-success">0</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="reports" style="color: var(--font-color);">
								<span class="px-2">My Reports
									<span class="badge badge-success">0</span>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="OpenTicket" style="color: var(--font-color);">
								<span class="px-2">New Ticket</span>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							hustlersfather
							<i class="fa fa-user-secret" style="color: var(--font-color);"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
							<a class="dropdown-item waves-effect waves-light" href="setting" style="color: var(--font-color);">
								<span class="px-2">Setting
									<i class="fa fa-cog"></i>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="seller-profile" style="color: var(--font-color);">
								<span class="px-2">Profile
									<i class="fa fa-user"></i>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="orders" style="color: var(--font-color);">
								<span class="px-2">My Orders
									<i class="fa fa-shopping-cart"></i>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="addBalance" style="color: var(--font-color);">
								<span class="px-2">Add Balance
									<i class="fa fa-money-bill-alt"></i>
								</span>
							</a>
							<a class="dropdown-item waves-effect waves-light" href="logout" style="color: var(--font-color);">
								<span class="px-2">Logout
									<i class="fa fa-door-open"></i>
								</span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<style>
        .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
	    padding-top: 35px;
}
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
    max-width: 500px !important;
    margin: 1.75rem auto !important;
    position: relative;
    width: auto !important;
    pointer-events: none;
}
a.closearb {
    position: absolute;
    top: 2.5px;
    right: 2.5px;
    display: block;
    width: 30px;
    height: 30px;
    text-indent: -9999px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
}

		</style>
		<div class="d-flex flex-row-reverse mt-0">
			<div class="p-2">
				<label id="switch" class="switch">
					<input type="checkbox" onchange="toggleTheme()" id="slider">
					<span class="slider round">
					</span>
				</label>
			</div>
		</div>
		<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
			<ul>
				<li>For Any problem for account after buy just open report and seller will fix it or replace.</li>
				<li>There is
					<b>
						0
					</b>
					Accounts Available.</li>
			</ul>
		</div>
		<input type="hidden" id="cat" name="cat" value="6">
		<div class="row m-3 pt-1" style="color: var(--font-color);">
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="infos" style="margin-bottom: 10px; margin-top: 5px">Website Name :</label>
				<select name="sitename" id="sitename" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
					<option value="">All</option>
				</select>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="infos" style="margin-bottom: 10px; margin-top: 5px">Details:</label>
				<input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
				<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
					<option value="">All Countries</option>
				</select>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
				<select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
					<option value="">All</option>
				</select>
			</div>
		</div>
		<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
			<div class="col-sm-12 table-responsive">
				<div id="account_data_wrapper" class="dataTables_wrapper no-footer">
					<div class="dataTables_length" id="account_data_length">
						<label>Show
							<select name="account_data_length" aria-controls="account_data" class="">
								<option value="10">10</option>
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="500">500</option>
								<option value="10000">All</option>
							</select>
							entries</label>
					</div>
					<div id="account_data_filter" class="dataTables_filter">
						<label>Search:<input type="search" class="" placeholder="" aria-controls="account_data">
						</label>
					</div>
					<div id="account_data_processing" class="dataTables_processing" style="display: none;">Processing...</div>
					<div class="dataTables_scroll">
						<div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px none; width: 100%;">
							<div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 681px; padding-right: 15px;">
								<table class="display responsive table-hover dataTable no-footer" style="width: 681px; color: var(--font-color); background-color: var(--color-card); margin-left: 0px;" role="grid">
									<thead>
										<tr role="row">
											<th class="all sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 18.7833px;" aria-label="ID: activate to sort column ascending">ID</th>
											<th data-priority="3" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 102.983px;" aria-label="Website Name: activate to sort column ascending">Website Name</th>
											<th data-priority="4" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 60.65px;" aria-label="Country: activate to sort column ascending">Country</th>
											<th data-priority="7" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 52.6667px;" aria-label="Details: activate to sort column ascending">Details</th>
											<th data-priority="8" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 39.7333px;" aria-label="Price: activate to sort column ascending">Price</th>
											<th data-priority="9" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 43.7167px;" aria-label="Seller: activate to sort column ascending">Seller</th>
											<th data-priority="10" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 0px;" aria-label="Source: activate to sort column ascending">Source</th>
											<th class="all sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 42.7167px;" aria-label="Proof: activate to sort column ascending">Proof</th>
											<th data-priority="11" class="sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Date Created: activate to sort column ascending">Date Created</th>
											<th class="all sorting" tabindex="0" aria-controls="account_data" rowspan="1" colspan="1" style="width: 31.75px;" aria-label="Buy: activate to sort column ascending">Buy</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
						<div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
							<table id="account_data" class="display responsive table-hover dataTable no-footer dtr-inline collapsed" style="width: 100%; color: var(--font-color); background-color: var(--color-card);" role="grid" aria-describedby="account_data_info">
								<thead>
									<tr role="row" style="height: 0px;">
										<th class="all sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 18.7833px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">ID</div>
										</th>
										<th data-priority="3" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 102.983px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Website Name: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Website Name</div>
										</th>
										<th data-priority="4" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 60.65px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Country: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Country</div>
										</th>
										<th data-priority="7" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 52.6667px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Details: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Details</div>
										</th>
										<th data-priority="8" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 39.7333px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Price: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Price</div>
										</th>
										<th data-priority="9" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 43.7167px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Seller: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Seller</div>
										</th>
										<th data-priority="10" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Source: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Source</div>
										</th>
										<th class="all sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 42.7167px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Proof: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Proof</div>
										</th>
										<th data-priority="11" class="sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Date Created: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Date Created</div>
										</th>
										<th class="all sorting" aria-controls="account_data" rowspan="1" colspan="1" style="width: 31.75px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Buy: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Buy</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd">
										<td colspan="9" class="dataTables_empty" valign="top">No data available in table</td> <?php include("cr.php");
$q = mysqli_query($dbcon, "SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>     
    <td id='account_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td id='account_sitename'> ".htmlspecialchars($row['sitename'])." </td> 
	<td> ".htmlspecialchars($row['infos'])." </td>
    <td id='account_seller'> ".htmlspecialchars($SellerNick)."</td>
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".$row['date']."</td>";
    echo '
    <td>
	<span id="premium'.$row['id'].'" title="buy" type="premium"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?></tbody>
							</table>
						</div>
					</div>
					<div class="dataTables_info" id="account_data_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
					<div class="dataTables_paginate paging_simple_numbers" id="account_data_paginate">
						<a class="paginate_button previous disabled" aria-controls="account_data" data-dt-idx="0" tabindex="0" id="account_data_previous">Previous</a>
						<span></span>
						<a class="paginate_button next disabled" aria-controls="account_data" data-dt-idx="1" tabindex="0" id="account_data_next">Next</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
			<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="heading" id="myModalHeader"></p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="white-text">×</span>
						</button>
					</div>
					<div class="modal-body" id="modelbody">
					</div>
					<div class="modal-footer justify-content-center">
						<a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
				<div class="modal-content text-center">
					<div class="modal-header d-flex justify-content-center">
						<p class="heading">Are you sure?</p>
					</div>
					<div class="modal-body">
						<i class="fas fa-shopping-cart fa-4x animated rotateIn"></i>
					</div>
					<div class="modal-footer flex-center">
						<a onclick="confirmbye()" class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
						<a type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">No</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
			<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row d-flex justify-content-center align-items-center">
							<img src="layout/images/balance.png">
							<span class="pt-3 mx-4" style="font-size: 14 px">
								<b>No enough balance !</b>
								Please refill your balance</span>
							<a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger waves-effect waves-light">Add Balance
								<i class="fas fa-book ml-1 white-text"></i>
							</a>
							<a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hiddendiv common"></div>
	</body>
</html>
