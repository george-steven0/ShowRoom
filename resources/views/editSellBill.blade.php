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

<div class="main-page">
    <div class="main-content">
        <!-- Installment bill container  -->
        <div class="sell-bill-cont installment-bill">
            <div class="container-fluid">
                <div class="row bill-header">



                <form id="sellBillForm" method="post" action="{{route('update.sellbill',$sellbill->id)}}" class="col-12">
                @csrf
                    <div class="col-12 text-center main-title font-weight-bold mb-3">
                            @if($sellbill->installments==1)
                            <span>فاتورة مع حفظ حق الملكية</span>
                            @else
                            <span>فاتورة نقدا</span>
                            @endif
                        <br>
                        <span>مسلسل رقم</span><input type="number" name="serialNum" value="{{$sellbill->id}}" class="serialNum" readonly/>
                    </div>
                    <div class="col-12  font-weight-bold mb-4 traff-manager-title">
                        <span>السيد اللواء مدير إدارة مرور/</span>
                        <input id="trafficManger" type="text" name="trafficManger" class="traff-input" value="{{$sellbill->trafficManger}}"  placeholder="ادخل اسم المرور" />
                        <br>
                    </div>

                    <div class="col-12 text-center greeting-title font-weight-bold mb-3">
                        <span>تحية طيبة ........ وبعد</span>
                        <br>
                    </div>

                    <div class="col-12 greeting-title font-weight-bold mt-3 mb-3">
                        <span>نتشرف بأنه تم بيع السيارة</span>
                    </div>

                    <!-- Input Form Container -->


                        <div class="form-input-container">
                            <div>
                                <span>لوحات رقم  /</span>  <input id="carNumber" name="carNumber" type="text" value="{{$sellbill->carNumber}}" />
                            </div>

                            <!-- New Input -->
                            <div>
                                <span>النوع /</span>  <input id="type" type="text" name="type" value="{{$sellbill->type}}" />
                            </div>

                            <div>
                                <span>ماركة /</span><input id="brand" type="text" name="brand" value="{{$sellbill->brand}}" readonly />
                            </div>

                            <div>
                                <span>موديل /</span> <input id="model" type="text" name="model" value="{{$sellbill->model}}" readonly />
                            </div>

                            <div>
                                <span>شاسية رقم /</span>
                                <select id="list" name="chase" onchange="getChaseInfo()" >
                                    <option value="{{ $sellbill->chase }}" selected>{{ $sellbill->chase }}</option>
                                    @foreach ($buybills as $buybill )
                                    @if($buybill->chase == $sellbill->chase)
                                    @continue
                                    @endif
                                    <option value="{{ $buybill->chase }}">{{ $buybill->chase }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <span>ماتور رقم /</span><input id="motor" name="motor" type="text" value="{{$sellbill->motor}}" readonly /></td>
                            </div>

                            <div>
                                <span>السعة اللترية /</span> <input id="liters" name="liters" type="text" value="{{$sellbill->liters}}" />
                            </div>

                            <div>
                                <span>نوع الوقود  /</span><input id="fuel" name="fuel" type="text" value="{{$sellbill->fuel}}" />
                            </div>

                            <!-- New Input -->
                            <div>
                                <span>الشكل  /</span> <input id="shape" name="shape" type="text" value="{{$sellbill->shape}}" />
                            </div>

                            <!-- New Input -->
                            <div>
                                <span>اللون  /</span> <input id="color1" name="color" type="text" value="{{$sellbill->color}}" />
                            </div>


                            <input id="installments" type="hidden" name="installments" value="{{$sellbill->installments}}">

                        </div> <!-- Form Input Container -->

                            <!-- Second Form Input Container -->
                            <div class="form-input-container-2">
                                <div>
                                    <span>عدد الركاب  /</span> <input id="passengerNum" name="passengerNum" type="text" value="{{$sellbill->passengerNum}}" />
                                </div>

                                <!-- New Input -->
                                <div>
                                    <span>الوزن   /</span> <input id="weight" name="weight" type="text" value="{{$sellbill->weight}}" />
                                </div>

                                <!-- New Input -->
                                <div>
                                    <span>الحمولة   /</span> <input id="load" name="load" type="text" value="{{$sellbill->load}}"/>
                                </div>
                            </div>

                            <!-- Name SelectBox -->
                            <div class="nameBoxContainer">
                                <div>
                                    <span>اسم المشترى /</span>
                                    <select id="list2" name="client_id" onchange="getClientIdNumber()">
                                    <option value="{{$sellbill->client()->id}}" selected>{{$sellbill->client()->name}}</option>
                                        @foreach ($clients as $client )
                                        @if ($client->id == $sellbill->client()->id)
                                            @continue
                                        @endif
                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <!-- Name SelectBox -->

                            <!-- Client Form -->
                            <div class="clientForm">
                                <div>
                                    <span>العنوان/ </span> <input id="address" name="address" type="text" value="{{$sellbill->client()->address}}" readonly />
                                </div>

                                <div>
                                    <span> رقم قومى /</span><input id="id" name="idNumber" type="text" value="{{$sellbill->client()->idNumber}}" readonly />
                                </div>
                            </div>
                            <!-- Client Form -->

                            <!-- Comerical Record -->
                            <!-- New Input -->
                            <div class="comericalRecord">
                                <div>
                                    <span>سجل تجارى رقم   /</span> <input id="comericalRecord" name="commericalRecord" type="text" value="{{$sellbill->comericalRecord}}" />
                                </div>
                            </div>
                            <!-- Comerical Record -->

                        <!-- Second Form Input Container -->

                        <div class="mt-4 font-weight-bold req-text">
                            <p>رجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم البيع مع حفظ حق الملكية لصالحنا مع عدم التجديد السنوى إلابخطاب بالموافقة على التجديد</p>
                        </div>

                        <div>
                            <p class="text-center font-weight-bold mt-5 greeting-title">وتفضلو سيادتكم بقبول فائق الإحترام،،،</p>
                        </div>

                        <!-- bill date and signture -->
                            <div class="dateSign">
                                <div class="col-12 bill-footer1 billDate">
                                    <span>تحرير فى  / <input type="date" id="mDate" name="date" class="mDate" value="{{$sellbill->date}}" placeholder="dd-mm-yyyy" /></span>
                                </div>

                                <div class="col-12 bill-footer2 text-left">
                                        المدير المسئول /   <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التوقيع /
                                </div>
                            </div>
                        <!-- bill date and signture -->
                        <br>

                        <div class="col-12 text-center mt-5 ">
                            <button type="submit" class="btn btn-outline-success add_new save-bill-btn">حفظ</button>
                        </div>
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
<script src="{{ asset('assets/js/select2.min.js') }}"></script>

<script>
    $('.buy-table-cont,.all-bills-table,.clients-table').dataTable({});
</script>
<script>
    function getChaseInfo()
    {
        let selected = document.getElementById('list').value;
        $.get('/getChaseInfo/'+selected,function(chase)
        {
            $('#brand').val(chase.brand);
            $('#model').val(chase.model);
            $('#motor').val(chase.motor);
            $('#type').val(chase.type);
        });

    }
</script>

<script>
    function getClientIdNumber()
    {
        let selected = document.getElementById('list2').value
        $.get('/getClientId/'+selected, function(client)
        {
            $("#id").val(client.idNumber);
            $("#address").val(client.address);
        });
    }
</script>

<script>
   $(document).ready(function() {
     $('#list').select2();
     $('#list2').select2();
 });

</script>
</body>
</html>
