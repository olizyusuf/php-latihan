<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan Barcode</title>
</head>
<body>
    <form action="showinfo.php" method="post">
        Masukan Kode disini:
        <input type="text" name="barcode">
        <input type="submit" value="submit">
    </form>
</body>

<script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.barcode.submit();
        }
    }
</script>

</html>