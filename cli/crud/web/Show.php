<?php include_once __DIR__.'/query-builder/query.php';
      include_once __DIR__.'/function.php';

$query = new Query();
$records = $query->select('*')->table('emp')->allRecords();
?>
<html>
<head>
   <title>Show Records</title>
</head>
<body>
    <table width="100%" rules="all" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit-1</th>
            <th>Edit-2</th>
            <th>Delete-1</th>
            <th>Delete-2</th>
        </tr>
        <?php foreach($records as $row): ?>
        <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->email;?></td>
            <td> <a href="<?php echo url("edit-1.php?id={$row->id}")  ?>">Edit1</a></td>
            <td> <a href="<?php echo url("edit-2.php?id={$row->id}")  ?>">Edit2</a></td>
            <td> <a href="<?php echo url("delete-1.php?id={$row->id}")  ?>">Delete1</a></td>
            <td> <a href="javascript:confirmDelete('<?php echo $row->id ?>');">Delete2</a></td>
            
           
        </tr>
       <?php endforeach; ?>
    </table>
    <script>
    function confirmDelete(id){
        if(window.confirm("Are you sure to delete ?")){
            window.location.href="<?php echo url('delete-2.php?id=')?>"+id;
        }
    }
    </script>
</body>
</html>