{include file='layouts/header.tpl'}
<body>
    <!--header start-->
    <header class="header navbar-inverse">
        <div class="container ">
            <nav class="collapse navbar-collapse bs-navbar-collapse">
                <ul class="nav navbar-nav ">
                    <li>
                        <a href="/">{$g.sitename}</a>
                    </li>
                    <li class="active">
                        <a href="../css/">CSS</a>
                    </li>
                    <li>
                        <a href="../components/">Components</a>
                    </li>
                    <li>
                        <a href="../javascript/">JavaScript</a>
                    </li>
                    <li>
                        <a href="../customize/">Customize</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:;">注册</a>
                    </li>
                    <li><a href="javascript:;">登录</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container" style="margin-top:50px;">
    {block name=content}{/block}   
</div>
{include file="layouts/footer.tpl"}
{block name=script}{/block}
<link rel="stylesheet" href="{base_url('/assets/css/dashboard.css')}">
</body>
</html>


