1. [cash_collect_case 催收推送记录表](#cash_collect_case)

1. [cash_collection_case 催收推送记录表](#cash_collection_case)

1. [cash_confirm_record 认款记录表](#cash_confirm_record)

1. [cash_credit_result 新网征信变量](#cash_credit_result)

1. [cash_crm_record 电商log表](#cash_crm_record)

1. [cash_export_log excel导出日志表](#cash_export_log)

1. [cash_face_ocr 身份证OCR图片识别认证](#cash_face_ocr)

1. [cash_hand_loan_record 手动放款日志记录](#cash_hand_loan_record)

1. [cash_loan_day_record 每日放款金额记录](#cash_loan_day_record)

1. [cash_loan_setting 放款配置](#cash_loan_setting)

1. [cash_loan_setting_record 放款配置日志记录](#cash_loan_setting_record)

1. [cash_make_loan_record 放款请求日志](#cash_make_loan_record)

1. [cash_order 业务订单](#cash_order)

1. [cash_order_copy1 业务订单](#cash_order_copy1)

1. [cash_order_extend 业务订单扩展表](#cash_order_extend)

1. [cash_order_loan_lock 放款提交lock表](#cash_order_loan_lock)

1. [cash_order_status_record 订单状态轨迹](#cash_order_status_record)

1. [cash_product 金融产品表](#cash_product)

1. [cash_repay_plan 还款计划表](#cash_repay_plan)

1. [cash_reports_log 用户统计日报记录表](#cash_reports_log)

1. [cash_sms_log 短信log表](#cash_sms_log)

1. [cash_sms_task 短信任务表](#cash_sms_task)

1. [cash_trade_flow 交易流水表](#cash_trade_flow)

1. [cash_trade_flow_extend 交易流水扩展表](#cash_trade_flow_extend)

1. [cash_user 白名单用户表](#cash_user)

1. [cash_user_bill 用户总账](#cash_user_bill)

1. [cash_user_card 用户银行卡](#cash_user_card)

1. [cash_user_contract 电子签结果表](#cash_user_contract)

1. [cash_user_copy 白名单用户表](#cash_user_copy)

1. [cash_user_extend 用户扩展表](#cash_user_extend)

1. [cash_user_face 用户人脸识别](#cash_user_face)

1. [cash_user_quota 用户额度申请成功的结果表（用户产品额度表）](#cash_user_quota)

1. [cash_user_quota_apply 额度申请log表](#cash_user_quota_apply)

1. [cash_verification_detail 核销详情表](#cash_verification_detail)

1. [op_url_log 系统-日志表](#op_url_log)

#### op_url_log 系统-日志表<span 'id'="#op_url_log">op_url_log</span>

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------:|
|1|id|int(11) unsigned|NO|PRI||主键ID|
|2|op_user_id|int(11) unsigned|NO||0|操作用户id|
|3|op_user_name|varchar(32)|NO|||操作用户名|
|4|op_user_department|varchar(64)|NO|||操作用户名|
|5|uri|varchar(100)|NO|||操作请求的path|
|6|method|varchar(10)|NO|||请求方式|
|7|ip|int(10)|NO|||ip地址 ip2long后|
|8|browser|varchar(50)|NO|||浏览器|
|9|platform|varchar(50)|NO|||操作系统|
|10|header|text|YES|||请求头数据|
|11|request|mediumtext|YES|||请求参数|
|12|response|mediumtext|YES|||返回结果|
|13|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|14|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

