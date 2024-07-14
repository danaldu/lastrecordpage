<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Last Stored Data</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
  <div class="title"><h1>آخر قيمة تم تخزينها في قاعدة البيانات </h1></div>



  <div class="result">
  <?php include 'fetch_last_record.php'; ?>

<?php if (isset($row)): ?>
    <table border="1" class="container" >
        <tr>
            <!-- Replace these with your actual column names -->
            <th>ID</th>
            <th>direction</th>
            
        </tr>
        <tr>
            <!-- Replace these with your actual column names -->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['direction']; ?></td>
            
        </tr>
    </table>
<?php endif; ?>



  </div>
</div>
   

</body>
</html>
