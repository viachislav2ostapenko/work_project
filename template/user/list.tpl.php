<table>
<?php foreach ($this->users as $user){ ?>
    <tr>
    <?php foreach ($user as $key=>$value){ ?>
        <td>
        <?php echo $value;?>
        </td>
    <?php } ?>
        <td>
            <a href="/controller/user/delete.php?id=<?php echo $user['id']?>">DELETE</a>
        </td>
    </tr>
<?php }?>
</table>
