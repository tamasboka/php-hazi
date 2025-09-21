<style>
    table, td, th {
        border: 1px solid #999;
        border-collapse: "collapse";
        padding: 4px;
        text-align: center;
    }
</style>

<?php
    $size = 10;
?>
<hr>

<table>
    <tr>
        <th>&plus;</th>
        <?php for ($i = 1; $i <= $size; $i++) : ?>
            <th>
                <?= $i ?>
            </th>
        <?php endfor; ?>
    </tr>
    <?php for ($row = 1; $row <= $size; $row++) : ?>
        <tr>
            <th>
                <?= $row ?>
            </th>
            <?php for ($col = 1; $col <= $size; $col++) : ?>
                <td>
                    <?= $row + $col; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
