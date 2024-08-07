<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Criminal FingerPrint</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="css/site.css" />
    <link rel="stylesheet" href="{{asset('dist/css/font-awsome.css')}}">
</head>
<body>
    <div class="container">
        <form action="post" action="{{}}">
            <div class="form-group">
                <label for="LeftThumb">Left Thumb</label>
                <input type="text" class="form-control" name="LeftThumb" id="LeftThumb">
            </div>
            <div class="form-group">
                <label for="RightThumb">Right Thumb</label>
                <input type="text" class="form-control" name="RightThumb" id="RightThumb">
            </div>

            <div class="form-group">
                <label for="LeftIndex">Left Index</label>
                <input type="text" class="form-control" name="LeftIndex" id="LeftIndex">
            </div>

            <div class="form-group">
                <label for="RightIndex">Right Index</label>
                <input type="text" class="form-control" name="RightIndex" id="RightIndex">
            </div>
        </form>
    </div>

    <div class="container">
        <main role="main" class="pb-3">
            <div class="row">
                <div class="col-md-10">
                    <p>Criminal Fingerprint</p>
                    <div class="d-flex flex-row">
                        <div class="p-5 d-flex flex-column">
                            <div>
                                <i onclick="captureFP(1)" class="fa-solid fa-fingerprint" style="font-size:40pt;cursor:pointer"></i>
                            </div>
                            <div>
                                <p>Left Thumb</p>
                            </div>
                        </div>
                        <div class="p-5 d-flex flex-column">
                            <div>
                                <i onclick="captureFP(2)" class="fa-solid fa-fingerprint" style="font-size:40pt;cursor:pointer"></i>
                            </div>
                            <div>
                                <p>Left Index</p>
                            </div>
                        </div>
                        <div class="p-5 d-flex flex-column">
                            <div>
                                <i onclick="captureFP(3)" class="fa-solid fa-fingerprint" style="font-size:40pt;cursor:pointer"></i>
                            </div>
                            <div>
                                <p>Right Thumb</p>
                            </div>
                        </div>
                        <div class="p-5 d-flex flex-column">
                            <div>
                                <i onclick="captureFP(4)" class="fa-solid fa-fingerprint" style="font-size:40pt;cursor:pointer"></i>
                            </div>
                            <div>
                                <p>Right Index</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <table width="1012" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr align="center">
                                <td class="auto-style2" align="right" valign="top">&nbsp;</td>
                                <td class="style3">
                                    <span class="download_href">
                                        <img id="FPImage1" alt="Fingerpint Image" height="300" width="210" align="center" src="Image/PlaceFinger.bmp"> <br>
                                        <input type="submit" value="Click to Scan" onclick="captureFP()"><br>
                                        <br>
                                        <p id="result"></p>
                                    </span>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style2">&nbsp;</td>
                                <td class="style3">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/site.js?v=4q1jwFhaPaZgr8WAUSrux6hAuh0XDg9kPS3xIVq36I0"></script>

    <script type="text/javascript">
    var secugen_lic = "";

    function ErrorCodeToString(ErrorCode) {
        var Description;
        switch (ErrorCode) {
            case 51:
                Description = "System file load failure";
                break;
            case 52:
                Description = "Sensor chip initialization failed";
                break;
            case 53:
                Description = "Device not found";
                break;
            case 54:
                Description = "Fingerprint image capture timeout";
                break;
            case 55:
                Description = "No device available";
                break;
            case 56:
                Description = "Driver load failed";
                break;
            case 57:
                Description = "Wrong Image";
                break;
            case 58:
                Description = "Lack of bandwidth";
                break;
            case 59:
                Description = "Device Busy";
                break;
            case 60:
                Description = "Cannot get serial number of the device";
                break;
            case 61:
                Description = "Unsupported device";
                break;
            case 63:
                Description = "SgiBioSrv didn't start; Try image capture again";
                break;
            default:
                Description = "Unknown error code or Update code to reflect latest result";
                break;
        }
        return Description;
    }

    function captureFP(index) {
        CallSGIFPGetData(SuccessFunc, ErrorFunc, index);
    }

    function SuccessFunc(result, index) {
        if (result.ErrorCode == 0) {
            if (result != null && result.BMPBase64.length > 0) {
                document.getElementById("FPImage1").src = "data:image/bmp;base64," + result.BMPBase64;
            }
            var tbl = "<table style=\"border: 1px solid black\">";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> Serial Number of Device</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b>" + result.SerialNumber + "</b> </td>";
            tbl += "</tr>";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> Image Height</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b>" + result.ImageHeight + "</b> </td>";
            tbl += "</tr>";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> Image Width</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b>" + result.ImageWidth + "</b> </td>";
            tbl += "</tr>";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> Image Resolution</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b>" + result.ImageDPI + "</b> </td>";
            tbl += "</tr>";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> Image Quality (1-100)</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b>" + result.ImageQuality + "</b> </td>";
            tbl += "</tr>";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> NFIQ (1-5)</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b>" + result.NFIQ + "</b> </td>";
            tbl += "</tr>";
            tbl += "<tr style=\"border: 1px solid black\">";
            tbl += "<td style=\"border: 1px solid black\"> Template(base64)</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b> <textarea rows=8 cols=50>" + result.TemplateBase64 + "</textarea></b> </td>";
            tbl += "</tr>";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> Image WSQ Size</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b>" + result.WSQImageSize + "</b> </td>";
            tbl += "</tr>";
            tbl += "<tr>";
            tbl += "<td style=\"border: 1px solid black\"> EncodeWSQ(base64)</td>";
            tbl += "<td style=\"border: 1px solid black\"> <b> <textarea rows=8 cols=50>" + result.WSQImage + "</textarea></b> </td>";
            tbl += "</tr>";
            tbl += "</table>";

            if (index == 1) {
                document.getElementById('LeftThumb').value = result.TemplateBase64;
            } else if (index == 2) {
                document.getElementById('LeftIndex').value = result.TemplateBase64;
            } else if (index == 3) {
                document.getElementById('RightThumb').value = result.TemplateBase64;
            } else if (index == 4) {
                document.getElementById('RightIndex').value = result.TemplateBase64;
            }
        } else {
            alert("Fingerprint Capture Error Code:  " + result.ErrorCode + ".\nDescription:  " + ErrorCodeToString(result.ErrorCode) + ".");
        }
    }

    function ErrorFunc(status) {
        alert("Check if SGIBIOSRV is running; Status = " + status + ":");
    }

    function CallSGIFPGetData(successCall, failCall, index) {
        var uri = "https://localhost:8443/SGIFPCapture";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var fpobject = JSON.parse(xmlhttp.responseText);
                successCall(fpobject, index);
            } else if (xmlhttp.status == 404) {
                failCall(xmlhttp.status)
            }
        }
        var params = "Timeout=" + "10000";
        params += "&Quality=" + "50";
        params += "&licstr=" + encodeURIComponent(secugen_lic);
        params += "&templateFormat=" + "ISO";
        params += "&imageWSQRate=" + "0.75";
        xmlhttp.open("POST", uri, true);
        xmlhttp.send(params);

        xmlhttp.onerror = function () {
            failCall(xmlhttp.statusText);
        }
    }
    </script>
</body>
</html>
