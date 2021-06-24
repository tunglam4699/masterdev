<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/styles.scss" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>GAME</title>
</head>

<body>
    <div class="rootStart">
        <div class="btnStatBox">
            <input type="text" placeholder="Nhập tên người chơi" class="username" maxlength="10" id="username">
            <button class="btnStart" id="btnStart">
                <h1>START GAME</h1>
            </button>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btnStart').on('click', function() {
                var username = $('#username').val()
                if (username == '') {
                    $('input').attr("placeholder", "Bạn chưa nhập tên người chơi")
                    $('input').addClass('form_error');
                } else {
                    $.ajax({
                        url: 'includes/createUser.php',
                        method: "POST",
                        data: {
                            username: username
                        },
                        success: function(data) {
                            if (data == 1) {
                                window.location.href = "http://localhost/PHP-TEST2/question.php";
                            } else {
                                $('input').val("");
                                $('input').attr("placeholder", "Tên này đã tồn tại")
                                $('input').addClass('form_error');
                            }
                        }

                    })
                }
            })
        });
    </script>
</body>

</html>