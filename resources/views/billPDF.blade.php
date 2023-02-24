<div class="modal fade" id="printmodal" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-printer">
        <div class="modal-content modal-content-printer">
            <div class="modal-header d-flex w-100 border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <h1>Beauty Shop Invoice</h1>
                <!-- Product details -->
                <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Staff Name</th>
                        <th>Device Name</th>
                        <th>Customer Name</th>
                        <th>Subtotal</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Account Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product 1</td>
                        <td>Staff A</td>
                        <td>Device 1</td>
                        <td>Customer X</td>
                        <td class="right">$100.00</td>
                        <td class="right">$10.00</td>
                        <td class="right">$110.00</td>
                        <td class="right">$0.00</td>
                        </tr>
                        <tr>
                        <td>Product 2</td>
                        <td>Staff B</td>
                        <td>Device 2</td>
                        <td>Customer Y</td>
                        <td class="right">$50.00</td>
                        <td class="right">$5.00</td>
                        <td class="right">$55.00</td>
                        <td class="right">$0.00</td>
                    </tr>
                </tbody>
                </table>

                <!-- Barcode -->
                <div id="barcode">
                <!-- Add barcode image here using a library or API -->
                </div>

                <!-- Printing options -->
                <div>
                <label for="printer">Printer:</label>
                <select id="printer">
                    <option value="">Choose printer...</option>
                    <!-- List available printers here using a library or API -->
                </select>
                </div>
                <div>
                    <label for="pages">Pages:</label>
                    <input type="text" id="pages" value="1">
                </div>
                <div>
                    <label for="copies">Copies:</label>
                    <input type="text" id="copies" value="1">
                </div>
                <div>
                    <label for="layout">Layout:</label>
                    <select id="layout">
                        <option value="portrait">Portrait</option>
                        <option value="portrait">Landscape</option>
                    </select>
                </div>
                <div>
                    <label for="color">Color:</label>
                    <select id="color">
                        <option value="blackwhite">Black and white</option>
                        <option value="color">Color</option>
                    </select>
                </div>

                <!-- Print and cancel buttons -->
                <div>
                    <button onclick="printPDF()">Print</button>
                    <button onclick="cancel()">Cancel</button>
                </div>
        </div>
    </div>
</div>
<script>
    function printPdf() {
      // Get the iframe element
      let iframe = document.getElementById('pdf-iframe');

      // Wait for the PDF file to load
      iframe.onload = function() {
        // Print the PDF file
        iframe.contentWindow.print();
      };
    }
    function printPDF() {
      // Use a library or API to generate the PDF
      // Replace the following line with code to generate the PDF
      alert("PDF generated and sent to printer");
      
      // Get printing options
      var printer = document.getElementById("printer").value;
      var pages = document.getElementById("pages").value;
      var copies = document.getElementById("copies").value;
      var layout = document.getElementById("layout").value;
      var color = document.getElementById("color").value;

      // Use a library or API to send the PDF to the printer with the selected options
      // Replace the following line with code to send the PDF to the printer
      alert("PDF sent to printer with options: " + "printer=" + printer + ", pages=" + pages + ", copies=" + copies + ", layout=" + layout + ", color=" + color);
    }

    function cancel() {
      // Cancel printing
      // Replace the following line with code to cancel printing
      alert("Printing cancelled");
    }
</script>
<style>
    /* Define styles for the PDF layout */
    @page {
      size: A4;
      margin: 20mm;
    }
    body {
      font-family: Arial, sans-serif;
      font-size: 12pt;
      line-height: 1.5;
    }
    h1 {
      font-size: 24pt;
      text-align: center;
    }
    table {
      border-collapse: collapse;
      margin-top: 20px;
      margin-bottom: 20px;
      width: 100%;
    }
    table, th, td {
      border: 1px solid black;
      padding: 5px;
    }
    .center {
      text-align: center;
    }
    .right {
      text-align: right;
    }
    #barcode {
      margin-top: 20px;
      text-align: center;
    }
  </style>
