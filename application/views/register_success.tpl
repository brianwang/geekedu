    <div>
        <form action="{site_url('/auth/register')}" method='post'>                   
            <div class="form-group">
                <label for="name">用户名</label>
                <input type="text" name="username" placeholder="用户名"/>
            </div>
            <div class="form-group">
                <label for="email">邮件</label>
                <input type="text" name="email" placeholder="邮件"/>
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="text" name="password"  placeholder="密码"/>
            </div>
            <div class="form-group">
                <label for="c_password">确认密码</label>
                <input type="text" name="c_password"  placeholder="确认密码"/>
            </div>
            <button>添加用户</button>
        </form>
    </div>