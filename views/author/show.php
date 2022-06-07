<div class="container" style="width: 500px; height: 500px; display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;display:flex; 
    margin:auto;">
<table>
    <thead>
        <tr>
            <td>First name</td>
            <td>Last name</td>
            <td>Gender</td>
            <td>Phone number</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lists as $list): ?>
            <tr>
                <td><?php echo $list->last_name ?></td>
                <td><?php echo $list->first_name ?></td>
                <td><?php echo $list->gender ? 'Nam' : 'Nu'; ?></td>
                <td><?php echo $list->phone_number ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

</div>