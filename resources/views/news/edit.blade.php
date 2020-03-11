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
<div style="display: none;" id="lightningjs-usabilla_live">
    <div><iframe frameborder="0" id="lightningjs-frame-usabilla_live"></iframe></div>
</div>
<noscript> <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCZTKL" height="0" width="0" style="display:none;visibility:hidden"> </iframe> </noscript>

<div id="wrap" class="wrap flex flex-direction--column overflow-auto-y overflow-hidden-x v-clearSafeAreaInset">
    <div id="slot-preMainContent"></div>
    <div id="main-content" class="main-content mc-content flex flex-col selfclear">
        <div class="lastUnit size1of1 overflow-visible flex-shrink-none">
            <div id="av-flash-block" class="c-flashBlock">     </div>
        </div>
        <div role="main" id="content" class="content selfclear relative">
            <div class="lastUnit size1of1 header account">
                <h1>Edit New</h1>
            </div>
            <div class="line section">
                <form action="{{ action('NewsController@update', $new->id) }}" method="POST" novalidate="novalidate">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <div class="unit size1of2 !margin-bottom--lv6">
                        <fieldset>
                            <div id="basicinfo-fieldset">
                                <div class="field-wrapper">
                                    <label for="category" class="">Category</label>
                                    <select  name="categorys_id" class=" av-text" id="category">
                                        @foreach($categorys as $category)
                                            <option value="{{$category->id}}" @if($new->categorys_id == $category->id)selected="selected" @endif>{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="username-fieldset">
                                    <div class="field-wrapper">
                                        <label for="title" class="">Title</label>
                                        <input type="text" name="title" class=" av-text {{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{$new->title}}" id="title">
                                        {{--                                        <div class="field-help">This is what you use to log in to Mailchimp. You can also enter your email if you wish.</div>--}}
                                        @if ($errors->has('title'))
                                            <span class="invalid feedback"role="alert" style="color: red;font-size: 14px;">
                                                <strong>{{ $errors->first('title') }}.</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="field-wrapper">
                                    <label for="description" class="">Description</label>
                                    <input  type="text" name="description" class=" av-text" value="{{$new->description}}" id="description">
                                    {{--                                    <div class="field-help">Your email address will remain private.</div>--}}
                                </div>
                                <button type="submit" class="btn btn-primary btn-submit" data-action="save"><i class="la la-save"></i>Save</button>
                                <a href="{{ action('NewsController@index') }}" class="cancel-button small-meta font-weight--bold">Cancel</a>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>
