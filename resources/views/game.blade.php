<!DOCTYPE html>
<html lang="en"
      class=" webkit chrome win js js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="" name="description">
    <meta content="Trix" name="author">
    <title> Trix | لعبة تركس</title>
    <link href="{{ asset('img/Trix-logo.png') }}" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/application-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<div id="wrapper">
    <div id="top-info-bar">
        <div class="container">
            <div class="trix-time" data-placement="bottom" rel="tooltip" title="توقيت Trix">
                <span id="trixTime">22:31:51</span>
                <i class="fa fa-clock-o fa-lg">&nbsp;</i>
            </div>
            <div class="top-nav top-info-nav">
                <ul>
                    <li class="dropdown info-nav-item connection-status"><a class="conn-good" href=""
                                                                            data-toggle="dropdown"
                                                                            title="قوة الاتصال: جيد" rel="tooltip"
                                                                            data-placement="bottom">
                            <span><i class="fa fa-dashboard connection-indicator"></i></span>
                        </a>
                        <div class="dropdown-menu flyout">
                            <div class="flyout-header">

                            </div>
                        </div>
                    </li>
                    <li class="info-nav-item expandable">
                        <a data-toggle="dropdown" href="#">
<span>
<i class="fa fa-volume-up"></i>
</span>
                        </a>
                        <div class="nav-menu single-column">
                            <div class="volume-controls">
                                <a class="btn btn-small" href="#" id="btn-global-sound-mute">إسكات جميع الأصوات</a>
                                <div class="volume-control">
                                    <label>أصوات اللعبة</label>
                                    <div class="slider volume-slider slider-game">
                                        <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-slider-range-max"
                                                 style="width: 100%;"></div>
                                            <a class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                                               style="left: 0%;"></a></div>
                                        <div class="slider-value">
                                            <span>100</span>
                                            <div class="caret"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-control">
                                    <label>أصوات التنبيهات</label>
                                    <div class="slider volume-slider slider-notifications">
                                        <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-slider-range-max"
                                                 style="width: 100%;"></div>
                                            <a class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                                               style="left: 0%;"></a></div>
                                        <div class="slider-value">
                                            <span>100</span>
                                            <div class="caret"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-control">
                                    <label>أصوات الدردشة</label>
                                    <div class="slider volume-slider slider-chat">
                                        <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-slider-range-max"
                                                 style="width: 100%;"></div>
                                            <a class="ui-slider-handle ui-state-default ui-corner-all" href="#"
                                               style="left: 0%;"></a></div>
                                        <div class="slider-value">
                                            <span>100</span>
                                            <div class="caret"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="signed_in_header" id="header">
        <div class="container">
            <a href="#" id="logo">Trix</a>
            <div class="top-nav">
                <ul>
                    <li class="expandable active">
                        <a href="#">
                            <span>الألعاب</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>المسابقات</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="player-identity" id="player-profile">
                <div class="btn-group settings">
                    <a data-toggle="dropdown" href="#">
                        <img src="{{ asset('img/avatar-normal.png') }}" alt="Avatar">
                        <span class="profile-name">Bashar</span>
                        <i class="fa fa-caret-down fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu flush-right">
                        <li>
                            <a data-profile-id="3723606" href="#">ملفي الشخصي</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="red-action" href="#">الإعدادات</a>
                        </li>
                        <li>
                            <a class="red-action" href="#">الشارات</a>
                        </li>
                        <li>
                            <a class="red-action" href="#">المتجر</a>
                        </li>
                        <li>
                            <a class="red-action" href="#">سجل التوكنز</a>
                        </li>
                        <li>
                            <a class="red-action" href="#">أسماء المستخدمين</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="red-action" href="#">تسجيل الخروج</a>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-primary" href="#  ">
                    <span>نسخة تجريبية</span>
                </a>
            </div>
        </div>

    </div>
    <div id="fixed-notifications" class="">
        <div class="container">
            <div id="toolbar">
                <div class="dropdown highlighted" id="friend-requests">
                    <a data-toggle="dropdown" href="#">
                        <i class="fa fa-lg fa-group">&nbsp;</i>
                        <span class="count-label" style="">
<span class="count">1</span>
<span class="tail"></span>
</span>
                    </a>
                    <div class="dropdown-menu flyout">
                        <div class="flyout-header">
                            <strong>طلبات صداقة</strong>
                        </div>
                        <div class="flyout-body">
                            <ul class="flyout-list">
                                <li class="notification flyout-list-row highlighted" data-request-id="11280823">
                                    <div class="flyout-list-image">
                                        <img src="trix_files/picture(1)" alt="2h5o">
                                    </div>
                                    <div class="flyout-list-content">
                                        <a href="#" data-profile-id="11280823">
                                            2h5o
                                        </a>
                                        <div class="flyout-list-actions">
                                            <a href="#" class="btn btn-tiny btn-primary" data-action="changeRelation"
                                               data-user-id="11280823" data-relation="1">إقبل</a>
                                            <a href="#" class="btn btn-tiny" data-action="changeRelation"
                                               data-user-id="11280823" data-relation="0">أرفض</a>
                                            <a href="#" class="secondary" data-action="changeRelation"
                                               data-user-id="11280823" data-relation="5">حجب اللاعب</a>
                                        </div>
                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="dropdown notifications" data-n-category="alerts" style="">
                    <a data-toggle="dropdown" href="#">
                        <i class="fa fa-lg fa-bullhorn">&nbsp;</i>
                        <span class="count-label" style="display: none;">
<span class="count"></span>
<span class="tail"></span>
</span>
                    </a>
                    <div class="dropdown-menu flyout">
                        <div class="flyout-header">
                            <strong>تنبيهات</strong>
                        </div>
                        <div class="flyout-body">
                            <span class="flyout-message">جاري التحميل...</span>
                        </div>
                    </div>

                </div>
                <div class="dropdown notifications" data-n-category="competitions" style="">
                    <a data-toggle="dropdown" href="#">
                        <i class="fa fa-lg fa-trophy">&nbsp;</i>
                        <span class="count-label" style="display: none;">
<span class="count"></span>
<span class="tail"></span>
</span>
                    </a>
                    <div class="dropdown-menu flyout">
                        <div class="flyout-header">
                            <strong>طلبات المسابقات</strong>
                        </div>
                        <div class="flyout-body">
                            <span class="flyout-message">جاري التحميل...</span>
                        </div>
                    </div>

                </div>
                <div id="xp-box-container">

                    <div class="progress" data-placement="bottom" rel="tooltip"
                         data-original-title="1022 نقطة خبرة لتحصل على مستوى 10">
                        <div class="progress-level">
                            9
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" style="width: 7%;"></div>
                        </div>
                        <div class="progress-points">
                            3218
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                </div>
                <a class="profile-tokens" href="#">
                    <i class="fa fa-btc"></i>
                    <span id="user-tokens" rel="tooltip" title="عملات">4988</span>
                    <i class="fa fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container announcements hide">
        <div id="alerts">
            <div class="alert alert-heading top">
                <a class="close" data-dismiss="alert" href=""></a>
                <p>لقد تم ربط حسابك بنجاح</p>
            </div>
        </div>

    </div>
    <div class="container page-wrapper with-header with-sidebar " id="game">
        <div class="page-header game-header" id="game-header"><h1 class="page-header-title">

                <a href="#" data-router="games">تركس</a>
                <div id="inputDiv">
                    <input type="text" id="input">
                    <button onclick=joinGame()>Join Game</button>
                </div>

                <br>
                <span class="small-info">
      رقم الغرفة
      #1773814640
    </span>

            </h1>
            <div class="page-header-actions">
                <ul class="game-icons">


                    <li class="" rel="tooltip" data-placement="bottom" title="سرعة اللعب: متوسطة">
                        <i style="font-size:28px" class="fa fa-fast-forward"></i>
                    </li>


                    <li class="" rel="tooltip" data-placement="bottom" title="فقط للاعبين المسجلين">
                        <i style="font-size:28px" class="fa fa-user"></i>
                    </li>


                    <li class="" rel="tooltip" data-placement="bottom" title="بدون مغادرة">
                        <i class="fa fa-key"></i>
                    </li>


                    <li class="watchers" rel="tooltip" data-placement="bottom" title="bashar_nai">
                        <i class="fa fa-eye"></i><strong dir="rtl">1 متفرج</strong>
                    </li>


                </ul>
            </div>
        </div>

        <div class="page-body with-sidebar" id="game-wrapper">
            <div class="page-content">

                <div class="partnering-game tarneeb" id="game-body">

                    <div id="game-summary"></div>
                    <div id="game-body-overlay" style="display: none;"></div>
                    <div id="game-body-backdrop" style="display: none;"></div>
                    <div class="wide" id="game-table">
                        <div id="game-table-border" class="default-table">
                            <div id="game-canvas">
                                <div id="myHand" style="display: flex;">
                                </div>

                                <div></div>
                                <div></div>
                                <div></div>
                                <div id="cards-canvas"></div>
                                <div id="game-sponsor"></div>


                                <div class="bottom-left bottom seat" id="seat-0"></div>
                                <div class="bottom-left bottom card-slot" id="slot-0"></div>


                                <div class="bottom bottom seat" id="seat-1">
                                    <div class="s-box">
                                        <div id="player-0" class="player  hover-menu ">




  <span class="name  basha">

    Bashar
  </span>


                                            <a class="avatar   ">

                                                <img src="{{ asset('img/avatar-normal.png') }}" alt="Avatar">
                                                <div class="shine"></div>
                                            </a>


                                            <ul class="dropdown-menu player-menu">
                                                <li class="caret"></li>
                                                <li><a href="#" data-item="addFriend"><i class="fa fa-star"></i> أضف
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف اللاعب</a>
                                                </li>
                                            </ul>


                                            <div class="player-actions">

                                            </div>


                                            <div class="score" rel="tooltip" title="مجموع نقاط الجولة">0</div>
                                        </div>


                                        <div class="timer-background">
                                            <div id="timer-c3337" class="timer polartimer" style="height: 90px;">
                                                <svg height="90" version="1.1" width="90"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     style="overflow: hidden; position: relative; left: -0.600037px; top: -0.200012px;">
                                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created
                                                        with Raphaël 2.0.2
                                                    </desc>
                                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                                    <path fill="#ecb000" stroke="none"
                                                          d="M45,45L45,0A45,45,0,0,1,45,0L45,45Z" opacity="1"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="card-icons-container ">
                                            <div class="card-icons card-stack fanned">
                                            </div>
                                        </div>


                                        <div class="hand card-stack fanned cropped rotate-bottom ui-droppable"
                                             aria-disabled="false">
                                            <div id="card-c5051" class=" card  hide">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                        </div>


                                        <div class="seat-special"
                                             style="background-image: url('{{ asset('img/thumb.png') }}');" rel="tooltip"
                                             data-original-title="القص الشارة الفضية">
                                        </div>

                                    </div>
                                </div>
                                <div class="bottom bottom card-slot" id="slot-1"></div>


                                <div class="bottom-right bottom seat" id="seat-2"></div>
                                <div class="bottom-right bottom card-slot" id="slot-2"></div>


                                <div class="right-lower right seat" id="seat-3"></div>
                                <div class="right-lower right card-slot" id="slot-3"></div>


                                <div class="right right seat" id="seat-4">
                                    <div class="s-box">
                                        <div id="player-1" class="player  hover-menu ">




  <span class="name  basha">

    Ahmadfbq


  </span>


                                            <a class="avatar   ">
                                                <img src="{{ asset('img/129334423.jpeg') }}" alt="M7lzM">
                                                <div class="shine"></div>
                                            </a>


                                            <ul class="dropdown-menu player-menu">
                                                <li class="caret"></li>
                                                <li><a href="#" data-item="addFriend"><i class="fa fa-star"></i> أضف
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف اللاعب</a>
                                                </li>
                                            </ul>


                                            <div class="player-actions">

                                            </div>


                                            <div class="score" rel="tooltip" title="مجموع نقاط الجولة">0</div>
                                        </div>

                                        <div class="timer-background">
                                            <div id="timer-c3349" class="timer polartimer" style="height: 90px;">
                                                <svg height="90" version="1.1" width="90"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     style="overflow: hidden; position: relative; left: -0.600037px; top: -0.200012px;">
                                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created
                                                        with Raphaël 2.0.2
                                                    </desc>
                                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                                    <path fill="#ecb000" stroke="none"
                                                          d="M45,45L45,0A45,45,0,0,1,45,0L45,45Z" opacity="1"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="card-icons-container rotate-left">
                                            <div class="card-icons card-stack fanned">
                                            </div>
                                        </div>


                                        <div class="hand card-stack fanned cropped rotate-right ui-droppable"
                                             aria-disabled="false">
                                            <div id="card-c5064" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5065" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5066" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5067" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5068" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5069" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5070" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5071" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5072" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5073" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5074" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5075" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="right right card-slot" id="slot-4"></div>


                                <div class="right-upper right seat" id="seat-5"></div>
                                <div class="right-upper right card-slot" id="slot-5"></div>


                                <div class="top-right top seat" id="seat-6"></div>
                                <div class="top-right top card-slot" id="slot-6"></div>


                                <div class="top top seat" id="seat-7">
                                    <div class="s-box">
                                        <div id="player-2" class="player  hover-menu ">




  <span class="name  ">

    Ammar

  </span>


                                            <a class="avatar   ">

                                                <img src="{{ asset('img/avatar-normal2.png') }}" alt="Avatar">

                                                <div class="shine"></div>
                                            </a>


                                            <ul class="dropdown-menu player-menu">
                                                <li class="caret"></li>
                                                <li><a href="#" data-item="addFriend"><i class="fa fa-star"></i> أضف
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف اللاعب</a>
                                                </li>
                                            </ul>


                                            <div class="player-actions">

                                            </div>


                                            <div class="score" rel="tooltip" title="مجموع نقاط الجولة">0</div>
                                        </div>

                                        <div class="timer-background">
                                            <div id="timer-c3361" class="timer polartimer" style="height: 90px;">
                                                <svg height="90" version="1.1" width="90"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     style="overflow: hidden; position: relative; left: -0.600037px; top: -0.199997px;">
                                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created
                                                        with Raphaël 2.0.2
                                                    </desc>
                                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                                    <path fill="#ecb000" stroke="none"
                                                          d="M45,45L45,0A45,45,0,0,1,45,0L45,45Z" opacity="1"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="card-icons-container rotate-bottom">
                                            <div class="card-icons card-stack fanned">
                                            </div>
                                        </div>


                                        <div class="hand card-stack fanned cropped rotate-top ui-droppable"
                                             aria-disabled="false">
                                            <div id="card-c5077" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5078" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5079" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5080" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5081" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5082" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5083" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5084" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5085" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5086" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5087" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5088" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="top top card-slot" id="slot-7"></div>


                                <div class="top-left top seat" id="seat-8"></div>
                                <div class="top-left top card-slot" id="slot-8"></div>


                                <div class="left-upper left seat" id="seat-9"></div>
                                <div class="left-upper left card-slot" id="slot-9"></div>


                                <div class="left left seat active" id="seat-10">
                                    <div class="s-box">
                                        <div id="player-3" class="player  hover-menu ">




  <span class="name  ">

    Prof, MohamedZayed

  </span>


                                            <a class="avatar   ">

                                                <img src="{{ asset('img/CJfqziR2_400x400.jpg') }}" alt="M7lzM">
                                                <div class="shine"></div>
                                            </a>


                                            <ul class="dropdown-menu player-menu">
                                                <li class="caret"></li>
                                                <li><a href="#" data-item="addFriend"><i class="fa fa-star"></i> أضف
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف اللاعب</a>
                                                </li>
                                            </ul>


                                            <div class="player-actions">

                                            </div>


                                            <div class="score" rel="tooltip" title="مجموع نقاط الجولة">0</div>
                                        </div>

                                        <div class="timer-background">
                                            <div id="timer-c3374" class="timer polartimer" style="height: 90px;">
                                                <svg height="90" version="1.1" width="90"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     style="overflow: hidden; position: relative; left: -0.600006px; top: -0.200012px;">
                                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created
                                                        with Raphaël 2.0.2
                                                    </desc>
                                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                                    <path fill="#ecb000" stroke="none"
                                                          d="M45,45L45,0A45,45,0,0,1,45,0L45,45Z" opacity="1"
                                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="card-icons-container rotate-right">
                                            <div class="card-icons card-stack fanned">
                                            </div>
                                        </div>


                                        <div class="hand card-stack fanned cropped rotate-left ui-droppable"
                                             aria-disabled="false">
                                            <div id="card-c5090" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5091" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5092" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5093" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5094" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5095" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5096" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5097" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5098" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5099" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5100" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                            <div id="card-c5101" class=" card ">


                                                <div class="face"></div>
                                                <div class="back"></div>

                                            </div>
                                        </div>


                                        <div class="seat-special" style="background-image: url('{{ asset('img/thumb2.png') }}');"
                                             rel="tooltip" data-original-title="البنت الشارة الياقوتية">
                                        </div>

                                    </div>
                                </div>
                                <div class="left left card-slot" id="slot-10"></div>


                                <div class="left-lower left seat" id="seat-11"></div>
                                <div class="left-lower left card-slot" id="slot-11"></div>


                                <div id="stack-container">
                                    <div id="ontable-stack-container"></div>
                                    <div id="ordering-stack-container"></div>
                                </div>
                                <div id="table-stack" class="ui-droppable" aria-disabled="false">
                                    <div id="card-c5063" class="card face-up club-8 hide"
                                         style="opacity: 1; margin: 0px; left: 101.5px; top: -36px;">


                                        <div class="face"></div>
                                        <div class="back"></div>

                                    </div>
                                    <div id="card-c5076" class="card face-up club-4 hide"
                                         style="opacity: 1; margin: 0px; left: -26.5px; top: -139px;">


                                        <div class="face"></div>
                                        <div class="back"></div>

                                    </div>

                                    <div id="card-c5089" class="card face-up club-J "
                                         style="opacity: 1; margin: 0px; left: -154.5px; top: -36px;">
                                <div id="table" style="display: flex;">
                                </div>

                                        <div class="back"></div>
                            {{-- <div class="face"></div>--}}

                                    </div>

                                </div>
                                <div class="card-stack vertical face-up ui-droppable" aria-disabled="false"
                                     style="top: -80px; left: -185px; display: none;"></div>
                                <div class="card-stack vertical face-up ui-droppable" aria-disabled="false"
                                     style="top: -80px; left: -80px; display: none;"></div>
                                <div class="card-stack vertical face-up ui-droppable" aria-disabled="false"
                                     style="top: -80px; left: 25px; display: none;"></div>
                                <div class="card-stack vertical face-up ui-droppable" aria-disabled="false"
                                     style="top: -80px; left: 130px; display: none;"></div>
                            </div>
                        </div>
                    </div>


                    <div class="button top left">
                        <div class="btn-group"></div>
                    </div>

                    <div class="button top right">
                        <div class="btn-group"></div>
                    </div>


                    <div class="button bottom left">
                        <div class="btn-group"></div>
                    </div>


                    <div class="button bottom center">
                        <div class="btn-group"></div>
                    </div>
                </div>

                <div class="alert bottom" id="game-message" style="display: none;"></div>


            </div>

            <div class="page-sidebar">
                <div class="module tabbable" id="game-summary-module">
                    <div class="module-header">
                        <div class="tab-nav nav nav-buttons with-1-panes">
                            <ul>


                                <li class="active">
                                    <a data-toggle="tab" href="#tab-game-summary">ملخص اللعبة</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab-content">


                        <div class="tab-pane active" id="tab-game-summary">
                            <div class="module-content">


                                <ul class="game-score four-players">

                                    <li class="odd">
                                        <div class="game-score-players">
                                            <p>
                                                Carmen
                                            </p>
                                        </div>
                                        <div class="game-score-total ">
                                            0
                                        </div>
                                    </li>

                                    <li class="even">
                                        <div class="game-score-players">
                                            <p>
                                                New-7PFJWJ
                                            </p>
                                        </div>
                                        <div class="game-score-total ">
                                            0
                                        </div>
                                    </li>

                                    <li class="odd">
                                        <div class="game-score-players">
                                            <p>
                                                <span class="my-score">bashar_nai</span>
                                            </p>
                                        </div>
                                        <div class="game-score-total ">
                                            0
                                        </div>
                                    </li>

                                </ul>


                                <div class="game-score-actions">
                                    <a id="full-scores" href="#">تفاصيل النتائج</a>
                                </div>


                                <ul class="game-info">

                                    <li>
                                        <span class="game-info-label">الجولة</span>
                                        <strong class="game-info-value">1</strong>
                                    </li>


                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="module chat tabbable" id="symposium-main">
                    <div class="module-header">
                        <div class="tab-nav nav nav-buttons">
                            <ul>
                                <li class="active">
                                    <a href="#tab-chat" data-toggle="tab" rel="tooltip" data-original-title="المحادثة">
                                        <span class="count-label"></span>
                                        <i class="fa fa-comments fa-lg"></i>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="#tab-online-friends" data-toggle="tab" rel="tooltip"
                                       data-original-title="الأصدقاء">
                                        <span id="friends-count" class="count-label green">0</span>
                                        <i class="fa fa-group fa-lg"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="tab-chat" class="tab-pane active">
                            <div class="module-toolbar">
                                <div class="tab-nav nav dropdown">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="display: block;">
                                        <span class="close" style="display: none;">x</span>
                                        <span class="label">دردشة اللعبة</span>
                                        <span class="caret" style="display: block;"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- chat rooms -->
                                        <li class="active"><a data-toggle="tab" href="#tab-c1694" data-room-cid="c1694"><span
                                                    class="count-label"></span> دردشة اللعبة</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="module-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-c1694" data-room-cid="c1694">
                                        <ul class="messages"></ul>
                                        <div class="chat-player-status" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="module-footer">
                                <form>
                                    <textarea class="expand28-136" rows="1"
                                              style="height: 28px; overflow: hidden;"></textarea>
                                    <div class="report">
                                        <a class="btn btn-small btn-red" href="#">
                                            <span>أبلغ</span>
                                        </a>
                                    </div>
                                    <div class="smilies">
                                        <a class="dropdown-toggle chat-icon-smiley smiley-happy" href="#"
                                           data-toggle="dropdown"></a>
                                        <div class="dropdown-menu bottom-up">
                                            <span class="caret" style="display: block;"></span>

                                            <span class="smiley chat-icon-smiley smiley-blush" data-index="0"></span>

                                            <span class="smiley chat-icon-smiley smiley-confused" data-index="1"></span>

                                            <span class="smiley chat-icon-smiley smiley-cool" data-index="2"></span>

                                            <span class="smiley chat-icon-smiley smiley-cry" data-index="3"></span>

                                            <span class="smiley chat-icon-smiley smiley-devil" data-index="4"></span>

                                            <span class="smiley chat-icon-smiley smiley-happy" data-index="5"></span>

                                            <span class="smiley chat-icon-smiley smiley-wink" data-index="6"></span>

                                            <span class="smiley chat-icon-smiley smiley-heart" data-index="7"></span>

                                            <span class="smiley chat-icon-smiley smiley-mad" data-index="8"></span>

                                            <span class="smiley chat-icon-smiley smiley-sad" data-index="9"></span>

                                            <span class="smiley chat-icon-smiley smiley-sd" data-index="10"></span>

                                            <span class="smiley chat-icon-smiley smiley-sleep" data-index="11"></span>

                                            <span class="smiley chat-icon-smiley smiley-so" data-index="12"></span>

                                            <span class="smiley chat-icon-smiley smiley-tongue" data-index="13"></span>

                                            <span class="smiley chat-icon-smiley smiley-wtf" data-index="14"></span>

                                            <span class="smiley chat-icon-smiley smiley-nerd" data-index="15"></span>

                                            <span class="smiley chat-icon-smiley smiley-laugh" data-index="16"></span>

                                            <span class="smiley chat-icon-smiley smiley-angel" data-index="17"></span>

                                            <span class="smiley chat-icon-smiley smiley-kiss" data-index="18"></span>

                                            <span class="smiley chat-icon-smiley smiley-eek" data-index="19"></span>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="tab-online-friends" class="tab-pane">
                            <div class="module-toolbar">
                                <input class="search" type="text" placeholder="ابحث عن أصدقاء...">
                            </div>
                            <div class="module-content">
                                <div class="separator">أصدقاء على الموقع</div>

                                <ul class="friends friends-online">


                                    <li>
                                        <div class="message no-res">
                                            لا يوجد أحد هنا
                                        </div>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="friends-scores" style="display: none;"></div>
    <div id="sm2-container"></div>
    <div id="footer-push"></div>
</div>
<div class="container">
    <div id="footer">
        <p class="legal" style="font-size: 8pt">
            ©
            2024
            الحقوق محفوظة لـ AAB Team
        </p>
    </div>
</div>

<div class="modal-wrapper">


</div>
<script src="{{ asset('js/application.js') }}"></script>

<script>
    myCards = [];
    const shapes = {
        'Hearts': '♥',
        'Diamonds': '♦',
        'Clubs': '♣',
        'Spades': '♠'
    };

    function showCards() {
        const myHand = document.getElementById('myHand');
        myHand.innerHTML = '';
        if (myCards.length == 0) {
            console.log("Empty hand");
            return;
        }
        for (let i = 0; i < myCards.length; i++) {
            let cardString = '';
            cardString += ' _______\n';
            cardString += `|       |\n`;
            cardString += `| ${myCards[i].value.padEnd(2)}    |\n`;
            cardString += `|       |\n`;
            cardString += `|   ${shapes[myCards[i].shape]}   |\n`;
            cardString += `|       |\n`;
            cardString += `|    ${myCards[i].value.padStart(2)} |\n`;
            cardString += `|_______|\n`;

            const cardElement = document.createElement('pre');
            cardElement.textContent = cardString;

            const button = document.createElement('button');
            button.textContent = 'Use';
            button.addEventListener('click', function() {
                socket.emit('use_card', {
                    card: myCards[i]
                });
            });

            const div = document.createElement('div');
            div.style.display = 'flex';
            div.style.flexDirection = 'column';
            div.style.alignItems = 'center';
            div.style.color = '#41A39C';

            div.appendChild(cardElement);
            div.appendChild(button);

            myHand.appendChild(div);
        }

    }

    function showCard(card) {
        var table = document.getElementById('table');

        let cardString = '';
        cardString += ' _______\n';
        cardString += `|       |\n`;
        cardString += `| ${card.value.padEnd(2)}    |\n`;
        cardString += `|       |\n`;
        cardString += `|   ${shapes[card.shape]}   |\n`;
        cardString += `|       |\n`;
        cardString += `|    ${card.value.padStart(2)} |\n`;
        cardString += `|_______|\n`;

        const cardElement = document.createElement('pre');
        // cardElement.style.background = 'white';

        cardElement.textContent = cardString;

        const div = document.createElement('div');
        div.appendChild(cardElement);

        table.appendChild(div);
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js"></script>

<script>
    const socket = io('http://localhost:3000');

    socket.on('connect', () => {
        console.log('Connected to the server');
    });

    function joinGame() {
        var input = document.getElementById('input');
        var game_id = input.value;
        var inputDiv = document.getElementById('inputDiv');
        inputDiv.innerHTML = '';
        socket.emit('join_game', {
            game_id: game_id
        });
    }

    socket.on('hand', function(data) {
        console.log('Hand received.');
        myCards = data.hand;
        showCards();
    });

    socket.on('table', function(table) {
        var table_ = document.getElementById('table');
        table_.innerHTML = '';
        table.forEach(card => {
            showCard(card);
        });
    });

    socket.on('disconnect', () => {
        const myHand = document.getElementById('myHand');
        var table = document.getElementById('table');
        table.remove();
        myHand.innerHTML = 'You have been disconnected automatically because someone left the game.';
        console.log('Disconnected from the server');
    });
</script>


</body>
</html>
