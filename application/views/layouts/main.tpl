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
                    {if !empty($smarty.session.user)}
                        <li>
                            <a href="{site_url('/profile/')}/{$smarty.session.user.id}">{$smarty.session.user.email}</a>
                        </li>

                    {else}
                        <li>
                            <a href="{site_url('/page/register')}">注册</a>
                        </li>
                        <li><a href="{site_url('/page/login')}">登录</a></li>
                        {/if}
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


