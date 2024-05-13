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


<div class="intro" id="intro" style="">
    <div class="sides">
        <div class="side monkey">

                <a href="https://github.com/basharnaial/Trix" style="color:#000;">    <div class="emoji"> Github</div></a>
            <x-icons.github  style=" width: 20%;margin: 30px;"  ></x-icons.github>
        </div>

        <div class="side monkey" style="background-color:#ff2d20!important;">
            <a href="https://github.com/basharnaial/Trix" style="color:#fff;">    <div class="emoji"> Laravel </div></a>

            <svg style=" width: 20%;margin: 30px;" viewBox="0 -.11376601 49.74245785 51.31690859" width="2418" xmlns="http://www.w3.org/2000/svg"><path d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z" fill="#ffffff"/></svg>
        </div>


        <div class="side monkey" style="background-color:#FFC52D!important;">
            <a href="https://github.com/basharnaial/Trix" style="color:#000;!important;">    <div class="emoji">Socket.io </div></a>


            <svg  xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#010101"><path d="M63.988 31.295c-.174-10.7-6.14-21.118-15.37-26.604C41.346.162 32.16-1.057 23.886 1.033 11.433 4.168 1.505 15.446.243 28.3-1.325 40.44 4.815 53.066 15.308 59.292c10.276 6.444 24.253 6.183 34.3-.6 9.057-5.878 14.674-16.6 14.37-27.388zM33.77 59.25c-14.543 1.437-28.607-10.885-29-25.472-1.1-11.843 6.705-23.556 17.852-27.475C38.254.033 57.456 11.615 59.067 28.38c2.526 15.064-10.014 30.4-25.297 30.87zM24.2 30.38l21.03-17.2-11.364 17.243c-3.222 0-6.444 0-9.666-.044zm5.913 3.18l9.666.044-21.03 17.243L30.113 33.56z"/></svg>
        </div>



        <div class="versus">
            <button onclick="StartShow()" style="background: none!important; border: none!important; outline: none!important; box-shadow: none!important;    transform: rotate(44deg);">
                <span><img class="logoIntro blink" src="{{ asset('img/Trix-logo.png') }}"></span>
            </button>
        </div>

        <div class="side monkey" style="background-color:#8cc84b!important;">
            <a href="https://github.com/basharnaial/Trix" style="color:#fff; margin-right: 70px;">    <div class="emoji">Node</div></a>


            <svg style=" width: 20%;margin-right: 20px;"  viewBox="0 0 256 282" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"><g fill="#fff"><path d="M116.504 3.58c6.962-3.985 16.03-4.003 22.986 0 34.995 19.774 70.001 39.517 104.99 59.303 6.581 3.707 10.983 11.031 10.916 18.614v118.968c.049 7.897-4.788 15.396-11.731 19.019-34.88 19.665-69.742 39.354-104.616 59.019-7.106 4.063-16.356 3.75-23.24-.646-10.457-6.062-20.932-12.094-31.39-18.15-2.137-1.274-4.546-2.288-6.055-4.36 1.334-1.798 3.719-2.022 5.657-2.807 4.365-1.388 8.374-3.616 12.384-5.778 1.014-.694 2.252-.428 3.224.193 8.942 5.127 17.805 10.403 26.777 15.481 1.914 1.105 3.852-.362 5.488-1.274 34.228-19.345 68.498-38.617 102.72-57.968 1.268-.61 1.969-1.956 1.866-3.345.024-39.245.006-78.497.012-117.742.145-1.576-.767-3.025-2.192-3.67-34.759-19.575-69.5-39.18-104.253-58.76a3.621 3.621 0 0 0-4.094-.006C91.2 39.257 56.465 58.88 21.712 78.454c-1.42.646-2.373 2.071-2.204 3.653.006 39.245 0 78.497 0 117.748a3.329 3.329 0 0 0 1.89 3.303c9.274 5.259 18.56 10.481 27.84 15.722 5.228 2.814 11.647 4.486 17.407 2.33 5.083-1.823 8.646-7.01 8.549-12.407.048-39.016-.024-78.038.036-117.048-.127-1.732 1.516-3.163 3.2-3 4.456-.03 8.918-.06 13.374.012 1.86-.042 3.14 1.823 2.91 3.568-.018 39.263.048 78.527-.03 117.79.012 10.464-4.287 21.85-13.966 26.97-11.924 6.177-26.662 4.867-38.442-1.056-10.198-5.09-19.93-11.097-29.947-16.55C5.368 215.886.555 208.357.604 200.466V81.497c-.073-7.74 4.504-15.197 11.29-18.85C46.768 42.966 81.636 23.27 116.504 3.58z"/><path d="M146.928 85.99c15.21-.979 31.493-.58 45.18 6.913 10.597 5.742 16.472 17.793 16.659 29.566-.296 1.588-1.956 2.464-3.472 2.355-4.413-.006-8.827.06-13.24-.03-1.872.072-2.96-1.654-3.195-3.309-1.268-5.633-4.34-11.212-9.642-13.929-8.139-4.075-17.576-3.87-26.451-3.785-6.479.344-13.446.905-18.935 4.715-4.214 2.886-5.494 8.712-3.99 13.404 1.418 3.369 5.307 4.456 8.489 5.458 18.33 4.794 37.754 4.317 55.734 10.626 7.444 2.572 14.726 7.572 17.274 15.366 3.333 10.446 1.872 22.932-5.56 31.318-6.027 6.901-14.805 10.657-23.56 12.697-11.647 2.597-23.734 2.663-35.562 1.51-11.122-1.268-22.696-4.19-31.282-11.768-7.342-6.375-10.928-16.308-10.572-25.895.085-1.619 1.697-2.748 3.248-2.615 4.444-.036 8.888-.048 13.332.006 1.775-.127 3.091 1.407 3.182 3.08.82 5.367 2.837 11 7.517 14.182 9.032 5.827 20.365 5.428 30.707 5.591 8.568-.38 18.186-.495 25.178-6.158 3.689-3.23 4.782-8.634 3.785-13.283-1.08-3.925-5.186-5.754-8.712-6.95-18.095-5.724-37.736-3.647-55.656-10.12-7.275-2.571-14.31-7.432-17.105-14.906-3.9-10.578-2.113-23.662 6.098-31.765 8.006-8.06 19.563-11.164 30.551-12.275z"/></g></svg>
        </div>


    </div>
</div>
<body>
<div id="FullPage" style="display: none;">

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
                                        <div
                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
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
                                        <div
                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
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
                                        <div
                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
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
                            <span class="hide">المسابقات</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="player-identity" id="player-profile">
                <div class="btn-group settings">
                    <a data-toggle="dropdown" href="#">
                        <img src="{{ asset('img/avatar-normal.png') }}" alt="Avatar">
                        <span class="profile-name">{{ $user->name }}</span>
                        <i class="fa fa-caret-down fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu flush-right">
                        <li>
                            <a data-profile-id="3723606" href="http://localhost:8000/profile">ملفي الشخصي</a>
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
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();" class="red-action">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
                <a id="exitS" class="btn btn-primary" style="background-color:red !important;" href="#  ">
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
        <div class="page-header game-header" id="game-header" style="display:none;">
            <h1 class="page-header-title">

                <a href="#" data-router="games">تركس</a>

                <br>
                <span class="small-info">
                    <div id="RoomId" class="small-info"></div>
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

        <div class="page-body with-sidebar " id="game-wrapper2" style="margin-right: 0px !important;">
            <div class="page-content">

                <div class="partnering-game tarneeb" id="game-body">


                    <div id="inputDiv" style="margin: 37%;">
                        <input type="text" id="input" style="    background: #ffc52d;
    border-radius: 14px;
    width: 306px;
    height: 46px;
    color: black;">
                        <button
                            style="background: #41a39c; color: white; margin-right: 50%; font-size:14px;text-shadow: -1px 2px 5px black;"
                            onclick=joinGame()>الانضمام إلى اللعبة
                        </button>
                    </div>


                </div>


            </div>


        </div>

        <div class="page-body with-sidebar" style="display:none;" id="game-wrapper">
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

    {{ $user->name }}

  </span>


                                            <a class="avatar   ">

                                                <img src="{{ asset('img/avatar-normal.png') }}" alt="Avatar">
                                                <div class="shine"></div>
                                            </a>


                                            <ul class="dropdown-menu player-menu">
                                                <li class="caret"></li>
                                                <li><a href="#" data-item="addFriend"><i class="fa fa-star"></i> أضف
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف
                                                        اللاعب</a>
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
                                             style="background-image: url('{{ asset('img/thumb.png') }}');"
                                             rel="tooltip"
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
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف
                                                        اللاعب</a>
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
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف
                                                        اللاعب</a>
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
                                                        كصديق</a><a href="#" data-item="viewProfile"> شاهد ملف
                                                        اللاعب</a>
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


                                        <div class="seat-special"
                                             style="background-image: url('{{ asset('img/thumb2.png') }}');"
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
            button.addEventListener('click', function () {
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
        document.getElementById('game-wrapper2').style.display = "none";
        document.getElementById('game-wrapper').style.display = "block";
        document.getElementById('game-header').style.display = "block";
        var input = document.getElementById('input');
        var game_id = input.value;
        var inputDiv = document.getElementById('inputDiv');
        inputDiv.innerHTML = '';
        socket.emit('join_game', {
            game_id: game_id
        });

        var inputDiv = document.getElementById('RoomId');
        inputDiv.innerHTML = 'رقم الغرفة: ' + game_id;

        var inputDiv2 = document.getElementById('exitS');
        inputDiv2.innerHTML = '<button style="background-color:red;color:white;" onclick="leaveGame()">تسجيل الخروج</button>';

    }


    function StartShow() {
        var introElement = document.getElementById('intro');
        introElement.style.opacity = '0';

        introElement.addEventListener('transitionend', function() {
            introElement.style.display = 'none';
        }, {once: true});

        document.getElementById('FullPage').style.display = 'block';
    }



    function leaveGame() {
        document.getElementById('confirmModal').style.display = 'block'
    }

    function confirmLeave(leave) {
        document.getElementById('confirmModal').style.display = 'none';
        if (leave) {
            document.getElementById('game-wrapper').style.display = "none";
            document.getElementById('game-header').style.display = "none";
            document.getElementById('inputDiv').innerHTML = `
            <input type="text" id="input" style="background: #ffc52d; border-radius: 14px; width: 306px; height: 46px; color: black;">
            <button style="background: #41a39c; color: white; margin-right: 50%; text-shadow: -1px 2px 5px black;" onclick="joinGame()">Join Game</button>
        `;

            // Optionally, emit a signal to the server that the player has left the game
            // Reload the page after 2 seconds
            setTimeout(function () {
                location.reload();
            }, 2000);
        }
    }

    // Additionally, make sure to handle the 'leave_game' event in your server code

    socket.on('hand', function (data) {
        console.log('Hand received.');
        myCards = data.hand;
        showCards();
    });

    socket.on('table', function (table) {
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

<!-- Modal for Confirmation -->
<div id="confirmModal"
     style="display:none; position: fixed; z-index: 9999999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
    <div
        style="background-color: #9d1919; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%; max-width: 500px;">
        <h2>تأكيد المغادرة</h2>
        <p>عند المغادرة، سيتم قطع اتصال اللعبة. هل أنت متأكد؟</p>
        <button onclick="confirmLeave(true)" style="color: green;">نعم</button>
        <button onclick="confirmLeave(false)" style="color: red;">لا</button>
    </div>
</div>
</div>

</body>
</html>
