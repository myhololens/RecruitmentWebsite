<!DOCTYPE HTML>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>传媒之家-最专业的传媒领域招聘平台</title>

    <script type="text/javascript">
        var ctx = "http://123.207.137.43";
        console.log(1);
    </script>
    <!-- 下拉选择框 -->

    <!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->

    <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
    <link href="/style/css/style.css" type="text/css" rel="stylesheet">
    <link href="/style/css/external.min.css" type="text/css" rel="stylesheet">
    <link href="/style/css/popup.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/style/js/jquery.1.10.1.min.js"></script>
    <script src="/style/js/jquery.lib.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/style/js/ajaxfileupload.js"></script>
    {{--<script src="/style/js/additional-methods.js" type="text/javascript"></script>--}}
<body>
<div id="body">

    @if($user != null)
        @if($user['type'] == 1)
            @include('headerAndFooter.headerType1Login')
        @endif

        @if($user['type'] == 0)
            @include('headerAndFooter.headerType0Login')
        @endif
    @endif

    <div style="clear: both"></div>
    <div id="container">
        <div class="content user_modifyContent">
            <dl class="c_section">
                <dt>
                <h2><em></em>修改密码</h2>
                </dt>
                <dd>
                    <form id="updatePswForm" action="/update/password" method="post">
                        <table class="savePassword">
                            <tbody>
                            <tr>
                                <td class="label">当前密码</td>
                                <td>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="password" maxlength="16" id="oldpassword" name="old_password" style="background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                                    <span id="updatePwd_beError" style="display:none;" class="error">
            				</span></td>
                            </tr>
                            <tr>
                                <td class="label">新密码</td>
                                <td><input type="password" maxlength="16" id="newpassword" name="password" style="background-repeat: no-repeat; background-attachment: scroll; background-position: right center;"></td>
                            </tr>
                            <tr>
                                <td class="label">确认密码</td>
                                <td><input type="password" maxlength="16" id="comfirmpassword" name="password_confirmation" style="background-repeat: no-repeat; background-attachment: scroll; background-position: right center;"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" value="保 存"></td>
                            </tr>
                            </tbody></table>
                    </form>
                </dd>
            </dl>
        </div>

        @include('errors.formError')
         {{--<script src="/style/js/setting.js"></script>--}}
        <div class="clear"></div>
        <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
    </div><!-- end #container -->
</div><!-- end #body -->
@include('headerAndFooter.footer')


<script src="/style/js/core.min.js" type="text/javascript"></script>

<script src="/style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>