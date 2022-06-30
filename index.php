<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP</h1>

    <script>

    const formData = new FormData()

    formData.append('nombre','Mr.Michi')
    formData.append('edad','14')

    fetch("server.php"{
        body: formData,
        method: "POST"
    })
    .then(res => res.text())
    .them(data => {
        console.log(data)
    })


    </script>

</body>
</html>