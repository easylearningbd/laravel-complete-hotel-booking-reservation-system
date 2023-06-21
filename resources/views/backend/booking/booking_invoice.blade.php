<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css"> 
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong>EasyShop</strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
               EasyShop Head Office
               Email:support@easylearningbd.com <br>
               Mob: 1245454545 <br>
               Dhaka 1207,Dhanmondi:#4 <br>
              
            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
     
    <thead class="table-light">
        <tr>
            <th>Room Type</th>
            <th>Total Room</th>
            <th>Price</th>
            <th>Check In / Out Date</th>
            <th>Total Days</th>
            <th>Total </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $editData->room->type->name }}</td>
            <td>{{ $editData->number_of_rooms }}</td>
            <td>${{ $editData->actual_price }}</td>
            <td>
                <span class="badge bg-primary">{{ $editData->check_in }}</span>  /<br> 
                <span class="badge bg-warning text-dark">{{ $editData->check_out }}</span></td>
            <td>{{ $editData->total_night }}</td>
            <td>${{ $editData->actual_price *  $editData->number_of_rooms }}</td>

        </tr>
    </tbody> 
              
  </table>
  <br/>

  <table class="table test_table" style="float: right" border="none">
    <tr>
        <td>Subtotal</td>
        <td>${{ $editData->subtotal }}</td>
    </tr>
    <tr>
        <td>Discount</td>
        <td>${{ $editData->discount }}</td>
    </tr>
    <tr>
        <td>Grand Total</td>
        <td>${{ $editData->total_price }}</td>
    </tr>
</table>
 


   
 
  <table class="table test_table" style="float:right; border:none">
                        
 </table>


  <div class="thanks mt-3">
    <p>Thanks For Your Booking..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>