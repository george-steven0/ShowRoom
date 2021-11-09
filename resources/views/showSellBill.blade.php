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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>

<div class="main-page">
    <div class="main-content">
        <!-- Installment bill container  -->
        <div class="sell-bill-cont installment-bill">
            <div class="container-fluid">
                <div class="row bill-header">

                <form id="sellBillForm" class="col-12">
                    <div class="col-12 text-center main-title font-weight-bold mb-3">
                        @if($sellbill->installments==1)
                            <span>فاتورة مع حفظ حق الملكية</span>
                            @else
                            <span>فاتورة نقدا</span>
                            @endif
                        <br>
                        <span>مسلسل رقم</span><input type="number" value="{{$sellbill->id}}" class="serialNum" readonly/>
                    </div>
                    <div class="col-12  font-weight-bold mb-4 traff-manager-title">
                        <span>السيد اللواء مدير إدارة مرور/</span>
                        <input id="trafficManger" value="{{ $sellbill->trafficManger }}" type="text" class="traff-input" placeholder="ادخل اسم المرور" readonly />
                        <br>
                    </div>

                    <div class="col-12 text-center greeting-title font-weight-bold mb-4">
                        <span>تحية طيبة ........ وبعد</span>
                        <br>
                    </div>

                    <div class="col-12 greeting-title font-weight-bold mt-3 mb-3">
                        <span>نتشرف بأنه تم بيع السيارة</span>
                    </div>

                    <!-- Input Form Container -->

                        @csrf

                        <div class="form-input-container">
                            <div>
                                <span>لوحات رقم  /</span>  <input id="carNumber" type="text" value="{{ $sellbill->carNumber }}" readonly />
                            </div>

                            <!-- New Input -->
                            <div>
                                <span>النوع /</span>  <input id="type" type="text" value="{{ $sellbill->type }}" readonly />
                            </div>

                            <div>
                                <span>ماركة /</span><input id="brand" type="text" value="{{ $sellbill->brand }}" readonly />
                            </div>

                            <div>
                                <span>موديل /</span> <input id="model" type="text" value="{{ $sellbill->model }}" readonly />
                            </div>

                            <div>
                                <span>شاسية رقم /</span>
                                <input id="list" type="text" value="{{ $sellbill->chase }}" readonly />
                                
                            </div>

                            <div>
                                <span>ماتور رقم /</span><input id="motor" type="text" value="{{ $sellbill->motor }}" readonly /></td>
                            </div>

                            <div>
                                <span>السعة اللترية /</span> <input id="liters" type="text" value="{{ $sellbill->liters }}" readonly />
                            </div>

                            <div>
                                <span>نوع الوقود  /</span><input id="fuel" type="text" value="{{ $sellbill->fuel }}" readonly />
                            </div>

                            <!-- New Input -->
                            <div>
                                <span>الشكل  /</span> <input id="shape" type="text" value="{{ $sellbill->shape }}" readonly />
                            </div>

                            <!-- New Input -->
                            <div>
                                <span>اللون  /</span> <input id="color1" type="text" value="{{ $sellbill->color }}" readonly/>
                            </div>


                            <input id="installments" type="hidden" value="{{$sellbill->installments}}">

                        </div> <!-- Form Input Container -->

                            <!-- Second Form Input Container -->
                            <div class="form-input-container-2">
                                <div>
                                    <span>عدد الركاب  /</span> <input id="passengerNum" type="text" value="{{ $sellbill->passengerNum }}" readonly />
                                </div>

                                <!-- New Input -->
                                <div>
                                    <span>الوزن   /</span> <input id="weight" type="text" value="{{ $sellbill->weight }}" readonly />
                                </div>

                                <!-- New Input -->
                                <div>
                                    <span>الحمولة   /</span> <input id="load" type="text" value="{{ $sellbill->load }}" readonly />
                                </div>
                            </div>

                            <!-- Name SelectBox -->
                            <div class="nameBoxContainer">
                                <div>
                                    <span>اسم المشترى /</span>
                                    <input id="list2" type="text" value="{{ $sellbill->client()->name }}" readonly />
                                </div>
                            </div>
                            <!-- Name SelectBox -->

                            <!-- Client Form -->
                            <div class="clientForm">
                                <div>
                                    <span>العنوان/ </span> <input id="address" type="text" value="{{ $sellbill->address }}" readonly />
                                </div>

                                <div>
                                    <span> رقم قومى /</span><input id="id" type="text" value="{{ $sellbill->idNumber }}" readonly />
                                </div>
                            </div>
                            <!-- Client Form -->

                            <!-- Comerical Record -->
                            <!-- New Input -->
                            <div class="comericalRecord">
                                <div>
                                    <span>سجل تجارى رقم   /</span> <input id="comericalRecord" type="text" value="{{ $sellbill->comericalRecord }}" readonly  />
                                </div>
                            </div>
                            <!-- Comerical Record -->

                        <!-- Second Form Input Container -->

                        <div class="mt-3 font-weight-bold req-text">
                        @if($sellbill->installments==1)
                            <p>رجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم البيع مع حفظ حق الملكية لصالحنا مع عدم التجديد السنوى إلابخطاب بالموافقة على التجديد</p>
                            @else
                            <p>رجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم البيع نقدا</p>
                            @endif
                        </div>

                        <div>
                            <p class="text-center font-weight-bold mt-4 greeting-title">وتفضلو سيادتكم بقبول فائق الإحترام،،،</p>
                        </div>

                        <!-- bill date and signture -->
                            <div class="dateSign">
                                <div class="col-12 bill-footer1 billDate">
                                    <span>تحرير فى  / <input type="date" id="mDate" class="mDate" placeholder="dd-mm-yyyy" value="{{ $sellbill->date }}" readonly /></span>
                                </div>

                                <div class="col-12 bill-footer2 text-left">
                                        المدير المسئول /   <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التوقيع /
                                </div>
                            </div>
                        <!-- bill date and signture -->
                        <br>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables.js') }}"></script>
<script src="{{ asset('assets/js/datatables-bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $('.buy-table-cont,.all-bills-table,.clients-table').dataTable({});
</script>




</body>
</html>
