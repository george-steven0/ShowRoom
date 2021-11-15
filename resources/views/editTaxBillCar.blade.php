<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الفاتورة</title>
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pdfStyle.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"  />
</head>

<body>

    <form action="{{ route('update.taxBillCar',$taxbill->id) }}" method="POST">
        @csrf

        <div class="tax-billCar">
            <div class="billSerialCont">
                <p class="taxBillTitle">فاتورة بيع</p>
                <p class="taxBillSerialCont">
                    <select name="sellBillId"  id="taxBillCarId" onchange="getSellBillCarInfo()">
                        <option selected value="{{ $taxbill->sellBillId }}">{{ $taxbill->sellBillId }}</option>
                        @foreach($sellbills as $sellbill)
                        @if($sellbill->id == $taxbill->sellBillId)
                        @continue
                        @endif
                            <option value="{{ $sellbill->id }}">{{ $sellbill->id }}</option>
                        @endforeach

                    </select>
                </p>
            </div>

            <div class="billDetails">
                <ul>
                    <li>
                        <span>التـاريــخ: </span><input name="date" id="taxBillCarDate" value="{{ $taxbill->date }}" type="date"  />
                    </li>
                    <li>
                        <span>المطلوب من السيد: </span><input name="clientName" id="taxBillCarName" value="{{ $taxbill->clientName }}" type="text"  readonly/>
                    </li>
                    <li>
                        <span>العنوان: </span><input name="address" id="taxBillCarAddress" value="{{ $taxbill->address }}" type="text" readonly/>
                    </li>
                </ul>
            </div>

            <div class="taxBillTable">
                <table class="table table-bordered">
                    <thead>
                        <th>القيمة </th>
                        <th>الشاسية</th>
                        <th>الماتور</th>
                        <th>البيـــــــان</th>
                    </thead>
                    <tbody>
                        <tr class="carPriceTax">
                            <td>
                                <input name="totalPrice" id="taxBillCarTotalPrice" value="{{ $taxbill->totalPrice }}" type="number" step="any" />
                            </td>
                            <td>
                                <input name="chase" id="taxBillCarChase" value="{{ $taxbill->chase }}" type="text" readonly />
                            </td>
                            <td>
                                <input name="motor" id="taxBillCarMotor" value="{{ $taxbill->motor }}" type="text" readonly />
                            </td>
                            <td>
                                <input name="brand" type="text" value="{{ $taxbill->brand }}"  id="taxBillCarBrand" readonly/>
                                <input name="model" type="text" value="{{ $taxbill->model }}" id="taxBillCarModel" readonly />

                            </td>
                        </tr>

                        <tr class="carPriceTaxTitle">
                            <td>
                                <input name="carPrice" id="taxBillCarCarPrice" value="{{ $taxbill->carPrice }}" type="number" step="any" />
                                <input name="addedMoney" id="taxBillCarAddedMoney" value="{{ $taxbill->addedMoney }}" type="number" step="any" />
                                <input name="developFee" id="taxBillCarDevelopFee" value="{{ $taxbill->developFee }}" type="number"  step="any"/>
                                <input name="insurance" id="taxBillCarInsurance" value="{{ $taxbill->insurance }}" type="number" step="any" />
                                <input name="insuranceFee" id="taxBillCarInsuranceFee" value="{{ $taxbill->insuranceFee }}" type="number" step="any" />
                            </td>
                            <td colspan="3">
                                <span>سعر السيارة</span>
                                <span>قيمة المضافة</span>
                                <span>رسم التنمية</span>
                                <span>الضمان </span>
                                <span>ض. الضمان </span>
                            </td>
                        </tr>

                        <tr class="taxBillFinallPrice">
                            <td>
                                <input name="billTotal" value="{{ $taxbill->billTotal }}" id="taxBillCarBillTotal" type="text" step="any" readonly/>
                            </td>
                            <td colspan="3">
                                <textarea readonly></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="taxBillSignture">
                <span>التوقيع </span><span> .....................................</span>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-outline-success add_new saveTaxbillBtnCar" >حفظ</button>
                </div>
            </div>
        </div>


    </form>


</body>

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables.js') }}"></script>
<script src="{{ asset('assets/js/datatables-bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>

<script>
    $('#taxBillCarId').select2();
     $('#taxBillCarInsuranceFee').keyup(function(){
       let price = Number($('#taxBillCarCarPrice').val());
       let added = Number($('#taxBillCarAddedMoney').val());
       let developfee = Number($('#taxBillCarDevelopFee').val());
       let insurance = Number($('#taxBillCarInsurance').val());
       let insurancefee = Number($('#taxBillCarInsuranceFee').val());
       let totalCar = price + added + developfee + insurance + insurancefee;
       let roundedCar = Math.round(totalCar*100)/100;

        $('#taxBillCarBillTotal').val(roundedCar) ;
   })

   function getSellBillCarInfo()
    {
        let id = $('#taxBillCarId').val();
        console.log(id);
        $.get('/sellBillCarInfo/'+id,function(sellbill)
        {
            $('#taxBillCarName').val(sellbill.load);
            $('#taxBillCarAddress').val(sellbill.address);
            $('#taxBillCarBrand').val(sellbill.brand);
            $('#taxBillCarModel').val(sellbill.model);
            $('#taxBillCarChase').val(sellbill.chase);
            $('#taxBillCarMotor').val(sellbill.motor);
        });
    }

</script>
