<!doctype HTML>
<html>
    <head>
        <title>Email</title>
    </head>
    <body>
        <h3>Customer Inquiry</h3>
        <table>
            <tr>
                <td>Product No: </td>
                <td></td>
                <td><?php echo $product['id'];?></td>
            </tr>
            <tr>
                <td>Product Name: </td>
                <td></td>
                <td><?php echo $product['pro_title'];?></td>
            </tr>
            <tr>
                <td>Customer Name: </td>
                <td></td>
                <td><?php echo $product['cus_name'];?></td>
            </tr>
            <tr>
                <td>Customer Phone: </td>
                <td></td>
                <td><?php echo $product['cus_phone']?></td>
            </tr>
            <tr>
                <td>Customer Email: </td>
                <td></td>
                <td><?php echo $product['cus_email']?></td>
            </tr>
            <?php if(!empty($product['leasing_amount'])):?>
                <tr>
                    <td>Leasing Amount: </td>
                    <td></td>
                    <td><?php echo $product['leasing_amount']?></td>
                </tr>
            <?php endif;?>
            <?php if(!empty($product['monthly_installment'])):?>
                <tr>
                    <td>Monthly Installment: </td>
                    <td></td>
                    <td><?php echo $product['monthly_installment']?></td>
                </tr>
            <?php endif;?>
            <?php if(!empty($product['installment_plan'])):?>
                <tr>
                    <td>Installment Plan: </td>
                    <td></td>
                    <td><?php echo $product['installment_plan']?></td>
                </tr>
            <?php endif;?>
            <tr>
                <td>Inquiry: </td>
                <td></td>
                <td><?php echo $product['description']?></td>
            </tr>
         </table>
    </body>
</html>