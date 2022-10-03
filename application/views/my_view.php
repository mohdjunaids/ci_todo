 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 

<table class="table">
  <thead class="thead-light">
  <tr>
              
                <th>ID:</th> 
                <th>Title:</th>
                <th>Completed</th>
                
                
            </tr>
            <?php foreach ($myJson as $value)  {    ?>
                <tr>
                     
                    <td><?php echo $value -> id ?> </td> 
                    <td><?php echo $value -> title ?> </td>
                    <td><?php echo $value -> completed ?> </td>
                     
                </tr>
            <?php  } ?>
  </tbody>
</table>
</body>
</html>