<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Home</title>
</head>

<style  type="text/css" media="all">
    *{
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
    padding: 0px;
    margin: 0px;
}
html,body{
    width: 100%;
    height: 100%;
}

.test
{
   color:red;
}


/* Main Content */
 .main-content{
    width: 100%;
    text-align: right;
}
 .main-content .open-btn{
    position: relative;
    width: 5%;
    top: 1%;
    left: 0%;
    font-size: 20px;
    font-weight: bolder;
    padding: 10px;
    cursor: pointer;
    color: #45a29e;
    display: none;
}

 .main-content .bill-type-select{
    background-color: #3b918c;
    color: #fff;
    text-align: center !important;
    direction: rtl !important;
    border: none;
    transition: all .5s ease-in-out;
}
 .main-content .bill-type-select:hover{
    box-shadow: 0 4px 11px -2px #3b918c;
}
 .main-content .sell-bill-cont{
    direction: rtl;
}
 .main-content .sell-bill-cont .bill-header{
    margin-top: 10px;
}
 .main-content .title p{
    line-height: .8;
}
 .main-content .bill-logo{
    text-align: left;
}
 .main-content .bill-logo img{
    width: 90px;
    height: 90px;
    margin-top: -20px;
}
 .main-content .sell-bill-cont .main-title{
    margin-top: 90px;
}
 .main-content .sell-bill-cont .main-title span{
    margin-left: 5px;
}
 .main-content .sell-bill-cont .main-title input{
    border: none;
    width: 120px;
}
 .main-content .traff-input{
    border: none;
    border-bottom: 1px solid rgba(0,0,0,.5);
}
 .main-content .greeting-title{
    font-size: 20px;
    font-weight: bolder;
}
 .main-content .sell-bill-cont .serialNum{
    text-align: center;
}
 .main-content .sell-bill-cont .bottom-header{
    text-align: left;
}
 .main-content .sell-bill-cont .bill-table{
    text-align: center;
    margin-top: 40px;
}
 .main-content .sell-bill-cont .bill-table table{
    table-layout: fixed;
    border: none
}
 .main-content .sell-bill-cont .bill-table tr td{
    text-align: right;
    font-size: 15px;
    line-height: 0.7;
}
 .main-content .sell-bill-cont select{
    border: none;
    border-bottom: 1px solid #2936468e;
    padding: 3px 10px;
    width: 175px;
}
 .main-content .form-input-container{
    display: inline-flex;
    flex-wrap: wrap;
}
 .main-content .form-input-container > div{
    flex: 0 0 32%;
    margin:auto;
    margin-bottom: 18px;
}
 .main-content .req-text{
    font-size: 19px;
}
 .main-content .sell-bill-cont .bill-table tr, .main-content .sell-bill-cont .bill-table td{
    border: none;
}
 .main-content .sell-bill-cont .bill-table tr:nth-child(12) td{
    line-height: 1.5;
}
 .main-content .sell-bill-cont input{
    border: none;
    border-bottom: 1px solid #2936468e;
    padding: 3px 10px;
    text-align: center;
}
 .main-content .sell-bill-cont .bill-table tr td input:focus{
    outline: none;
}
 .main-content .sell-bill-cont .bill-table table tfoot{
    border: 1px solid rgb(209, 209, 209);
}
 .main-content .sell-bill-cont .bill-footer1{
    margin-top: 15px;
    text-align: right;
}
 .main-content .sell-bill-cont .bill-footer2{
    text-align: left;
}
 .main-content .sell-bill-cont .bill-footer1 input{
    border: none;
    border-bottom: 1px solid #2936468e;
    margin-bottom: 10px;
    margin-right: 10px;
}
 .main-content .sell-bill-cont .bill-address{
    margin-top: 5px;
}
 .main-content .sell-bill-cont .bill-address input{
    border: none;
    border-bottom: 1px solid #2936468e;
    width: 450px;
}
 .main-content .cash-bill, .main-content .bills-type, .main-content .renew-letter-bill,.finish-letter-bill, .client-account-view{
    display: none;
}

 .main-content .letter-container{
    width: 100%;
    direction: rtl !important;
}
 .main-content .letter-container input{
    border: none;
    border-bottom: 1px solid #2936468e;
    padding: 2px 8px;
}
#traffic-name{
    font-weight: bolder;
    font-size: 22px;
}
#plate-num{
    margin-left: 1rem;
    text-align: center;
}
.renew-bill-table tr,.renew-bill-table tr td{
    border: none;
}

 .main-content .letter-container .greeting{
    font-size: 20px;
}
 .main-content .storage-cont{
    direction: rtl;
}
 .main-content .storage-cont .buy-select{
    margin-top: 15px;
}
 .main-content .choose-type-btn{
    background-color: #3b918c;
    color: #fff;
    padding: 5px 45px;
    border-radius: 25px;
}
 .main-content .buy-table{
    margin-top: 25px;
    text-align: center;
}
 .main-content .add_new{
    padding: 5px 35px;
    border-radius: 25px;
}
.add-new-modal,.accounts-cont{
    direction: rtl;
}
.add-new-modal .modal-footer{
    justify-content: center;
}
.add-new-modal .modal-footer button{
    padding: 5px 20px;
}
 .main-content div.table-responsive>div.dataTables_wrapper>div.row{
    flex-direction: row-reverse;
}
 .main-content div.table-responsive>div.dataTables_wrapper>div.row .dataTables_length{
    text-align: left;
}

 .main-content .all-bills-table-container{
    direction: rtl;
    text-align: center;
}
 .main-content .clients div.dataTables_wrapper>div.row {
    flex-direction: row !important;
}
div.dataTables_wrapper div.dataTables_info{
    text-align: left;
}
 .main-content .clients-table{
    direction: rtl;
    text-align: center;
}
.accounts-data, .accounts-label{
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.accounts-label label{
    font-size: 25px;
    font-weight: bold;
    color: #3b918c;
}
.accounts-data input{
    border: 1px solid #45a29e;
    padding: 10px 25px;
    border-radius: 15px;
    font-size: 20px;
    text-align: center;
    font-weight: bold;
    letter-spacing: 1.5px;
    color: #3b918c;
}
/* Main Page */






/* Custom Style for datatables */
table.dataTable thead .sorting:after,table.dataTable thead .sorting_asc:after,table.dataTable thead .sorting_desc:after{
    content: "" !important;
}
div.dataTables_wrapper div.dataTables_length label,div.dataTables_wrapper div.dataTables_filter label{
    color: #45a29e;
}
div.dataTables_wrapper div.dataTables_filter input{
    border: none;
    border-bottom: 1px solid #45a29e;
}
div.dataTables_wrapper div.dataTables_length select{
    background-color: #45a29d31;
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination{
    flex-direction: row-reverse;
    justify-content: flex-end;
}

/* fix pagination direction for some pages */

.buy-bill-cont div.dataTables_wrapper div.dataTables_paginate ul.pagination,.add-clients-container div.dataTables_wrapper div.dataTables_paginate ul.pagination,.add-dealer-container div.dataTables_wrapper div.dataTables_paginate ul.pagination{
    flex-direction: row !important;
}
/* fix pagination direction for some pages */


/* Select Libirary */
.select2-container{
    width: 100% !important;
}

</style>
<body>
 Installment bill container
    <div class="main-content">
        <div class="sell-bill-cont installment-bill">
            <div class="container-fluid">
                <div class="row bill-header">



                    <div class="col-12 text-center main-title font-weight-bold mb-5">
                        <span class="test">فاتورة مع حفظ حق الملكية</span>
                        <br>
                        <span>مسلسل رقم</span>(<input type="number" class="serialNum"/>)
                    </div>
                    <form id="sellBillForm" class="col-12">
                    <div class="col-12  font-weight-bold mb-3">
                        <span>السيد اللواء/ مدير إدارة مرور/</span>
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


                        @csrf

                        <div class="form-input-container">
                            <div>
                                <span>رقم  /</span>  <input id="carNumber" type="text" />
                            </div>

                            <div>
                                <span>النوع /</span>  <input id="type" type="text" />
                            </div>

                            <div>
                                <span>ماركة /</span><input id="brand" type="text" disabled />
                            </div>

                            <div>
                                <span>موديل /</span> <input id="model" type="text" disabled />
                            </div>

                            <div>
                                <span>شاسية /</span>
                                <select id="list" onchange="getChaseInfo()" >

                                </select>
                            </div>

                            <div>
                                <span>ماتور رقم /</span><input id="motor" type="text" disabled /></td>
                            </div>

                            <div>
                                <span>وقود /</span><input id="fuel" type="text" />
                            </div>

                            <div>
                                <span>السعة اللترية /</span> <input id="liters" type="text" />
                            </div>

                            <div>
                                <span>اللون  /</span> <input id="color1" type="text" />
                            </div>

                            <div>
                                <span>الشكل  /</span> <input id="shape" type="text" />
                            </div>

                            <div>
                                <span>عدد الركاب  /</span> <input id="passengerNum" type="text" />
                            </div>

                            <div>
                                <span>الوزن   /</span> <input id="weight" type="text" />
                            </div>

                            <div>
                                <span>الحمولة   /</span> <input id="load" type="text" />
                            </div>

                            <div>
                                <span>اسم المشترى /</span>
                                <select id="list2" onchange="getClientIdNumber()">


                                </select>
                            </div>

                            <div>
                                <span>العنوان/ </span> <input id="address" type="text" />
                            </div>

                            <div>
                                <span> رقم قومى /</span><input id="id" type="text" />
                            </div>

                            <div>
                                <span>سجل تجارى رقم   /</span> <input id="comericalRecord" type="text" />
                            </div>

                            <input id="installments" type="hidden" value="1">

                        </div>

                        <div class="mt-4 font-weight-bold req-text">
                            <p>رجاء إتخاذ إجراءات الترخيص بإسم المشترى حيث تم البيع مع حفظ حق الملكية لصالحنا مع عدم التجديد السنوى إلابخطاب بالموافقة على التجديد</p>
                        </div>

                        <div>
                            <p class="text-center font-weight-bold mt-5 greeting-title">وتفضلو سيادتكم بقبول فائق الإحترام،،،</p>
                        </div>

                        <div class="col-12 bill-footer1">
                            <span>تحرير فى <input type="date" id="mDate" placeholder="dd-mm-yyyy" /></span>
                        </div>

                        <div class="col-12 bill-footer2 text-left">
                                الاسم &nbsp;&nbsp;(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) <br>
                                التوقيع  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                        </div>
                        <br>

                        <div class="col-12 bill-address">
                            <span>العنوان/ <input type="text" /></span>
                        </div>

                        <div class="col-12 text-center mt-5 ">
                            <button type="submit" class="btn btn-outline-success add_new save-bill-btn">حفظ</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        </div>
</body>
</html>

