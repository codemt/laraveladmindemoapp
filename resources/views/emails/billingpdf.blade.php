<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

        <table class="body-wrap">
                <tr>
                    <td></td>
                    <td class="container" width="600">
                        <div class="content">
                            <table class="main" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-wrap aligncenter">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td class="content-block">
                                                <h1 class="aligncenter">{{ $fee_amount }} Paid for {{ $course_name }} Lessons </h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-block">
                                                    <h2 class="aligncenter">Thanking You , 101MusicalsAcademy of Music </h2>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-block aligncenter">
                                                    <table class="invoice">
                                                        <tr>
                                                        <td>{{ $student_name }}<br>Valid Till<br>{{ $valid_till }}</td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td>
                                                                <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td>Service 1</td>
                                                                        <td class="alignright">$ 19.99</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service 2</td>
                                                                        <td class="alignright">$ 9.99</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Service 3</td>
                                                                        <td class="alignright">$ 4.00</td>
                                                                    </tr>
                                                                    <tr class="total">
                                                                        <td class="alignright" width="80%">Total</td>
                                                                        <td class="alignright">$ 33.98</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr> --}}
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-block aligncenter">
                                                    {{-- <a href="http://www.mailgun.com">View in browser</a> --}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-block aligncenter">
                                                    101MusicalsAcademy , 217/8475 ,Opposite Rationing Office, <br>
                                                     Kannamwar Nagar I, Vikhroli East, Mumbai, Maharashtra 400083 <br>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class="footer">
                                <table width="100%">
                                    <tr>
                                        <td class="aligncenter content-block">Questions? Email <a href="mailto:">mithilesh@qeducation.in</a></td>
                                    </tr>
                                </table>
                            </div></div>
                    </td>
                    <td></td>
                </tr>
            </table>
    
</body>
</html>