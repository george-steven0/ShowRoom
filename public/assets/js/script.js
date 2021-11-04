$(document).ready(function(){
    let close_btn = $('.side-navbar-cont .close-btn'),
        sideNav = ('.side-navbar-cont'),
        mainContent = $('.main-content'),
        openBtn = $('.main-content .open-btn'),
        newBillBtn = $('.new-bill-btn'),
        allBillsContainer = $('.display-bills'),
        billsType = $('.bills-type'),
        saveBillBtn = $('.save-bill-btn'),
        soldBtn = $('.sold'),
        newLetterBtn = $('.new-letter'),
        displayLetters = $('.display-letters'),
        renewLetterCont = $('.renew-letter-bill'),
        saveRenewbillBtn = $('.save-renew-btn'),
        finishTable = $('.display-finish'),
        newFinishBtn = $('.new-finish'),
        finishLetterBillCont = $('.finish-letter-bill'),
        saveFinishBtn = $('.save-finish-btn'),
        viewClientPageBtn = $('.view-client-account'),
        clientAccountCont = $('.add-acc-cont'),
        clientAccountView = $('.client-account-view'),
        prevPage = $('.prev-page'),
        checkInstallBtn = $('.check-installment'),
        newTaxBillBtn = $('.newTaxBillBtn'),
        newTaxBillBtnCar = $('.newTaxBillBtnCar'),
        displayTaxBillTable = $('.displayTaxBills'),
        displayTaxBillTableCar = $('.displayTaxBillsCar'),
        saveTaxBillBtn = $('.saveTaxbillBtn'),
        saveTaxBillBtnCar = $('.saveTaxbillBtnCar'),
        taxBillCont = $('.tax-bill'),
        taxBillContCar = $('.tax-billCar')

    $(close_btn).on('click',function(){
        $(sideNav).animate({
            'width':'0%',
            'flexBasis':'0%',
            'flexGrow':'0',
            'flexShrink':'0',
            'padding':'0px',
            'opacity':'0'
            
        },300)
        $(mainContent).animate({
            'maxWidth':'100%',
            'flexBasis':'100%',
            'flexGrow':'0',
            'flexShrink':'0',
        },300)
        $(openBtn).fadeIn(600)
    })


    $(openBtn).on('click',function(){
        $(mainContent).animate({
            'maxWidth':'83.333333%',
            'flexBasis':'83.333333%',
            'flexGrow':'0',
            'flexShrink':'0'
        },300)
        $(this).fadeOut(200)
        $(sideNav).animate({
            'width':'16.666667%',
            'flexBasis':'16.666667%',
            'flexGrow':'0',
            'flexShrink':'0',
            'padding':'8px',
            'opacity':'1'
        },300)   
    })

    $(newBillBtn).on('click',function() {
        $(allBillsContainer).fadeOut(200)
        $(billsType).fadeIn(250)
    })

    $(newLetterBtn).on('click',function () {
        $(displayLetters).fadeOut(200)
        $(renewLetterCont).fadeIn(250)
    })

    $(saveRenewbillBtn).on('click',function () {
        $(displayLetters).fadeIn(250)
        $(renewLetterCont).fadeOut(200)
    })

    $(newFinishBtn).on('click',function () {
        $(finishTable).fadeOut(200)
        $(finishLetterBillCont).fadeIn(250)
    })

    $(saveFinishBtn).on('click',function () {
        $(finishTable).fadeIn(250)
        $(finishLetterBillCont).fadeOut(200)
    })

    $(viewClientPageBtn).on('click',function () {
        $(clientAccountCont).fadeOut(10)
        $(clientAccountView).fadeIn(400)
    })

    $(prevPage).on('click',function () {
        $(clientAccountCont).fadeIn(400)
        $(clientAccountView).fadeOut(10)
    })

    $(newTaxBillBtn).on('click',function () {
        $(displayTaxBillTable).fadeOut(10)
        $(taxBillCont).fadeIn(400)
    })

    $(saveTaxBillBtn).on('click',function () {
        $(taxBillCont).fadeOut(10)
        $(displayTaxBillTable).fadeIn(400)
    })
/////////////////////////////
    $(newTaxBillBtnCar).on('click',function () {
        $(displayTaxBillTableCar).fadeOut(10)
        $(taxBillContCar).fadeIn(400)
    })



    
    $(soldBtn).on('click',function () {
        $(this).closest('tr').css({
            "text-decoration": "line-through",
            "color":'#dc3545'
        })
        $(this).text('مرتجع')
    })

    $(soldBtn).dblclick(function() {
        $(this).closest('tr').css({
            "text-decoration": "none",
            "color":'#fff'
        })
        $(this).text('تم البيع')
    })

    $(checkInstallBtn).on('click',function () {
        if($(this).prop('checked')){
            $(this).closest('tr').css({
                "text-decoration": "line-through",
                "color":'#dc3545'
            }) 
        } else{
            $(this).closest('tr').css({
                "text-decoration": "none",
                "color":'#fff'
            }) 
        }
    })

    
    
    

})

function changebill() {
    let selectVlaue = $('.bill-type-select').val();
    console.log(selectVlaue)
    let cash_content = document.getElementsByClassName('cash-bill')
    let installment_content = document.getElementsByClassName('installment-bill')
    if(selectVlaue == 'installment'){
        $(cash_content).fadeOut(200)
        $(installment_content).fadeIn(300)
    }else{
        $(installment_content).fadeOut(200)
        $(cash_content).fadeIn(300)
    }
}
