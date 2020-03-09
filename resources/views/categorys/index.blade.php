<!DOCTYPE html>
<html>
<head>
    <title>Huu Ngoc | Test</title>
    <meta charset="utf-8">
    <meta name="copyright" content="Copyright (c) 2020 Mailchimp. All Rights Reserved.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="//mailchimp.com/browserconfig.xml" name="msapplication-config">
    <meta content="#FFE01B" name="msapplication-TileColor">
    <link rel="stylesheet" type="text/css" href="https://us19.admin.mailchimp.com/release/1.1.11140dcd7264c4f18c7f2771f0da6a1720afc3ef0/css/less/typefaces.css">
    <link rel="stylesheet" type="text/css" href="https://us19.admin.mailchimp.com/release/1.1.11140dcd7264c4f18c7f2771f0da6a1720afc3ef0/css/less/application.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/782980185/?random=1583744789523&amp;cv=9&amp;fst=1583744789523&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635471&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=11&amp;u_tz=420&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2oa2q2&amp;sendb=1&amp;ig=1&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=https%3A%2F%2Fus19.admin.mailchimp.com%2Ftemplates%2F&amp;ref=https%3A%2F%2Fus19.admin.mailchimp.com%2Flists%2Fdashboard%2Fsignup-forms%3Fid%3D117161&amp;tiba=Templates%20%7C%20Mailchimp&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script>
</head>
<another></another>
<body class="mcd   relative full-height-vh flex flex-col overflow-hidden">
<noscript> <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCZTKL" height="0" width="0" style="display:none;visibility:hidden"> </iframe> </noscript>
<div id="wrap" class="wrap flex flex-direction--column overflow-auto-y overflow-hidden-x v-clearSafeAreaInset">
    <div id="slot-preMainContent"></div>
    <div id="main-content" class="main-content mc-content flex flex-col selfclear">
        <div class="lastUnit size1of1 overflow-visible flex-shrink-none">
            <div id="av-flash-block" class="c-flashBlock">     </div>
        </div>
        <div role="main" id="content" class="content selfclear relative">
            <div class="lastUnit size1of1 header selfclear">
                <h1 class="inline-block-i">Category</h1>
                <a data-event-category="Primary" href="{{ action('CategoryControlle@create') }}" data-mc-el="createTemplate" class="add-btn button p0" role="button">Create Category</a> <button data-event-category="Secondary" data-mc-el="openFileManager" class="add-btn button">View news</button>
            </div>

            @if ($categorys > 0)
                <div class="line action-bar !margin-bottom--lv3 selfclear">
                    <div class="c-templateControls lastUnit size1of1">
                        <div class="c-templateSelect inline-block" data-dojo-type="mojo/analytics/parts/SelectAll" data-dojo-props="target: 'template-list'" id="uniqName_3_0" lang="en" widgetid="uniqName_3_0" style="">
                            <div class="dijit dijitReset dijitInline dojoxTriStateCheckBox" role="presentation" widgetid="dojox_form_TriStateCheckBox_0">
                                <div class="dojoxTriStateCheckBoxInner" dojoattachpoint="stateLabelNode">□</div>
                                <input type="checkbox" role="checkbox" dojoattachpoint="focusNode" class="dijitReset dojoxTriStateCheckBoxInput" dojoattachevent="onclick:_onClick" tabindex="0" id="dojox_form_TriStateCheckBox_0" value="false" aria-checked="false" style="user-select: none;">
                            </div>
                        </div>
                        <div class="folders-btn" id="folder" widgetid="folder" style="">
                            <span class="dijit dijitReset dijitInline dijitDropDownButton" widgetid="dijit_form_DropDownButton_0"><span class="dijitReset dijitInline dijitButtonNode" data-dojo-attach-event="ondijitclick:__onClick" data-dojo-attach-point="_buttonNode"><span class="dijitReset dijitStretch dijitButtonContents dijitDownArrowButton" data-dojo-attach-point="focusNode,titleNode,_arrowWrapperNode,_popupStateNode" role="button" aria-haspopup="true" aria-labelledby="dijit_form_DropDownButton_0_label" tabindex="0" id="dijit_form_DropDownButton_0" style="user-select: none;"><span class="dijitReset dijitInline dijitIcon dijitNoIcon" data-dojo-attach-point="iconNode"></span><span class="dijitReset dijitInline dijitButtonText" data-dojo-attach-point="containerNode" id="dijit_form_DropDownButton_0_label">Folders</span><span class="dijitReset dijitInline dijitArrowButtonInner"></span><span class="dijitReset dijitInline dijitArrowButtonChar">▼</span></span></span><input type="button" value="" class="dijitOffScreen" tabindex="-1" data-dojo-attach-event="onclick:_onClick" data-dojo-attach-point="valueNode" role="presentation" aria-hidden="true"></span>
                        </div>
                        {{--                    <div class="inline-block valign-top" style="" id="sort-selector" widgetid="sort-selector">--}}
                        {{--                        <span class="sort-selector-label small-meta fwb valign-middle margin--lv1 !margin-top-bottom--lv0 !margin-left--lv0 hide-mobile">Sort by</span>--}}
                        {{--                        <table class="dijit dijitReset dijitInline dijitLeft dijitSelect dijitValidationTextBox dijitDownArrowButton" data-dojo-attach-point="_buttonNode,tableNode,focusNode,_popupStateNode" cellspacing="0" cellpadding="0" role="listbox" aria-haspopup="true" tabindex="0" id="dijit_form_Select_1" widgetid="dijit_form_Select_1" aria-expanded="false" aria-invalid="false" style="user-select: none;">--}}
                        {{--                            <tbody role="presentation">--}}
                        {{--                            <tr role="presentation">--}}
                        {{--                                <td class="dijitReset dijitButtonContents overflow--hidden white-space--normal" role="presentation">--}}
                        {{--                                    <div class="dijitReset dijitInputField dijitButtonText" data-dojo-attach-point="containerNode,textDirNode" role="presentation"><span role="option" class="dijitReset dijitInline dijitSelectLabel dijitValidationTextBoxLabel ">Newest first</span></div>--}}
                        {{--                                    <div class="dijitReset dijitValidationContainer"><input class="dijitReset dijitInputField dijitValidationIcon dijitValidationInner" value="Χ " type="text" tabindex="-1" readonly="readonly" role="presentation"></div>--}}
                        {{--                                    <input type="hidden" data-dojo-attach-point="valueNode" value="date_created-desc" aria-hidden="true">--}}
                        {{--                                </td>--}}
                        {{--                                <td class="dijitReset dijitRight dijitButtonNode dijitArrowButton dijitDownArrowButton dijitArrowButtonContainer" data-dojo-attach-point="titleNode" role="presentation"><input class="dijitReset dijitInputField dijitArrowButtonInner" value="▼ " type="text" tabindex="-1" readonly="readonly" role="presentation"></td>--}}
                        {{--                            </tr>--}}
                        {{--                            </tbody>--}}
                        {{--                        </table>--}}
                        {{--                    </div>--}}
                        <div lang="en" id="template-search" class="inline-block valign-top size1of3 margin--lv2 !margin-top-bottom--lv0 !margin-left--lv0" widgetid="template-search" style="">
                            <div class="size1of1 lastUnit !padding--lv0">
                                <div class="relative form-inline with-button">
                                    <input data-dojo-attach-point="search" type="search" name="search" placeholder="Search saved templates" class="!margin--lv0">
                                    <!-- when not using freddicon, remove aria-label, remove the span and replace with button text -->
                                    <a class="button-small" aria-label="Search button" data-dojo-attach-point="submit"><span class="freddicon search !margin--lv0" role="presentation"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="inline-block" data-dojo-type="mojo/analytics/parts/SelectPane" data-dojo-props="target: 'template-list'" style="display: none;" id="uniqName_3_1" lang="en" widgetid="uniqName_3_1">
                            <button class="button" type="button" id="delete-template-btn"><span class="hide-mobile">Delete</span><span class="show-mobile hide-desktop freddicon trash !margin--lv0"></span></button>
                            <div class="folders-btn" id="folder-move" widgetid="folder-move" style="">
                                <span class="dijit dijitReset dijitInline dijitDropDownButton" widgetid="dijit_form_DropDownButton_1"><span class="dijitReset dijitInline dijitButtonNode" data-dojo-attach-event="ondijitclick:__onClick" data-dojo-attach-point="_buttonNode"><span class="dijitReset dijitStretch dijitButtonContents dijitDownArrowButton" data-dojo-attach-point="focusNode,titleNode,_arrowWrapperNode,_popupStateNode" role="button" aria-haspopup="true" aria-labelledby="dijit_form_DropDownButton_1_label" tabindex="0" id="dijit_form_DropDownButton_1" style="user-select: none;"><span class="dijitReset dijitInline dijitIcon dijitNoIcon" data-dojo-attach-point="iconNode"></span><span class="dijitReset dijitInline dijitButtonText" data-dojo-attach-point="containerNode" id="dijit_form_DropDownButton_1_label">Move To</span><span class="dijitReset dijitInline dijitArrowButtonInner"></span><span class="dijitReset dijitInline dijitArrowButtonChar">▼</span></span></span><input type="button" value="" class="dijitOffScreen" tabindex="-1" data-dojo-attach-event="onclick:_onClick" data-dojo-attach-point="valueNode" role="presentation" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="feedback-block info margin--lv3 !margin-left-right--lv0 !margin-bottom--lv0" id="filter-message" widgetid="filter-message" style="display: none;">
                            <div class="lastUnit size1of1">
                                <div class="c-media">
                                    <div class="c-mediaImage v-isFreddicon">
                                        <a href="#" class="dim-el" data-dojo-attach-point="resetFilter"><span class="freddicon cross-fill"></span></a>
                                    </div>
                                    <div class="c-mediaBody--centered">
                                        <p data-dojo-attach-point="message"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-templates-wrapper lastUnit size1of1">
                    <div class="search-meta lastGroup size1of1" style="display: none;">
                        <div class="info-nav feedback-block !margin-bottom--lv4">
                            <p class="full-width"> <a href="#" title="Clear search" class="freddicon cross-fill" id="clear-search"></a> <span id="meta-text"></span> </p>
                        </div>
                    </div>
                    <div class="sub-section grid-slat-module">
                        <ul class="template-list selfclear" data-dojo-type="mojo/analytics/List" id="template-list" data-dojo-props="sort: 'date_edited', asc: false" lang="en" widgetid="template-list">
                            <li id="template-84393" class="selfclear templates-list-item">
                                <div class="dijit dijitReset dijitInline dijitCheckBox selectCheckBox slat-select !margin--lv0 av-checkbox" role="presentation" lang="en" widgetid="dijit_form_CheckBox_0"><input type="checkbox" role="checkbox" aria-checked="false" class="dijitReset dijitCheckBoxInput" data-dojo-attach-point="focusNode" data-dojo-attach-event="ondijitclick:_onClick" tabindex="0" id="dijit_form_CheckBox_0" value="84393" style="user-select: none;"></div>
                                {{--                            <div class="grid-image" style=""></div>--}}
                                <div class="grid-meta" style="margin-left: 25px;">
                                    <h4><a data-event-category="Slat" data-event-action="Clicked / Template" href="/templates/editor?id=84393">fcjvgh</a></h4>
                                    <p><strong>Last edited </strong> on Aug 01, 2019 9:59 pm <span>by Huuadsda Ngocádsadasd</span></p>
                                    <p title="Template type">Drag and drop</p>
                                </div>
                                <table class="dijit dijitReset dijitInline dijitLeft dijitComboButton grid-actions button" cellspacing="0" cellpadding="0" role="presentation" id="dijit_form_ComboButton_0" lang="en" widgetid="dijit_form_ComboButton_0">
                                    <tbody role="presentation">
                                    <tr role="presentation">
                                        <td class="dijitReset dijitStretch dijitButtonNode" data-dojo-attach-point="buttonNode" data-dojo-attach-event="ondijitclick:_onClick,onkeydown:_onButtonKeyDown">
                                            <div id="dijit_form_ComboButton_0_button" class="dijitReset dijitButtonContents" data-dojo-attach-point="titleNode" role="button" aria-labelledby="dijit_form_ComboButton_0_label" tabindex="0">
                                                <div class="dijitReset dijitInline dijitIcon dijitNoIcon" data-dojo-attach-point="iconNode" role="presentation"></div>
                                                <div class="dijitReset dijitInline dijitButtonText" id="dijit_form_ComboButton_0_label" data-dojo-attach-point="containerNode" role="presentation"><a data-event-category="Slat" data-event-label="84393" href="">Edit</a></div>
                                            </div>
                                        </td>
                                        {{--                                    <td class="dijitReset dijitStretch dijitButtonNode" data-dojo-attach-point="buttonNode" data-dojo-attach-event="ondijitclick:_onClick,onkeydown:_onButtonKeyDown">--}}
                                        {{--                                        <div id="dijit_form_ComboButton_0_button" class="dijitReset dijitButtonContents" data-dojo-attach-point="titleNode" role="button" aria-labelledby="dijit_form_ComboButton_0_label" tabindex="0">--}}
                                        {{--                                            <div class="dijitReset dijitInline dijitIcon dijitNoIcon" data-dojo-attach-point="iconNode" role="presentation"></div>--}}
                                        {{--                                            <div class="dijitReset dijitInline dijitButtonText" id="dijit_form_ComboButton_0_label" data-dojo-attach-point="containerNode" role="presentation"><a data-event-categorys="Slat" data-event-label="84393" href="">Delete</a></div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </td>--}}
                                        <td id="dijit_form_ComboButton_0_arrow" class="dijitReset dijitRight dijitButtonNode dijitArrowButton dijitDownArrowButton" data-dojo-attach-point="_popupStateNode,focusNode,_buttonNode" data-dojo-attach-event="onkeydown:_onArrowKeyDown" title="" role="button" aria-haspopup="true" tabindex="0" style="user-select: none;">
                                            <div id="dijit_form_ComboButton_0_button" class="dijitReset dijitButtonContents" data-dojo-attach-point="titleNode" role="button" aria-labelledby="dijit_form_ComboButton_0_label" tabindex="0">
                                                <div class="dijitReset dijitInline dijitIcon dijitNoIcon" data-dojo-attach-point="iconNode" role="presentation"></div>
                                                <div class="dijitReset dijitInline dijitButtonText" id="dijit_form_ComboButton_0_label" data-dojo-attach-point="containerNode" role="presentation"><a data-event-category="Slat" data-event-label="84393" href="">Delete</a></div>
                                            </div>
                                        </td>
                                        <td style="display:none !important;"><input type="button" value="" data-dojo-attach-point="valueNode" class="dijitOffScreen" role="presentation" aria-hidden="true" data-dojo-attach-event="onclick:_onClick"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                    <div class="sub-section !margin-bottom--lv6">
                        <div class="unit size1of2 nochange !margin-bottom--lv3">
                            <div id="dijit__Templated_0" lang="en" widgetid="dijit__Templated_0" style="display: none;">
                                <span class="view-label small-meta hide-phone fwb margin--lv2 !margin-top-bottom--lv0 !margin-left--lv0">View</span>
                                <table class="dijit dijitReset dijitInline dijitLeft dijitSelect dijitValidationTextBox dijitDownArrowButton !margin--lv0 select-small valign-middle" data-dojo-attach-point="_buttonNode,tableNode,focusNode,_popupStateNode" cellspacing="0" cellpadding="0" role="listbox" aria-haspopup="true" tabindex="0" id="dijit_form_Select_0" widgetid="dijit_form_Select_0" aria-expanded="false" style="user-select: none;">
                                    <tbody role="presentation">
                                    <tr role="presentation">
                                        <td class="dijitReset dijitButtonContents overflow--hidden white-space--normal" role="presentation">
                                            <div class="dijitReset dijitInputField dijitButtonText" data-dojo-attach-point="containerNode,textDirNode" role="presentation"><span role="option" class="dijitReset dijitInline dijitSelectLabel dijitValidationTextBoxLabel ">25</span></div>
                                            <div class="dijitReset dijitValidationContainer"><input class="dijitReset dijitInputField dijitValidationIcon dijitValidationInner" value="Χ " type="text" tabindex="-1" readonly="readonly" role="presentation"></div>
                                            <input type="hidden" data-dojo-attach-point="valueNode" value="25" aria-hidden="true">
                                        </td>
                                        <td class="dijitReset dijitRight dijitButtonNode dijitArrowButton dijitDownArrowButton dijitArrowButtonContainer" data-dojo-attach-point="titleNode" role="presentation"><input class="dijitReset dijitInputField dijitArrowButtonInner" value="▼ " type="text" tabindex="-1" readonly="readonly" role="presentation"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="lastUnit size1of2 nochange float-right !margin-bottom--lv3">
                            <div class="alignr selfclear" id="dijit__Templated_1" lang="en" widgetid="dijit__Templated_1" style="display: none;">
                                <div aria-label="Number of results" class="inline-block-i small-meta valign-middle padding--lv1 !padding-left-right--lv0 margin--lv2 !margin-top-bottom--lv0 !margin-left--lv0">
                                    <span class="fwb"><span data-dojo-attach-point="startLabel">1</span> – <span data-dojo-attach-point="endLabel">2</span></span>
                                    <span>of</span>
                                    <span class="fwb" data-dojo-attach-point="totalPagesLabel">2</span>
                                </div>
                                <div class="float-right">
                                    <button aria-label="Previous results" data-dojo-attach-point="prevButton" class="button-small freddicon menu-left padding--lv1 !padding-top-bottom--lv0" title="Previous" style="display: none;"></button>
                                    <button aria-label="Next set of results" data-dojo-attach-point="nextButton" class="button-small freddicon menu-right !margin--lv0 padding--lv1 !padding-top-bottom--lv0" title="Next" style="display: none;"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="my-templates-wrapper lastUnit size1of1">
                    <div class="search-meta lastGroup size1of1" style="display: none;">
                        <div class="info-nav feedback-block !margin-bottom--lv4">
                            <p class="full-width"> <a href="#" title="Clear search" class="freddicon cross-fill" id="clear-search"></a> <span id="meta-text"></span> </p>
                        </div>
                    </div>
                    <div class="sub-section grid-slat-module">
                        <ul class="template-list selfclear" data-dojo-type="mojo/analytics/List" id="template-list" data-dojo-props="sort: 'date_edited', asc: false" lang="en" widgetid="template-list" style="display: none;">
                            <li id="template-84393" class="selfclear templates-list-item">
                                <div class="grid-image slat-template-image" style="background-image: url('https://gallery.mailchimp.com/7f1f3a0cca670414e2146e475/images/no_preview.png')"></div>
                                <div class="grid-meta">
                                    <h4><a data-event-category="Slat" data-event-action="Clicked / Template" href="/templates/editor?id=84393">fcjvgh</a></h4>
                                    <p><strong>Last edited </strong> on Aug 01, 2019 9:59 pm <span>by Huuadsda Ngocádsadasd</span></p>
                                    <p title="Template type">Drag and drop</p>
                                </div>
                            </li>
                            <li id="template-84389" class="selfclear templates-list-item">
                                <div class="grid-image slat-template-image" style="background-image: url('https://gallery.mailchimp.com/8fd50a27f8745e2ced3668b58/template-screens/173633ce77f5fc5fd325abbed837204e_84389_screen.png')"></div>
                                <div class="grid-meta">
                                    <h4><a data-event-category="Slat" data-event-action="Clicked / Template" href="/templates/editor?id=84389">Untitled Template</a></h4>
                                    <p><strong>Last edited </strong> on Aug 01, 2019 9:58 pm <span>by Huuadsda Ngocádsadasd</span></p>
                                    <p title="Template type">Drag and drop</p>
                                </div>
                            </li>
                            <!-- No data  -->
                            <!-- No data  -->
                        </ul>
                        <div>
                            <!-- No data  -->
                            <div data-test-id="listNoData" class="sub-section">
                                <div class="c-noDataBlock text-align--center border-gray border-radius--lv2" id="dijit__TemplatedMixin_5" lang="en" widgetid="dijit__TemplatedMixin_5">
                                    <div data-dojo-attach-point="containerNode">
                                        <div class="c-noDataBlock_icon" style="background-image: url(public/art-empty-campaigns.png)" data-dojo-attach-point="noDataIcon"></div>
                                        <h2 class="c-noDataBlock_title" data-dojo-attach-point="noDataTitle">You don't have any saved category</h2>
                                        <p class="c-noDataBlock_message" data-dojo-attach-point="noDataMessage">You need to create new folders.</p>
                                        <a href="" class="c-noDataBlock_action button p0 float--none  hide" data-dojo-attach-point="noDataButton"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- No data  -->
                        </div>
                    </div>
                    <div class="sub-section !margin-bottom--lv6">
                        <div class="unit size1of2 nochange !margin-bottom--lv3">
                            <div id="dijit__Templated_0" lang="en" widgetid="dijit__Templated_0" style="display: none;">
                                <span class="view-label small-meta hide-phone fwb margin--lv2 !margin-top-bottom--lv0 !margin-left--lv0">View</span>
                                <table class="dijit dijitReset dijitInline dijitLeft dijitSelect dijitValidationTextBox dijitDownArrowButton !margin--lv0 select-small valign-middle" data-dojo-attach-point="_buttonNode,tableNode,focusNode,_popupStateNode" cellspacing="0" cellpadding="0" role="listbox" aria-haspopup="true" tabindex="0" id="dijit_form_Select_0" widgetid="dijit_form_Select_0" aria-expanded="false" style="user-select: none;">
                                    <tbody role="presentation">
                                    <tr role="presentation">
                                        <td class="dijitReset dijitButtonContents overflow--hidden white-space--normal" role="presentation">
                                            <div class="dijitReset dijitInputField dijitButtonText" data-dojo-attach-point="containerNode,textDirNode" role="presentation"><span role="option" class="dijitReset dijitInline dijitSelectLabel dijitValidationTextBoxLabel ">25</span></div>
                                            <div class="dijitReset dijitValidationContainer"><input class="dijitReset dijitInputField dijitValidationIcon dijitValidationInner" value="Χ " type="text" tabindex="-1" readonly="readonly" role="presentation"></div>
                                            <input type="hidden" data-dojo-attach-point="valueNode" value="25" aria-hidden="true">
                                        </td>
                                        <td class="dijitReset dijitRight dijitButtonNode dijitArrowButton dijitDownArrowButton dijitArrowButtonContainer" data-dojo-attach-point="titleNode" role="presentation"><input class="dijitReset dijitInputField dijitArrowButtonInner" value="▼ " type="text" tabindex="-1" readonly="readonly" role="presentation"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="lastUnit size1of2 nochange float-right !margin-bottom--lv3">
                            <div class="alignr selfclear" id="dijit__Templated_1" lang="en" widgetid="dijit__Templated_1" style="display: none;">
                                <div aria-label="Number of results" class="inline-block-i small-meta valign-middle padding--lv1 !padding-left-right--lv0 margin--lv2 !margin-top-bottom--lv0 !margin-left--lv0">
                                    <span class="fwb"><span data-dojo-attach-point="startLabel">1</span> – <span data-dojo-attach-point="endLabel">0</span></span>
                                    <span>of</span>
                                    <span class="fwb" data-dojo-attach-point="totalPagesLabel">0</span>
                                </div>
                                <div class="float-right">
                                    <button aria-label="Previous results" data-dojo-attach-point="prevButton" class="button-small freddicon menu-left padding--lv1 !padding-top-bottom--lv0" title="Previous" style="display: none;"></button>
                                    <button aria-label="Next set of results" data-dojo-attach-point="nextButton" class="button-small freddicon menu-right !margin--lv0 padding--lv1 !padding-top-bottom--lv0" title="Next" style="display: none;"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div style="display: none; visibility: hidden;">  </div>
        </div>
        <div>  </div>
    </div>
</div>
</body>
</html>
