<?php

$languages = array(
	'title'=>'标题',
	'return'=>'返回',
	'dateline'=>'时间',
	'delete'=>'删除',
	'checkall'=>'全选',
	'submit' => '提 交',
	'confirms' => '确定',
	'finished' => '完成',
	'yes' => '是',
	'no' => '否',
	'tips' => '提示',
	'list_empty' => '目前没有相关记录!',
	'shortcut_tips' => '点击编辑，提交后保存',
	'welcome' => '您好',
	'edit' => '编辑',
	'plugin' => '校验文件',
	'to' => '到',
	'menu' => '菜单',

	'copyright' => 'Copyright &copy; 2001-'.date('Y').' Tencent Cloud.',

	'founder'=>'UCenter创始人',
	'login_username'=>'用户名',
	'login_password'=>'密　码',
	'login_submit'=>'登 录',
	'login_seccode'=>'验证码',
	'login_incorrect' => '<em>登录失败!</em><br />用户名无效，或密码错误。',
	'login_founder_incorrect' => 'UCenter创始人密码错误',
	'login_admin_noexists' => '该管理员不存在',
	'login_seccode_error' => '验证码输入错误',
	'login_failedlogin' => '密码重试次数过多，请稍后尝试',
	'login_tips' => 'UCenter 是一个能沟通多个应用的桥梁，使各应用共享一个用户数据库，实现统一登录，注册，用户管理。',
	'login_seccode_tips' => '如果您无法识别验证码，请点图片更换',
	'login_secques' => '安全提问',
	'login_remove_secques' => '清除安全提问',
	'login_getpw' => '找回密码',

	'menu_index'=>'首页',
	'menu_basic_setting'=>'基本设置',
	'menu_register_setting'=>'注册设置',
	'menu_mail_setting' => '邮件设置',
	'menu_manager_user'=>'用户管理',
	'menu_pm'=>'短消息',
	'menu_credit_exchange'=>'积分兑换',
	'menu_censor_word'=>'词语过滤',
	'menu_application'=>'应用管理',
	'menu_data_list'=>'数据列表',
	'menu_domain_list' =>'域名解析',
	'menu_db' => '数据备份',
	'menu_update_cache'=>'更新缓存',
	'menu_log' => '日志列表',
	'menu_logout'=>'退出',
	'menu_otheradmincp' => '其他管理平台',
	'menu_admin_user' => '管理员',

	'pm_from'=>'发件人',
	'pm_to'=>'收件人',
	'pm_none_record'=>'没有短消息',
	'pm_total_pm'=>'共 $pmnum[$pmnumindex] 条消息',
	'pm_system_pm'=>'系统消息',
	'pm_ignore_list'=>'忽略列表',
	'pm_ignore_list_comment'=>'添加到该列表中的用户给您发送短消息时将不予接收<br />添加多个忽略人员名单时用逗号 "," 隔开，如“张三,李四,王五”<br />如需禁止所有用户发来的短消息，请设置为 "&#123;ALL&#125;"',
	'save'=>'保存',
	'pm_central'=>'短消息中心',
	'pm_send'=>'发送短消息',
	'pm_send_announce'=>'发送公共消息',
	'pm_unread'=>'条未读消息',
	'pm_history'=>'历史短消息',
	'pm_sysbox'=>'条系统消息',
	'pm_annbox'=>'公共消息',
	'pm_savebox'=>'草稿箱',
	'pm_outbox'=>'发件箱',
	'pm_ignorelist'=>'忽略列表',
	'pm_preview'=>'短消息预览',
	'back'=>'返回',
	'pm_tofriends'=>'好友',
	'pm_subject'=>'消息标题',
	'pm_notitle'=>'[无标题]',
	'pm_message'=>'消息内容',
	'pm_replymessage' => '回复内容',
	'pm_sendpm'=>'发送',
	'pm_recv'=>'收信人',
	'pm_transmit'=>'转发',
	'pm_mark_unread'=>'标记未读',
	'pm_swith_friendls'=>'打开/关闭 好友列表',
	'reply'=>'回复',
	'upload'=>'上传',
	'pm_inbox'=>'短消息',
	'pm_inboxnew'=>'收件箱有',
	'pm_current'=>'当前短消息',
	'pm_system' => '系统消息',
	'pm_preview' => '预览短消息',
	'pm_date' => '时间',
	'pm_daterange_1' => '今天',
	'pm_daterange_2' => '昨天',
	'pm_daterange_3' => '前天',
	'pm_daterange_4' => '上周',
	'pm_daterange_5' => '更早',
	'pm_prompt_list' => '输入一个列表项目.\r\n留空或者点击取消完成此列表.',
	'pm_prompt_img' => '请输入图片链接地址:',
	'pm_prompt_url' => '请输入链接的地址:',
	'pm_prompt_email' => '请输入此链接的邮箱地址:',
	'pm_confirm_delete' => '您确定要删除所有短消息吗？',
	'pm_delete_all' => '删除全部',
	'pm_delete_chatpm' => '删除群聊',
	'pm_quit_chatpm' => '退出群聊',
	'pm_confirm_deletechatpm' => '您确定要删除该群聊的消息吗？',
	'pm_confirm_quitchatpm' => '您确定要退出该群聊吗？',
	'new_pm' => '未读消息',
	'private_pm' => '私人消息',
	'chat_pm' => '群聊消息',
	'pm_member' => '参与成员',
	'pm_confirm_kickmember' => '您确定要踢出该人吗？',
	'kickmember' => '踢出',
	'appendchatpmmember' => '加入新成员',
	'appendmember' => '加入',
	'tipkickmember' => '将{$member}从该群聊中踢出',
	'pm_author' => '发起者',
	'sendto' => '发送给: ',
	'fromto' => '来自: ',
	'sendeveryone' => '发送给大家',
	'privatewithwho' => '与 {$pm[\'tousername\']} 的对话',
	'chatpmmembernum' => '参与人数: ',
	'chatpm' => '群聊',

	'editor_b' => '粗体',
	'editor_i' => '斜体',
	'editor_u' => '下划线',
	'editor_list1' => '排序的列表',
	'editor_lista' => '未排序列表',
	'editor_indent' => '增加缩进',
	'editor_color' => '颜色',
	'editor_alignleft' => '居左',
	'editor_aligncenter' => '居中',
	'editor_alignright' => '居右',
	'editor_floatleft' => '左浮动',
	'editor_floatright' => '右浮动',
	'editor_code' => '插入代码',
	'editor_quote' => '插入引用',
	'editor_img' => '插入图片',
	'editor_url' => '插入链接',
	'editor_email' => '插入邮箱链接',

	'app_list' => '应用列表',
	'app_list_updated' => '应用列表成功更新。',
	'app_list_return' => '返回应用列表',
	'app_list_tips' => '如果出现“通信失败”，请点击“编辑”尝试设置应用域名对应的 IP。',
	'app_add' => '添加新应用',
	'app_add_succeed' => '成功添加应用。',
	'app_delete' => '删除',
	'app_id' => 'ID',
	'app_name' => '应用名称',
	'app_name_comment' => '限 20 字节。',
	'app_url' => '应用的主 URL',
	'app_url_comment' => '该应用与 UCenter 通信的接口 URL，结尾请不要加“/” ，应用的通知只发送给主 URL',
	'app_extra_url' => '应用的其他 URL',
	'app_extra_url_comment' => '该应用可以访问的其他 URL，结尾请不要加“/” ，每行一个，只有在同步登录是请求该 URL',
	'app_ip' => '应用 IP',
	'app_ip_comment' => '正常情况下留空即可。如果由于域名解析问题导致 UCenter 与该应用通信失败，请尝试设置为该应用所在服务器的 IP 地址。',
	'app_key' => '通信密钥',
	'app_key_comment' => '只允许使用英文字母及数字，限 64 字节。应用端的通信密钥必须与此设置保持一致，否则该应用将无法与 UCenter 正常通信。',
	'app_login' => '是否开启同步登录',
	'app_login_comment' => '开启同步登录后，当用户在登录其他应用时，同时也会登录该应用。',
	'app_charset' => '字符集',
	'app_dbcharset' => '数据库字符集',
	'app_detail' => '详情',
	'app_detail_tips' => '如果出现 <img src="images/error.gif" /> <font color="red">通信失败</font>，请点击“编辑”尝试设置应用域名对应的 IP。',
	'app_edit' => '编辑',
	'app_setting' => '编辑应用',
	'app_type' => '应用类型',
	'app_linkstatus' => '通信情况',
	'app_link' => '正在连接...',
	'app_recvnote' => '是否接受通知',
	'app_tagtemplates' => '标签单条显示模板',
	'app_tagtemplates_comment' => '当前应用的标签数据显示在其它应用时的单条数据模板。',
	'app_tagfields' => '标签模板标记说明',
	'app_tagfields_comment' => '一行一个标记说明条目，用逗号分割标记和说明文字。如：<br />subject,主题标题<br />url,主题地址',
	'app_install_type' => '选择安装方式',
	'app_install_url' => '应用程序安装地址',
	'app_install_by_url' => 'URL 安装 (推荐)',
	'app_install_by_custom' => '自定义安装',
	'app_install_submit' => ' 安 装 ',
	'app_path' => '应用的物理路径',
	'app_path_comment' => '默认请留空，如果填写的为相对路径（相对于UC），程序会自动转换为绝对路径，如 ../',
	'app_viewpro_url' => '查看个人资料页面地址',
	'app_viewpro_url_comment' => 'URL中域名后面的部分，如：/space.php?uid=%s 这里的 %s 代表uid',
	'app_api_filename' => '应用接口文件名称',
	'app_api_filename_comment' => '应用接口文件名称，不含路径，默认为uc.php',
	'app_code' => '应用的 UCenter 配置信息',
	'app_code_comment' => '当应用的 UCenter 配置信息丢失时可复制左侧的代码到应用的配置文件中',
	'app_not_add_tips' => '不能通过 URL 添加应用的可能原因：1. 通过 URL 添加应用开关被关闭；2. 连续多次错误输入 UCenter 创始人密码',

	'tag_tips' => '设置当前应用获取其他应用标签数据的比例以及扩展数据模板。模板中“&#123;xxx&#125;”表示标签数据的索引，代表相应的数据。',
	'tag_global_template' => '全局模板',
	'tag_percent' => '比例',
	'tag_template' => '模板',
	'tag_edit' => '编辑',
	'tag_template_comment' => '包含单条数据的模板',

	'badword_list' => '词语过滤',
	'badword_list_updated' => '词语过滤成功更新。',
	'badword_add' => '添加词语过滤',
	'badword_add_succeed' => '词语过滤添加成功。',
	'badword_delete' => '删除',
	'badword_keyword' => '不良词语',
	'badword_replace' => '替换为',
	'badword_admin' => '操作人',
	'badword_multi_add' => '批量添加',
	'badword_multi_add_comment' => '<li>每行一组，不良词语和替换词语之间使用“=”进行分割。</li>
					<li>如果想将某个词语直接替换成 **，只输入词语即可。</li>
					<li><strong>例如：</strong></li>
					<li>toobad</li>
					<li>badword=good</li>',
	'badword_skip' => '当冲突时，跳过原来的词表',
	'badword_overwrite' => '当冲突时，覆盖原来的词表',
	'badword_truncate' => '清空当前词表，后导入新词语（此操作不可恢复，建议首先<a href="admin.php?m=badword&a=export" target="_blanks">导出词表</a>，做好备份）',

	'announcepm' => '公共消息管理',
	'announcepm_deleted' => '成功删除公共消息',
	'clear_pm' => '清理短消息',
	'clearpm_deleted' => '成功清理的短消息数',
	'clearpm_totalnum' => '短消息中心消息总数',
	'clearpm_delunread' => '不删除未读信息',
	'clearpm_cleardays' => '删除多少天以前的短消息',
	'clearpm_cleardays_comment' => '不限制时间请输入 0',
	'clearpm_usernames' => '清理某用户的短消息',
	'clearpm_usernames_comment' => '输入用户名，多个用户名用半角逗号“,”分隔<br />此功能清空与该用户产生的所有私人消息，由该用户发起的所有群聊消息，以及参与的群聊消息',
	'announcepm_send_succeed'=>'公共消息成功发送',
	'pm_clear' => '清空短消息',
	'pm_search' => '短消息搜索',
	'pm_whichtable' => '选择分表',
	'pm_auhtor' => '发件人',
	'pm_dateline' => '时间范围',
	'pm_list' => '短消息列表',
	'pm_delete_confirm' => '该操作不可恢复，您确认要删除这些短消息吗？',

	'creditexchange_updated' => '成功更新积分兑换方案。',
	'creditexchange_invalid' => '兑换前后应用相同，请重新设置。',
	'creditexchange_update' => '更新积分兑换方案',
	'creditexchange_fromto' => '兑换方向',
	'creditexchange_select' => '请选择',
	'creditexchange_ratio' => '兑换比率',
	'creditexchange' => '积分兑换',
	'creditexchange_syncappcredits' => '同步应用的积分设置',
	'creditexchange_tips' => '点击“同步应用的积分设置”可以获取应用的积分设置，并且把当前设置结果通知给应用',

	'note_deleteuser' => '删除用户',
	'note_deletefriend' => '删除好友',
	'note_gettag' => '获取TAG',
	'note_updateclient' => '更新应用缓存',
	'note_list' => '通知列表',
	'note_list_updated' => '通知列表成功更新。',
	'note_test' => '测试',
	'note_delete' => '删除',
	'note_operation' => '操作',
	'note_times' => '通知次数',
	'note_param' => '参数',
	'note_last_note_time' => '最后通知时间',
	'note_view' => '查看',
	'setting_forbidden_username' => '禁止的用户名',
	'setting_ceonsor_comment' => '可以设置通配符，每个关键字一行，可使用通配符 "*" 如 "*版主*"(不含引号)。',
	'note_view' => '查看',
	'note_status' => '通知状态',
	'note_fail_apps' => '通知失败的应用',

	'feed_list'=>'事件列表',
	'tag_list'=>'标签列表',
	'mail_queue' => '邮件队列',
	'mail_delete' => '删除',
	'mail_subject' => '邮件标题',
	'mail_to_username' => '接收者',
	'mail_add_time' => '加入时间',
	'mail_failures' => '失败次数',
	'mail_from_app' => '来源',
	'mail_operate' => '操作',
	'anonymity' => '匿名',
	'mail_send' => '发送邮件',
	'mail_list_updated' => '邮件列表成功更新。',
	'mail_send' => '邮件发送',

	'setting' => '设置',
	'setting_tips' => '',
	'setting_dateformat' => '日期格式',
	'setting_dateformat_comment' => '使用 yyyy(yy) 表示年，mm 表示月，dd 表示天。如 yyyy-mm-dd 表示 2000-1-1',
	'setting_timeformat' => '时间格式',
	'setting_timeformat_hr24' => '24 小时制',
	'setting_timeformat_hr12' => '12 小时制',
	'setting_timeoffset' => '时区',
	'setting_timeoffset_comment' => '默认为: GMT +08:00',
	'setting_pmsendregdays' => '发短消息最少注册天数',
	'setting_pmsendregdays_comment' => '注册天数少于此设置的，不允许发送短消息，0为不限制，此举为了限制机器人发广告',
	'setting_pmcenter' => '启用短消息中心',
	'setting_pmcenter_comment' => '是否启用短消息中心功能，不影响使用短消息接口应用程序的使用',
	'setting_sendpmseccode' => '开启发送短消息验证码',
	'setting_sendpmseccode_comment' => '是否开启短消息中心发送短消息验证码，可以防止使用机器狂发短消息',
	'setting_privatepmthreadlimit' => '同一用户在 24 小时内允许发起两人会话的最大数',
	'setting_privatepmthreadlimit_comment' => '同一用户在 24 小时内可以发起的两人会话数的最大值，建议在 30 - 100 范围内取值，0 为不限制，此举为了限制通过机器批量发广告',
	'setting_chatpmthreadlimit' => '同一用户在 24 小时内允许发起群聊会话的最大数',
	'setting_chatpmthreadlimit_comment' => '同一用户在 24 小时内可以发起的群聊会话的最大值，建议在 30 - 100 范围内取值，0 为不限制，此举为了限制通过机器批量发广告',
	'setting_chatpmmemberlimit' => '参与同一群聊会话的最大用户数',
	'setting_chatpmmemberlimit_comment' => '同一会话最多能有多少用户参与设置，建议在 30 - 100 范围内取值，0为不限制',
	'setting_pmfloodctrl' => '发短消息灌水预防',
	'setting_pmfloodctrl_comment' => '两次发短消息间隔小于此时间，单位秒，0 为不限制，此举为了限制通过机器批量发广告',
	'setting_addappbyurl' => '启用通过 URL 添加应用功能',
	'setting_addappbyurl_comment' => '是否启用通过 URL 添加应用功能，建议只在需要通过 URL 添加应用时开启',
	'setting_insecureuserdelete' => '启用不安全的删除用户接口',
	'setting_insecureuserdelete_comment' => '是否启用不安全的删除用户接口，建议只有必须使用此接口且无法改造应用时开启',
	'setting_passwordalgo' => 'UCenter 密码算法',
	'setting_passwordalgo_comment' => '取值为您当前 PHP 版本支持密码散列算法的常量名。请注意使用高版本 PHP 独有的算法后不能降级到更低的 PHP 版本，否则用户无法验证密码。默认值为空。',
	'setting_passwordoptions' => 'UCenter 密码算法配置',
	'setting_passwordoptions_comment' => '取值为密码散列算法的配置信息，以一行 JSON 数组的形式存储，请自行确认相关配置是否正确。当配置本项时, UCenter 密码算法不能为空。默认值为空。',

	'setting_user_failedtime' => '允许用户登录失败次数',
	'setting_user_failedtime_comment' => '用户登录失败超过设置的数据，将在15分钟内无法登录，0为不限制次数',

	'setting_register' => '注册设置',
	'setting_register_tips' => '允许/禁止的 Email 地址只需填写 Email 的域名部分，每行一个域名，例如 @hotmail.com',
	'setting_register_doublee' => '是否允许同一 Email 地址注册多个用户',
	'setting_register_accessemail' => '允许的 Email 地址',
	'setting_register_accessemail_comment' => '只允许使用这些域名结尾的 Email 地址注册。',
	'setting_register_censoremail' => '禁止的 Email 地址',
	'setting_register_censoremail_comment' => '禁止使用这些域名结尾的 Email 地址注册。',

	'settings_mail_settings_emailfrom' => '邮件来源地址',
	'settings_mail_settings_emailfrom_comment' => '当发送邮件不指定邮件来源时，默认使用此地址作为邮件来源',
	'settings_mail_settings_silent' => '屏蔽邮件发送中的全部错误提示',
	'settings_mail_settings_send' => '邮件发送方式',
	'settings_mail_settings_send_1' => '通过 PHP 函数的 sendmail 发送(推荐此方式)',
	'settings_mail_settings_send_2' => '通过 SOCKET 连接 SMTP 服务器发送(支持 ESMTP 验证)',
	'settings_mail_settings_send_3' => '通过 PHP 函数 SMTP 发送 Email(仅 Windows 主机下有效, 不支持 ESMTP 验证)',
	'settings_mail_settings_server' => 'SMTP 服务器',
	'settings_mail_settings_server_comment' => '设置 SMTP 服务器的地址',
	'settings_mail_settings_port' => 'SMTP 端口',
	'settings_mail_settings_port_comment' => '设置 SMTP 服务器的端口，默认为 25',
	'settings_mail_settings_auth' => 'SMTP 服务器要求身份验证',
	'settings_mail_settings_auth_comment' => '如果 SMTP 服务器要求身份验证才可以发信，请选择“是”',
	'settings_mail_settings_from' => '发信人邮件地址',
	'settings_mail_settings_from_comment' => '如果需要验证, 必须为本服务器的邮件地址。邮件地址中如果要包含用户名，格式为“username &lt;user@domain.com&gt;”',
	'settings_mail_settings_username' => 'SMTP 身份验证用户名',
	'settings_mail_settings_password' => 'SMTP 身份验证密码',
	'settings_mail_settings_delimiter' => '邮件头的分隔符',
	'settings_mail_settings_delimiter_comment' => '请根据您邮件服务器的设置调整此参数',
	'settings_mail_settings_delimiter_crlf' => '使用 CRLF 作为分隔符',
	'settings_mail_settings_delimiter_lf' => '使用 LF 作为分隔符',
	'settings_mail_settings_delimiter_cr' => '使用 CR 作为分隔符',
	'settings_mail_settings_includeuser' => '收件人地址中包含用户名',
	'settings_mail_settings_includeuser_comment' => '选择“是”将在收件人的邮件地址中包含论坛用户名',

	'domain_list' => '域名解析列表',
	'domain_list_updated' => '域名解析列表成功更新。',
	'domain_add' => '添加域名解析',
	'domain_add_succeed' => '域名解析添加成功。',
	'delete' => '删除',
	'domain' => '域名',
	'ip' => 'IP',

	'user_search' => '搜索用户',
	'user_name' => '用户名',
	'user_regdate' => '注册日期',
	'user_regip' => '注册IP',
	'user_before' => '之前',
	'user_after' => '之后',
	'user_add' => '添加用户',
	'user_password' => '密码',
	'user_addsubmit' => '添 加',
	'user_avatar' => '头像',
	'user_avatar_virtual' => '虚拟头像',
	'user_avatar_real' => '真实头像',
	'delete_avatar' => '删除头像',

	'delete' => '删除',
	'email' => 'Email',
	'secmobicc' => '安全手机国际电话区号',
	'secmobile' => '安全手机号码',
	'user_list' => '用户列表',
	'user_add_succeed' => '成功添加用户。',
	'user_delete_confirm' => '该操作不可恢复，您确认要删除这些用户吗？',
	'user_delete_succeed' => '成功删除用户',
	'user_add_failed' => '添加用户失败',
	'user_add_username_ignore' => '用户名不合法',
	'user_add_username_badwords' => '用户名包含敏感字符',
	'user_add_username_exists' => '该用户名已经被注册',
	'user_add_email_formatinvalid' => 'Email 地址不合法',
	'user_add_email_ignore' => 'Email 包含不可使用的邮箱域名',
	'user_add_email_exists' => '该 Email 地址已经被注册',
	'user_edit_profile' => '编辑用户资料',
	'user_edit_profile_sucessfully' => '编辑用户资料成功',
	'user_edit_profile_failed' => '编辑用户资料失败',
	'user_keep_blank' => '密码留空，保持不变。',

	'cache_update' => '更新缓存',
	'cache_update_data' => '更新数据缓存',
	'cache_update_tpl' => '更新模板缓存',

	'db_export' => '数据备份',
	'db_export_filename' => '备份文件名',
	'db_export_volumesize' => '分卷长度(kb)',
	'db_import' => '导入',
	'db_list' => '数据恢复',
	'db_filename' => '文件名',
	'db_version' => '版本',
	'db_dateline' => '时间',
	'db_size' => '尺寸',
	'db_volume' => '卷号',
	'db_operation' => '操作',
	'db_delete_succeed' => '指定备份文件成功删除。',
	'db_backup_dir' => '备份所在目录',
	'db_backup_date' => '备份日期',
	'db_detail' => '详情',
	'db_start_delete_dumpfile' => '开始删除备份数据，请等待，请勿关闭浏览器',
	'db_delete_dumpfile_confirm' => '删除数据库备份会同时删除UCenter 下所有应用的同目录下的备份，您确定要删除吗？',
	'db_start_import_dumpfile' => '开始恢复数据，请等待，请勿关闭浏览器',
	'db_import_uc_dumpfile_confirm' => '导入备份数据将会覆盖现有用户中心的数据，您确定导入吗？',
	'db_import_dumpfile_confirm' => '导入备份数据会覆盖现有的数据，您确定导入吗？',
	'db_start_export_dumpfile' => '开始备份数据，请等待，请勿关闭浏览器',
	'db_list_tips' => '根据备份日期选择要恢复的备份，点击“详情”进入之后选择要恢复的应用备份',
	'db_import_tips' => '在需要恢复的应用前面勾选，之后点击“提交”按钮即可恢复备份数据',
	'dumpfile_exists' => '备份存在',

	'message_title'=>'提示信息',
	'message_back'=>'点击这里返回',
	'message_redirect'=>'页面将在 3 秒后自动跳转到下一页，点击这里直接跳转...',
	'update_succeed' => '更新成功。',

	'log_list' => '日志列表',
	'log_operator' => '操作者',
	'log_ip' => 'IP',
	'log_time' => '时间',
	'log_operation' => '操作',
	'log_extra' => '其他 ',

	'home_version' => 'UCenter 程序版本',
	'home_environment' => '操作系统及 PHP',
	'home_server_software' => '服务器软件',
	'home_server_ip' => '主机名',
	'home_database' => 'MySQL 版本',
	'home_note_count' => '未发送的通知数',
	'home_pm_count' => '短消息数',
	'home_friend_count' => '好友记录数',
	'home_upload_perm' => '上传许可',
	'home_database_size' => '当前数据库尺寸',
	'home_attach_size' => '当前附件尺寸',
	'home_dev' => 'Discuz! 开发团队',
	'home_dev_copyright' => '版权所有',
	'home_dev_manager' => '总策划兼项目经理',
	'home_dev_team' => '开发团队',
	'home_safe_team' => '安全团队',
	'home_supported_team' => '支持团队',
	'home_supported_ui' => '界面与用户体验团队',
	'home_supported_thanks' => '感谢贡献者',
	'home_dev_addons' => 'Hack 与插件设计',
	'home_dev_skins' => '界面美工设计',
	'home_dev_enterprise_site' => '公司网站',
	'home_dev_project_site' => '产品官方网站',
	'home_dev_community' => '产品官方论坛',
	'home_stats' => 'UCenter 统计信息',
	'home_member_count' => '用户总数',
	'home_app_count' => '应用总数',
	'home_env' => '系统信息',
	'home_envstatus' => '运行环境检测',
	'home_team' => 'UCenter 开发团队',

	'admin_add_succeed' => '添加 $addname 为管理员成功',
	'admin_already_is_administrator' => '$addname 已经是管理员了',
	'admin_failed' => '添加 $addname 为管理员失败',
	'admin_user_nonexistance' => '无此用户: $addname',
	'admin_config_unwritable' => '/data/config.inc.php 文件不可写',
	'admin_founder_pw_incorrect' => '创始人账号密码输入错误',
	'admin_pw_incorrect' => '两次输入的密码不一致',
	'admin_pw_oldpw' => '请输入原创始人密码',
	'admin_pw_newpw' => '请输入新密码',
	'admin_pw_newpw2' => '请重复输入新密码',
	'admin_pw_too_short' => '您的密码太短，可能会不安全，您确定设定此密码吗？',
	'admin_founder_pw_modified' => '创始人账号密码修改成功',
	'admin_add_admin' => '添加UCenter管理员',
	'admin_modify_founder_pw' => '修改UCenter创始人密码',
	'admin_editfoundertips' => '此处密码仅为UCenter后台创始人登陆密码，与各应用管理员密码无关更不会自动同步更改，请务必妥善保存此密码',
	'admin_privilege' => '权　限',
	'admin_allow_setting' => '允许改变设置',
	'admin_allow_app' => '允许管理应用',
	'admin_allow_user' => '允许管理用户',
	'admin_allow_badwords' => '允许管理词语过滤',
	'admin_allow_tag' => '允许管理TAG',
	'admin_allow_pm' => '允许管理短消息',
	'admin_allow_credits' => '允许管理积分',
	'admin_allow_hosts' => '允许管理域名解析',
	'admin_allow_database' => '允许管理数据',
	'admin_allow_cache' => '允许管理缓存',
	'admin_allow_log' => '允许查看日志',
	'admin_allow_note' => '允许管理数据列表',
	'oldpw' => '旧密码',
	'newpw' => '新密码',
	'repeatpw' => '重复新密码',
	'admin_list' => '管理员列表',
	'confirm_delete' => '您确定删除吗？',
	'profile' => '资料',
	'privilege' => '权限',
	'admin_edit_priv' => '编辑管理员权限',
	'admin_priv_modified_successfully' => '编辑管理员权限成功',
	'admin_priv_modified_failed' => '编辑管理员权限失败',
	'admin_modification_notice' => '请谨慎开放“管理应用”，“管理用户”、“管理数据”权限',
	'admin_allow_pm' => '允许管理短消息',
	'admin_admin' => '管理员',
	'admin_return_admin_ls' => '返回管理员列表',
	'admin_return_user_ls' => '返回用户列表',
	'view_new_version' => '查看最新版本',

	'app_allowips' => '允许的IP',
	'app_allowips_comment' => '限定终端访问的IP, 设置哪些IP可以访问Ucenter  的数据接口',

	'envstatus_result' => '检测结果',
	'envstatus_ver_too_low' => '您当前系统环境内的 {$envstatus[\'req\']} 版本 ({$envstatus[\'now_ver\']}) 过低，程序无法按预期正常运行。我们强烈建议您升级到 {$envstatus[\'sug_ver\']} 版本，程序正常运行最低要求为 {$envstatus[\'req_ver\']} 版本。',
	'envstatus_not_found' => '您当前系统环境内未安装或开启 {$envstatus[\'req\']} 模块，程序无法按预期正常运行。我们强烈建议您安装或开启此模块，以满足程序正常运行的最低要求。',
	'envstatus_ok' => '您当前系统环境适合当前版本的 UCenter {$envstatus[\'version\']} 。',

);