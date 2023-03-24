<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>ASET</title>

<head>
    <title>Invoice</title>
    <style type="text/css">
        .textbottom {
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            padding-left: 325px;
            color: rgb(79, 116, 219);
            letter-spacing: 5px;
        }

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-0pky {
            border-color: inherit;
            text-align: left;
            vertical-align: top
        }

        .tg .tg-7btt {
            border-color: inherit;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-4qqe {
            border-color: inherit;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }
    </style>
</head>

<body>
    <div>
        <img src="/images/kop.jpeg" width="50%" height="auto">
    </div>
    <div style="text-align: center;">
        </strong>
        <h1>INVOICE</h1></b>
    </div>
    <div>
        <table class="tg" style="table-layout: fixed; width: 700px">
            <colgroup>
                <col style="width: 201px">
                <col style="width: 201px">
                <col style="width: 201px">
                <col style="width: 201px">
            </colgroup>
            <thead>
                <tr>
                    <th class="tg-0pky" colspan="2">Billing To: {{ $data['bilingTo'] }}</th>
                    <th class="tg-0pky" colspan="2">Invoice NO : {{ $data['invoiceNo'] }}<br>DATE : {{ $data['date'] }}<br>TERM : {{ $data['term'] }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-0pky" colspan="2"><br>B/L NO. : {{ $data['BLNo'] }}<br>P.O.D : {{ $data['POD'] }}<br>VESSEL : {{ $data['vessel'] }}<br></td>
                    <td class="tg-0pky" colspan="2"><br>JOB DESCRIPTION : {{ $data['bilingTo'] }}<br></td>
                </tr>
                <tr>
                    <td class="tg-7btt">DETAIL OF CHARGES</td>
                    <td class="tg-7btt">QUANTITY</td>
                    <td class="tg-7btt">UNIT RATE</td>
                    <td class="tg-7btt">TOTAL AMOUNT</td>
                </tr>
                <tr>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-4qqe" colspan="3">SUBTOTAL</td>
                    <td class="tg-0pky"> {{ $data['sum'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <div>
            <h3 style="font-family: Arial, Helvetica, sans-serif;">THE SUM OF:</h3>
        </div>
        <div>
            {{ $data['bilingTo'] }}
        </div>
    </div>
    <br>
    <div>
        <div>
            <u><b>PLEASE TRANSFER TO OUR ACCOUNT:</u></b>
        </div>
        <div class="textbottom">
            BANK NAME &emsp;&emsp;&ensp;&nbsp; : BCA
        </div>
        <div class="textbottom">
            ACCOUNT NAME &ensp; : ANUGRAH SEMPURNA TRANS, CV
        </div>
        <div class="textbottom">
            ACCOUNT NO &emsp;&emsp; : 157 3888891
        </div>
        <div class="textbottom">
            SWIFT CODE &emsp;&emsp;&ensp; : CENAIDJA
        </div>
        <div class="textbottom">
            BANK ADDRESS &emsp; : KCP SUMBERSARI
        </div>
    </div><br><br><br>
    <div>
        Bandung,&emsp;&emsp;&emsp;&emsp;
    </div>
    <p id="displayDateTime"></p>
</body>
<script type="text/javascript">
    var today = new Date();
    var day = today.getDay();
    var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday ", "Thursday", "Friday", "Saturday"];
    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    var dateTime = date;

    document.getElementById("displayDateTime").innerHTML = dateTime;
</script>

</html>