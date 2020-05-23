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
            </tr>
            <tr>
            <td>Customer Phone: </td>
            <td></td>
            <td><?php echo $product['cus_phone']?></td>
            </tr>
            </tr>
            <tr>
            <td>Customer Email: </td>
            <td></td>
            <td><?php echo $product['cus_email']?></td>
            </tr>
            </tr>
            <tr>
            <td>Inquiry: </td>
            <td></td>
            <td><?php echo $product['description']?></td>
            </tr>
         </table>
    </body>
</html>