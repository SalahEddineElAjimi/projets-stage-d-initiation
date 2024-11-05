@extends('adminlte::page')



@section('title')
    Factures Des Produits | Laravel Document App
@endsection

@section('content_header')
    <h1>Factures Des Produits</h1>
@endsection


@section('content')
<body style="background: #f6f6f6 ; margin:0 ; padding:0">
    <div class="col-md-12">
        <table class="table table-responsive">
          <thead>
            <tr>

              <th>Produis</th>
              <th>Quantite</th>
              <th>Prix</th>
              <th>Total</th>
              <td>
                <a href="javascript:0" class="btn btn-success" onclick="BtnAdd()"><i class="fa fa-plus" ></i></a>
              </td>
            </tr>
          </thead>
          <tbody id="Tbody" class="row_container">

              <tr id="Trow" >

                <td>
                    <select class="form-control">
                        <option>Ordinateur</option>
                        <option value="1">Telephone</option>
                        <option value="2">Television</option>

                      </select>
                </td>
                <td>
                  <input type="text" name="quantity" class="form-control" placeholder="Quantity" id="quantity">
                </td>
                <td>
                  <input type="text" name="unit_price" class="form-control" placeholder="Prix" id="unitprice">
                </td>
                <td>
                  <input type="text" name="total" class="form-control" placeholder="Total" id="total" style="cursor: pointer;" readonly>
                </td>

                <td>
                    <a href="javascript:0" class="btn btn-danger" onclick="BtnDel(this)"><i class="fa fa-minus"></i></a>
                  </td>
              </tr>
          </tbody>
          <tbody>
              <tr>
                <td colspan="3"></td>
                <td></td>
                <td></td>

              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Sub Total:</strong>
                </td>
                <td>
                  <input type="text" name="subtotal" class="form-control" id="subtotal" value="0.00" readonly>
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>VAT(%):</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="vat">
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>VAT+Sub Total:</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="vatsubtotal" value="0.00" readonly>
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Paid:</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="paid">
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Due:</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="due" value="0.00" readonly>
                </td>

              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Grand Total:</strong>
                </td>
                <td>
                  <input type="text" name="" class="form-control" id="grandtotal" value="0.00" readonly>
                </td>
                <td></td>
              </tr>
              <td><button type="button" class="btn btn-success" onclick="GetPrint()">Telechargement</button></td>
          </tbody>
        </table>
    </div>




</body>

@endsection

@section('js')
    <script>
        $(document).ready(function() {

            $("#total").click(function() {
        /*var quantity = document.getElementById("quantity").value;*/
        var quantity = $("#quantity").val();

        var unitprice = $("#unitprice").val();
        var total = (quantity*unitprice);

         $('#total').val(total);
         $('#subtotal').val(total);

});

$('#vat').change(function() {
  var vInput = this.value;

  var subtotal = $("#subtotal").val();

  var vInput = ((vInput*subtotal)/100);

  var vstotal = (parseFloat(subtotal)+parseFloat(vInput)).toFixed(1);
  $('#vatsubtotal').val(vstotal);
  });

$('#paid').change(function() {
  var pInput = this.value;
  var vatsubtotal = $("#vatsubtotal").val();

    if((pInput < vatsubtotal) || (pInput <= vatsubtotal)){
      $('#paid').val(pInput);

      var dInput = (vatsubtotal-pInput);
      $('#due').val(dInput);

      var total = $("#total").val();
      var subtotal = $("#subtotal").val();
      var gtInput = (parseFloat(total)+parseFloat(subtotal)+parseFloat(vatsubtotal)).toFixed(1);
      $('#grandtotal').val(gtInput);
    }else{
      alert('You are paying so much amount');

    }
  });

});
    function GetPrint(){
        window.print();
    }
    function BtnAdd() {
       var v = $('#Trow').clone().appendTo('#Tbody');
       $(v).find('input').val('');
       //$(v).removeClass('d-none');
    }
    function BtnDel(v){
        $(v).parent().parent().remove();
    }



    </script>

@endsection


