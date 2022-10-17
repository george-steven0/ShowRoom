<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معرض سيارات الاستاذ</title>
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/datatables.css">
    <link rel="stylesheet" href="assets/css/select2.min.css"  />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>

    <section class="main-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Side Navbar-->
                <div class="col-2 side-navbar-cont">

                    <div class="close-btn">
                        <span>X</span>
                    </div>

                    <div class="nav-content">

                        <div class="nav-logo">
                            <img src="assets/img/logo.png" />
                        </div>

                        <div class="nav-list">

                            <div class="list-group list-anchor" id="myList" role="tablist">


                                <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#bills-type" role="tab">
                                    الفواتير
                                    <i class="fas fa-receipt"></i>
                                </a>
                                <div class="collapse" id="bills-type">
                                    <div class="list-group sub-list" id="list-tab" role="tablist">

                                        <a id="list-sell-list" data-toggle="list" href="#sell-bill" role="tab" aria-controls="home">فاتورة بيع</a>

                                        <a id="list-buy-list" data-toggle="list" href="#buy-bill" role="tab" aria-controls="profile">فاتورة شراء </a>

                                        <a id="list-tax-list" data-toggle="list" href="#tax-billCar" role="tab" aria-controls="taxBillCar">فاتورة ضريبية سيارة</a>

                                        <a id="list-tax-list" data-toggle="list" href="#tax-bill" role="tab" aria-controls="taxBill">فاتورة ضريبية توكتوك</a>

                                        <a id="list-renew-list" data-toggle="list" href="#renew-bill" role="tab" aria-controls="renew">خطاب تجديد </a>

                                        <a id="list-finish-list" data-toggle="list" href="#finish-bill" role="tab" aria-controls="finish">مخالصة  </a>
                                    </div>
                                </div>


                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#add-client" role="tab">
                                    العملاء
                                    <i class="fas fa-users"></i>
                                </a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#add-dealer" role="tab">
                                    التجار
                                    <i class="fas fa-user-secret"></i>
                                </a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#storage" role="tab">
                                    المخزن
                                    <i class="fas fa-car-side"></i>
                                </a>

                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#accounts" role="tab">
                                    حسابات التجار
                                    <i class="fas fa-money-bill-alt"></i>
                                </a>

                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#client-accounts" role="tab">
                                    حسابات العملاء
                                    <i class="fas fa-money-bill"></i>
                                </a>
                            </div>

                        </div> <!-- Nav list -->

                    </div> <!-- Nav Content -->

                </div><!-- end side navbar -->

                <!-- Side Navbar-->

                <!-- Main Content -->
                <div class="col-10 main-content">
                    <div class="open-btn">
                        <span><i class="fas fa-list"></i></span>
                    </div>

                    <div class="tab-content">

                        <!-- sell Bill -->
                        <div class="tab-pane fade show active" id="sell-bill" role="tabpanel">

                            <!-- all bills Container -->
                            <div class="display-bills mt-3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">فواتير البيع</h2>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <button class="btn btn-outline-success add_new new-bill-btn">فاتورة جديدة</button>
                                        </div>

                                        <div class="all-bills-table-container table-responsive">
                                            <table class="table table-hover table-dark table-striped all-bills-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>رقم الفاتورة</th>
                                                    <th>الاسم</th>
                                                    <th>نوع المركبة</th>
                                                    <th>الماركة</th>
                                                    <th>الشاسية</th>
                                                    <th>الماتور</th>
                                                    <th>تاريخ البيع</th>
                                                    <th>نوع الفاتوره</th>
                                                    <th></th>
                                                    <th></th>
                                                    <a href="{{ route('backup') }}">backup</a>
                                                </thead>

                                                <tbody>
                                                    @foreach ($sellbills as $index => $sellbill)
                                                    <tr>
                                                        <td>{{ $index+1 }}</td>
                                                        <td>{{ $sellbill->id }}</td>
                                                        @if( $sellbill->client() ==null)
                                                        <td>-</td>
                                                        @else
                                                        <td>{{ $sellbill->client()->name }}</td>
                                                        @endif

                                                        @if($sellbill->chase()== null)
                                                        <td>-</td>
                                                        @else
                                                        <td>{{ $sellbill->chase() }}</td>
                                                        @endif
                                                        <td>{{ $sellbill->brand }}</td>
                                                        <td>{{ $sellbill->chase }}</td>
                                                        <td>{{ $sellbill->motor }}</td>
                                                        <td>{{ $sellbill->date }}</td>
                                                        @if($sellbill->installments == 1)
                                                        <td>فاتوره مع حفظ الملكيه</td>
                                                        @else
                                                        <td>فاتوره نقدا</td>
                                                        @endif
                                                       <form action="{{ route('edit.sellbill',$sellbill->id) }}"><td><button class="btn btn-outline-warning">تعديل</button></td></form>
                                                        <form id="deleteSellbill" >
                                                            @csrf
                                                            <input type="hidden" name="sellbillid" id="sellbillid">
                                                        </form>

                                                        <td><a target="_blank" href="{{ route('show.sellbill',$sellbill->id) }}" class="btn btn-success">عرض</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bills-type">

                                <!-- select type of bill -->
                                <div class="row selectBillType">
                                    <div class="col-12 mt-2">
                                        <select class="form-control bill-type-select text-center" onchange="changebill()">
                                            <option value="installment">فاتورة مع حفظ ملكية</option>
                                            <option value="cash" >فاتورة نقداً</option>
                                        </select>
                                        <br/>
                                    </div>
                                </div>

                                <!-- Installment bill container  -->
                                <div class="sell-bill-cont installment-bill">
                                    <div class="container-fluid">
                                        <div class="row bill-header">


                                        <form id="sellBillForm" class="col-12">
                                            <div class="col-12 text-center main-title font-weight-bold mb-5">
                                                <span>فاتورة مع حفظ حق الملكية</span>
                                                <br>
                                                <span>مسلسل رقم</span><input type="number" id="serialNum" class="serialNum" value="" readonly/>
                                            </div>

                                            <div class="col-12  font-weight-bold mb-4 traff-manager-title">
                                                <span>السيد اللواء مدير إدارة مرور/</span>
                                                <input id="trafficManger" type="text" class="traff-input" placeholder="ادخل اسم المرور" />
                                                <br>
                                            </div>

                                            <div class="col-12 text-center greeting-title font-weight-bold mb-5">
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
                                                        <span>لوحات رقم  /</span>  <input id="carNumber" type="text" />
                                                    </div>

                                                    <!-- New Input -->
                                                    <div>
                                                        <span>النوع /</span>  <input id="type" type="text" disabled />
                                                    </div>

                                                    <div>
                                                        <span>ماركة /</span><input id="brand" type="text" disabled />
                                                    </div>

                                                    <div>
                                                        <span>موديل /</span> <input id="model" type="text" disabled />
                                                    </div>

                                                    <div>
                                                        <span>شاسية رقم /</span>
                                                        <select id="list" onchange="getChaseInfo()" >
                                                            @foreach ($buybills as $buybill )
                                                            <option value="{{ $buybill->chase }}">{{ $buybill->chase }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <span>ماتور رقم /</span><input id="motor" type="text" disabled /></td>
                                                    </div>

                                                    <div>
                                                        <span>السعة اللترية /</span> <input id="liters" type="text" />
                                                    </div>

                                                    <div>
                                                        <span>نوع الوقود  /</span><input id="fuel" type="text" />
                                                    </div>

                                                    <!-- New Input -->
                                                    <div>
                                                        <span>الشكل  /</span> <input id="shape" type="text" />
                                                    </div>

                                                    <!-- New Input -->
                                                    <div>
                                                        <span>اللون  /</span> <input id="color1" type="text" />
                                                    </div>


                                                    <input id="installments" type="hidden" value="1">

                                                </div> <!-- Form Input Container -->

                                                    <!-- Second Form Input Container -->
                                                    <div class="form-input-container-2">
                                                        <div>
                                                            <span>عدد الركاب  /</span> <input id="passengerNum" type="text" />
                                                        </div>

                                                        <!-- New Input -->
                                                        <div>
                                                            <span>الوزن   /</span> <input id="weight" type="text" />
                                                        </div>

                                                        <!-- New Input -->
                                                        <div>
                                                            <span>الحمولة   /</span> <input id="load" type="text" />
                                                        </div>
                                                    </div>

                                                    <!-- Name SelectBox -->
                                                    <div class="nameBoxContainer">
                                                        <div>
                                                            <span>اسم المشترى /</span>
                                                            <select id="list2" onchange="getClientIdNumber()">
                                                                @foreach ($clients as $client )
                                                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Name SelectBox -->

                                                    <!-- Client Form -->
                                                    <div class="clientForm">
                                                        <div>
                                                            <span>العنوان/ </span> <input id="address" type="text" disabled />
                                                        </div>

                                                        <div>
                                                            <span> رقم قومى /</span><input id="id" type="text"  disabled/>
                                                        </div>
                                                    </div>
                                                    <!-- Client Form -->

                                                    <!-- Comerical Record -->
                                                    <!-- New Input -->
                                                    <div class="comericalRecord">
                                                        <div>
                                                            <span>سجل تجارى رقم   /</span> <input id="comericalRecord" type="text" />
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
                                                            <span>تحرير فى  / <input type="date" id="mDate" class="mDate" placeholder="dd-mm-yyyy" /></span>
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

                                <!-- Cash bill container  -->
                                <form id="cashSellBillForm">
                                    @csrf
                                    <div class="sell-bill-cont cash-bill">
                                        <div class="container-fluid">
                                            <div class="row bill-header">

                                                <div class="col-12 text-center main-title font-weight-bold">
                                                    <span>فاتورة نقداً</span>
                                                    <br>
                                                    <span>مسلسل رقم</span><input type="number" value="" id="serialNum1" class="serialNum" readonly/>
                                                </div>

                                                <div class="col-12  mt-5 font-weight-bold mb-3 traff-manager-title">
                                                    <span>السيد اللواء/ مدير إدارة مرور/</span>
                                                    <input type="text" id="trafficManager1" class="traff-input" placeholder="ادخل اسم المرور" />
                                                    <br>
                                                </div>

                                                <div class="col-12 text-center greeting-title font-weight-bold mb-5">
                                                    <span>تحية طيبة ........ وبعد</span>
                                                    <br>
                                                </div>

                                                <div class="col-12 greeting-title font-weight-bold mt-3 mb-3">
                                                    <span>نتشرف بأنه تم بيع السيارة</span>
                                                </div>



                                                <div class="form-input-container">

                                                    <div>
                                                        <span>لوحات رقم  /</span>  <input id="carNumber1" type="text" />
                                                    </div>

                                                    <div>
                                                        <span>النوع /</span>  <input id="type1" type="text"  disabled/>
                                                    </div>

                                                    <div>
                                                        <span>ماركة /</span><input id="brand1" type="text" disabled />
                                                    </div>

                                                    <div>
                                                        <span>موديل /</span> <input id="model1" type="text" disabled />
                                                    </div>

                                                    <div>
                                                        <span>شاسية رقم /</span>
                                                        <select id="list3" onchange="getChaseInfo1()" >
                                                            @foreach ($buybills as $buybill )
                                                            <option value="{{ $buybill->chase }}">{{ $buybill->chase }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <span>ماتور رقم /</span><input id="motor1" type="text" disabled /></td>
                                                    </div>

                                                    <div>
                                                        <span>السعة اللترية /</span> <input id="liters1" type="text" />
                                                    </div>

                                                    <div>
                                                        <span>نوع الوقود /</span><input id="fuel1" type="text" />
                                                    </div>

                                                    <div>
                                                        <span>الشكل  /</span> <input id="shape1" type="text" />
                                                    </div>

                                                    <div>
                                                        <span>اللون  /</span> <input id="color2" type="text" />
                                                    </div>

                                                    <input type="hidden" value="0" id="installments1">

                                                </div>

                                                <!-- Second Form Input -->
                                                <div class="form-input-container-2">
                                                    <div>
                                                        <span>عدد الركاب  /</span> <input id="passengerNum1" type="text" />
                                                    </div>

                                                    <div>
                                                        <span>الوزن   /</span> <input id="weight1" type="text" />
                                                    </div>

                                                    <div>
                                                        <span>الحمولة   /</span> <input id="load1" type="text" />
                                                    </div>
                                                </div>

                                                <div class="nameBoxContainer2">
                                                    <div>
                                                        <span>اسم المشترى /</span>
                                                        <select id="list4" onchange="getClientIdNumber1()">
                                                            @foreach ($clients as $client )
                                                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="clientForm">
                                                    <div>
                                                        <span>العنوان/ </span> <input id="address1" type="text" disabled />
                                                    </div>

                                                    <div>
                                                        <span> رقم قومى /</span><input id="id1" type="text" disabled />
                                                    </div>
                                                </div>


                                                <div class="comericalRecord">
                                                    <div>
                                                        <span>سجل تجارى رقم   /</span> <input id="comericalRecord1" type="text" />
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="mt-4 font-weight-bold req-text mb-4">
                                                    <p>رجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم البيع نقدا</p>
                                                </div>

                                                <div>
                                                    <p class="text-center  font-weight-bold mt-5 greeting-title">وتفضلو سيادتكم بقبول فائق الإحترام،،،</p>
                                                </div>


                                                <div class="dateSign">
                                                    <div class="col-12 bill-footer1 billDate">
                                                        <span>تحرير فى <input type="date" id="mDate1" class="mDate" placeholder="dd-mm-yyyy" /></span>
                                                    </div>

                                                    <div class="col-12 bill-footer2 text-left">
                                                        المدير المسئول /   <br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التوقيع /
                                                    </div>
                                                </div>


                                                <br>

                                                <div class="col-12 text-center mt-5 ">
                                                    <button type="submit" class="btn btn-outline-success add_new save-bill-btn">حفظ</button>
                                                </div>

                                        </div>
                                    </div>
                                </form>
                            </div> <!-- bills type -->

                        </div>

                        <!-- Buy Bill -->
                        <div class="tab-pane fade " id="buy-bill" role="tabpanel">
                            <div class="buy-bill-cont mt-4">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">فواتير الشراء</h2>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-outline-success add_new" data-toggle="modal" data-target="#dealer">
                                                فاتورة شراء
                                              </button>

                                              <!-- Modal -->
                                              <div class="modal fade add-new-modal" id="dealer" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <form id="storeBuyBill">
                                                        @csrf
                                                    <div class="modal-body">
                                                      <div class="container-fluid">
                                                          <div class="row">

                                                            <div class="col-6">
                                                                <select id="type2" class="vehicle-type form-control bill-type-select">
                                                                    <optgroup label="نوع المركبة">
                                                                        <option value="سيارة">سيارة</option>
                                                                        <option value="موتوسيكل">موتوسيكل</option>
                                                                        <option value="توك توك">توك توك</option>
                                                                        <option value="تورو سيكل">تورو سيكل</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            <br />

                                                            <div class="col-6">
                                                                <select id="dealer_id" class="buyBillSelect form-control">
                                                                    <optgroup label="أسم التاجر ">
                                                                        @foreach ($dealers as $dealer )
                                                                        <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
                                                                        @endforeach
                                                                    </optgroup>
                                                                </select>
                                                                <br>
                                                            </div>

                                                            <div class="col-6">
                                                                <input id="brand2" type="text" placeholder="الماركة" class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="col-6">
                                                                <input id="model2" type="text" placeholder="الموديل" class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="col-6">
                                                                <input id="chase" type="text" placeholder="الشاسية" class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="col-6">
                                                                <input id="motor2" type="text" placeholder="الماتور" class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="col-6">
                                                                <input id="date" type="date" placeholder="تاريخ الشراء" class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="col-6">
                                                                <input id="driver" type="text" placeholder="السائق" class="form-control" />
                                                                <br />
                                                            </div>

                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">حفظ</button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-12 table-responsive clients mt-3 p-0">
                                            <table class="table table-hover table-dark table-striped clients-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>نوع المركبة</th>
                                                    <th>أسم التاجر</th>
                                                    <th>الماركة</th>
                                                    <th>الموديل</th>
                                                    <th>الشاسية</th>
                                                    <th>الماتور</th>
                                                    <th>تاريخ الشراء</th>
                                                    <th>السائق</th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>

                                                    @foreach ($buybills as $index => $buybill)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $buybill->type }}</td>
                                                        <td>{{ $buybill->dealer()}}</td>
                                                        <td>{{ $buybill->brand }}</td>
                                                        <td>{{ $buybill->model }}</td>
                                                        <td>{{ $buybill->chase }}</td>
                                                        <td>{{ $buybill->motor }}</td>
                                                        <td>{{ $buybill->date }}</td>
                                                        <td>{{ $buybill->driver }}</td>
                                                        <td>
                                                            <a href="javascript:void(0)" onclick="editBuyBill({{ $buybill->id }})" type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#edit-dealer">
                                                                 تعديل
                                                              </a>

                                                              <!-- Edit Modal -->
                                                              <div class="modal fade add-new-modal" id="edit-dealer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                    </div>
                                                                    <form id="editBuybillForm">
                                                                        @csrf
                                                                    <div class="modal-body">
                                                                      <div class="container-fluid">
                                                                        <div class="row">

                                                                            <input type="hidden" id="buybillId">

                                                                            <div class="col-6">
                                                                                <select id="editType" class="vehicle-type form-control bill-type-select">
                                                                                    <optgroup label="نوع المركبة">
                                                                                        <option value="سيارة">سيارة</option>
                                                                                        <option value="موتوسيكل">موتوسيكل</option>
                                                                                        <option value="توك توك">توك توك</option>
                                                                                        <option value="تورو سيكل">تورو سيكل</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <select id="editDealer_id" class=" form-control">
                                                                                    <optgroup label="أسم التاجر ">
                                                                                    @foreach ($dealers as $dealer )
                                                                                        <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
                                                                                    @endforeach
                                                                                    </optgroup>
                                                                                </select>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <input id="editBrand" type="text" placeholder="الماركة" class="form-control" />
                                                                                <br />
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <input id="editModel" type="text" placeholder="الموديل" class="form-control" />
                                                                                <br />
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <input id="editChase" type="text" placeholder="الشاسية" class="form-control" />
                                                                                <br />
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <input id="editMotor" type="text" placeholder="الماتور" class="form-control" />
                                                                                <br />
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <input id="editDate" type="date" placeholder="تاريخ الشراء" class="form-control" />
                                                                                <br />
                                                                            </div>

                                                                            <div class="col-6">
                                                                                <input id="editDriver" type="text" placeholder="السائق" class="form-control" />
                                                                                <br />
                                                                            </div>


                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">حفظ</button>
                                                                    </div>
                                                                    </form>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                        </td>
                                                        <form method="POST" action="{{ route('delete.buybill',$buybill->id) }}">
                                                            @csrf
                                                        <td><button type="submit" class="btn btn-danger">حذف</button></td>
                                                        </form>
                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Renew Bill -->
                        <div class="tab-pane fade " id="renew-bill" role="tabpanel">
                            <!-- all bills Container -->
                            <div class="display-letters  mt-3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">خطاب تجديد</h2>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <button class="btn btn-outline-success add_new new-letter">خطاب جديدة</button>
                                        </div>

                                        <div class="all-bills-table-container table-responsive">
                                            <table class="table table-hover table-dark table-striped all-bills-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>رقم الخطاب</th>
                                                    <th>الاسم</th>
                                                    <th>نوع المركبة</th>
                                                    <th>الماركة</th>
                                                    <th>الشاسية</th>
                                                    <th>الماتور</th>
                                                    <th>تاريخ الخطاب</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>
                                                    @foreach ($renews as$index => $renew )
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $renew->sellbillId }}</td>
                                                        <td>{{ $renew->client() }}</td>
                                                        <td>{{ $renew->type }}</td>
                                                        <td>{{ $renew->brand }}</td>
                                                        <td>{{ $renew->chase }}</td>
                                                        <td>{{ $renew->motor }}</td>
                                                        <td>{{ $renew->date }}</td>
                                                        <td><a href="{{ route('edit.renew',$renew->id) }}"class="btn btn-outline-warning">تعديل</a></td>
                                                        <form action="{{ route('delete.renew',$renew->id) }}" method="POST">
                                                            @csrf
                                                            <td><button class="btn btn-danger">حذف</button></td>
                                                        </form>
                                                        <td><a href="{{ route('show.renew',$renew->id) }}" class="btn btn-success">عرض</a></td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="renew-letter-bill sell-bill-cont mt-4">
                                <div class="container-fluid">
                                    <div class="row bill-header">
                                        <form id="renewForm">
                                            @csrf
                                        <div class="col-12 text-center main-title font-weight-bold">
                                            <span>خطاب بالموافقة على تجديد الترخيص </span>
                                            <br>
                                            <span>مسلسل رقم</span>
                                            <select name="" id="renewSellbillId" class="taxSerialInp" onchange="renewSellbill()">
                                                @foreach ($sellbills as $sellbill )
                                                    <option value="{{ $sellbill->id }}">{{ $sellbill->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>



                                        <div class="row">
                                            <div class=".sell-bill-cont">
                                                <div class="col-12  font-weight-bold mb-4 traff-manager-title">
                                                    <span>السيد اللواء مدير إدارة مرور/</span>
                                                    <input id="renewTrafficManger" type="text" class="traff-input" placeholder="ادخل اسم المرور" readonly>
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
                                                        <span>لوحات رقم /</span> <input type="text" name="" id="renewCarNumber" readonly>
                                                    </div>

                                                    <div>
                                                        <span>النوع /</span> <input type="text" name="" id="renewType" readonly>
                                                    </div>

                                                    <div>
                                                        <span>ماركة  /</span> <input type="text" name="" id="renewBrand" readonly>
                                                    </div>

                                                    <div>
                                                        <span>موديل /</span> <input type="text" name="" id="renewModel" readonly>
                                                    </div>

                                                    <div>
                                                        <span>شاسية رقم /</span>
                                                        <input type="text" name="" id="renewChase" readonly>
                                                    </div>

                                                    <div>
                                                        <span>موتور رقم /</span> <input type="text" name="" id="renewMotor" readonly>
                                                    </div>

                                                    <div>
                                                        <span>السعة اللترية  /</span> <input type="text" name="" id="renewLiters" readonly>
                                                    </div>

                                                    <div>
                                                        <span>نوع الوقود /</span> <input type="text" name="" id="renewFuel" readonly>
                                                    </div>

                                                    <div>
                                                        <span> الشكل /</span> <input type="text" name="" id="renewShape" readonly>
                                                    </div>

                                                    <div>
                                                        <span>اللون  /</span> <input type="text" name="" id="renewColor" readonly>
                                                    </div>

                                                </div>

                                                <div class="form-input-container-2">
                                                    <div>
                                                        <span>عدد الركاب/  </span> <input type="text" name="" id="renewPassengerNum" readonly>
                                                    </div>

                                                    <div>
                                                        <span>الوزن/   </span> <input type="text" name="" id="renewWeight" readonly>
                                                    </div>

                                                    <div>
                                                        <span>الحمولة/  </span> <input type="text" name="" id="renewLoad" readonly>
                                                    </div>
                                                </div>

                                                <div class="nameBoxContainer">
                                                    <div>
                                                        <span>اسم المشترى/  </span>
                                                        <input type="text" name="" id="renewClient" readonly>
                                                        <input type="hidden" name="" id="renewClientId" readonly>
                                                    </div>
                                                </div>

                                                <div class="clientForm">
                                                    <div>
                                                        <span>العنوان/ </span> <input type="text" name="" id="renewAddress" readonly>
                                                    </div>

                                                    <div>
                                                        <span>الرقم قومى/ </span> <input type="text" name="" id="renewId" readonly>
                                                    </div>

                                                </div>

                                                <div class="comericalRecord">
                                                    <div>
                                                        <span>سجل تجارى رقم   /</span> <input id="renewComericalRecord" type="text"  readonly/>
                                                    </div>
                                                </div>


                                                <div>
                                                    <p class="lead font-weight-bold mt-4">رجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم البيع مع حفظ الملكية لصالحنا مع عدم التجديد السنوى إلابخطاب بموافقة على التجديد السنوى</p>
                                                    <p class="text-center" style="font-weight: bold; font-size: 20px;">وتفضلوا سيادتكم بقبول فائق الإحترام ،،،،</p>
                                                </div>


                                                <div class="dateSign">
                                                    <div class="col-12 bill-footer1 billDate">
                                                        <span>تحرير فى <input type="date" id="renewDate" class="mDate" placeholder="dd-mm-yyyy" /></span>
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
                                                <button type="submit" class="btn btn-outline-success add_new save-renew-btn">حفظ</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Finish bill-->
                        <div class="tab-pane fade " id="finish-bill" role="tabpanel">
                            <!-- all bills Container -->
                            <div class="display-finish  mt-3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">مخالصة نهائية</h2>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <button class="btn btn-outline-success add_new new-finish">مخالصة جديدة</button>
                                        </div>

                                        <div class="all-bills-table-container table-responsive">
                                            <table class="table table-hover table-dark table-striped all-bills-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>رقم المخالصة</th>
                                                    <th>الاسم</th>
                                                    <th>نوع المركبة</th>
                                                    <th>الماركة</th>
                                                    <th>الشاسية</th>
                                                    <th>الماتور</th>
                                                    <th>تاريخ المخالصة</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>
                                                    @foreach ($finishbills as $index => $finishbill )
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $finishbill->sellbillId }}</td>
                                                        <td>{{ $finishbill->client() }}</td>
                                                        <td>{{ $finishbill->type }}</td>
                                                        <td>{{ $finishbill->brand }}</td>
                                                        <td>{{ $finishbill->chase }}</td>
                                                        <td>{{ $finishbill->motor }}</td>
                                                        <td>{{ $finishbill->date }}</td>
                                                        <td><a href="{{ route('edit.finish',$finishbill->id) }}" class="btn btn-outline-warning">تعديل</a></td>
                                                        <form action="{{ route('delete.finish',$finishbill->id) }}" method="POST">
                                                            @csrf
                                                        <td><button class="btn btn-danger">حذف</button></td>
                                                        </form>

                                                        <td><a href="{{ route('show.finish',$finishbill->id) }}" class="btn btn-success" href="">عرض</a></td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="finishBillForm">
                                @csrf
                            <div class="finish-letter-bill sell-bill-cont mt-4">
                                <div class="container-fluid">
                                    <div class="row bill-header">

                                        <div class="col-12 text-center main-title font-weight-bold">
                                            <span>مخالصة نهائية</span>
                                            <br>
                                            <span>مسلسل رقم</span>
                                            <select name="" id="finishBillList" onchange="finishSellbill()">
                                                @foreach ($sellbills as $sellbill )
                                                    <option value="{{ $sellbill->id }}">{{ $sellbill->id }}</option>
                                                @endforeach

                                            </select>
                                        </div>


                                        <div class="row">
                                            <div class="letter-container">
                                                <p id="traffic-name">السيد اللواء مدير إدارة مرور/ <input type="text" name="" id="finishTrafficManger" readonly></p>
                                                <p class="text-center greeting"> تحية طيبة وبعد ،،</p>
                                                <p class="letter-heading lead font-font-weight-bold">نتشرف بإننا نوافق تخالصنا مع مالك السيارة حيث تم سداد جميع المستحقات التى عليها</p>

                                                <div class="form-input-container">
                                                    <div>
                                                        <span>لوحات رقم /</span> <input type="text" name="" id="finishCarNumber" readonly>
                                                    </div>

                                                    <div>
                                                        <span>النوع /</span> <input type="text" name="" id="finishType" readonly>
                                                    </div>

                                                    <div>
                                                        <span>ماركة  /</span> <input type="text" name="" id="finishBrand" readonly>
                                                    </div>

                                                    <div>
                                                        <span>موديل /</span> <input type="text" name="" id="finishModel" readonly>
                                                    </div>

                                                    <div>
                                                        <span>شاسية رقم /</span> <input type="text" name="" id="finishChase" readonly>
                                                    </div>

                                                    <div>
                                                        <span>موتور رقم /</span> <input type="text" name="" id="finishMotor" readonly>
                                                    </div>

                                                    <div>
                                                        <span>السعة اللترية  /</span> <input type="text" name="" id="finishLiters" readonly>
                                                    </div>

                                                    <div>
                                                        <span>نوع الوقود /</span> <input type="text" name="" id="finishFuel" readonly>
                                                    </div>

                                                    <div>
                                                        <span> الشكل /</span> <input type="text" name="" id="finishShape" readonly>
                                                    </div>

                                                    <div>
                                                        <span>اللون  /</span> <input type="text" name="" id="finishColor" readonly>
                                                    </div>

                                                </div>

                                                <div class="form-input-container-2">
                                                    <div>
                                                        <span>عدد الركاب/  </span> <input type="text" name="" id="finishPassengerNum" readonly>
                                                    </div>

                                                    <div>
                                                        <span>الوزن/   </span> <input type="text" name="" id="finishWeight" readonly>
                                                    </div>

                                                    <div>
                                                        <span>الحمولة/  </span> <input type="text" name="" id="finishLoad" readonly>
                                                    </div>
                                                </div>

                                                <div class="nameBoxContainer">
                                                    <div>
                                                        <span>اسم المشترى/  </span> <input type="text" name="" id="finishClient" readonly>
                                                        <input type="hidden" name="" id="finishClientId">
                                                    </div>
                                                </div>

                                                <div class="clientForm">
                                                    <div>
                                                        <span>العنوان/ </span> <input type="text" name="" id="finishAddress" readonly>
                                                    </div>

                                                    <div>
                                                        <span>الرقم قومى/ </span> <input type="text" name="" id="finishId" readonly>
                                                    </div>

                                                </div>

                                                <div class="comericalRecord">
                                                    <div>
                                                        <span>سجل تجارى رقم   /</span> <input id="finishComericalRecord" type="text" readonly />
                                                    </div>
                                                </div>

                                                <p class="lead font-weight-bold mt-4">برجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم سداد جميع المستحقات التى عليها واصبح طرفه خالص</p>
                                                <p class="text-center" style="font-weight: bold; font-size: 20px;">وتفضلوا سيادتكم بقبول فائق الإحترام ،،،،</p>

                                                <div class="dateSign">
                                                    <div class="col-12 bill-footer1 billDate">
                                                        <span>تحرير فى <input type="date" id="finishDate" class="mDate" placeholder="dd-mm-yyyy"  readonly/></span>
                                                    </div>

                                                    <div class="col-12 bill-footer2 text-left">
                                                        المدير المسئول /   <br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التوقيع /
                                                    </div>
                                                </div>
                                                <br />

                                                <br>

                                                <div class="col-12 text-center mt-5 ">
                                                    <button class="btn btn-outline-success add_new save-finish-btn">حفظ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- add clients -->
                        <div class="tab-pane fade " id="add-client" role="tabpanel">
                            <div class="add-clients-container mt-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">بيانات العملاء</h2>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-outline-success add_new" data-toggle="modal" data-target="#client">
                                                أضف عميل
                                              </button>

                                              <!-- Modal -->
                                              <div class="modal fade add-new-modal" id="client" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <form id="storeClient">
                                                        @csrf
                                                    <div class="modal-body">
                                                      <div class="container-fluid">
                                                          <div class="row">

                                                            <div class="col-6">
                                                                <input id="name" type="text" class="form-control" placeholder="اسم العميل" />
                                                                <br>
                                                            </div>

                                                            <div class="text-danger" id="clientNameError"></div>

                                                            <div class="col-6">
                                                                <input id="phone" type="text" minlength="1" maxlength="11" placeholder="رقم التليفون" class="form-control" />
                                                            </div>

                                                            <div class="text-danger" id="clientPhoneError"></div>

                                                            <div class="col-6">
                                                                <input id="idNumber" type="text" minlength="1" maxlength="14" required placeholder="الرقم القومى" class="form-control" />
                                                            </div>

                                                            <div class="text-danger" id="clientIdNumberError"></div>

                                                            <div class="col-6">
                                                                <input id="address2" type="text" placeholder="العنوان" class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="text-danger" id="clientAddressError"></div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">حفظ</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    </form>

                                                  </div>
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-12 table-responsive clients mt-3">
                                            <table class="table table-hover table-dark table-striped clients-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>الاسم</th>
                                                    <th>رقم التليفون</th>
                                                    <th>الرقم القومى</th>
                                                    <th>العنوان</th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>

                                                    @foreach ($clients as $index=>$client )
                                                    <tr>

                                                        <td>{{ $index+1 }}</td>
                                                        <td>{{ $client->name }}</td>
                                                        <td>{{ $client->phone }}</td>
                                                        <td>{{ $client->idNumber }}</td>
                                                        <td>{{ $client->address }}</td>
                                                        <td>
                                                            <a href="javascript:void(0)" onclick="editClient({{ $client->id }})" type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#edit-client">
                                                                 تعديل
                                                              </a>

                                                              <!-- Edit Modal -->
                                                              <div class="modal fade add-new-modal" id="edit-client" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                    </div>
                                                                    <form id="editClientForm">
                                                                        @csrf
                                                                    <div class="modal-body">
                                                                      <div class="container-fluid">
                                                                          <div class="row">

                                                                            <input type="hidden" id="editId">

                                                                            <div class="col-6">
                                                                                <input id="editName" type="text" class="form-control" placeholder="اسم العميل" />
                                                                                <br>
                                                                            </div>

                                                                            <div class="text-danger" id="clientEditNameError"></div>

                                                                            <div class="col-6">
                                                                                <input id="editPhone" type="text" minlength="1" maxlength="11" placeholder="رقم التليفون" class="form-control" />
                                                                            </div>

                                                                            <div class="text-danger" id="clientEditPhoneError"></div>

                                                                            <div class="col-6">
                                                                                <input id="editIdNumber" type="text" minlength="7" maxlength="14" placeholder="الرقم القومى" class="form-control" />
                                                                            </div>

                                                                            <div class="text-danger" id="clientEditIdNumberError"></div>

                                                                            <div class="col-6">
                                                                                <input id="editAddress" type="text" placeholder="العنوان" class="form-control" />
                                                                                <br />
                                                                            </div>

                                                                            <div class="text-danger" id="clientEditAddressError"></div>

                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">حفظ</button>
                                                                      </div>
                                                                    </form>

                                                                  </div>
                                                                </div>
                                                              </div>
                                                        </td>
                                                       <form action="{{ route('delete.client',$client->id) }}" method="POST">
                                                        @csrf
                                                        <td><button class="btn btn-danger">حذف</button></td>
                                                        </form>
                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- add dealers -->
                        <div class="tab-pane fade" id="add-dealer" role="tabpanel">
                            <div class="add-dealer-container mt-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">بيانات التجار</h2>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-outline-success add_new" data-toggle="modal" data-target="#new-dealer">
                                                أضف تاجر
                                              </button>

                                              <!-- Modal -->
                                              <div class="modal fade add-new-modal" id="new-dealer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <form id="storeDealer">
                                                        @csrf
                                                    <div class="modal-body">
                                                      <div class="container-fluid">
                                                          <div class="row">

                                                            <div class="col-6">
                                                                <input type="text" id="Dname" class="form-control" placeholder="اسم التاجر" />
                                                                <br>
                                                            </div>

                                                            <div class="text-danger" id="dealerNameError"></div>

                                                            <div class="col-6">
                                                                <input type="text" minlength="1" maxlength="11" id="Dphone" placeholder="رقم التليفون" class="form-control" />
                                                            </div>

                                                            <div class="text-danger" id="dealerPhoneError"></div>

                                                            <div class="col-6">
                                                                <input type="text" id="Daddress" placeholder="العنوان" class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="text-danger" id="dealerAddressError"></div>

                                                            <div class="col-6">
                                                                <input type="text" id="bankAcc" placeholder="اسم البنك - رقم الحساب " class="form-control" />
                                                                <br />
                                                            </div>

                                                            <div class="text-danger" id="dealerbankAccError"></div>

                                                          </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">حفظ</button>
                                                      </div>
                                                    </div>
                                                    </form>

                                                  </div>
                                                </div>
                                              </div>
                                        </div>

                                        <div class="col-12 table-responsive clients mt-3">
                                            <table class="table table-hover table-dark table-striped clients-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>الاسم</th>
                                                    <th>رقم التليفون</th>
                                                    <th>العنوان</th>
                                                    <th>رقم الحساب</th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>

                                                    @foreach ($dealers as $index => $dealer )

                                                    <tr>
                                                        <td>{{ $index+1 }}</td>
                                                        <td>{{ $dealer->name }}</td>
                                                        <td>{{ $dealer->phone }} </td>
                                                        <td>{{ $dealer->address }}</td>
                                                        <td>{{ $dealer->bankAcc }}</td>
                                                        <td>
                                                            <a href="javascript:void(0)" onclick="editDealer({{ $dealer->id }})" class="btn btn-outline-warning" data-toggle="modal" data-target="#editDealer">
                                                                 تعديل
                                                              </a>

                                                              <!-- Edit Modal -->
                                                              <div class="modal fade add-new-modal" id="editDealer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                    </div>
                                                                    <form  id="editDealerForm">
                                                                        @csrf
                                                                    <div class="modal-body">
                                                                      <div class="container-fluid">
                                                                        <div class="row">

                                                                            <div class="col-6">
                                                                                <input name="id" type="hidden" id="editId">
                                                                                <input  type="text" id="editName1" class="form-control" placeholder="اسم التاجر" />
                                                                                <br>
                                                                            </div>

                                                                            <div class="text-danger" id="dealerEditNameError"></div>

                                                                            <div class="col-6">
                                                                                <input type="text" minlength="1" maxlength="11" id="editPhone1" placeholder="رقم التليفون" class="form-control" />
                                                                            </div>
                                                                            <div class="text-danger" id="dealerEditPhoneError"></div>

                                                                            <div class="col-6">
                                                                                <input type="text" id="editAddress1" placeholder="العنوان" class="form-control" />
                                                                                <br />
                                                                            </div>
                                                                            <div class="text-danger" id="dealerEditAddressError"></div>

                                                                            <div class="col-6">
                                                                                <input type="text" id="editBankAcc" placeholder="اسم البنك - رقم الحساب" class="form-control" />
                                                                                <br />
                                                                            </div>

                                                                            <div class="text-danger" id="dealerEditBankAccError"></div>
                                                                        </div>
                                                                      </div>
                                                                      <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">حفظ</button>
                                                                      </div>
                                                                    </div>
                                                                </form>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                        </td>
                                                        <form action="{{ route('delete.dealer',$dealer->id) }}" method="POST">
                                                            @csrf
                                                            <td><button type="submit" class="btn btn-danger">حذف</button></td>
                                                        </form>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Storage -->
                        <div class="tab-pane fade " id="storage" role="tabpanel">
                            <div class="storage-cont">
                                <div class="container-fluid">
                                    <div class="row mt-2">
                                        <div class="col-12 text-center mb-4 ">
                                            <h2 class="font-weight-bold">المخزن </h2>
                                        </div>

                                        <div class="col-6">
                                            <select class="vehicle-type form-control bill-type-select">
                                                <optgroup label="نوع المركبة">
                                                    <option value="" selected disabled>
                                                        نوع المركبة
                                                    </option>
                                                    <option>سيارة</option>
                                                    <option>موتوسيكل</option>
                                                    <option>توك توك</option>
                                                    <option>تروسيكل</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <select class=" model-year form-control bill-type-select">
                                                <optgroup label="الموديل">
                                                    <option value="" selected disabled>
                                                        الموديل
                                                    </option>
                                                    <option>2020</option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <button class="btn choose-type-btn">أختر</button>
                                        </div>

                                        <div class="col-12 table-responsive buy-table">
                                            <table class="table table-hover table-dark table-striped buy-table-cont">
                                                <thead>
                                                    <th>#</th>
                                                    <th>نوع المركبة</th>
                                                    <th>الماركة</th>
                                                    <th>الموديل</th>
                                                    <th>شاسية</th>
                                                    <th>ماتور</th>
                                                    <th>اسم التاجر</th>
                                                    <th>تاريخ الشراء</th>
                                                </thead>

                                                <tbody>

                                                    @foreach ($buybills as $index => $buybill )
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $buybill->type }}</td>
                                                        <td>{{ $buybill->brand }} </td>
                                                        <td>{{ $buybill->model }}</td>
                                                        <td>{{ $buybill->chase }}</td>
                                                        <td>{{ $buybill->motor }}</td>
                                                        <td>{{ $buybill->dealer() }}</td>
                                                        <td>{{ $buybill->date }}</td>

                                                    </tr>
                                                    @endforeach



                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dealer Accounts -->
                        <div class="tab-pane fade " id="accounts" role="tabpanel">
                            <div class="accounts-cont">
                                <div class="container-fluid p-0">
                                    <div class="row mt-2">

                                        <div class="col-12 text-center mb-4 ">
                                            <h2 class="font-weight-bold">الحسابات </h2>
                                        </div>

                                        <div class="col-6">
                                            <select class="vehicle-type dealerAccountSelect form-control bill-type-select">
                                                <optgroup label="التاجر">
                                                    <option selected disabled>....أختر إسم التاجر  </option>
                                                    <option>بركات</option>
                                                    <option>محمد رشاد</option>
                                                </optgroup>
                                            </select>
                                        </div>


                                        <div class="col-12 text-center mt-4">
                                            <button class="btn choose-type-btn">أختر</button>
                                        </div>

                                        <div class="col-12 table-responsive buy-table p-0">
                                            <table class="table table-hover table-dark table-striped buy-table-cont">
                                                <thead>
                                                    <th>#</th>
                                                    <th>اسم التاجر</th>
                                                    <th>الماركة</th>
                                                    <th>الموديل</th>
                                                    <th>شاسية</th>
                                                    <th>ماتور</th>
                                                    <th>تاريخ الشراء</th>
                                                    <th>ثمن المركبة</th>
                                                    <th>المدفوع</th>
                                                    <th>المتبقى</th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>غبور</td>
                                                        <td>بوكسر 150 </td>
                                                        <td>2022</td>
                                                        <td>LC501602</td>
                                                        <td>MP51035</td>
                                                        <td>10/10/2021</td>
                                                        <td>$ 210000</td>
                                                        <td>$ 150000</td>
                                                        <td>$ 60000</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#edit-accounts">
                                                                تعديل
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade add-new-modal" id="edit-accounts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">

                                                                                <div class="col-6">
                                                                                    <input type="text" placeholder="ثمن المركبة" class="form-control">
                                                                                    <br />
                                                                                </div>

                                                                                <div class="col-6">
                                                                                    <input type="text" placeholder=" المدفوع" class="form-control">
                                                                                    <br />
                                                                                </div>

                                                                                <div class="col-6">
                                                                                    <input type="text" placeholder="المتبقى " class="form-control">
                                                                                    <br />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success">حفظ</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <button class="btn btn-danger">حذف</button>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>بركات</td>
                                                        <td>تويوتا  </td>
                                                        <td>2002</td>
                                                        <td>LC121602</td>
                                                        <td>MP01035</td>
                                                        <td>25/10/2021</td>
                                                        <td>$ 270000</td>
                                                        <td>$ 180000</td>
                                                        <td>$ 90000</td>
                                                        <td>
                                                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#edit-accounts">
                                                                تعديل
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade add-new-modal" id="edit-accounts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <div class="row">

                                                                                <div class="col-6">
                                                                                    <input type="text" placeholder="ثمن المركبة" class="form-control">
                                                                                    <br />
                                                                                </div>

                                                                                <div class="col-6">
                                                                                    <input type="text" placeholder=" المدفوع" class="form-control">
                                                                                    <br />
                                                                                </div>

                                                                                <div class="col-6">
                                                                                    <input type="text" placeholder="المتبقى " class="form-control">
                                                                                    <br />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success">حفظ</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td>
                                                            <button class="btn btn-danger">حذف</button>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div> <!-- end table -->

                                    </div>

                                    <div class="money-data-container mt-5">
                                        <div class="accounts-label">
                                            <label for="creditor" id="creditor-label">دائن</label>
                                            <label for="depit" id="depit-label">مدين</label>
                                        </div>
                                        <div class="accounts-data">
                                            <input type="number" value="" id="creditor" />
                                            <input type="number" value="" id="depit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Client Accounts -->
                        <div class="tab-pane fade " id="client-accounts" role="tabpanel">
                            <div class="accounts-cont">
                                <div class="container-fluid p-0">
                                    <div class="row mt-2">

                                        <div class="col-12 text-center mb-4 ">
                                            <h2 class="font-weight-bold">حسابات العملاء </h2>
                                        </div>

                                        <div class="col-6">
                                            <select class="vehicle-type accClientSelect form-control bill-type-select">
                                                <optgroup label="العملاء">
                                                    <option selected disabled>اسم العميل ...</option>
                                                    <option>بركات</option>
                                                    <option>محمد رشاد</option>
                                                </optgroup>
                                            </select>
                                        </div>


                                        <div class="col-12 text-center mt-4">
                                            <button class="btn choose-type-btn">أختر</button>
                                        </div>

                                        <div class="col-12 mt-4 add-acc-cont p-2">
                                            <button type="button" class="btn btn-outline-info add_new" data-toggle="modal" data-target="#add-client-accounts">
                                                أضف حساب عميل
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade add-new-modal" id="add-client-accounts" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            <div class="row">

                                                                <div class="col-6">
                                                                    <select class="form-control accClientSelect2">
                                                                        <optgroup label="أسم العميل">
                                                                            <option selected disabled>أسم العميل</option>
                                                                            <option>على</option>
                                                                            <option>مينا</option>
                                                                        </optgroup>
                                                                    </select>
                                                                    <br />
                                                                </div>

                                                                <div class="col-6">
                                                                    <select class="form-control accClientChase">
                                                                        <optgroup label="شاسية">
                                                                            <option selected disabled>شاسية </option>
                                                                            <option>LC2885</option>
                                                                            <option>MD5886</option>
                                                                        </optgroup>
                                                                    </select>
                                                                    <br />
                                                                </div>
                                                                <br/><br/>

                                                                <div class="col-6">
                                                                    <label for="f-date">تاريخ اول قسط</label>
                                                                    <input type="date" name="" id="f-date" class="form-control">
                                                                </div>

                                                                <div class="col-6">
                                                                    <label for="l-date">تاريخ اخر قسط</label>
                                                                    <input type="date" name="" id="l-date" class="form-control">
                                                                    <br />
                                                                </div>

                                                                <div class="col-6">
                                                                    <input type="number" placeholder="عدد الاقساط" class="form-control">
                                                                </div>

                                                                <div class="col-6">
                                                                    <input type="number" placeholder="قيمة القسط " class="form-control">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success">حفظ</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" table-responsive buy-table p-0">
                                                <table class="table table-hover table-dark table-striped buy-table-cont">
                                                    <thead>
                                                        <th>#</th>
                                                        <th>اسم العميل</th>
                                                        <th>الماركة</th>
                                                        <th>الموديل</th>
                                                        <th>شاسية</th>
                                                        <th>ماتور</th>
                                                        <th>تاريخ اول قسط</th>
                                                        <th>تاريخ اخر قسط </th>
                                                        <th>عدد الاقساط</th>
                                                        <th>قيمة القسط</th>
                                                        <th></th>
                                                        <th></th>
                                                    </thead>

                                                    <tbody>

                                                        <tr>
                                                            <td>1</td>
                                                            <td>محمد على</td>
                                                            <td>بوكسر 150 </td>
                                                            <td>2022</td>
                                                            <td>LC501602</td>
                                                            <td>MP51035</td>
                                                            <td>10/10/2021</td>
                                                            <td>10/10/2024</td>
                                                            <td>12</td>
                                                            <td>3750 $</td>
                                                            <td>
                                                                <button type="button" class="btn btn-outline-warning view-client-account">عرض</button>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger view-client-account">حذف</button>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div> <!-- end table -->
                                        </div>

                                        <div class="col-12 client-account-view">
                                            <div class=" table-responsive buy-table p-0">
                                                <table class="table table-hover table-dark table-striped buy-table-cont">
                                                    <thead>
                                                        <th>#</th>
                                                        <th>اسم العميل</th>
                                                        <th>الماركة</th>
                                                        <th>الموديل</th>
                                                        <th>تاريخ القسط</th>
                                                        <th>قيمة القسط</th>
                                                        <th></th>
                                                    </thead>

                                                    <tbody>

                                                        <tr>
                                                            <td>1</td>
                                                            <td>محمد على</td>
                                                            <td>تويوتا</td>
                                                            <td>2022</td>
                                                            <td>10/10/2021</td>
                                                            <td>4750 $</td>
                                                            <td>
                                                                <input type="checkbox" class="form-control check-installment" />
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div> <!-- end table -->

                                            <div class="col-12 text-left ">
                                                <button class="btn btn-outline-danger prev-page"> السابقة &nbsp;<i class="fas fa-angle-double-left"></i></button>
                                            </div>
                                        </div>



                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Tax Bill toktok / motorcycle -->
                        <div class="tab-pane fade" id="tax-bill" role="tabpanel">
                            <div class="displayTaxBills mt-3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">فواتير ضريبية توكتوك</h2>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <button class="btn btn-outline-success add_new newTaxBillBtn">فاتورة جديدة</button>
                                        </div>

                                        <div class="all-bills-table-container table-responsive">
                                            <table class="table table-hover table-dark table-striped all-bills-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>رقم الفاتورة</th>
                                                    <th>الاسم</th>
                                                    <th>الماركة</th>
                                                    <th>الشاسية</th>
                                                    <th>الماتور</th>
                                                    <th>تاريخ الفاتورة</th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>
                                                    @foreach($taxbillsByc as $index => $taxbill)

                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $taxbill->id }}</td>
                                                        <td>{{ $taxbill->clientName }}</td>
                                                        <td>{{ $taxbill->brand }}</td>
                                                        <td>{{ $taxbill->chase }}</td>
                                                        <td>{{ $taxbill->motor }}</td>
                                                        <td>{{ $taxbill->date }}</td>
                                                        <td><a href="{{ route('edit.taxBillByc',$taxbill->id) }}" class="btn btn-warning">تعديل</a></td>
                                                        <form action="{{ route('delete.taxBillByc',$taxbill->id) }}" method="POST">
                                                            @csrf
                                                            <td><button class="btn btn-danger" type="submit" >حذف</button></td>
                                                        </form>
                                                        <td><a href="{{ route('show.taxBillByc',$taxbill->id) }}" target="_blank" class="btn btn-success">عرض</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form id="taxBillBycForm">
                                @csrf
                            <div class="tax-bill">

                                <div class="billSerialCont">
                                    <p class="taxBillTitle">فاتورة بيع</p>
                                    <p class="taxBillSerialCont">
                                        <select id="taxBillBycId"  class="taxSerialInp" onchange="getSellBillBycInfo()" style="width: 100% !important; text-align:center !important" >
                                            @foreach ($sellbillByc as $sellbill )
                                                <option value="{{ $sellbill->id }}">{{ $sellbill->id }}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                </div>

                                <div class="billDetails">
                                    <ul>
                                        <li>
                                            <span>التـاريــخ: </span><input id="taxBillBycDate" type="date"  />
                                        </li>
                                        <li>
                                            <span>المطلوب من السيد: </span><input id="taxBillBycName" type="text"  readonly/>
                                        </li>
                                        <li>
                                            <span>العنوان: </span><input id="taxBillBycAddress" type="text" readonly />
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
                                                    <input id="taxBillBycTotalPrice" type="text" />
                                                </td>
                                                <td>
                                                    <input id="taxBillBycCount" type="number" />
                                                </td>
                                                <td>
                                                    <input id="taxBillBycCarPrice" type="text" />
                                                </td>
                                                <td>
                                                    <input type="text"  id="taxBillBycBrand" readonly>
                                                    <input type="text"  id="taxBillBycModel" readonly>
                                                    <div class="taxBillTableDisblayChase">
                                                        <label for="">ش/ </label><input type="text"  id="taxBillBycChase" readonly> <br/>
                                                        <label for="">م/ </label><input type="text"  id="taxBillBycMotor" readonly>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="carPriceTaxTitle">
                                                <td>
                                                    <input id="taxBillBycPrice"  type="text" />
                                                    <input id="taxBillBycAddedMoney"  type="text" />
                                                </td>
                                                <td colspan="3">
                                                    <span>السعر</span>
                                                    <span>القيمة المضافة</span>
                                                </td>
                                            </tr>

                                            <tr class="taxBillFinallPrice">
                                                <td>
                                                    <input id="taxBillBycBillTotal" type="text"/>
                                                </td>
                                                <td colspan="3">
                                                    <textarea></textarea>
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


                            </div>
                            </form>
                        </div>

                        <!-- Tax Bill Car  -->
                        <div class="tab-pane fade " id="tax-billCar" role="tabpanel">
                            <div class="displayTaxBillsCar mt-3">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 text-center mb-2 ">
                                            <h2 class="font-weight-bold">فواتير ضريبية سيارة</h2>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <button class="btn btn-outline-success add_new newTaxBillBtnCar">فاتورة جديدة</button>
                                        </div>

                                        <div class="all-bills-table-container table-responsive">
                                            <table class="table table-hover table-dark table-striped all-bills-table">
                                                <thead>
                                                    <th>#</th>
                                                    <th>رقم الفاتورة</th>
                                                    <th>الاسم</th>
                                                    <th>الماركة</th>
                                                    <th>الشاسية</th>
                                                    <th>الماتور</th>
                                                    <th>تاريخ الفاتورة</th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>

                                                <tbody>
                                                    @foreach($taxbillsCar as $index => $taxbill)
                                                    <tr>
                                                        <td>{{ $index + 1}}</td>
                                                        <td>{{ $taxbill->id }}</td>
                                                        <td>{{ $taxbill->clientName }}</td>
                                                        <td>{{ $taxbill->brand }}</td>
                                                        <td>{{ $taxbill->chase }}</td>
                                                        <td>{{ $taxbill->motor }}</td>
                                                        <td>{{ $taxbill->date }}</td>
                                                        <td><a href="{{ route('edit.taxBillCar',$taxbill->id) }}" class="btn btn-warning">تعديل</a></td>
                                                        <form action="{{ route('delete.taxBillCar',$taxbill->id) }}" method="POST">
                                                        @csrf
                                                        <td><button class="btn btn-danger" type="submit">حذف</button></td>
                                                        </form>
                                                        <td><a href="{{ route('show.taxBillCar',$taxbill->id) }}" class="btn btn-success" target="_blank">عرض</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form id="taxBillCarForm">
                                        @csrf
                                    <div class="tax-billCar">

                                        <div class="billSerialCont">
                                            <p class="taxBillTitle">فاتورة بيع</p>
                                            <p class="taxBillSerialCont">
                                                <select id="taxBillCarId"  class="taxSerialInp" onchange="getSellBillCarInfo()" style="width: 100% !important; text-align:center !important" >
                                                    @foreach ($sellbillCars as$sellbill )
                                                        <option value="{{ $sellbill->id }}">{{ $sellbill->id }}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>

                                        <div class="billDetails">
                                            <ul>
                                                <li>
                                                    <span>التـاريــخ: </span><input id="taxBillCarDate" type="date"  />
                                                </li>
                                                <li>
                                                    <span>المطلوب من السيد: </span><input id="taxBillCarName" type="text" readonly />
                                                </li>
                                                <li>
                                                    <span>العنوان: </span><input id="taxBillCarAddress" type="text"  readonly/>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="taxBillTable">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th>القيمة </th>
                                                    <th>الشاسيـة</th>
                                                    <th>الماتور</th>
                                                    <th>البيـــــــان</th>
                                                </thead>
                                                <tbody>
                                                    <tr class="carPriceTax">
                                                        <td>
                                                            <input id="taxBillCarTotalPrice" type="text" />
                                                        </td>
                                                        <td>
                                                            <input id="taxBillCarChase" type="text" readonly />
                                                        </td>
                                                        <td>
                                                            <input id="taxBillCarMotor" type="text"  readonly/>
                                                        </td>
                                                        <td>
                                                            <input type="text"  id="taxBillCarBrand" readonly />
                                                            <input type="text"  id="taxBillCarModel" readonly />

                                                        </td>
                                                    </tr>

                                                    <tr class="carPriceTaxTitle">
                                                        <td>
                                                            <input id="taxBillCarCarPrice" type="text" />
                                                            <input id="taxBillCarAddedMoney" type="text" />
                                                            <input id="taxBillCarDevelopFee" type="text" />
                                                            <input id="taxBillCarInsurance" type="text" />
                                                            <input id="taxBillCarInsuranceFee" type="text" />
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
                                                            <input id="taxBillCarBillTotal" type="text"/>
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
                                </div>
                            </form>
                        </div>

                </div>
                <!-- Main Content -->


            </div>
        </div>
    </section>




    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/datatables.js"></script>
    <script src="assets/js/datatables-bootstrap.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>


    <script>
        $('.buy-table-cont,.all-bills-table,.clients-table').dataTable({});
    </script>


{{-- Store Dealer --}}
<script>
    $("#storeDealer").submit(function(e)
    {
        e.preventDefault();

        let name = $("#Dname").val();
        let address = $("#Daddress").val();
        let phone = $("#Dphone").val();
        let bankAcc = $("#bankAcc").val();
        let _token = $("input[name=_token]").val();

        console.log(name,address,phone,bankAcc);

        $.ajax({
            url:"{{ route('store.dealer') }}",
            type:'POST',
            data:{
                name:name,
                phone:phone,
                address:address,
                bankAcc:bankAcc,
                _token:_token
            },
            success:function(response)
            {
                alert('تم اضافه التاجر');
                location.reload();
            },
            error:function(error)
            {
                console.log(error);
                alert('خطأ في البيانات')
                $("#dealerNameError").text(error.responseJSON.errors.name);
                $("#dealerAddressError").text(error.responseJSON.errors.address);
                $("#dealerPhoneError").text(error.responseJSON.errors.phone);
                $("#dealerbankAccError").text(error.responseJSON.errors.bankAcc);
            }
        });


    });
</script>

{{-- edit Dealer information --}}
<script>
    function editDealer(id)
    {
        $.get('/edit/dealer/'+id,function(dealer)
        {
            $("#editId").val(dealer.id);
            $("#editName1").val(dealer.name);
            $("#editPhone1").val(dealer.phone);
            $("#editAddress1").val(dealer.address);
            $("#editBankAcc").val(dealer.bankAcc);
        });
    }
</script>

{{-- Update Dealer Information --}}
<script>
    $("#editDealerForm").submit(function(e)
    {
        e.preventDefault();
        let id = $("#editId").val()
        let name = $("#editName1").val();
        let phone = $("#editPhone1").val();
        let address = $("#editAddress1").val();
        let bankAcc = $("#editBankAcc").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url:"{{ route('update.dealer') }}",
            type:'POST',
            data:{
                id:id,
                name:name,
                phone:phone,
                address:address,
                bankAcc:bankAcc,
                _token:_token
            },
            success:function(response)
            {
                alert('تمت تعديل البيانات بنجاح');
                location.reload();
            },
            error:function(error)
            {
                alert('خطأ في البيانات')
                console.log(error);
                $("#dealerEditNameError").text(error.responseJSON.errors.name);
                $("#dealerEditAddressError").text(error.responseJSON.errors.address);
                $("#dealerEditPhoneError").text(error.responseJSON.errors.phone);
                $("#dealerEditBankAccError").text(error.responseJSON.errors.bankAcc);
            }
        });
    });
</script>


{{-- ------------------------------------------------------------------------------------------------------------------------- --}}



{{-- Store Client --}}
<script>
        $("#storeClient").submit(function(e)
    {
        e.preventDefault();

        let name = $("#name").val();
        let address = $("#address2").val();
        let phone = $("#phone").val();
        let idNumber = $("#idNumber").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url:"{{ route('store.client') }}",
            type:'POST',
            data:{
                name:name,
                phone:phone,
                address:address,
                idNumber:idNumber,
                _token:_token
            },
            success:function(response)
            {
                alert('تم اضافه العميل');
                location.reload();
            },
            error:function(error)
            {
                console.log(error);
                alert('خطأ في البيانات')
                $("#clientNameError").text(error.responseJSON.errors.name);
                $("#clientAddressError").text(error.responseJSON.errors.address);
                $("#clientPhoneError").text(error.responseJSON.errors.phone);
                $("#clientIdNumberError").text(error.responseJSON.errors.idNumber);
            }
        });


    });
</script>

{{-- edit client information --}}
<script>
    function editClient(id)
    {
        $.get('/edit/client/'+id,function(client)
        {
            $("#editId").val(client.id);
            $("#editName").val(client.name);
            $("#editPhone").val(client.phone);
            $("#editAddress").val(client.address);
            $("#editIdNumber").val(client.idNumber);
        });
    }
</script>

{{-- update client Information --}}
<script>
         $("#editClientForm").submit(function(e)
    {
        e.preventDefault();
        let id = $("#editId").val()
        let name = $("#editName").val();
        let address = $("#editAddress").val();
        let phone = $("#editPhone").val();
        let idNumber = $("#editIdNumber").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url:"{{ route('update.client') }}",
            type:'POST',
            data:{
                id:id,
                name:name,
                phone:phone,
                address:address,
                idNumber:idNumber,
                _token:_token
            },
            success:function(response)
            {
                alert('تم تعديل بيانات العميل');
                location.reload();
            },
            error:function(error)
            {
                console.log(error);
                alert('خطأ في البيانات')
                $("#clientEditNameError").text(error.responseJSON.errors.name);
                $("#clientEditAddressError").text(error.responseJSON.errors.address);
                $("#clientEditPhoneError").text(error.responseJSON.errors.phone);
                $("#clientEditIdNumberError").text(error.responseJSON.errors.idNumber);
            }
        });


    });
</script>

{{-- -------------------------------------------------------------------------------------------------------------------------- --}}




{{-- store BuyBill --}}
<script>
     $("#storeBuyBill").submit(function(e)
    {
        e.preventDefault();

        let dealer_id = $("#dealer_id").val();
        let type = $("#type2").val();
        let brand = $("#brand2").val();
        let model = $("#model2").val();
        let chase = $("#chase").val();
        let motor = $("#motor2").val();
        let date = $("#date").val();
        let driver = $("#driver").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url:"{{ route('store.buybill') }}",
            type:'POST',
            data:{
                dealer_id:dealer_id,
                type:type,
                brand:brand,
                model:model,
                chase:chase,
                motor:motor,
                date:date,
                driver:driver,
                _token:_token,
            },
            success:function(response)
            {
                alert('تم اضافه فاتوره الشراء');
                location.reload();
            },
            error:function(error)
            {
                console.log(error);
                alert('خطأ في البيانات')
                $("#buybillDealerError").text(error.responseJSON.errors.dealer_id);
                $("#buybillTypeError").text(error.responseJSON.errors.type);
                $("#buybillBrandError").text(error.responseJSON.errors.brand);
                $("#buybillModelError").text(error.responseJSON.errors.model);
                $("#buybillChaseError").text(error.responseJSON.errors.chase);
                $("#buybillMotorError").text(error.responseJSON.errors.motor);
                $("#buybillDateError").text(error.responseJSON.errors.date);
                $("#buybillDriverError").text(error.responseJSON.errors.driver);
            }
        });


    });

</script>

{{-- edit BuyBill --}}
<script>
    function editBuyBill(id)
    {
        $.get('/edit/buybill/'+id,function(buybill)
        {
            $('#buybillId').val(buybill.id);
            $("#editBrand").val(buybill.brand);
            $("#editModel").val(buybill.model);
            $("#editChase").val(buybill.chase);
            $("#editMotor").val(buybill.motor);
            $("#editDate").val(buybill.date);
            $("#editDriver").val(buybill.driver);
        });
    }
</script>


{{-- update BuyBill --}}
<script>
     $("#editBuybillForm").submit(function(e)
    {
        e.preventDefault();
        let id = $('#buybillId').val();
        let dealer_id = $("#editDealer_id").val();
        let type = $("#editType").val();
        let brand = $("#editBrand").val();
        let model = $("#editModel").val();
        let chase = $("#editChase").val();
        let motor = $("#editMotor").val();
        let date = $("#editDate").val();
        let driver = $("#editDriver").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url:"{{ route('update.buybill') }}",
            type:'POST',
            data:{
                id:id,
                dealer_id:dealer_id,
                type:type,
                brand:brand,
                model:model,
                chase:chase,
                motor:motor,
                date:date,
                driver:driver,
                _token:_token,
            },
            success:function(response)
            {
                alert('تم تعديل فاتوره الشراء');
                location.reload();
            },
            error:function(error)
            {
                console.log(error);
                alert('خطأ في البيانات')
                $("#buybillDealerError").text(error.responseJSON.errors.dealer_id);
                $("#buybillTypeError").text(error.responseJSON.errors.type);
                $("#buybillBrandError").text(error.responseJSON.errors.brand);
                $("#buybillModelError").text(error.responseJSON.errors.model);
                $("#buybillChaseError").text(error.responseJSON.errors.chase);
                $("#buybillMotorError").text(error.responseJSON.errors.motor);
                $("#buybillDateError").text(error.responseJSON.errors.date);
                $("#buybillDriverError").text(error.responseJSON.errors.driver);
            }
        });


    });

</script>

{{-- get the chase info --}}
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

{{-- get Client ID Number --}}
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

{{-- Store Sell Bill --}}
<script>
    $("#sellBillForm").submit(function(e)
   {
       e.preventDefault();
       let trafficManger =$("#trafficManger").val();
       let type = $("#type").val();
       let carNumber = $("#carNumber").val();
       let brand = $("#brand").val();
       let model = $("#model").val();
       let chase = $("#list").val();
       let motor = $("#motor").val();
       let liters = $("#liters").val();
       let color = $("#color1").val();
       let shape = $("#shape").val();
       let passengerNum = $("#passengerNum").val();
       let weight = $("#weight").val();
       let load = $("#load").val();
       let fuel = $("#fuel").val();
       let client_id = $("#list2").val();
       let address = $("#address").val();
       let idNumber = $("#id").val();
       let comericalRecord = $("#comericalRecord").val();
       let installments = $("#installments").val();
       let tax = $("#tax").val();
       let originalPrice = $("#originalPrice").val();
       let installmentTax = $("#installmentTax").val();
       let totalPrice = $("#totalPrice").val();
       let date = $("#mDate").val();
       let _token = $("input[name=_token]").val();
       let serialNum = $("#serialNum").val()

       $.ajax({
           url:"{{ route('store.sellbill') }}",
           type:'POST',
           data:{
               trafficManger:trafficManger,
               type:type,
               carNumber:carNumber,
               brand:brand,
               model:model,
               chase:chase,
               motor:motor,
               liters:liters,
               color:color,
               shape:shape,
               passengerNum:passengerNum,
               weight:weight,
               load:load,
               fuel:fuel,
               client_id:client_id,
               address:address,
               idNumber:idNumber,
               comericalRecord:comericalRecord,
               installments:installments,
               tax:tax,
               originalPrice:originalPrice,
               installmentTax:installmentTax,
               totalPrice:totalPrice,
               date:date,
               _token:_token,
               serialNum : serialNum,
           },
           success:function(response)
           {
               alert('تم اضافه فاتوره البيع');
               location.reload();
           },
           error:function(error)
           {
               console.log(error);
               alert('خطأ في البيانات')
               $("#sellbillCarNumberError").text(error.responseJSON.errors.dealer_id);
               $("#sellbillLitersError").text(error.responseJSON.errors.type);
               $("#sellbillFuelError").text(error.responseJSON.errors.date);
               $("#sellbillAddressError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxRegNumberError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentsError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillOriginalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillTotalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillDateError").text(error.responseJSON.errors.driver);

           }
       });


   });
</script>

{{-- Store Sell Bill (بدون ملكي) --}}

<script>
    $("#cashSellBillForm").submit(function(e)
   {
       e.preventDefault();
       let serialNum = $("#serialNum1").val();
       let trafficManger =$("#trafficManager1").val();
       let type = $("#type1").val();
       let carNumber = $("#carNumber1").val();
       let brand = $("#brand1").val();
       let model = $("#model1").val();
       let chase = $("#list3").val();
       let motor = $("#motor1").val();
       let liters = $("#liters1").val();
       let color = $("#color2").val();
       let shape = $("#shape1").val();
       let passengerNum = $("#passengerNum1").val();
       let weight = $("#weight1").val();
       let load = $("#load1").val();
       let fuel = $("#fuel1").val();
       let client_id = $("#list4").val();
       let address = $("#address1").val();
       let idNumber = $("#id1").val();
       let comericalRecord = $("#comericalRecord1").val();
       let installments = $("#installments1").val();
       let tax = $("#tax1").val();
       let originalPrice = $("#originalPrice1").val();
       let installmentTax = $("#installmentTax1").val();
       let totalPrice = $("#totalPrice1").val();
       let date = $("#mDate1").val();
       let _token = $("input[name=_token]").val();

       $.ajax({
           url:"{{ route('store.sellbill') }}",
           type:'POST',
           data:{
               trafficManger:trafficManger,
               type:type,
               carNumber:carNumber,
               brand:brand,
               model:model,
               chase:chase,
               motor:motor,
               liters:liters,
               color:color,
               shape:shape,
               passengerNum:passengerNum,
               weight:weight,
               load:load,
               fuel:fuel,
               client_id:client_id,
               address:address,
               idNumber:idNumber,
               installments:installments,
               comericalRecord:comericalRecord,
               date:date,
               _token:_token,
               serialNum : serialNum
           },
           success:function(response)
           {
               alert('تم اضافه فاتوره البيع');
               location.reload();
           },
           error:function(error)
           {
               console.log(error);
               alert('خطأ في البيانات')
               $("#sellbillCarNumberError").text(error.responseJSON.errors.dealer_id);
               $("#sellbillLitersError").text(error.responseJSON.errors.type);
               $("#sellbillFuelError").text(error.responseJSON.errors.date);
               $("#sellbillAddressError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxRegNumberError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentsError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillOriginalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillTotalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillDateError").text(error.responseJSON.errors.driver);

           }
       });


   });
</script>



{{-- get the chase info (cash bill) --}}
<script>
    function getChaseInfo1()
    {
        let selected = document.getElementById('list3').value;
        $.get('/getChaseInfo/'+selected,function(chase)
        {
            $('#brand1').val(chase.brand);
            $('#model1').val(chase.model);
            $('#motor1').val(chase.motor);
            $('#type1').val(chase.type);
        });

    }
</script>

{{-- get Client ID Number (cash bill) --}}
<script>
    function getClientIdNumber1()
    {
        let selected = document.getElementById('list4').value
        $.get('/getClientId/'+selected, function(client)
        {
            $("#id1").val(client.idNumber);
            $("#address1").val(client.address);
        });
    }
</script>

<script>

    $(document).ready(function() {
     $('#list,#list2,#list3,#list4,#dealer_id,#editDealer_id,#renewList1,#renewList2,.model-year,.dealerAccountSelect,.accClientChase,.accClientSelect,.accClientSelect2').select2();
 });

 /* Make Select 2 dropdown search work with modal */
 $(".buyBillSelect").select2({
    tags: true,
    dropdownParent: $("#dealer")
});

</script>

{{-- Get SellBill Info --}}
<script>
    $('#taxBillBycId').select2();
    $('#taxBillCarId').select2();
    function getSellBillBycInfo()
    {
        let id = $('#taxBillBycId').val();
        console.log(id);
        $.get('/sellBillBycInfo/'+id,function(sellbill)
        {
            $('#taxBillBycName').val(sellbill.load);
            $('#taxBillBycAddress').val(sellbill.address);
            $('#taxBillBycBrand').val(sellbill.brand);
            $('#taxBillBycModel').val(sellbill.model);
            $('#taxBillBycChase').val(sellbill.chase);
            $('#taxBillBycMotor').val(sellbill.motor);
        });
    }

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

{{--  Sell Bill Delete Confirmation --}}
<script>

     $('.show_confirm').click(function(event) {
          var form =  $('#deleteSellbill');
          var id = $('#sellbillid').val();
          event.preventDefault();
          swal({
              title: `${id} :هل انت متأكد من مسح الفاتورة رقم`,
              text: "!!الفاتورة لا يمكن استرجعها مجددا بعد مسحها",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>

{{-- TaxBill Car Form --}}
<script>
    $("#taxBillCarForm").submit(function(e)
   {
       e.preventDefault();
       let sellBillId =$("#taxBillCarId").val();
       let date = $("#taxBillCarDate").val();
       let clientName = $("#taxBillCarName").val();
       let address = $("#taxBillCarAddress").val();
       let totalPrice = $("#taxBillCarTotalPrice").val();
       let chase = $("#taxBillCarChase").val();
       let motor = $("#taxBillCarMotor").val();
       let brand = $("#taxBillCarBrand").val();
       let model = $("#taxBillCarModel").val();
       let carPrice = $("#taxBillCarCarPrice").val();
       let addedMoney = $("#taxBillCarAddedMoney").val();
       let developFee = $("#taxBillCarDevelopFee").val();
       let insurance = $("#taxBillCarInsurance").val();
       let insuranceFee = $("#taxBillCarInsuranceFee").val();
       let billTotal = $("#taxBillCarBillTotal").val();
       let _token = $("input[name=_token]").val();


       $.ajax({
           url:"{{ route('store.taxBillCar') }}",
           type:'POST',
           data:{
            sellBillId:sellBillId,
            date:date,
            clientName:clientName,
            address:address,
            totalPrice:totalPrice,
            chase:chase,
            motor:motor,
            brand:brand,
            model:model,
            carPrice:carPrice,
            addedMoney:addedMoney,
            developFee:developFee,
            insurance:insurance,
            insuranceFee:insuranceFee,
            billTotal:billTotal,
            _token:_token,
           },
           success:function(response)
           {
               alert('تم اضافه فاتوره ضريبيه');
               location.reload();
           },
           error:function(error)
           {
               console.log(error);
               alert('خطأ في البيانات')
               $("#sellbillCarNumberError").text(error.responseJSON.errors.dealer_id);
               $("#sellbillLitersError").text(error.responseJSON.errors.type);
               $("#sellbillFuelError").text(error.responseJSON.errors.date);
               $("#sellbillAddressError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxRegNumberError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentsError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillOriginalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillTotalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillDateError").text(error.responseJSON.errors.driver);

           }
       });


   });
</script>


{{-- TaxBill Byc Form --}}
<script>
    $("#taxBillBycForm").submit(function(e)
   {
       e.preventDefault();
       let sellBillId =$("#taxBillBycId").val();
       let date = $("#taxBillBycDate").val();
       let clientName = $("#taxBillBycName").val();
       let address = $("#taxBillBycAddress").val();
       let totalPrice = $("#taxBillBycTotalPrice").val();
       let count = $("#taxBillBycCount").val();
       let carPrice = $("#taxBillBycCarPrice").val();
       let brand = $("#taxBillBycBrand").val();
       let model = $("#taxBillBycModel").val();
       let chase = $("#taxBillBycChase").val();
       let motor = $("#taxBillBycMotor").val();
       let price = $("#taxBillBycPrice").val();
       let addedMoney = $("#taxBillBycAddedMoney").val();
       let billTotal = $("#taxBillBycBillTotal").val();
       let _token = $("input[name=_token]").val();


       $.ajax({
           url:"{{ route('store.taxBillByc') }}",
           type:'POST',
           data:{
            sellBillId:sellBillId,
            date:date,
            clientName:clientName,
            address:address,
            totalPrice:totalPrice,
            count:count,
            carPrice:carPrice,
            brand:brand,
            model:model,
            chase:chase,
            motor:motor,
            price:price,
            addedMoney:addedMoney,
            billTotal:billTotal,
            _token:_token,
           },
           success:function(response)
           {
               alert('تم اضافه فاتوره ضريبيه');
               location.reload();
           },
           error:function(error)
           {
            alert('خطأ في البيانات')
               console.log(error);

           }
       });


   });
</script>

{{-- Addition --}}
<script>
   $('#taxBillBycAddedMoney').keyup(function(){
       let price = Number($('#taxBillBycPrice').val());
       let added = Number($('#taxBillBycAddedMoney').val());
       let totalByc = price + added;
       let roundedByc = Math.round(totalByc*100)/100;
    $('#taxBillBycBillTotal').val(roundedByc) ;
   });

   $('#taxBillCarInsuranceFee').keyup(function(){
       let price = Number($('#taxBillCarCarPrice').val());
       let added = Number($('#taxBillCarAddedMoney').val());
       let developfee = Number($('#taxBillCarDevelopFee').val());
       let insurance = Number($('#taxBillCarInsurance').val());
       let insurancefee = Number($('#taxBillCarInsuranceFee').val());
       let totalCar = price + added + developfee + insurance + insurancefee;
       let roundedCar = Math.round(totalCar*100)/100;
        $('#taxBillCarBillTotal').val( roundedCar ) ;
   })
</script>

{{--  Sell Bill Delete Confirmation --}}
<script>
    $('#deleteSellbill').submit(function(e){
      let id = $('#sellbillid').val();
      console.log(id);
      let _token = $("input[name=_token]").val();
      $.ajax({
          url:"{{ route('delete.sellbill') }}",
          type:'POST',
          data:{
              id:id,
              _token:_token
          },
          error:function(error)
          {
              console.log(error);
          },
          success:function(response)
          {
            location.reload();
          }
      });
    });

     $('.show_confirm').click(function(event) {
          var form =  $('#deleteSellbill');
          var id = $(this).data('id');
          $("#sellbillid").val(id);
          event.preventDefault();
          swal({
              title: `${id} :هل انت متأكد من مسح الفاتورة رقم`,
              text: "!!الفاتورة لا يمكن استرجعها مجددا بعد مسحها",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });


</script>

{{-- Re New Get INFO --}}
<script>
    $('#renewSellbillId').select2();


    function renewSellbill()
    {
        let id = $('#renewSellbillId').val();
        console.log(id);
        $.get('/renew/getinfo/'+id,function(sellbill){
            $('#renewTrafficManger').val(sellbill.trafficManger);
            $('#renewCarNumber').val(sellbill.carNumber);
            $('#renewType').val(sellbill.type);
            $('#renewBrand').val(sellbill.brand);
            $('#renewModel').val(sellbill.model);
            $('#renewChase').val(sellbill.chase);
            $('#renewMotor').val(sellbill.motor);
            $('#renewLiters').val(sellbill.liters);
            $('#renewFuel').val(sellbill.fuel);
            $('#renewShape').val(sellbill.shape);
            $('#renewColor').val(sellbill.color);
            $('#renewPassengerNum').val(sellbill.passengerNum);
            $('#renewWeight').val(sellbill.weight);
            $('#renewLoad').val(sellbill.load);
            $('#renewClient').val(sellbill.client_id);
            $('#renewAddress').val(sellbill.address);
            $('#renewId').val(sellbill.idNumber);
            $('#renewComericalRecord').val(sellbill.comericalRecord);
            $('#renewDate').val(sellbill.date);
            $('#renewClientId').val(sellbill.installments)
        });
    }
</script>

{{-- Store Renew Bill --}}
<script >
        $("#renewForm").submit(function(e)
   {
       e.preventDefault();
       let sellbillId = $("#renewSellbillId").val()
       let trafficManger =$("#renewTrafficManger").val();
       let type = $("#renewType").val();
       let carNumber = $("#renewCarNumber").val();
       let brand = $("#renewBrand").val();
       let model = $("#renewModel").val();
       let chase = $("#renewChase").val();
       let motor = $("#renewMotor").val();
       let liters = $("#renewLiters").val();
       let color = $("#renewColor").val();
       let shape = $("#renewShape").val();
       let passengerNum = $("#renewPassengerNum").val();
       let weight = $("#renewWeight").val();
       let load = $("#renewLoad").val();
       let fuel = $("#renewFuel").val();
       let client_id = $("#renewClientId").val();
       let address = $("#renewAddress").val();
       let idNumber = $("#renewId").val();
       let comericalRecord = $("#renewComericalRecord").val();
    //    let installments = $("#installments").val();
       let date = $("#renewDate").val();
       let _token = $("input[name=_token]").val();

       $.ajax({
           url:"{{ route('store.renew') }}",
           type:'POST',
           data:{
                sellbillId:sellbillId,
               trafficManger:trafficManger,
               type:type,
               carNumber:carNumber,
               brand:brand,
               model:model,
               chase:chase,
               motor:motor,
               liters:liters,
               color:color,
               shape:shape,
               passengerNum:passengerNum,
               weight:weight,
               load:load,
               fuel:fuel,
               client_id:client_id,
               address:address,
               idNumber:idNumber,
               comericalRecord:comericalRecord,
               date:date,
               _token:_token,
           },
           success:function(response)
           {
               alert('تم اضافه خطاب تجديد');
               location.reload();
           },
           error:function(error)
           {
               console.log(error);
               alert('خطأ في البيانات')
               $("#sellbillCarNumberError").text(error.responseJSON.errors.dealer_id);
               $("#sellbillLitersError").text(error.responseJSON.errors.type);
               $("#sellbillFuelError").text(error.responseJSON.errors.date);
               $("#sellbillAddressError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxRegNumberError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentsError").text(error.responseJSON.errors.driver);
               $("#sellbillTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillOriginalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillInstallmentTaxError").text(error.responseJSON.errors.driver);
               $("#sellbillTotalPriceError").text(error.responseJSON.errors.driver);
               $("#sellbillDateError").text(error.responseJSON.errors.driver);

           }
       });


   });
</script>

{{-- Get Finish Bill Info --}}

<script>
    $('#finishBillList').select2();

    function finishSellbill()
    {
        let id = $('#finishBillList').val();
        console.log(id);
        $.get('/renew/getinfo/'+id,function(sellbill){
            $('#finishTrafficManger').val(sellbill.trafficManger);
            $('#finishCarNumber').val(sellbill.carNumber);
            $('#finishType').val(sellbill.type);
            $('#finishBrand').val(sellbill.brand);
            $('#finishModel').val(sellbill.model);
            $('#finishChase').val(sellbill.chase);
            $('#finishMotor').val(sellbill.motor);
            $('#finishLiters').val(sellbill.liters);
            $('#finishFuel').val(sellbill.fuel);
            $('#finishShape').val(sellbill.shape);
            $('#finishColor').val(sellbill.color);
            $('#finishPassengerNum').val(sellbill.passengerNum);
            $('#finishWeight').val(sellbill.weight);
            $('#finishLoad').val(sellbill.load);
            $('#finishClient').val(sellbill.client_id);
            $('#finishAddress').val(sellbill.address);
            $('#finishId').val(sellbill.idNumber);
            $('#finishComericalRecord').val(sellbill.comericalRecord);
            $('#finishDate').val(sellbill.date);
            $('#finishClientId').val(sellbill.installments)
        });
    }
</script>

{{-- Store Finish Bill --}}

<script>
        $("#finishBillForm").submit(function(e)
    {
    e.preventDefault();
    let sellbillId = $("#finishBillList").val()
    let trafficManger =$("#finishTrafficManger").val();
    let type = $("#finishType").val();
    let carNumber = $("#finishCarNumber").val();
    let brand = $("#finishBrand").val();
    let model = $("#finishModel").val();
    let chase = $("#finishChase").val();
    let motor = $("#finishMotor").val();
    let liters = $("#finishLiters").val();
    let color = $("#finishColor").val();
    let shape = $("#finishShape").val();
    let passengerNum = $("#finishPassengerNum").val();
    let weight = $("#finishWeight").val();
    let load = $("#finishLoad").val();
    let fuel = $("#finishFuel").val();
    let client_id = $("#finishClientId").val();
    let address = $("#finishAddress").val();
    let idNumber = $("#finishId").val();
    let comericalRecord = $("#finishComericalRecord").val();
    // let installments = $("#installments").val();
    let date = $("#finishDate").val();
    let _token = $("input[name=_token]").val();

    $.ajax({
        url:"{{ route('store.finish') }}",
        type:'POST',
        data:{
                sellbillId:sellbillId,
            trafficManger:trafficManger,
            type:type,
            carNumber:carNumber,
            brand:brand,
            model:model,
            chase:chase,
            motor:motor,
            liters:liters,
            color:color,
            shape:shape,
            passengerNum:passengerNum,
            weight:weight,
            load:load,
            fuel:fuel,
            client_id:client_id,
            address:address,
            idNumber:idNumber,
            comericalRecord:comericalRecord,
            date:date,
            _token:_token,
        },
        success:function(response)
        {
            alert('تم اضافه مخالصه');
            location.reload();
        },
        error:function(error)
        {
            console.log(error);
            alert('خطأ في البيانات')
            $("#sellbillCarNumberError").text(error.responseJSON.errors.dealer_id);
            $("#sellbillLitersError").text(error.responseJSON.errors.type);
            $("#sellbillFuelError").text(error.responseJSON.errors.date);
            $("#sellbillAddressError").text(error.responseJSON.errors.driver);
            $("#sellbillTaxRegNumberError").text(error.responseJSON.errors.driver);
            $("#sellbillInstallmentsError").text(error.responseJSON.errors.driver);
            $("#sellbillTaxError").text(error.responseJSON.errors.driver);
            $("#sellbillOriginalPriceError").text(error.responseJSON.errors.driver);
            $("#sellbillInstallmentTaxError").text(error.responseJSON.errors.driver);
            $("#sellbillTotalPriceError").text(error.responseJSON.errors.driver);
            $("#sellbillDateError").text(error.responseJSON.errors.driver);

        }
    });


    });
</script>

</body>
</html>
