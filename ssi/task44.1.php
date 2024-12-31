<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX ilə Form Məlumatları Göndərmək</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="myForm">
        <label for="name">Ad:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="button" id="submitButton">Göndər</button>
    </form>
    <div id="response"></div>
    <script>
        $(document).ready(function() {
            $('#submitButton').click(function() {
                var formData = $('#myForm').serialize();
                $.ajax({
                    url: 'task44.2.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#response').html(response);
                    },
                    error: function() {
                        $('#response').html("Xəta baş verdi!");
                    }
                });
            });
        });
    </script>
</body>
</html>
