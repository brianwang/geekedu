{extends file='layouts\col1.tpl'}
{block name=content}
    <div class="row">
        <div class="col-xs-4">
            <form class="form">
                <input type="text" name="username" placeholder="用户名"/>
                <input type="text" name="email" placeholder="邮件"/>
                <input type="text" name="password"  placeholder="密码"/>
                <input type="text" name="c_password"  placeholder="确认密码"/>
                <a>添加用户</a>
            </form>
            <button>腾讯登录</button>
            <button>微博登录</button>
        </div>

        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
                <div class="form-group">
                    <label for="name">年龄</label>
                    <input type="text" name="age" value="18" placeholder="年龄"/>
                </div>
                <div class="form-group">
                    <label for="gender">性别</label>
                    <select name="gender">
                        <option value="1">男</option>
                        <option value="0">女</option>                
                    </select>
                </div>
                <div class="form-group">
                    <label for="school">学校</label>
                    <select name="school">
                        {foreach $schools as $s}
                            <option value="{$s.value}">{$s.name}</option>
                        {/foreach}
                    </select></div>
                <div class="form-group">
                    <label for="province">省份</label>
                    <select name="province">
                        {foreach $provinces as $p}
                            <option value="{$p.value}">{$p.name}</option>
                        {/foreach}
                    </select></div>
                <div class="form-group">
                    <label for="city">城市</label>
                    <select name="city">
                        {foreach $cities as $c}
                            <option value="{$c.value}">{$c.name}</option>
                        {/foreach}
                    </select></div>
                <div class="form-group">
                    <label for="master">专业</label>
                    <input type="text" name="master" placeholder="专业"/>
                </div>
                <a>添加学生</a>
            </form>
        </div>
        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
            </form>
            <a>添加教师</a>
        </div>

        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
            </form>
            <a>添加教室</a>
        </div>


        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
            </form>
            <a>添加学校</a>
        </div>
        <div class="col-xs-4">
            <a>添加学校</a>
        </div>
    </div>
{/block}