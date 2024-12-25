<h1>ASSY EMPAT</h1>
<table class="table">
    <thead>
        <tr>
            <th>Plan</th>
            <th>Area</th>
            <th>Line</th>
            <th>Product</th>
            <th>Prod Qty</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($production as $row) { ?>

            <tr>
                <td><?=$row->plan?></td>
                <td><?=$row->area?></td>
                <td><?=$row->line?></td>
                <td><?=$row->product?></td>
                <td><?=$row->qty?></td>
            </tr>

        <?php } ?>
    </tbody>
</table>