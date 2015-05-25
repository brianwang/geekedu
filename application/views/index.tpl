{extends file='layouts\col1.tpl'}
{block name=content}
    <div class="row">
        <div class="col-xs-4">
            <form action="{site_url('/user/add')}" method='post'>
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
            <button>腾讯登录</button>
            <button>微博登录</button>
        </div>

        <div class="col-xs-4">
            <form action="{site_url('/student/add')}" method='post'>
                <div class="form-group">
                    <label for="name">用户ID</label>
                    <select name='uid'>
                        {foreach $users as $user}
                            <option value='{$user.id}'>{$user.nickname}</option>
                        {/foreach}
                    </select>
                </div>
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
                    <label for="major">专业</label>
                    <input type="text" name="major" placeholder="专业" value="计算机应用" placeholder="专业"/>
                </div>
                <button>添加学生</button>
            </form>
        </div>
        <div class="col-xs-4">
            <form action="{site_url('/teacher/add')}" method='post'>
                <div class="form-group">
                    <label for="name">用户ID</label>
                    <select name='uid'>
                        {foreach $users as $user}
                            <option value='{$user.id}'>{$user.nickname}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
                <div class="form-group">
                    <label for="name">年龄</label>
                    <input type="text" name="age" value="34" placeholder="年龄"/>
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
                    </select>
                    <select name="city">
                        {foreach $cities as $c}
                            <option value="{$c.value}">{$c.name}</option>
                        {/foreach}
                    </select>
                </div>               
                <div class="form-group">
                    <label for="skills">擅长</label>
                    <input type="text" name="skills" placeholder="擅长" value="C++,java,php" placeholder="擅长"/>
                </div>
                <button>添加老师</button>
            </form>

        </div>
        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">名称</label>
                    <input type="text" name="name" value="C++直播教室" placeholder="名称"/>
                </div>
                <div class="form-group">
                    <label for="name">老师</label>
                    <select name="teacher">
                        {foreach $teachers as $teacher}
                            <option value="{$teacher.id}">{$teacher.name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">课程简介</label>
                    <input type="text" name="duration" value="XXXXXX" placeholder="课程简介"/>
                </div>
                <div class="form-group">
                    <label for="name">培养技能</label>
                    <input type="text" name="duration" value="C++,java,软件工程" placeholder="培养技能"/>
                </div>
                <div class="form-group">
                    <label for="name">资料</label>
                    <input type="file" name="materials"/>
                    <input type="file" name="materials"/>
                    <input type="file" name="materials"/>
                </div>
            </form>
            <a>添加课程</a>
        </div>

        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="class">课程</label>
                    <select name="class">
                        {foreach $classes as $c}
                            <option value="{$c.name}">{$c.value}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">题目</label>
                    <input type="text" name="name" value="C++直播教室" placeholder="名称"/>
                </div>
                <div class="form-group">
                    <label for="name">内容</label>
                    <input type="text" name="duration" value="17:00-20:00" placeholder="时间安排"/>
                </div>
            </form>
            <a>添加课程</a>
        </div>
        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">教室名称</label>
                    <input type="text" name="name" value="C++直播教室" placeholder="教室名称"/>
                </div>
                <div class="form-group">
                    <label for="name">课程安排</label>

                </div>
            </form>
            <a>添加教室</a>
        </div>
        <div class="col-xs-4">
            <form>
                <div class="form-group">
                    <label for="name">学校名字</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
                <div class="form-group">
                    <label for="address">学校地址</label>
                    <input type="text" name="name" value="XXXXX" placeholder="名字"/>
                </div>
                <div class="form-group">
                    <label for="phone">联系方式</label>
                    <input type="text" name="phone" value="210000" placeholder="联系方式"/>
                </div>
                <div class="form-group">
                    <label for="phone">简介</label>
                    <input type="text" name="phone" value="XXX学校是XXX的学校" placeholder="简介"/>
                </div>
                <div class="form-group">
                    <label for="phone">类型</label>
                    <select name="type">
                        <option>211</option>
                        <option>985</option>
                        <option>普通高校</option>
                        <option>培训学校</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phone">详细介绍</label>
                    <textarea name="detail">详细介绍</textarea>
                </div>
            </form>
            <a>添加学校</a>
        </div>
    </div>
{/block}