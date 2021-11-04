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

   
    <div class="tax-bill">
        <form>
                @csrf
                <div class="billSerialCont">
                    <p class="taxBillTitle">فاتورة بيع</p>
                    <p class="taxBillSerialCont">
                    <input type="number" class="taxSerialInp" value="{{ $taxbill->sellBillId }}" readonly>

                    </p>
                </div>

                <div class="billDetails">
                    <ul>
                        <li>
                            <span>التـاريــخ: </span><input name="date" value="{{ $taxbill->date }}" id="taxBillBycDate" type="date"  />
                        </li>
                        <li>
                            <span>المطلوب من السيد: </span><input name="clientName" value="{{ $taxbill->clientName }}" id="taxBillBycName" type="text" />
                        </li>
                        <li>
                            <span>العنوان: </span><input name="address" value="{{ $taxbill->address }}" id="taxBillBycAddress" type="text" />
                        </li>
                    </ul>
                </div>

                <div class="taxBillTable">
                    <table class="table table-bordered">
                        <thead>
                            <th>القيمة الإجمالية</th>
                            <th>الكميـــة</th>
                            <th>سعر الوحدة</th>
                            <th>البيـــــــان</th>
                        </thead>
                        <tbody>
                            <tr class="carPriceTax">
                                <td>
                                    <input name="totalPrice" value="{{ $taxbill->totalPrice }}" id="taxBillBycTotalPrice" type="text" />
                                </td>
                                <td>
                                    <input name="count" value="{{ $taxbill->count }}" id="taxBillBycCount" type="number" />
                                </td>
                                <td>
                                    <input name="carPrice" value="{{ $taxbill->carPrice }}" id="taxBillBycCarPrice" type="number" />
                                </td>
                                <td>
                                    <input name="brand" value="{{ $taxbill->brand }}" type="text"  id="taxBillBycBrand">
                                    <input name="model" value="{{ $taxbill->model }}" type="text"  id="taxBillBycModel">
                                    <div class="taxBillTableDisblayChase">
                                        <label for="">ش/ </label><input name="chase" value="{{ $taxbill->chase }}" type="text"  id="taxBillBycChase"> <br/>
                                        <label for="">م/ </label><input name="motor" value="{{ $taxbill->motor }}" type="text"  id="taxBillBycMotor">
                                    </div>
                                </td>
                            </tr>

                            <tr class="carPriceTaxTitle">
                                <td>
                                    <input name="price" value="{{ $taxbill->price }}" id="taxBillBycPrice"  type="number" />
                                    <input name="addedMoney" value="{{ $taxbill->addedMoney }}" id="taxBillBycAddedMoney"  type="number" />
                                </td>
                                <td colspan="3">
                                    <span>السعر</span>
                                    <span>القيمة المضافة</span>
                                </td>
                            </tr>

                            <tr class="taxBillFinallPrice">
                                <td>
                                    <input name="billTotal" value="{{ $taxbill->billTotal }}" id="taxBillBycBillTotal" type="number"/>
                                </td>
                                <td colspan="3">
                                    <textarea>{{ $tr }}</textarea>
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
                        <button type="submit" class="btn btn-outline-success add_new saveTaxbillBtn" >حفظ</button>
                    </div>
                </div>


        </form>
    </div>


</body>

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables.js') }}"></script>
<script src="{{ asset('assets/js/datatables-bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
