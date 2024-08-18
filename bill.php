<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smartphone Purchase Bill</title>
    <!-- <link rel="stylesheet" href="styles.css" /> -->
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
      }

      .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
      }

      .invoice-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
      }

      .invoice-header div {
        width: 45%;
      }

      .invoice-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }

      .invoice-table th,
      .invoice-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      .total-section {
        text-align: right;
        margin-bottom: 20px;
      }

      .total-section p {
        margin: 5px 0;
      }

      h3 {
        margin-top: 10px;
      }

      p {
        text-align: center;
        color: #555;
      }

    </style>
  </head>
  <body>


    <div class="invoice-box">
      <h1>Smartphone Store</h1>
      <p>silvassa, 396235</p>
      <p>Email: support@smartphonestore.com | Phone: 8490975977 </p>

      <div class="invoice-header">
        <div class="bill-to">
          <h2>Bill To:</h2>
          <p><strong>Customer Name:</strong>unknown</p>
          <p><strong>Address:</strong> naroli, silvassa, 396235</p>
          <p><strong>Email:</strong> kaushalraut.code@gmailcom</p>
        </div>
        <div class="invoice-details">
          <p><strong>Invoice Number:</strong> #INV12345</p>
          <p><strong>Date:</strong><?php echo date("d-m-y") ?></p>
          <p><strong>Payment Method:</strong>cash </p>
        </div>
      </div>

      <table class="invoice-table">
        <thead>
          <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td><?php echo $_REQUEST['company']." ".$_REQUEST['model'] ?></td>
            <td>1</td>
            <td><?php echo $_REQUEST['price']?>rs</td>
            <td><?php echo $_REQUEST['price']?>rs</td>
          </tr>

        </tbody>
      </table>

      <div class="total-section">
        <!-- <p><strong>Subtotal:</strong> $1048.98</p> -->
        <p><strong>Tax (8%):</strong> 1600rs</p>
        <h3><strong>Total:</strong> <?php echo $_REQUEST['price']+1600 ?>rs</h3>
      </div>

      <p>Thank you for your purchase!</p>
    </div>
  </body>
</html>
