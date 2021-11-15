<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الفاتورة</title>
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

    <form id="taxBillCarForm">
        @csrf

        <div class="tax-billCar">
            <div class="billSerialCont">
                <p class="taxBillTitle">فاتورة بيع</p>
                <p class="taxBillSerialCont">
                    <input type="text" class="taxSerialInp" value="{{ $taxbill->sellBillId }}" readonly>
                </p>
            </div>

            <div class="billDetails">
                <ul>
                    <li>
                        <span>التـاريــخ: </span><input id="taxBillCarDate" value="{{ $taxbill->date }}" type="date"  readonly />
                    </li>
                    <li>
                        <span>المطلوب من السيد: </span><input id="taxBillCarName" value="{{ $taxbill->clientName }}" type="text" readonly />
                    </li>
                    <li>
                        <span>العنوان: </span><input id="taxBillCarAddress" value="{{ $taxbill->address }}" type="text" readonly />
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
                                <input id="taxBillCarTotalPrice" value="{{ $taxbill->totalPrice }}" type="number" readonly/>
                            </td>
                            <td>
                                <input id="taxBillCarChase" value="{{ $taxbill->chase }}" type="text" readonly/>
                            </td>
                            <td>
                                <input id="taxBillCarMotor" value="{{ $taxbill->motor }}" type="text" readonly/>
                            </td>
                            <td>
                                <input type="text" value="{{ $taxbill->brand }}"  id="taxBillCarBrand" readonly/>
                                <input type="text" value="{{ $taxbill->model }}" id="taxBillCarModel" readonly/>

                            </td>
                        </tr>

                        <tr class="carPriceTaxTitle">
                            <td>
                                <input id="taxBillCarCarPrice" value="{{ $taxbill->carPrice }}" type="number" readonly/>
                                <input id="taxBillCarAddedMoney" value="{{ $taxbill->addedMoney }}" type="number" readonly/>
                                <input id="taxBillCarDevelopFee" value="{{ $taxbill->developFee }}" type="number" readonly/>
                                <input id="taxBillCarInsurance" value="{{ $taxbill->insurance }}" type="number" readonly/>
                                <input id="taxBillCarInsuranceFee" value="{{ $taxbill->insuranceFee }}" type="number" readonly/>
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
                                <input value="{{ $taxbill->billTotal }}" id="taxBillCarBillTotal" type="text" readonly/>
                            </td>
                            <td colspan="3">
                                <textarea readonly>{{ $tr }}</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="taxBillSignture">
                <span>التوقيع </span><span> .....................................</span>
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
