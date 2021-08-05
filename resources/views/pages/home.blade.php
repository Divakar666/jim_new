@extends('layouts.default')
@section('title', $title)
@section('content')


<body class="fixed-window">

    <style>
        .slider {
            width: 100%;
            margin: 0 auto;
            height: 400px;
        }

        .slick-slide {
            margin: 0px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: #ffffff;
        }

        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: 1;
        }

        .slick-active {
            opacity: 1;
        }

        .slick-current {
            opacity: 1;
        }

        .ff-filter-holder {
            display: none !important;
        }

        .page-container {
            padding: 0 !important;
        }

        .loader1 {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
        }
    </style>


    <div class="wrapper">


        <div class="onCanvas">
            <div class="layer_sty" id="llayer" style="display: none"></div>
            <!--      <style>
          .vvvv::after{
            postion:relative!important;  
          }
      </style>-->
            <div id="content">
                <section class="design transform desk-slider" data-section-name="design">
                    <div class="transform_lead">
                        <section class="regular slider">
                            <?php print_r($sliders);?>
                            @foreach($sliders as $s)
                            <div style="position:relative; display:none;" class="vvv">
                                <img alt="JIM students" title="JIM students" width="50" height="500" src="https://jim.ac.in/images/Gallery/Infrastructure/2021/110A9970_1200x850%20(2)-1626678909.jpg">
                                <div class="transform_content for-home-mobile">
                                    <div class="transform_table">
                                        <div class="tranform_table_cell slider12">
                                            <div class="main-head-two">
                                                <div class="karma_yoga_text world_text">{{$s->title}}</div>
                                            </div>
                                            <p>JIM Recruitment Program 2021</p>
                                            <div class="common-btn">
                                                <a href="recruiters/placement-process.html">Read more <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
@endforeach

                            </span>
                        </section>
                    </div>
                </section>
                <!-- ========================================================= -->








                <style>
                    .tab-new {
                        float: left;
                        width: 300px;
                    }

                    .tab-new button {
                        display: block;
                        background-color: #d9d9d9;
                        padding: 12px 16px;
                        width: 300px;
                        border: none;
                        outline: none;
                        text-align: left;
                        cursor: pointer;
                        transition: 0.3s;
                        font-size: 17px;
                        color: #595959;
                        font-family: Montserrat, sans-serif;
                        font-weight: 800;
                        font-size: 22px;
                    }

                    .tab-new button:hover {
                        background-color: #ddd;
                    }

                    .tab-new button.active {
                        font-family: Montserrat, sans-serif;
                        font-weight: 800;
                        font-size: 22px;
                        color: #fff !important;
                        background-color: #0091c4;
                        position: relative;
                    }

                    .tabcontent {
                        float: left;
                        padding: 0px 12px;
                        border: 1px solid #ccc;
                        width: 70%;
                        border-left: none;
                    }

                    .tabcontent-new-col {
                        width: 41%;
                        display: inline-block;
                        border-right: 1px solid #d9d9d9;
                        padding: 0px 0px 0px 40px;
                    }

                    .tabcontent-new-col:nth-child(2) {
                        border-right: 0px;
                    }

                    .tabcontent-new-col h3 {
                        color: #0091c4;
                        font-family: Montserrat, sans-serif;
                        font-weight: 800;
                        font-size: 42px;
                        margin: 1px 0px 0px 0px;
                        line-height: 32px;
                    }

                    .tabcontent-new-col h3 span {
                        position: absolute;
                        margin: 0px 0px 0px 5px;

                    }

                    .tabcontent-new-col p {
                        font-size: 17px;
                        line-height: 26px;
                        font-family: Montserrat, sans-serif;
                        font-weight: 500;
                        text-align: left;
                        margin: 9px 0px 0px 0px;
                    }

                    .tabcontent-new-col:last-child {
                        border-right: 0px;
                        padding-right: 0px;
                    }

                    .tabcontent-new-box {
                        width: 27% !important;
                        padding-right: 20px;
                    }

                    .tabcontent-new-box h3 {
                        font-size: 2vw;
                    }

                    .tabcontent-new-box:nth-child(2) {
                        border-right: 1px solid #d9d9d9;
                    }

                    .tabcontent-new-box br {
                        display: none;
                    }

                    .tabcontent-box {
                        width: 100%;
                        float: left;
                        position: relative;
                        padding-right: 10px;
                    }

                    .tabcontent-box1 {
                        width: 109px;
                        float: right;
                        position: absolute;
                        right: 17%;
                        top: 2px;
                    }

                    .tabcontent-box1 a {
                        float: left;
                        color: #000;
                        font-size: 14px;
                        font-weight: 500;
                        padding-bottom: 10px;
                        font-family: Montserrat, sans-serif;
                    }

                    .tabcontent-box1 a:hover {
                        text-decoration: none;
                    }

                    .tab-new2 {
                        height: 115px;
                        background: #f2f2f2;
                        padding: 13px 0px 0px 0px;
                    }

                    .tab-new button.active::after {
                        width: 0;
                        height: 0;
                        right: 0;
                        margin: 0 auto;
                        content: '';
                        position: absolute;
                        left: 100%;
                        top: 18%;
                        display: inline-block;
                        border-top: solid 1.2rem transparent;
                        border-bottom: solid 1.2rem transparent;
                        border-right: solid 1.2rem transparent;
                        border-left: solid 1.2rem;
                        border-left-color: currentcolor;
                        border-left-color: #0091c4;
                    }


                    .slick-dotted.slick-slider {
                        margin-bottom: -100px;
                    }

                    .tabcontent-col1 {
                        display: none;
                    }

                    .slick-slide img {
                        width: 60%;
                        float: right;
                    }

                    .management-new {
                        background-color: #fff;
                    }

                    .ranking_numericals {
                        background-color: #fff;
                    }

                    .tabcontent-new-box h3 a {
                        color: #0091c4;
                        text-decoration: none;
                    }

                    .tabcontent-new-box h3 br {
                        display: none;
                    }

                    .date-new-col,
                    .date-new-col1 {
                        position: absolute;
                        right: 12%;
                        top: 72px;
                        width: 147px;
                        color: #000;
                        font-size: 15px;
                        font-weight: 700;
                        font-family: Montserrat, sans-serif;
                    }

                    .date-new-col span,
                    .date-new-col1 span {
                        color: #ff0000;
                    }

                    .tab-new1 {
                        display: none;
                    }

                    @media (max-width: 1851px) {
                        .tabcontent-new-col {
                            width: 41%;
                        }

                        .tabcontent-new-box h3 {
                            margin-top: -1px;
                        }

                        .tabcontent-new-box {
                            width: 26.5% !important;
                        }
                    }

                    @media (max-width: 1800px) {

                        .date-new-col,
                        .date-new-col1 {
                            right: 11.7%;
                        }
                    }

                    @media (max-width: 1700px) {

                        .date-new-col,
                        .date-new-col1 {
                            right: 11.4%;
                        }
                    }

                    @media (max-width: 1690px) {
                        .tabcontent-new-col {
                            width: 40.5%;
                        }

                        .date-new-col {
                            top: 72px;
                        }
                    }

                    @media (max-width: 1625px) {
                        .tabcontent-new-box {
                            width: 25.9% !important;
                        }

                        .tabcontent-new-box h3 {
                            font-size: 1.8vw;
                        }

                        .date-new-col,
                        .date-new-col1 {
                            right: 11.1%;
                        }
                    }

                    @media (max-width: 1601px) {
                        .tabcontent-new-col {
                            width: 40%;
                        }
                    }

                    @media (max-width: 1568px) {
                        .tabcontent-new-col {
                            width: 39.4%;
                        }

                        .tabcontent-box1 {
                            right: 13%;
                        }

                        .transform_lead .common-btn a {
                            margin-top: 0px;
                            padding: 2px 20px !important;
                        }

                        .date-new-col,
                        .date-new-col1 {
                            right: 6.5%;
                        }
                    }

                    @media (max-width: 1497px) {
                        .tabcontent-new-box p {
                            font-size: 16px;
                        }

                        .date-new-col,
                        .date-new-col1 {
                            right: 6.2%;
                        }
                    }

                    @media (max-width: 1449px) {
                        .tabcontent-new-col {
                            width: 38.5%;
                        }

                        .tabcontent-box1 {
                            right: 8%;
                        }

                        .transform_lead .common-btn a {
                            margin-top: 15px;
                            padding: 9px 20px !important;
                        }

                        .date-new-col,
                        .date-new-col1 {
                            right: 1%;
                        }
                    }

                    @media (max-width: 1440px) {

                        .date-new-col,
                        .date-new-col1 {
                            right: 0.8%;
                        }
                    }

                    @media (max-width: 1403px) {
                        .tabcontent-new-box {
                            width: 25% !important;
                            padding-right: 15px;
                        }

                        .tabcontent-new-box h3 {
                            margin-top: -2px;
                        }

                        .tabcontent-new-box p {
                            font-size: 14px !important;
                            margin: 6px 0px 0px 0px;
                        }

                        .tabcontent-new-box:nth-child(2),
                        .tabcontent-new-box:nth-child(3) {
                            padding-left: 20px;
                        }
                    }

                    @media (max-width: 1400px) {
                        .tabcontent-new-col p {
                            font-size: 16px;
                            line-height: 24px;
                            margin: 9px 0px 0px 0px;
                        }

                        .tab-new2 {
                            padding: 14px 0px 0px 0px;
                        }
                    }

                    @media (max-width: 1383px) {
                        .tabcontent-new-col {
                            width: 38%;
                        }
                    }

                    @media (max-width: 1366px) {

                        .date-new-col,
                        .date-new-col1 {
                            right: 0.5%;
                        }
                    }

                    @media (max-width: 1150px) {
                        .transform_lead .common-btn a {
                            padding: 3px 20px !important;
                        }
                    }

                    @media (max-width: 1323px) {
                        .tabcontent-new-col {
                            width: 37.5%;
                        }

                        .tab-new button.active,
                        .tab-new button {
                            font-size: 22px;
                        }

                        .tabcontent-new-col h3 {
                            margin-top: -1px;
                        }

                        .tabcontent-new-col p {
                            font-size: 14px;
                        }

                        .date-new-col,
                        .date-new-col1 {
                            top: 69px;
                            right: 0.8%;
                        }

                        .tabcontent-box1 {
                            right: 9%;
                        }
                    }

                    @media (max-width: 1250px) {

                        .date-new-col,
                        .date-new-col1 {
                            right: 0.3%;
                        }

                        .tabcontent-box1 {
                            right: 9%;
                        }
                    }

                    @media (max-width: 1245px) {
                        .tabcontent-new-box p {
                            font-size: 13.5px !important;
                        }
                    }

                    @media (max-width: 1226px) {
                        .tabcontent-new-col {
                            width: 36.8%;
                        }

                        .tabcontent-box1 a {
                            font-size: 14px;
                        }

                        .tabcontent-new-col {
                            padding: 0px 20px 0px 40px;
                        }

                        .tabcontent-box1 {
                            right: 0.5%;
                        }

                        .tabcontent-new-box:nth-child(2),
                        .tabcontent-new-box:nth-child(3) {
                            padding-left: 10px;
                            padding-right: 10px;
                        }

                        .tabcontent-new-box {
                            padding-right: 10px !important;
                        }

                        .date-new-col {
                            font-size: 13px;
                            right: -9%;
                        }

                        .date-new-mobile {
                            right: -8.3%;
                        }
                    }

                    @media (max-width: 1210px) {
                        .tabcontent-new-box p {
                            font-size: 11.5px !important;
                        }

                        .tabcontent-new-box {
                            width: 23.8% !important;
                            padding: 0px 15px 0px 40px;
                        }

                        .tabcontent-new-box:nth-child(2),
                        .tabcontent-new-box:nth-child(3) {
                            padding-left: 10px;
                            padding-right: 10px;
                        }

                        .tabcontent-new-box:nth-child(1) {
                            padding-left: 27px;
                        }
                    }

                    @media (max-width: 1200px) {}

                    @media (max-width: 1132px) {
                        .tabcontent-new-col {
                            width: 35.9%;
                        }

                        .tabcontent-new-col {
                            padding: 0px 0px 0px 40px;
                        }
                    }

                    @media (max-width: 1348px) {
                        .tabcontent-box {
                            padding-right: 0px;
                        }
                    }

                    @media (max-width: 1305px) {

                        .tab-new,
                        .tab-new button {
                            width: 290px;
                        }
                    }

                    @media (max-width: 1066px) {
                        .tabcontent-new-box {
                            width: 23.5% !important;
                            padding-right: 3px !important;
                        }
                    }

                    @media (max-width: 1190px) {
                        .tab-new button {
                            width: 50%;
                            float: left;
                            text-align: center;
                            text-transform: uppercase;
                        }

                        .tab-new2 {
                            height: 293px;
                            width: 100%;
                            float: left;
                            padding-top: 10px;
                        }

                        .tab-new button.active::after {
                            content: "";
                            width: 0;
                            height: 0;
                            border-left: 25px solid transparent;
                            border-right: 25px solid transparent;
                            border-top: 25px solid #0091c4;
                            left: 0;
                            right: 0;
                            bottom: -25px;
                            position: absolute;
                            margin: 0 auto;
                            top: 100%;
                        }

                        .tab-new {
                            width: 100%;
                        }

                        .tab-new1 {
                            height: 350px;
                        }

                        .tabcontent-col {
                            display: none;
                        }

                        .tabcontent-col1 {
                            display: inherit;
                            margin: 20px 0px 0px 0px;
                        }

                        .tabcontent-new-col {
                            width: 100%;
                            border-right: 0px;
                            padding: 0 0px 0px 40px;
                        }

                        .tabcontent-box-mobile {
                            width: 30%;
                            float: left;
                        }

                        .tabcontent-box-mobile1 {
                            width: 70%;
                            float: left;
                        }

                        .tabcontent-box1 {
                            width: 100%;
                            float: left;
                            position: relative;
                            top: 0px;
                            margin-top: 10px;
                        }

                        .tabcontent-box1 a {
                            font-weight: 500;
                            margin-right: 30px;
                        }

                        .tabcontent-new-col h3 {
                            font-size: 40px;
                        }

                        .tabcontent-new-col p {
                            line-height: 20px;
                            margin: 0px 0px 0px 0px;
                        }

                        .tabcontent-new-box {
                            width: 100% !important;
                            padding-left: 40px !important;
                            margin-top: 15px;
                        }

                        .tabcontent-new-box h3 {
                            font-size: 20px !important;
                            width: 30%;
                            float: left;
                            padding-right: 40px;
                            line-height: 28px;
                        }

                        .tabcontent-new-box p {
                            font-size: 14px !important;
                            width: 70%;
                            float: left;
                        }

                        .tabcontent-new-box br {
                            display: inherit;
                        }

                        .date-new-col,
                        .date-new-col1 {
                            width: 100%;
                            float: left;
                            font-size: 15px;
                            position: relative;
                            top: 0px;
                            right: 0px;
                        }

                        .tabcontent-box1 {
                            right: 0%;
                        }
                    }

                    @media (max-width: 932px) {
                        .tabcontent-new-box h3 {
                            font-size: 16px !important;
                        }
                    }

                    @media (max-width: 780px) {

                        .tabcontent-box-mobile,
                        .tabcontent-new-box h3 {
                            width: 32%;
                        }

                        .tabcontent-box-mobile1,
                        .tabcontent-new-box p {
                            width: 68%;
                        }
                    }

                    @media (max-width: 767px) {
                        .tab-new button {
                            padding: 9px 16px 9px 16px;
                        }

                        .tabcontent-new-col h3 {
                            font-size: 30px;
                        }

                        .tabcontent-box1 {
                            margin-top: 10px;
                        }

                        .tabcontent-new-col p,
                        .tabcontent-box1 a {
                            font-size: 14px;
                        }

                        .tab-new1 {
                            margin-top: -7px;
                        }

                        .slick-slide img {
                            width: 100%;
                            float: none;
                        }

                        .slick-dotted.slick-slider {
                            margin-bottom: 0px;
                        }
                    }

                    @media (max-width: 751px) {

                        .tab-new button.active,
                        .tab-new button {
                            font-size: 16px;
                            font-weight: 500;
                        }

                        .tab-new button.active::after {
                            border-left: 13px solid transparent;
                            border-right: 13px solid transparent;
                            border-top: 13px solid #4caf50;
                        }
                    }

                    @media (max-width: 734px) {

                        .tabcontent-box-mobile,
                        .tabcontent-new-box h3 {
                            width: 30%;
                        }

                        .tabcontent-box-mobile1,
                        .tabcontent-new-box p {
                            width: 70%;
                        }
                    }

                    @media (max-width: 667px) {
                        .transform_lead .common-btn a {
                            font-size: 12px;
                            margin-top: 10px;
                            padding: 0 15px 5px !important;
                        }

                        .transform_content p {
                            font-size: 14px;
                            line-height: 22px;
                            margin: 6px 0px 0px 0px;
                        }

                        .tabcontent-new-box h3 {
                            font-size: 16px !important;
                        }
                    }

                    @media (max-width: 550px) {
                        .tabcontent-new-col {
                            padding: 0px 0px 0px 15px;
                        }

                        .tabcontent-col1 {
                            display: inherit;
                            margin: 5px 0px 10px 0px;
                        }

                        .tab-new button.active,
                        .tab-new button {
                            font-size: 12px;
                        }

                        .transform_content {
                            height: 180px !important;
                            position: relative !important;
                        }

                        .tabcontent-new-box {
                            padding-left: 15px !important;
                            margin-top: 7px;
                        }

                        .tabcontent-new-box h3 {
                            font-size: 13px !important;
                            line-height: 21px;
                            margin-top: 4px;
                        }

                        .tab-new2 {
                            height: 275px;
                            padding-top: 20px;
                        }

                        .tab-new1 {
                            height: 318px;
                            margin-top: 0px;
                        }

                        .tabcontent-new-box h3 br {
                            display: inherit;
                        }

                        .tabcontent-new-col h3 {
                            margin-top: 0px;
                        }

                        .tabcontent-new-box p {
                            font-size: 13px !important;
                        }

                        .tabcontent-new-col p,
                        .tabcontent-box1 a {
                            font-size: 13px;
                        }

                        .transform_lead .common-btn a {
                            margin-top: 8px;
                        }

                        .slick-dotted.slick-slider {
                            margin-bottom: -7px;
                        }
                    }

                    @media (max-width: 480px) {

                        .tabcontent-box-mobile,
                        .tabcontent-new-box h3 {
                            width: 28%;
                        }

                        .tabcontent-box-mobile1,
                        .tabcontent-new-box p {
                            width: 72%;
                        }
                    }

                    @media (max-width: 467px) {

                        .tabcontent-box-mobile,
                        .tabcontent-new-box h3 {
                            width: 32%;
                        }

                        .tabcontent-box-mobile1,
                        .tabcontent-new-box p {
                            width: 68%;
                        }
                    }

                    @media (max-width: 451px) {
                        .transform_content p {
                            padding: 0 7px 0 20px;
                        }

                        .tabcontent-new-box br {
                            display: none;
                        }

                        .tabcontent-new-box p {
                            padding-right: 10px;
                        }
                    }

                    @media (max-width: 407px) {
                        .tabcontent-new-col h3 {
                            font-size: 20px;
                        }

                        .tabcontent-box1 a {
                            margin-right: 10px;
                        }

                        .tabcontent-new-box h3 {
                            padding-right: 10px;
                        }
                    }

                    @media (max-width: 375px) {
                        .tab-new button {
                            padding: 9px 2px;
                        }
                    }

                    @media (max-width: 365px) {
                        .tab-new button {
                            padding: 9px 3px 9px 3px;
                        }
                    }

                    @media (max-width: 355px) {
                        .tab-new button {
                            padding: 9px 5px 9px 5px;
                        }
                    }

                    @media (max-width: 342px) {
                        .tabcontent-new-box h3 {
                            font-size: 14px !important;
                        }

                        .tabcontent-box-mobile1 {
                            padding-right: 10px;
                        }

                        .tab-new2 {
                            height: 318px;
                        }

                        .tab-new1 {
                            height: 338px;
                        }
                    }

                    @media (max-width: 341px) {

                        .tab-new button.active,
                        .tab-new button {
                            font-size: 11.5px;
                        }
                    }

                    @media (max-width: 340px) {
                        .tab-new2 {
                            height: 305px;
                        }

                        .tab-new1 {
                            height: 337px;
                        }
                    }

                    @media (max-width: 333px) {
                        .tab-new2 {
                            height: 325px;
                        }

                        .tab-new1 {
                            height: 357px;
                        }
                    }

                    @media (max-width: 332px) {
                        .tab-new2 {
                            height: 345px;
                        }

                        .tab-new1 {
                            height: 377px;
                        }
                    }

                    section.regular.slider.slick-initialized.slick-slider.slick-dotted {
                        margin-bottom: 1px;
                    }
                </style>





                <div class="tab-new1">

                    <div class="tab-new">
                        <button class="tablinks-new" onclick="openCity(event, '1')" id="defaultOpen">Full Time Programs</button>
                        <button class="tablinks-new" onclick="openCity(event, '2')">Corporate Programs</button>
                    </div>

                    <div class="tab-new2">

                        <div id="1" class="tabcontent-new">
                            <div class="tabcontent-new-col">

                                <div class="tabcontent-box tabcontent-col">
                                    <h3>PGPM</h3>
                                    <p>One Year MBA for professionals<br /> with work experience</p>
                                    <div class="tabcontent-box1">
                                        <a id="uppgpmlearnd" href="pgpm.html" class="homestrippgpmlm"><u class="homestrippgpmlm">Learn More</u> <i class="fa fa-angle-right homestrippgpmlm" aria-hidden="true"></i></a> <a id="uppgpmapplyd" href="https://app.greatlakes.edu.in/" target="_blank" class="homestrippgpman"><u class="homestrippgpman">Apply Now</u> <i class="fa fa-angle-right homestrippgpman" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="date-new-col">Deadline: <span>14<sup>th</sup> Apr</span></div>
                                </div>



                                <div class="tabcontent-box tabcontent-col1">
                                    <div class="tabcontent-box-mobile">
                                        <h3>PGPM</h3>
                                    </div>
                                    <div class="tabcontent-box-mobile1">
                                        <p>One Year MBA for professionals<br /> with work experience</p>
                                        <div class="tabcontent-box1">
                                            <a id="uppgpmlearnm" href="pgpm.html" class="homestrippgpmlm"><u class="homestrippgpmlm">Learn More</u> <i class="fa fa-angle-right homestrippgpmlm" aria-hidden="true"></i></a> <a id="uppgpmapplym" href="https://app.greatlakes.edu.in/" target="_blank" class="homestrippgpman"><u class="homestrippgpman">Apply Now</u> <i class="fa fa-angle-right homestrippgpman" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="date-new-col1">Deadline: <span>14<sup>th</sup> Apr</span></div>
                                    </div>
                                </div>



                            </div>

                            <div class="tabcontent-new-col">
                                <div class="tabcontent-box tabcontent-col">
                                    <h3>PGDM</h3>
                                    <p>Two Year MBA for professionals<br /> with 0-2 years of work experience</p>
                                    <div class="tabcontent-box1">
                                        <a id="uppgdmlearnd" href="pgdm.html" class="homestrippgdmlm"><u class="homestrippgdmlm">Learn More</u> <i class="fa fa-angle-right homestrippgdmlm" aria-hidden="true"></i></a> <a id="uppgdmapplyd" href="https://application.greatlakes.edu.in/" target="_blank" class="homestrippgdman"><u class="homestrippgdman">Apply Now</u> <i class="fa fa-angle-right homestrippgdman" aria-hidden="true"></i></a>
                                    </div>

                                    <div class="date-new-col date-new-mobile">Deadline: <span>14<sup>th</sup> Apr</span></div>
                                </div>



                                <div class="tabcontent-box tabcontent-col1">
                                    <div class="tabcontent-box-mobile">
                                        <h3>PGDM</h3>
                                    </div>
                                    <div class="tabcontent-box-mobile1">
                                        <p>Two Year MBA for professionals<br /> with 0-2 years of work experience</p>
                                        <div class="tabcontent-box1">
                                            <a id="uppgdmlearnm" href="pgdm.html" class="homestrippgdmlm"><u class="homestrippgdmlm">Learn More</u> <i class="fa fa-angle-right homestrippgdmlm" aria-hidden="true"></i></a> <a id="uppgdmapplym" href="https://application.greatlakes.edu.in/" target="_blank" class="homestrippgdman"><u class="homestrippgdman">Apply Now</u> <i class="fa fa-angle-right homestrippgdman" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="date-new-col1">Deadline: <span>14<sup>th</sup> Apr</span></div>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div id="2" class="tabcontent-new">

                            <div class="tabcontent-new-col tabcontent-new-box">
                                <h3><a href="pgxpm.html">PGXPM ></a></h3>
                                <p>Executive program for professionals<br /> with 8 + years of work experience.</p>
                            </div>


                            <div class="tabcontent-new-col tabcontent-new-box">
                                <h3><a href="pgpm-flex.html">PGPM Flex ></a></h3>
                                <p>Weekends program for professionals<br /> with 2-10 years of work experience.</p>
                            </div>


                            <div class="tabcontent-new-col tabcontent-new-box">
                                <h3><a href="corporate-learning-and-development.html">Executive<br /> Education ></a></h3>
                                <p>World class customized learning solutions<br /> for your organisation.</p>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent-new");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks-new");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }

                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>









                <div id="aaaa" style="display: none;">
                    <div id="menu_new" class="offCanvas offCanvas_home" data-menu="offcanv_menu_1">
                        <div id="scrolling" class="scrolling">
                            <div class="black-box"></div>

                            <div class="menu-head" style="border:none; margin:0!important; padding:0;height: 25px;">&nbsp;</div>

                            <ul id="accordion" class="accordion">

                                <li>
                                    <div class="link">
                                        ABOUT <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <ul class='submenu'>
                                        <li><a href='about-us.html'>ABOUT US</a></li>
                                        <li><a href='about-media.html'>MEDIA</a></li>
                                        <li><a href='rankings.html'>RANKINGS</a></li>
                                        <li><a href='accreditations.html'>ACCREDITATIONS</a></li>
                                        <li><a href='about-us/nirf.html'>NIRF</a></li>
                                        <li><a href='about-us/campus.html'>CAMPUS</a></li>
                                        <li><a href='https://www.greatlakes.edu.in/blog/'>BLOG</a></li>
                                        <li><a href='about-us/events.html'>ANNUAL EVENTS</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="link">
                                        PROGRAMS <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <ul class='submenu'>
                                        <li><a href='pgpm.html'>PGPM</a></li>
                                        <li><a href='pgdm.html'>PGDM</a></li>
                                        <li><a href='pgxpm.html'>PGXPM</a></li>
                                        <li><a href='pgpm-flex.html'>PGPM FLEX</a></li>
                                        <li><a href='corporate-learning-and-development.html'>CORPORATE LEARNING AND DEVELOPMENT</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="link">
                                        FACULTY <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <ul class='submenu'>
                                        <li><a href='faculty.html'>FACULTY </a></li>
                                        <li><a href='faculty/research.html'>RESEARCH</a></li>
                                        <li><a href='coe.html'>CENTERS OF EXCELLENCE</a></li>
                                        <li><a href='conferences.html'>CONFERENCES</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="link">
                                        RECRUITERS <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                    <ul class='submenu'>
                                        <li><a href='recruiters/campus-recruitment.html'>CAMPUS RECRUITMENT</a></li>
                                        <li><a href='recruiters/internships.html'>INTERNSHIPS</a></li>
                                        <li><a href='recruiters/placement-reports.html'>PLACEMENT REPORTS</a></li>
                                        <li><a href='recruiters/leadership-series.html'>Leadership Series</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="link">

                                        <a href="https://www.greatlakes.edu.in/alumni/" class="padding-top0">

                                            ALUMNI</a>
                                    </div>

                                </li>
                                <li>
                                    <div class="link">


                                        <a href="contact.html" class="padding-top0">

                                            CONTACT</a>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                </section>
                <section class="panel management management-new common-padding ranked-main" data-section-name="management" height="500px">
                    <div class="custom-container-inner">
                        <div class="row ranked-row">
                            <div class="col-md-6 left-rank">
                                <div class="main-head-main">
                                    <!-- <span>Sample Text.</span> -->
                                </div>

                                <div class="left-ranking padding-top50 ranked-mobile">
                                    <div class="row mobile-event-row-ranking">

                                        <!-- <div class="col-md-3 text-center mobile_panel_ranking first">
    <div class="logo-ranking">
        <div class="table-cell-img table-cell-img-first"><img alt="AMBA Association logo" src="https://jim.ac.in/Placement/recruiters/P-2.jpg" title="AMBA Association logo" />
        </div>
    </div>
</div> -->
                                        <div class="col-md-3 text-center mobile_panel_ranking first">
                                            <div class="logo-ranking">
                                                <div class="table-cell-img table-cell-img-first"><img alt="AMBA Association logo" src="uploads/article/aicte_logo-1.jpg" title="AMBA Association logo" /></div>


                                            </div>

                                        </div>




                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 right-rank">
                                <h1 class="main-head-main"><span>Top Ranked MBA Program.</span></h1>

                                <div class="right-ranking ranked-mobile-2" style="padding-top:40px;">
                                    <div class="ranking_numericals">
                                        <div class="row ranked-row">
                                            <div class="col-md-12">
                                                <div class="row ranked-row">
                                                    <div class="col-md-3 text-center inner_numericals_holder ranked-div-col">
                                                        <div class="inner_numericals">
                                                            <h2>3<sup>rd</sup></h2>

                                                            <p>BY <b style="color:#4caf50; font-weight:600;">OUTLOOK INDIA</b> </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 text-center inner_numericals_holder custom-padding ranked-div-col">
                                                        <div class="inner_numericals">
                                                            <h2>9<sup>th</sup></h2>

                                                            <p>BY <b style="color:#4caf50; font-weight:600;">BUSINESS WORLD</b> </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 text-center inner_numericals_holder custom-padding2 ranked-div-col">
                                                        <div class="inner_numericals">
                                                            <h2>9<sup>th</sup></h2>

                                                            <p>TOP INDIAN B-SCHOOLS </p>
                                                        </div>
                                                        </divY <b style="color:#4caf50; font-weight:600;"></b> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="common-btn white-color co-margin ranked-mobile-1" style="margin-top:5px; line-height:none;"><a href="about-us/index.html" style="margin-top:0;">More <i class="fa fa-angle-right" aria-hidden="true"></i> </a></div>
            </div>
            </section>


            <section class="common-padding upcoming_events event-col" style="background-color:#efefef;">
                <div class="custom-container-inner">
                    <div class="main-head-main">In Focus</div>

                    <div class="row margin-top20 focus-col">
                        <div class="col-lg-4 col-md-4 col-sm-12 mobile_margin mobile_margin2 mobile_focus">
                            <div class="right_upcoming_evets">
                                <h2 class="events-div">Events</h2>
                                <div class="right_upcoming_evets_dates">

                                    <div class="row">





                                        <div class="col-sm-12 divider event-main">
                                            <div class="row">
                                                <div class="col-lg-4 event_left">
                                                    <div class="dates">
                                                        <p>24<sup>th</sup><span>Jul</span>
                                                        <p>
                                                            <!--<p>07<sup>th</sup> <span>Oct</span></p>-->
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 event_right">
                                                    <div class="text_right_up events-div-col">
                                                        <p>
                                                            <a href="distinguished-thought-leader-series-prabhakant-sinha.html" target="_blank"> Srinivasa Raja MD of Adyar Ananda Bhavan shares his life Success</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 divider event-main">
                                            <div class="row">
                                                <div class="col-lg-4 event_left">
                                                    <div class="dates">
                                                        <p>07<sup>th</sup><span>Jul</span>
                                                        <p>
                                                            <!--<p>07<sup>th</sup> <span>Oct</span></p>-->
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 event_right">
                                                    <div class="text_right_up events-div-col">
                                                        <p>
                                                            <a href="distinguished-thought-leader-series-vijay-govindarajan.html" target="_blank"> Prof.John Kennady Anthropomorphism and Dehumanization in Marketing.</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 divider event-main">
                                            <div class="row">
                                                <div class="col-lg-4 event_left">
                                                    <div class="dates">
                                                        <p>30<sup>th</sup><span>Jun</span>
                                                        <p>
                                                            <!--<p>07<sup>th</sup> <span>Oct</span></p>-->
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 event_right">
                                                    <div class="text_right_up events-div-col">
                                                        <p>
                                                            <a href="distinguished-thought-leader-series-ann-l-mcgill.html" target="_blank">Farewell party arranged on behalf of outgoing students</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-4 col-sm-12 mobile_margin mobile_focus ">
                            <div class="inner_upcoming_events">
                                <div class="upcoming_img"><a href="in-media/the-indian-unicorns-how-disruptions-shape-their-business-models-dr-suresh-srinivasan.html" target="_blank"><img height="280" src="https://jim.ac.in/images/Gallery/Infrastructure/2021/DSC_0131_1200x850-1626519050.jpg" alt="" title="" /> </a></div>

                                <div class="upcoming_text_holder upcoming_text_holder_left upcoming_text_holder_right focus-div-col" style="background-color:#f7f7f7;">
                                    <div class="">
                                        <input class="" type="button" value="Life @ JIM" style="margin-top:50px,!important;" />
                                    </div>
                                    <div class="table">

                                        <div class="table-cell">

                                            <a href="in-media/the-indian-unicorns-how-disruptions-shape-their-business-models-dr-suresh-srinivasan.html" target="_blank">
                                                <p>
                                                    <p class="blacktext">JIM, an evolving management institute, rich in social welfare values, gained its shape and structure from Jesuits to explore research in business management and administration.</p>

                                                    <div class="button-div-col"><a href="in-media/the-indian-unicorns-how-disruptions-shape-their-business-models-dr-suresh-srinivasan.html" target="_blank"><input class="button-div-col-1" type="button" value="Read More" /></a></div>
                                                </p>
                                                <p class="name"> </p>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mobile_margin mobile_focus ">
                            <div class="inner_upcoming_events">
                                <div class="upcoming_img"><a href="in-media/prof-vidya-mahambare-speaks-on-bbcs-world-business-report.html" target="_blank"><img height="280" src="https://jim.ac.in/images/Gallery/Infrastructure/2021/110A9670_1200x850%20(2)-1626678909.jpg" alt="" title="" /> </a></div>
                                <div class="upcoming_text_holder upcoming_text_holder_left upcoming_text_holder_right focus-div-col" style="background-color:#4caf50;">
                                    <div class="">
                                        <input class="" type="button" value="Learning" style="margin-top:50px,!important;" />
                                    </div>
                                    <div class="table">
                                        <div class="table-cell">
                                            <a href="in-media/prof-vidya-mahambare-speaks-on-bbcs-world-business-report.html" target="_blank">
                                                <p>
                                                    <p>The curriculum intertwines the academic needs and the demands of the industry, challenging the capability and uniqueness of every student.Teaching and learning are nonconventional.</p>



                                                    <div class="button-div-col"><a href="in-media/false-notions-of-gender-roles-should-be-corrected-early-dr-vidya-mahambare.html" target="_blank"><input type="button" value="Read More" /></a></div>
                                                </p>
                                                <p class="name"> </p>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="row margin-top30 mob-top Mobile_focus_row focus-col focus-mobile-top">




                        <div class="col-lg-4 col-md-4 col-sm-12 mobile_margin mobile_focus ">
                            <div class="inner_upcoming_events">
                                <div class="upcoming_img"> <a href="in-media/distinguished-thought-leader-session-with-mr-narayana-murthy.html" target="_blank"><img src="uploads/traningandplacements/trainingplacement-1.jpg" alt="" title="" /></a></div>
                                <div class="upcoming_text_holder upcoming_text_holder_left upcoming_text_holder_right focus-div-col" style="background-color:#f7f7f7;">
                                    <input class="" type="button" value="Training & Placement" style="margin-top:50px,!important;" />
                                    <div class="table">
                                        <div class="table-cell">
                                            <a href="in-media/distinguished-thought-leader-session-with-mr-narayana-murthy.html" target="_blank">
                                                <p>
                                                    <p class="blacktext">Personal growth and interpersonal skills are coached at workshops by experts. Mentor’s guide and support the students progressively.</p>



                                                    <div class="button-div-col"><a href="in-media/distinguished-thought-leader-session-with-mr-narayana-murthy.html" target="_blank"><input class="button-div-col-1" type="button" value="Read More" /></a></div>
                                                </p>
                                                <p class="name"> </p>
                                            </a>

                                            <!--<div class="button-div-col">
                        <a href="https://www.greatlakes.edu.in/chennai/in-media/distinguished-thought-leader-session-with-mr-narayana-murthy" target="_blank"><input type="button" value="Read More"></a>
</div>-->
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>




                        <div class="col-lg-4 col-md-4 col-sm-12 mobile_margin mobile_focus ">
                            <div class="inner_upcoming_events">
                                <div class="upcoming_img"> <iframe width="370" height="245" src="https://youtube.com/embed/lL6l7_BbFcI">
                                    </iframe></div>
                                <div class="upcoming_text_holder upcoming_text_holder_left upcoming_text_holder_right focus-div-col" style="background-color:#4caf50;margin-top:-10px">
                                    <input class="" type="button" value="CAMPUS LIFE" style="margin-top:50px,!important;" />

                                    <div class="table">
                                        <div class="table-cell">
                                            <a href="in-media/covid-impact-on-household-budgets-professors-trichy-krishnan-ashish-rathore-suresh-ramanathan.html" target="_blank">
                                                <p>
                                                    <p>JIM is a campus of eco-friendly environment that empowers to attain the life of harmony to reach destiny.</p>



                                                    <div class="button-div-col"><a href="in-media/covid-impact-on-household-budgets-professors-trichy-krishnan-ashish-rathore-suresh-ramanathan.html" target="_blank"><input type="button" value="Read More" /></a></div>
                                                </p>
                                                <p class="name"> </p>
                                            </a>

                                            <!--<div class="button-div-col">
                        <a href="https://www.greatlakes.edu.in/chennai/in-media/covid-impact-on-household-budgets-professors-trichy-krishnan-ashish-rathore-suresh-ramanathan" target="_blank"><input type="button" value="Read More"></a>
</div>-->
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>




                        <div class="col-lg-4 col-md-4 col-sm-12 mobile_margin mobile_focus ">
                            <div class="inner_upcoming_events">
                                <div class="upcoming_img"> <a href="in-media/how-did-indian-households-cope-with-the-covid-crisis-professors-vidya-mahambare-trichy-krishnan-ranjitha-a-udaya-n-suresh-ramanathan.html" target="_blank"><img src="https://jim.ac.in/images/Gallery/Infrastructure/2021/5-1626518496.jpg" alt="" title="" height="235px" /></a></div>
                                <div class="upcoming_text_holder upcoming_text_holder_left upcoming_text_holder_right focus-div-col" style="background-color:#f7f7f7;">
                                    <input class="" type="button" value="About JIM" style="margin-top:50px,!important;" />

                                    <div class="table">
                                        <div class="table-cell">
                                            <a href="in-media/how-did-indian-households-cope-with-the-covid-crisis-professors-vidya-mahambare-trichy-krishnan-ranjitha-a-udaya-n-suresh-ramanathan.html" target="_blank">
                                                <p>
                                                    <p class="blacktext">St. Joseph’s Institute of Management (JIM) is a Jesuit Business School. JIM is approved by AICTE, New Delhi, India and affiliated to Bharathidasan University, Tiruchirappalli, Tamil Nadu.</p>



                                                    <div class="button-div-col"><a href="in-media/how-did-indian-households-cope-with-the-covid-crisis-professors-vidya-mahambare-trichy-krishnan-ranjitha-a-udaya-n-suresh-ramanathan.html" target="_blank"><input class="button-div-col-1" type="button" value="Read More" /></a></div>
                                                </p>
                                                <p class="name"> </p>
                                            </a>

                                            <!--<div class="button-div-col">
                        <a href="https://www.greatlakes.edu.in/chennai/in-media/how-did-indian-households-cope-with-the-covid-crisis-professors-vidya-mahambare-trichy-krishnan-ranjitha-a-udaya-n-suresh-ramanathan" target="_blank"><input type="button" value="Read More"></a>
</div>-->
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>



                    </div>







                </div>
            </section>






            <section class="panel pgpm tab_panel common-padding" data-section-name="pgpm">
                <div class="tab_holder">
                    <div class="custom-container-inner">
                        <!-- Nav tabs -->
                        <div class="card">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active" role="presentation"><a aria-controls="home" data-toggle="tab" href="#home" role="tab">Full Time Programs</a></li>
                                <li role="presentation"><a aria-controls="profile" data-toggle="tab" href="#profile" role="tab">Executive &amp; Corporate Programs</a></li>
                            </ul>
                            <!-- Tab panes -->

                            <div class="tab-content tab-div-col">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6 padding-reduce mob-tab">
                                            <div class="inner-pgpm-pgdm inner-pgpm-pgdm2 pgpm-text">
                                                <div class="main-head-main pgpm-mobile-heading"><span>MBA</span></div>

                                                <p>Two year program to make you business ready and take your career to a higher growth trajectory. For candidates with work experience.</p>
                                                <!--<div class="admissions-open">Application Deadline: 10<sup>th</sup> March 2021</div>-->

                                                <div class="common-btn white-color"><a class="tabpgpmlm" href="pgpm.html" id="pgpm-learn">Learn More </a> <a class="button-pgpm tabpgpman" href="https://app.greatlakes.edu.in/" id="pgpm-apply" target="_blank">Apply Now</a> <a href="pgpm/webinars.html">Attend Webinar</a></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 padding-reduce mob-tab">
                                            <div class="inner-pgpm-pgdm inner-pgpm-pgdm2 pgpm-text" style="padding-left:30px;">
                                                <div class="main-head-main pgpm-mobile-heading"><span>Ph.D</span></div>

                                                <p>Two year program with focus on emerging economies and preparing leadership talent for the 21st Century. For candidates with 0-2 years experience.</p>
                                                <!--<div class="admissions-open">Admissions Open for PGDM 2020-22!</div>-->
                                                <!--<div class="admissions-open">Application Deadline: 10<sup>th</sup> March 2021</div>-->

                                                <div class="common-btn white-color"><a class="tabpgdmlm" href="pgdm.html" id="pgdm-learn">Learn More </a> <a class="button-pgpm tabpgdman" href="https://application.greatlakes.edu.in/" id="pgdm-apply" target="_blank">Apply Now</a> <a href="pgdm/webinars.html">Attend Webinar</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4 padding-reduce mob-tab">
                                            <div class="inner-pgpm-pgdm pgpm-text">
                                                <div class="main-head-main"><span>PGXPM</span></div>

                                                <p>World class executive program for professionals with 8 + years of work experience.</p>

                                                <div class="admissions-open">Application Deadline: <span>31<sup>st</sup> July 2021</span></div>

                                                <div class="common-btn white-color"><a href="pgxpm.html">Apply Now </a></div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 padding-reduce mob-tab">
                                            <div class="inner-pgpm-pgdm pgpm-text">
                                                <div class="main-head-main"><span>PGPM Flex</span></div>

                                                <p>Two year program with classes on alternate weekends for professionals with 2-10 years of work experience.</p>

                                                <div class="admissions-open">Application Deadline: <span>15<sup>th</sup> August 2021</span></div>

                                                <div class="common-btn white-color"><a href="pgpm-flex.html">Apply Now </a></div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 padding-reduce mob-tab custom_tab">
                                            <div class="inner-pgpm-pgdm pgpm-text">
                                                <div class="main-head-main"><span>Corporate Learning &amp; Development</span></div>

                                                <p>Customized learning solutions for your organisation</p>

                                                <div class="common-btn white-color"><a href="corporate-learning-and-development.html" style="text-transform:capitalize; font-size:18px;">Know More </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <style>
                .vission-new-col h2 {
                    color: #4caf50;
                }

                .vission-new-col p {
                    color: #212529;
                }

                .vission-new-col {
                    background: #fff;
                }
            </style>



            <section class="vission vission-new-col">
                <div class="custom-container-inner">
                    <h2>Our Vision</h2>

                    <p class="vision-div-col">"To form responsible leaders who are globally competent to lead a life based on values."

                    </p>

                    <h2>Our Mission</h2>

                    <p class="vision-div-col">"To provide learning environment for integral development of individuals who have the right attitude, relevant skills and needed knowledge to adapt to corporate world.To remain as a centre of learning by innovative pedagogy, appropriate exposure to industries and cutting edge academic strategies.To contribute to the field of business education and industries through research, training, and consultancy."</p>

                    <h2>Our Core Values</h2>

                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa fa-check-square"></i></span>List icons can</li>
                        <li><span class="fa-li"><i class="fa fa-check-square"></i></span>be used to</li>
                        <li><span class="fa-li"><i class="fa fa-check-square"></i></span>replace bullets</li>
                        <li><span class="fa-li"><i class="fa fa-check-square"></i></span>in lists</li>
                    </ul>
                </div>
            </section>




            <section class="common-padding testimonial_New testimonial-main" id="gls">
                <div class="container-custom">
                    <div class="main-head-main slider-heading">Testimonials</div>
                    <div class="slider multiple-items_testimonial home-slider slider-div-col">


                        <div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                        <div class="testimonials_img_holder"><img alt="" title="" src="uploads/testimonials/testmon-2.jpg" height="350px" /></div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <div class="testimonials_text_holder">
                                        <div class="table_cell_holder_testimonial">
                                            <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                                <p class="testimonial-text-col">Dear Father, I’m Prabhu your last year past out student, I hope you and our faculty family doing well father and this mail for sharing good news father I’m completing my first year (9month) in Kotak with 1 crore of business.</p>

                                                <p class="alumni">Prabhu, MBA, Finance</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-btn white-color co-margin" style="margin-top:5px;width: 100%;text-align: right;padding-right: 15px;"><a style="margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>

                        </div>












                        <div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                        <div class="testimonials_img_holder"><img alt="Jacob thomas" title="Jacob thomas" src="uploads/testimonials/testmon-3.jpg" /></div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <div class="testimonials_text_holder">
                                        <div class="table_cell_holder_testimonial">
                                            <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                                <p class="testimonial-text-col">I’m here in this position because of JIM. The learnings in JIM were more practical than theoretical and book-oriented. It helped me in various ways in my work-life. Thanks to JIM.</p>

                                                <p class="alumni">Mr. Felix</p>
                                                <p>Sales Manager, Abbott</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-btn white-color co-margin" style="margin-top:5px;width: 100%;text-align: right;padding-right: 15px;"><a style="margin-top:0;color: #ffffff;" href="https://www.greatlakes.edu.in/blog/great-lakes-mba-finance-aimla/" target="_blank" tabindex="0">More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>

                        </div>


                        <div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                        <div class="testimonials_img_holder"><img alt="Macbook" title="Macbook" src="uploads/testimonials/testmon-5.jpg" /></div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <div class="testimonials_text_holder">
                                        <div class="table_cell_holder_testimonial">
                                            <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                                <p class="testimonial-text-col">The two years in JIM molded me into a well-trained professional and gave me ample opportunities that helped me discover myself. I give my heart-out to JIM.</p>

                                                <p class="alumni">Mr. Charles Praveen, Key Account Executive, Hindustan Unilever Ltd.,</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-btn white-color co-margin" style="margin-top:5px;width: 100%;text-align: right;padding-right: 15px;"><a style="margin-top:0;color: #ffffff;" href="https://www.greatlakes.edu.in/blog/five-classic-management-lessons-from-the-miniseries-chernobyl/" target="_blank" tabindex="0">More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>

                        </div>


                        <div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                        <div class="testimonials_img_holder"><img alt="Sanjna Venugopal" title="Sanjna Venugopal" src="uploads/testimonials/testmon-9.jpg" /></div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 ful-testimonial">
                                    <div class="testimonials_text_holder">
                                        <div class="table_cell_holder_testimonial">
                                            <a style="text-decoration: none; margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">
                                                <p class="testimonial-text-col">JIM opened up huge opportunities for me; including Internships where we were encouraged to learn about the market. So, thanks to JIM.</p>

                                                <p class="alumni">Mr. Vinoth Kumar, Senior Key Account Executive, Hindustan Unilever Ltd.,</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="common-btn white-color co-margin" style="margin-top:5px;width: 100%;text-align: right;padding-right: 15px;"><a style="margin-top:0;color: #ffffff;" href="#" target="_blank" tabindex="0">More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>

                        </div>





                    </div>
                </div>
            </section>




            <style>
                @media (max-width: 768px) {
                    #stay-connected-col {
                        display: block;
                    }
                }
            </style>



            <div id="stay-connected-col" style="display:none;">
                <section class="panel social_panel common-padding" data-section-name="social_panel">
                    <div class="fast_facts_main">
                        <div class="custom-container-inner">
                            <div class="main-head-main">Stay connected</div>
                            <div class="inner_social_panel">



                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <section id="panel association common-padding" class="panel association common-padding association-mobile-col" data-section-name="association">
                <div class="custom-container-inner">
                    <div class="">
                        <h2 class="association-heading">Our Recruiters</h2>
                        <marquee behavior="scroll" direction="left" scrollamount="10">
                            <img src="https://icubeelectronics.com/wp-content/uploads/2018/06/flipkart-logo-yellow.png" width="120" height="80" alt="Natural" style="margin-left:40px" />

                            <img src="https://logovtor.com/wp-content/uploads/2020/01/blue-star-limited-logo-vector.png" width="120" height="80" alt="Natural" style="margin-left:40px" />
                            <img src="https://1000logos.net/wp-content/uploads/2016/10/Bosch-Logo-500x312.png" width="120" height="80" alt="Natural" style="margin-left:40px" />
                            <img src="https://seeklogo.com/images/S/south-indian-bank-logo-2964C2D704-seeklogo.com.png" width="120" height="80" alt="Natural" style="margin-left:40px" />

                            <img src="https://www.nipponpaint.com/wp-content/uploads/2020/02/unnamed.jpg" width="120" height="80" alt="Natural" style="margin-left:40px" />
                        </marquee>
                        <div class="global-icon">

                        </div>
                    </div>
                </div>

            </section>





        </div>
    </div>
    </div>



    @stop