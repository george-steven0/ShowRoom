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
            <div class="finishbill-letter-bill sell-bill-cont mt-4">
                <div class="container-fluid">
                    <div class="row bill-header">
                        <form action="{{ route('update.finish',$finishbill->id) }}" method="POST" >
                            @csrf
                        <div class="col-12 text-center main-title font-weight-bold">
                            <span>خطاب بالموافقة على تجديد الترخيص </span>
                            <br>
                            <span>مسلسل رقم</span>
                            <input type="text" name="" id="" value="{{ $finishbill->sellbillId }}" readonly>
                        </div>



                        <div class="row">
                            <div class=".sell-bill-cont">
                                <div class="col-12  font-weight-bold mb-4 traff-manager-title">
                                    <span>السيد اللواء مدير إدارة مرور/</span>
                                    <input name="trafficManger" id="finishbillTrafficManger" type="text" class="traff-input" placeholder="ادخل اسم المرور" value="{{ $finishbill->trafficManger }}" readonly>
                                    <br>
                                </div>

                                <div class="col-12 text-center greeting-title font-weight-bold mb-5">
                                    <span>تحية طيبة ........ وبعد</span>
                                    <br>
                                </div>

                                <div class="col-12 greeting-title font-weight-bold mt-3 mb-3">
                                    <span>نتشرف بإننا نوافق على تجديد ترخيص السيارة لمدة عام مع استمرار حفظ حق الملكية لصالحنا</span>
                                </div>

                                <div class="form-input-container">
                                    <div>
                                        <span>لوحات رقم /</span> <input type="text" name="carNumber" id="finishbillCarNumber" value="{{ $finishbill->carNumber }}" readonly>
                                    </div>

                                    <div>
                                        <span>النوع /</span> <input type="text" name="type" id="finishbillType" value="{{ $finishbill->type }}" readonly>
                                    </div>

                                    <div>
                                        <span>ماركة  /</span> <input type="text" name="brand" id="finishbillBrand" value="{{ $finishbill->brand }}" readonly>
                                    </div>

                                    <div>
                                        <span>موديل /</span> <input type="text" name="model" id="finishbillModel" value="{{ $finishbill->model }}" readonly>
                                    </div>

                                    <div>
                                        <span>شاسية رقم /</span>
                                        <input type="text" name="chase" id="chase" value="{{ $finishbill->chase }}" readonly>
                                    </div>

                                    <div>
                                        <span>موتور رقم /</span> <input type="text" name="motor" id="finishbillMotor" value="{{ $finishbill->motor }}" readonly>
                                    </div>

                                    <div>
                                        <span>السعة اللترية  /</span> <input type="text" name="liters" id="finishbillLiters" value="{{ $finishbill->liters }}" readonly>
                                    </div>

                                    <div>
                                        <span>نوع الوقود /</span> <input type="text" name="fuel" id="finishbillFuel" value="{{ $finishbill->fuel }}" readonly>
                                    </div>

                                    <div>
                                        <span> الشكل /</span> <input type="text" name="shape" id="finishbillShape" value="{{ $finishbill->shape }}" readonly>
                                    </div>

                                    <div>
                                        <span>اللون  /</span> <input type="text" name="color" id="finishbillColor" value="{{ $finishbill->color }}" readonly>
                                    </div>

                                </div>

                                <div class="form-input-container-2">
                                    <div>
                                        <span>عدد الركاب/  </span> <input type="text" name="passengerNum" id="finishbillPassengerNum" value="{{ $finishbill->passengerNum }}" readonly>
                                    </div>

                                    <div>
                                        <span>الوزن/   </span> <input type="text" name="weight" id="finishbillWeight" value="{{ $finishbill->weight }}" readonly>
                                    </div>

                                    <div>
                                        <span>الحمولة/  </span> <input type="text" name="load" id="finishbillLoad" value="{{ $finishbill->load }}" readonly>
                                    </div>
                                </div>

                                <div class="nameBoxContainer">
                                    <div>
                                        <span>اسم المشترى/  </span>
                                        <input type="text" name="" id="finishbillClient" value="{{ $finishbill->client() }}" readonly>
                                        <input type="hidden" name="clientId" id="finishbillClientId" value="{{ $finishbill->client_id }}" readonly>

                                    </div>
                                </div>

                                <div class="clientForm">
                                    <div>
                                        <span>العنوان/ </span> <input type="text" name="address" id="finishbillAddress" value="{{ $finishbill->address }}" readonly>
                                    </div>

                                    <div>
                                        <span>الرقم قومى/ </span> <input type="text" name="idNumber" id="finishbillId" value="{{ $finishbill->idNumber }}" readonly>
                                    </div>

                                </div>

                                <div class="comericalRecord">
                                    <div>
                                        <span>سجل تجارى رقم   /</span> <input name="comericalRecord" id="finishbillComericalRecord" type="text" value="{{ $finishbill->comericalRecord }}"  readonly/>
                                    </div>
                                </div>


                                <div>
                                    <p class="lead font-weight-bold mt-4">رجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم البيع مع حفظ الملكية لصالحنا مع عدم التجديد السنوى إلابخطاب بموافقة على التجديد السنوى</p>
                                    <p class="text-center" style="font-weight: bold; font-size: 20px;">وتفضلوا سيادتكم بقبول فائق الإحترام ،،،،</p>
                                </div>


                                <div class="dateSign">
                                    <div class="col-12 bill-footer1 billDate">
                                        <span>تحرير فى <input type="date" name="date" id="finishbillDate" class="mDate" placeholder="dd-mm-yyyy" value="{{ $finishbill->date }}" /></span>
                                    </div>

                                    <div class="col-12 bill-footer2 text-left">
                                        المدير المسئول /   <br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التوقيع /
                                    </div>
                                </div>
                                <br />

                            </div>


                            <br>

                            <div class="col-12 text-center mt-5 ">
                                <button type="submit" class="btn btn-outline-success add_new save-finishbill-btn">حفظ</button>
                            </div>
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
    $('#finishbillSellbillId').select2();

    function finishbillSellbill()
    {
        let id = $('#finishbillSellbillId').val();
        console.log(id);
        $.get('/renew/getinfo/'+id,function(sellbill){
            $('#finishbillTrafficManger').val(sellbill.trafficManger);
            $('#finishbillCarNumber').val(sellbill.carNumber);
            $('#finishbillType').val(sellbill.type);
            $('#finishbillBrand').val(sellbill.brand);
            $('#finishbillModel').val(sellbill.model);
            $('#finishbillChase').val(sellbill.chase);
            $('#finishbillMotor').val(sellbill.motor);
            $('#finishbillLiters').val(sellbill.liters);
            $('#finishbillFuel').val(sellbill.fuel);
            $('#finishbillShape').val(sellbill.shape);
            $('#finishbillColor').val(sellbill.color);
            $('#finishbillPassengerNum').val(sellbill.passengerNum);
            $('#finishbillWeight').val(sellbill.weight);
            $('#finishbillLoad').val(sellbill.load);
            $('#finishbillClient').val(sellbill.client_id);
            $('#finishbillAddress').val(sellbill.address);
            $('#finishbillId').val(sellbill.idNumber);
            $('#finishbillComericalRecord').val(sellbill.comericalRecord);
            $('#finishbillDate').val(sellbill.date);
            $('#finishbillClientId').val(sellbill.installments)
        });
    }
</script>
