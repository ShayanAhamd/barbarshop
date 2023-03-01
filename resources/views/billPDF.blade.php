<div class="d-none" id="invoice">
  <span style="
      font-size:25px;
      font-weight: bold;
      display: flex;
      justify-content: center;
    ">
    Beauty Shop
  </span>
  <span style="
      text-transform: lowercase;
      display: flex;
      justify-content: center;
    ">
    username
  </span>
  <span style="
      text-transform: lowercase;
      display: flex;
      justify-content: center;
      padding-bottom: 20px
    ">
    email
  </span>
  <div>
    <div style="display:flex;border-top: 2px solid black;width: 100%;padding-top: 10px">
      <span style="
            font-weight: bold;
          ">
        Reciept of Purchase(Inc Tax)
      </span>
      <span id="datetime" style="
          font-weight: bold;
          margin-left: auto;
        ">
      </span>
    </div>
    <div style="display:flex;padding-top: 3px">
      <span>
        Staff
      </span>
      <span style="
          margin-left: auto;
            ">
        {{session()->get('business_name')}}
      </span>
    </div>
    <div style="display:flex;padding-top: 3px">
      <span>
        Device
      </span>
      <span id="device-name" style="
          margin-left: auto;
            ">
      </span>
    </div>
    <div style="display:flex;padding-bottom: 10px;padding-top: 3px">
      <span>
        Customer
      </span>
      <span style="
          margin-left: auto;
            ">
        asdsad
      </span>
    </div>
  </div>
  <div>
    <div style="display:flex;border-top: 1px solid black;width: 100%;padding-top: 10px">
      <span style="
            font-weight: bold;
          ">
        Product
      </span>
      <span style="
          font-weight: bold;
          margin-left: auto;
          text-transform:uppercase;
        ">
        Price&emsp;qty&emsp;total
      </span>
    </div>
    <div style="display:flex;padding-top: 3px">
      <span>
        {{ ($details['name']) }}
      </span>
      <span style="
          margin-left: auto;
            ">
        ${{ $details['orignalPrice'] }}&emsp;{{ $details['quantity'] }}&emsp;${{ $details['price'] }}
      </span>
    </div>
    <div style="display:flex;padding-top: 3px;">
      <span style="text-transform:capitalize" id="discount_type_{{ $id }}">
        Discount: {{ $details['discount_name'] }}
      </span>
      <span style="
          margin-left: auto;
            " id="discount_total_{{ $id }}">
            {{ $details['discount_value'] != '' ? "-$" . $details['discount_value'] : '' }}
      </span>
    </div>
    <div style="display:flex;padding-bottom: 10px;padding-top: 3px">
      <span>
        Notes
      </span>
      <span style="
          margin-left: auto;
          font-size: 20px;
            ">
        Total Qty&emsp;{{ $details['quantity'] }}
      </span>
    </div>
  </div>
  <div>
    <div style="display:flex;border-top: 1px solid black;width: 100%;padding-top: 10px;">
      <span>
        Sub Total
      </span>
      <span style="
          margin-left: auto;
        ">
        $78.90
      </span>
    </div>
    <div style="display:flex;padding-top: 10px;padding-bottom: 10px;">
      <span>
        Total
      </span>
      <span style="
          margin-left: auto;
          font-size:40px;
          font-weight:bold;
          padding-bottom: 5px;
            ">
        $78.890
      </span>
    </div>
  </div>
  <div>
    <div style="display:flex;border-top: 1px solid black;width: 100%;padding-top: 10px">
      <span style="
            font-weight: bold;
            text-transform:uppercase;
          ">
        Account Balance
      </span>
      <span style="
          font-weight: bold;
          margin-left: auto;
          text-transform:uppercase;
        ">
        Amount
      </span>
    </div>
    <div style="display:flex;padding-top: 3px">
      <span>
        Balance
      </span>
      <span style="
          margin-left: auto;
            ">
        $10.00
      </span>
    </div>
    <div style="display:flex;padding-top: 3px;padding-bottom: 10px">
      <span>
        Max Credit
      </span>
      <span style="
          margin-left: auto;
            ">
        $10.00
      </span>
    </div>
  </div>
  <div>
    <div style="display:flex;border-top: 1px solid black;width: 100%;padding-top: 10px">
      <span>
        Previous Points
      </span>
      <span style="
          margin-left: auto;
        ">
        10
      </span>
    </div>
    <div style="display:flex;padding-top: 3px">
      <span>
        Points Gained
      </span>
      <span style="
          margin-left: auto;
            ">
        10
      </span>
    </div>
    <div style="display:flex;padding-top: 3px">
      <span>
        Current Points
      </span>
      <span style="
          margin-left: auto;
            ">
        1
      </span>
    </div>
    <div style="display:flex;padding-bottom: 10px;padding-top: 3px">
      <span>
        Points Value
      </span>
      <span style="
          margin-left: auto;
            ">
        $10.00
      </span>
    </div>
  </div>
  <div>
    <div style="display:flex;border-top: 1px solid black;width: 100%;padding-top: 10px">
      <span style="
            font-weight: bold;
            text-transform:uppercase;
          ">
        Paymnet By Tender
      </span>
      <span style="
          font-weight: bold;
          margin-left: auto;
          text-transform:uppercase;
        ">
        Amount
      </span>
    </div>
    <div style="display:flex;padding-top: 3px;padding-bottom: 10px">
      <span>
        Card
      </span>
      <span style="
          margin-left: auto;
            ">
        $12.00
      </span>
    </div>
  </div>
  <div>
    <div style="display:flex;border-top: 1px solid black;width: 100%;padding-top: 10px;padding-bottom: 10px;">
      <span style="
            font-weight: bold;
            text-transform:uppercase;
          ">
        Tax Rate
      </span>
      <span style="
          font-weight: bold;
          margin-left: auto;
          text-transform:uppercase;
        ">
        Percentage
      </span>
      <span style="
          font-weight: bold;
          margin-left: auto;
          text-transform:uppercase;
        ">
        Tax
      </span>
    </div>
  </div>
  <span style="
      display: flex;
      justify-content: center;
    ">
    VAT Number: GNBA24782374
  </span>
  <div style="text-align: center;border-top: 1px solid black;width: 100%;padding-top: 10px;padding-bottom: 10px;">
    <span>
      Please retain your receipt for funds within 14 days form the date of purchase
    </span>
    <br>
    <span style="
        font-weight:bold;
      ">
      Follow our socail media for 10% off on your next treatment
    </span>
    <br>
  </div>
</div>
<script>
    // to get current date & time
    const now = new Date();
    const datetimeSpan = document.getElementById("datetime");
    datetimeSpan.textContent = now.toISOString();

    // to get the device name
    const userAgent = navigator.userAgent.toLowerCase();
    let deviceType;

    if (/mobile/i.test(userAgent)) {
        deviceType = 'Mobile Phone';
    } else if (/tablet/i.test(userAgent)) {
        deviceType = 'Tablet';
    } else {
        deviceType = 'Personal Computer';
    }
    document.getElementById("device-name").innerHTML = deviceType;
</script>