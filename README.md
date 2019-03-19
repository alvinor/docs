   ### 目录
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

#### cash_collect_case
催收推送记录表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|||用户id|
|3|order_num|varchar(20)|NO|MUL||订单号|
|4|cuser_name|varchar(64)|NO|||姓名|
|5|id_card|varchar(18)|NO|||身份证号码|
|6|register_phone|varchar(20)|NO|||手机号码|
|7|funds_channel|tinyint(3) unsigned|NO||1|资金渠道(cash_order)|
|8|product_id|tinyint(3) unsigned|NO||1|业务类型|
|9|credit_city|varchar(64)|NO|||贷款城市(cash_user)|
|10|car_loan_order_id|int(11) unsigned|NO|||车贷订单ID(cash_user)|
|11|car_id|int(11)|NO|||车辆ID(cash_user_extend)|
|12|repay_date|tinyint(3) unsigned|NO|||还款日|
|13|status|tinyint(4) unsigned|NO||1|数据状态1. 催收 2.停催|
|14|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|15|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|
|16|cc|int(11)|NO||1538217686||

[返回目录](#目录)

#### cash_collection_case
催收推送记录表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|||用户id|
|3|order_num|varchar(20)|NO|MUL||订单号|
|4|cuser_name|varchar(64)|NO|||姓名|
|5|id_card|varchar(18)|NO|||身份证号码|
|6|register_phone|varchar(20)|NO|||手机号码|
|7|funds_channel|tinyint(3) unsigned|NO||1|资金渠道(cash_order)|
|8|product_id|tinyint(3) unsigned|NO||1|业务类型|
|9|credit_city|varchar(64)|NO|||贷款城市(cash_user)|
|10|car_loan_order_id|int(11) unsigned|NO|||车贷订单ID(cash_user)|
|11|car_id|int(11)|NO|||车辆ID(cash_user_extend)|
|12|repay_date|tinyint(3) unsigned|NO|||还款日|
|13|status|tinyint(4) unsigned|NO||1|数据状态1. 催收 2.停催|
|14|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|15|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_confirm_record
认款记录表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|op_user_id|int(11) unsigned|NO|||操作者id|
|3|op_user_name|varchar(64)|NO|||操作者名|
|4|op_user_department|varchar(64)|NO|||操作者部门|
|5|cuser_id|int(11) unsigned|NO|||C端用户Id|
|6|cuser_name|varchar(64)|NO|||C端用户姓名|
|7|order_id|int(11) unsigned zerofill|NO|||订单id|
|8|order_num|varchar(20)|NO|||订单编号|
|9|bank_card_num|varchar(19)|NO|||认款银行卡号|
|10|amount|bigint(11) unsigned|NO|||认款金额|
|11|bank_trade_no|varchar(40)|NO|||银行流水号|
|12|repay_plan_ids|varchar(500)|NO|||还款计划表id，json格式|
|13|type|tinyint(4)|NO||4|4-来款认款流水，5-后台发起提前还款流水|
|14|actual_trade_time|timestamp|NO|||还款时间|
|15|certification_url|varchar(100)|NO|||来款认款交易凭证url|
|16|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|17|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_credit_result
新网征信变量

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|apply_id|int(11) unsigned|NO|UNI||额度申请表ID|
|3|cuser_id|int(11) unsigned|NO|||c端用户ID|
|4|cuser_name|varchar(30)|NO|||c端用户名|
|5|register_phone|varchar(20)|NO|||注册手机号|
|6|id_card|varchar(18)|NO|||身份证号|
|7|bank_card_num|varchar(32)|NO|||银行卡号|
|8|bank_phone|varchar(20)|NO|||银行手机号|
|9|bank_user_id|varchar(30)|NO|||新网银行注册用户ID|
|10|bank_approval_id|varchar(50)|NO|||银行审批号|
|11|credit_result|text|YES|||征信变量|
|12|credit_last_date|date|NO|||征信变量过期时间|
|13|status|tinyint(4)|YES||-1|新网状态 0拒绝 1成功  -1失败（新网返回处理中或异常、失败） -2验四失败  2特殊处理不请求接口|
|14|interface_step|tinyint(4)|NO||1|接口步数  1新网风控审核 2验四(废弃) 3审批(废弃) 4新网风控审核结果查询|
|15|quota_status|tinyint(2)|NO||0|额度申请状态  默认为0  1成功（跑脚本用）|
|16|quota_result|tinytext|YES|||决策引擎返回结果 json|
|17|reject_code|varchar(30)|NO|||银行拒绝码|
|18|request_data|text|YES|||请求参数|
|19|bank_result|text|YES|||银行返回结果 原始数据 json|
|20|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|21|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_crm_record
电商log表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11)|NO|PRI||主键|
|2|cuser_id|int(11)|NO|||用户id|
|3|crm_status|tinyint(4)|NO|||电销状态|
|4|crm_result|varchar(100)|NO|||当前电销结果|
|5|created_at|timestamp|NO||CURRENT_TIMESTAMP||
|6|updated_at|timestamp|NO||CURRENT_TIMESTAMP||

[返回目录](#目录)

#### cash_export_log
excel导出日志表


|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|user_id|int(11) unsigned|NO|||操作人ID|
|3|module|varchar(20)|NO|||模块名称|
|4|export_time|timestamp|NO|||导出时间|
|5|export_params|text|YES|||导出参数|
|6|status|tinyint(4) unsigned|NO||1|1.处理中2.已完成3.导出失败|
|7|error_msg|varchar(100)|NO|||错误原因|
|8|file|varchar(100)|NO|||文件位置|
|9|export_nums|int(11)|NO||0|导出条数|
|10|button_name|varchar(20)|NO|||按钮名称|
|11|export_msg|varchar(100)|NO|||操作原因|
|12|module_mark|varchar(20)|NO|||列表标识|
|13|op_user_name|varchar(64)|NO|||操作人姓名|
|14|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|15|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_face_ocr
身份证OCR图片识别认证

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI|||
|2|cuser_id|int(11) unsigned|NO|MUL||用户ID|
|3|id_card_face|varchar(100)|NO|||身份证正面照片|
|4|id_card_back|varchar(100)|NO|||身份证背面照片|
|5|face_result|text|YES|||正面识别结果|
|6|back_result|text|YES|||背面识别结果|
|7|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|8|updated_at|timestamp|NO||CURRENT_TIMESTAMP|修改时间|
|9|is_deleted|tinyint(2) unsigned|NO||0|0为正常1为删除|

[返回目录](#目录)

#### cash_hand_loan_record
手动放款日志记录

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键id|
|2|op_user_id|int(11) unsigned|NO|||操作者id|
|3|op_user_name|varchar(64)|NO|||操作者名|
|4|op_user_department|varchar(64)|NO|||操作者部门|
|5|cuser_id|int(11) unsigned|NO|||C端用户Id|
|6|cuser_name|varchar(64)|NO|||C端用户姓名|
|7|order_id|int(11) unsigned|NO|||订单id|
|8|order_num|varchar(20)|NO|||订单编号|
|9|bank_card_num|varchar(19)|NO|||放款银行卡|
|10|amount|bigint(11) unsigned|NO||0|放款金额|
|11|out_trade_no|varchar(32)|NO|||对应支付回调的out_trade_no，商户订单号|
|12|is_fail_order|tinyint(4)|NO||1|是否失败订单，1不是，2是|
|13|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|14|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_loan_day_record
每日放款金额记录

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI|||
|2|loan_money|int(11) unsigned|NO||0|放款金额|
|3|sid|int(11) unsigned|NO|||cash_loan_setting的主键|
|4|loan_day|date|NO|MUL||借款天|
|5|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|6|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_loan_setting
放款配置

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键id|
|2|type|tinyint(11) unsigned|NO|||放款模式。1-自动放款，2-手动放款|
|3|period|tinyint(3) unsigned|NO|||放款周期。1-按日计算，2-按月计算|
|4|total_money|bigint(11) unsigned|NO||0|放款金额|
|5|active_time|date|NO|||生效时间。当前配置生效时间|
|6|status|tinyint(4) unsigned|NO|||当前配置是否可用。0-不可用，1-可用|
|7|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|8|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_loan_setting_record
放款配置日志记录

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键id|
|2|op_user_id|int(11) unsigned|NO|||操作者id|
|3|op_user_name|varchar(64)|NO|||操作者名|
|4|op_user_department|varchar(64)|NO|||操作者部门|
|5|type|tinyint(11)|NO|||放款模式。1-自动放款，2-手动放款|
|6|period|tinyint(11) unsigned|NO|||放款周期。1-按日计算，2-按月计算|
|7|total_money|bigint(11) unsigned|NO||0|放款金额|
|8|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|9|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_make_loan_record
放款请求日志

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键id|
|2|channel_id|varchar(50)|NO||29|支付通道编码，29-广发银企直连|
|3|request_url|varchar(100)|NO|||请求url链接|
|4|form_params|text|YES|||请求放款渠道参数|
|5|response_data|text|YES|||放款渠道|
|6|sapi|varchar(20)|NO|||SAPI，fast_cgi-web请求, cli-命令请求|
|7|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|8|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_order
业务订单

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(10) unsigned|NO|PRI||主键|
|2|order_num|varchar(20)|NO|UNI||订单编号|
|3|cuser_id|int(10) unsigned|NO|MUL||C端用户id|
|4|cuser_name|varchar(64)|NO|||用户姓名|
|5|id_card|varchar(18)|NO|MUL||身份证号|
|6|register_phone|varchar(11)|NO|||注册手机号|
|7|loan_money|bigint(10) unsigned|NO|||借款金额，单位分|
|8|loan_period|tinyint(3) unsigned|NO|||借款期限|
|9|repay_day|tinyint(3) unsigned|NO|||还款日|
|10|fee|bigint(10) unsigned|NO|||贷款手续费，单位分|
|11|product_id|tinyint(3) unsigned|NO|||金融产品id|
|12|bank_card_id|int(10) unsigned|NO|||银行卡id，银行卡表主键id|
|13|make_loan_time|timestamp|NO|||放款时间|
|14|funds_channel|tinyint(4)|NO||1|资金渠道。1-优信|
|15|status|tinyint(4)|NO||1|订单状态。1-订单生成，2-人脸识别成功，3-人脸识别失败，4-签署合同成功，5-签署合同失败，6-放款中，7-放款成功，8-放款失败，9-取消交易|
|16|is_deleted|tinyint(4)|NO||0|是否删除。0-正常，1-删除。|
|17|created_at|timestamp|NO||CURRENT_TIMESTAMP|申请时间|
|18|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_order_copy1
业务订单

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(10) unsigned|NO|PRI||主键|
|2|order_num|varchar(20)|NO|UNI||订单编号|
|3|cuser_id|int(10) unsigned|NO|MUL||C端用户id|
|4|cuser_name|varchar(64)|NO|||用户姓名|
|5|id_card|varchar(18)|NO|MUL||身份证号|
|6|register_phone|varchar(11)|NO|||注册手机号|
|7|loan_money|bigint(10) unsigned|NO|||借款金额，单位分|
|8|loan_period|tinyint(3) unsigned|NO|||借款期限|
|9|repay_day|tinyint(3) unsigned|NO|||还款日|
|10|fee|bigint(10) unsigned|NO|||贷款手续费，单位分|
|11|product_id|tinyint(3) unsigned|NO|||金融产品id|
|12|bank_card_id|int(10) unsigned|NO|||银行卡id，银行卡表主键id|
|13|make_loan_time|timestamp|NO|||放款时间|
|14|funds_channel|tinyint(4)|NO||1|资金渠道。1-优信|
|15|status|tinyint(4)|NO||1|订单状态。1-订单生成，2-人脸识别成功，3-人脸识别失败，4-签署合同成功，5-签署合同失败，6-放款中，7-放款成功，8-放款失败，9-取消交易|
|16|is_deleted|tinyint(4)|NO||0|是否删除。0-正常，1-删除。|
|17|created_at|timestamp|NO||CURRENT_TIMESTAMP|申请时间|
|18|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_order_extend
业务订单扩展表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|order_id|int(11) unsigned|NO|UNI||订单id，cash_order主键|
|3|cuser_id|int(11) unsigned|NO|MUL||C端用户id|
|4|use_of_funds|varchar(256)|NO|||贷款资金用途|
|5|interest_rate|int(11) unsigned|NO|||利率（IRR值），存的整数，具体值需除以10000|
|6|guest_interest_rate|int(11) unsigned|NO|||对客利率|
|7|penalty_rate|int(11) unsigned|NO|||日罚息利率，具体值除以10000|
|8|re_auth_ct|tinyint(3) unsigned|NO||0|重试次数统计|
|9|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|10|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_order_loan_lock
放款提交lock表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(10) unsigned|NO|PRI||主键id,同订单id|
|2|order_num|varchar(20)|NO|MUL||订单编号|
|3|out_trade_no|varchar(32)|NO|||商户订单号|
|4|status|tinyint(3)|NO||1|订单放款状态，1-不可再发起放款，-1可再次发起放款|
|5|created_at|timestamp|NO||CURRENT_TIMESTAMP|生成时间|
|6|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_order_status_record
订单状态轨迹

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键id|
|2|order_id|int(11) unsigned|NO|MUL||订单id|
|3|order_status|tinyint(11)|NO|||订单状态。1-订单生成，2-人脸识别成功，3-人脸识别失败，4-签署合同成功，5-签署合同失败，6-放款中，7-放款成功，8-放款失败，9-取消交易|
|4|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|5|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_product
金融产品表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|name|varchar(60)|NO|||产品名称|
|3|penalty_rate|int(11) unsigned|NO||0|日罚息利率，具体值除以10000|
|4|is_deleted|tinyint(1) unsigned|NO||0|是否删除。1-是 0-否|
|5|description|varchar(100)|NO|||产品描述|
|6|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|7|updated_at|timestamp|NO||CURRENT_TIMESTAMP|最后更新时间|

[返回目录](#目录)

#### cash_repay_plan
还款计划表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|order_id|int(11) unsigned|NO|MUL||订单id，cash_order表主键|
|3|order_num|varchar(20)|NO|MUL||订单编号|
|4|user_bill_id|int(11) unsigned|NO|||总账id|
|5|cuser_id|int(11) unsigned|NO|MUL||C端用户id|
|6|bank_card_id|int(11) unsigned|NO|||还款银行卡id|
|7|bank_name|varchar(30)|NO|||还款银行|
|8|bank_card_num|varchar(19)|NO|||用户还款银行卡号|
|9|rank|tinyint(11) unsigned|NO|||期数|
|10|repay_principal|bigint(11) unsigned|NO|||应还本金|
|11|repay_interest|bigint(11) unsigned|NO|||应还利息|
|12|penalty|bigint(11) unsigned|NO|||应还罚息|
|13|fee|bigint(11) unsigned|NO|||应还手续费|
|14|reduce_principal|bigint(11) unsigned|NO|||减免本金|
|15|reduce_interest|bigint(11) unsigned|NO|||减免利息|
|16|reduce_penalty|bigint(11) unsigned|NO|||减免罚息|
|17|reduce_description|varchar(150)|NO|||金额减免描述|
|18|reduce_op_user|varchar(64)|NO|||金额减免操作人|
|19|paid_principal|bigint(11) unsigned|NO|||已还本金|
|20|paid_interest|bigint(11) unsigned|NO|||已还利息|
|21|paid_penalty|bigint(11) unsigned|NO|||已还罚息|
|22|paid_fee|bigint(11) unsigned|NO|||已还手续费|
|23|start_date|date|NO|||账期起始日（上期还款日+1天）|
|24|repay_date|date|NO|MUL||还款日期|
|25|actual_repay_time|timestamp|NO|||实际还款日期|
|26|status|tinyint(4)|NO||0|状态 0-未还 1-已还 2-还款中，已经进入flow表|
|27|is_deleted|tinyint(4)|NO||0|是否删除。0-正常，1-删除。|
|28|has_overdue|tinyint(4)|NO||0|是否有过逾期。0-没有逾期过，1-有过逾期|
|29|overdue_day|smallint(11) unsigned|NO||0|逾期天数|
|30|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|31|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_reports_log
用户统计日报记录表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键ID|
|2|file|varchar(100)|NO|||文件路径|
|3|is_deleted|tinyint(1) unsigned|NO||0|是否删除 1删除 0否|
|4|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|5|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_sms_log
短信log表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|type|tinyint(4) unsigned|NO||1|类型  1.白名单 2.信审 3.放款成功或失败|
|3|phone|varchar(20)|NO|||发送号码|
|4|content|varchar(150)|NO|||发送内容|
|5|send_status|tinyint(4)|NO|||发送状态|
|6|error_message|varchar(50)|NO|||发送状态信息|
|7|send_time|timestamp|NO|||发送时间|
|8|send_ip|varchar(20)|NO|||操作IP|
|9|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|10|updated_at|timestamp|NO||CURRENT_TIMESTAMP|修改时间|

[返回目录](#目录)

#### cash_sms_task
短信任务表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|mobile|varchar(20)|NO|||手机号|
|3|msg|varchar(150)|NO|||短信内容|
|4|type|tinyint(3) unsigned|NO|||类型|
|5|status|tinyint(3) unsigned|NO||1|1未发送 2已发送|
|6|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|7|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_trade_flow
交易流水表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|MUL||C端用户Id|
|3|cuser_name|varchar(64)|NO|MUL||C端用户姓名|
|4|order_id|int(11) unsigned|NO|||订单id|
|5|repay_plan_ids|varchar(500)|NO|||还款计划表id，json格式|
|6|order_num|varchar(20)|NO|MUL||订单编号|
|7|trade_no|varchar(30)|NO|||支付中心订单号|
|8|out_trade_no|varchar(32)|NO|MUL||对应支付回调的out_trade_no，商户订单号|
|9|bank_card_num|varchar(19)|NO|||用户银行卡，type=1时为放款银行卡，type=2时为扣款银行卡|
|10|bank_name|varchar(30)|NO|||银行名称|
|11|amount|bigint(11) unsigned|NO|||本次操作金额|
|12|type|tinyint(4)|NO||1|1-放款流水，2-h5发起正常还款流水，3-h5发起提前还款流水，4-后台发起来款认款流水，5-后台发起提前还款流水（2，3平台代扣，4，5来款认款）61-正常自动代扣，62-逾期自动代扣，63-后台手动代扣|
|13|status|tinyint(4)|NO||3|交易结果。-33-退款中，－4-已退款，-5-退款失败，-3-请求异常，-2-退汇，-1-交易失败，0-等待交易，1-交易中，2-交易成功，3-待处理（还未交由支付渠道处理），4-处理中（已交由支付渠道处理，
还未返回处理结果）|
|14|is_deleted|tinyint(3) unsigned|NO||0||
|15|is_verification|tinyint(4)|NO||0|是否已核销，-1-核销失败，0-未核销，1-已核销|
|16|bank_trade_no|varchar(40)|NO|MUL||银行流水号(订单状态为-1或2时存在此参数，可能为空，对应tri_trade_no)|
|17|actual_trade_time|timestamp|NO|MUL||交易状态确认时间，对应支付回调的time_end|
|18|to_trade_time|timestamp|NO|MUL||渠道提交时间，提交到支付渠道时间|
|19|make_loan_sapi|varchar(20)|NO|||PHP_SAPI|
|20|created_at|timestamp|NO|MUL|CURRENT_TIMESTAMP|创建时间|
|21|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_trade_flow_extend
交易流水扩展表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(10) unsigned|NO|PRI|||
|2|flow_id|int(10) unsigned|NO|||trade_flow的主键|
|3|principal|bigint(10) unsigned|NO||0|还款本金,减免过的|
|4|interest|bigint(11)|NO||0|还款利息,减免过的|
|5|penalty|bigint(11)|NO||0|还款罚息,减免过的|
|6|fee|bigint(11)|NO||0|还款手续费|
|7|op_user_id|int(11) unsigned|NO||0|代扣操作人id，0-系统|
|8|op_user_name|varchar(64)|NO|||代扣操作人|
|9|verification_err_msg|varchar(100)|NO|||核销失败msg|
|10|trade_error_msg|varchar(100)|NO|||交易失败消息|
|11|error_code|varchar(100)|YES|||错误码|
|12|payer_name|varchar(64)|NO|||付款方户名|
|13|payer_card_num|varchar(19)|NO|||付款方卡号|
|14|funds_source|varchar(50)|NO|||资方|
|15|payment_channel|varchar(50)|NO|||支付渠道|
|16|channel_id|int(10)|NO||0|支付渠道id|
|17|certification_url|varchar(100)|NO|||来款认款交易凭证url|
|18|pay_status_sapi|varchar(20)|NO||||
|19|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|20|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_user
白名单用户表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|UNI|0|C端用户id|
|3|cuser_name|varchar(64)|NO|MUL||C端用户姓名|
|4|id_card|varchar(18)|NO|UNI||用户身份证号|
|5|gender|tinyint(1)|NO||1|性别：1-男 2-女|
|6|register_phone|varchar(20)|NO|MUL||注册手机号|
|7|city_id|smallint(11) unsigned|NO|||提交信审城市id|
|8|credit_city|varchar(64)|NO|||提交信审的城市|
|9|is_white|tinyint(4)|NO||1|是否是白名单。1-白名单，-1黑名单|
|10|admittance_time|timestamp|NO||CURRENT_TIMESTAMP|白名单准入时间|
|11|car_loan_last_date|date|NO|||车贷到期日|
|12|statement_end|date|NO||0000-00-00|车贷到期日(新)|
|13|product_status|tinyint(1) unsigned|NO||1|1、额度未激活2、激活未借款3、已借款4、已失效|
|14|quota_interest|tinyint(1) unsigned|NO||0|是否是等额本息 1是 0 否|
|15|interest_principal|tinyint(1) unsigned|NO||0|是否是先息后本 1是 0否|
|16|crm_status|tinyint(1)|NO||1|当前电销状态：1-暂无结果2-仍需回访  3-无需回访|
|17|car_loan_order_id|int(11) unsigned|NO||0|准入白名单关联的车贷|
|18|is_deleted|tinyint(1)|NO||0|是否删除：0未删除 1已删除|
|19|created_at|timestamp|NO|MUL|CURRENT_TIMESTAMP|记录创建时间|
|20|updated_at|timestamp|NO||CURRENT_TIMESTAMP|记录最后更新时间|

[返回目录](#目录)

#### cash_user_bill
用户总账

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|order_id|int(11) unsigned|NO|||订单id，cash_order表主键|
|3|order_num|varchar(20)|NO|UNI||订单编号|
|4|cuser_id|int(11) unsigned|NO|MUL||C端用户Id|
|5|cuser_name|varchar(64)|NO|MUL||C端用户姓名|
|6|order_created_at|timestamp|NO|MUL||订单创建时间|
|7|status|tinyint(4)|NO||1|订单还款状态，1-正常，2-正常结清，3-逾期，4-提前结清|
|8|is_deleted|tinyint(11)|NO||0|是否删除。0正常，1删除|
|9|expire_date|date|NO|||订单到期时间，最后一期账期还款日|
|10|clean_time|timestamp|NO|||结清时间|
|11|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|12|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_user_card
用户银行卡

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11)|NO|MUL||C端用户Id|
|3|bank_card_num|varchar(19)|NO|UNI||银行卡号|
|4|id_card|varchar(18)|NO|||身份证号|
|5|reserve_phone|varchar(11)|NO|||银行卡预留手机号|
|6|bank_name|varchar(30)|NO|||银行名称|
|7|bank_code|varchar(12)|NO|||开户行总行联行号|
|8|card_name|varchar(30)|NO|||卡类型，绿卡(银联卡)|
|9|is_using|tinyint(4)|NO||0|是否处于交易中，0-未使用中，1-使用中|
|10|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时时间|
|11|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_user_contract
电子签结果表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键id|
|2|contract_id|varchar(30)|NO|MUL||合同id|
|3|contract_name|varchar(100)|NO|||合同名|
|4|contract_url|varchar(100)|NO|||合同url地址|
|5|contract_num|varchar(64)|NO|||合同编号(车贷)|
|6|contract_code|int(11)|NO||0|合同类型编号|
|7|cuser_id|int(11) unsigned|NO|MUL||C端用户id|
|8|order_id|int(11) unsigned|NO|MUL||cahs_order表主键id|
|9|result|tinyint(4)|NO||0|电子签是否成功。0-未成功，1-成功|
|10|type|tinyint(2)|NO||0|合同是否过期  0未过期 1已过期|
|11|created_at|timestamp|NO|MUL|CURRENT_TIMESTAMP|创建时间|
|12|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_user_copy
白名单用户表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|UNI|0|C端用户id|
|3|cuser_name|varchar(64)|NO|||C端用户姓名|
|4|id_card|varchar(18)|NO|UNI||用户身份证号|
|5|gender|tinyint(1)|NO||1|性别：1-男 2-女|
|6|register_phone|varchar(20)|NO|||注册手机号|
|7|city_id|smallint(11) unsigned|NO|||提交信审城市id|
|8|credit_city|varchar(64)|NO|||提交信审的城市|
|9|is_white|tinyint(4)|NO||1|是否是白名单。1-白名单，-1黑名单|
|10|admittance_time|timestamp|NO|||白名单准入时间|
|11|car_loan_last_date|date|NO|||车贷到期日|
|12|product_status|tinyint(1) unsigned|NO||1|1、额度未激活2、激活未借款3、已借款4、已失效|
|13|quota_interest|tinyint(1) unsigned|NO||0|是否是等额本息 1是 0 否|
|14|interest_principal|tinyint(1) unsigned|NO||0|是否是先息后本 1是 0否|
|15|crm_status|tinyint(1)|NO||1|当前电销状态：1-暂无结果2-仍需回访  3-无需回访|
|16|car_loan_order_id|int(11) unsigned|NO||0|准入白名单关联的车贷|
|17|is_deleted|tinyint(1)|NO||0|是否删除：0未删除 1已删除|
|18|created_at|timestamp|NO||CURRENT_TIMESTAMP|记录创建时间|
|19|updated_at|timestamp|NO||CURRENT_TIMESTAMP|记录最后更新时间|

[返回目录](#目录)

#### cash_user_extend
用户扩展表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|MUL|0|C端用户id|
|3|regist_contract|tinyint(11)|NO||0|用户是否已经注册到电子签系统，0-未注册，1-已注册|
|4|car_id|int(11) unsigned|NO|||车辆ID|
|5|mode_id|int(11) unsigned|NO|||车型ID|
|6|first_online|date|NO|||首次上牌日期|
|7|price_half|bigint(11) unsigned|NO|||金融结算价（对客结算价），以分为单位 |
|8|interest_start|date|NO|||申请车贷成功的时间|
|9|loan_term|tinyint(3) unsigned|NO||0|车贷期数|
|10|product_stcode|varchar(20)|NO|||产品结构编码|
|11|car_color|varchar(50)|NO|||车辆颜色|
|12|car_vin|varchar(50)|NO|||车架号|
|13|car_mode|varchar(150)|NO|||车系|
|14|car_brand|varchar(150)|NO|||车辆品牌|
|15|created_at|timestamp|NO||CURRENT_TIMESTAMP|记录创建时间|
|16|updated_at|timestamp|NO||CURRENT_TIMESTAMP|记录最后更新时间|

[返回目录](#目录)

#### cash_user_face
用户人脸识别

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(10) unsigned|NO|PRI||主键id|
|2|apply_id|int(11) unsigned|NO|||人脸识别接口唯一id|
|3|extra_id|int(11) unsigned|NO|||type=1是cash_user_quota_apply主键id，type=2的时候cash_order主键id|
|4|cuser_id|int(11) unsigned|NO|||C端用户id|
|5|img_url|varchar(60)|NO|||人脸图片|
|6|type|tinyint(4)|NO|||1-贷前额度申请，2-贷中借款|
|7|result|tinyint(4)|NO||0|人脸识别结果，0-未通过，1-通过|
|8|created_at|timestamp|NO||CURRENT_TIMESTAMP|创建时间|
|9|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### cash_user_quota
用户额度申请成功的结果表（用户产品额度表）

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|MUL||C端user_id|
|3|apply_id|int(11) unsigned|NO|MUL|0|额度申请记录表id|
|4|product_id|int(11) unsigned|NO||1|产品编号，cash_product表主键|
|5|credit_line|bigint(11) unsigned|NO||0|授信额度（单位分）|
|6|available_line|bigint(11) unsigned|NO||0|可用额度|
|7|generate_date|date|NO|||FBI给出额度结果的时间|
|8|active_period|date|NO|||额度激活时效|
|9|car_loan_last_date|date|NO|||车贷到期日|
|10|funds_channel|tinyint(4) unsigned|NO||1|资金渠道，1-优信|
|11|status|tinyint(4)|NO||1|1-可用，-1-不可用|
|12|created_at|timestamp|NO||CURRENT_TIMESTAMP|记录创建时间|
|13|updated_at|timestamp|NO||CURRENT_TIMESTAMP|记录最后修改时间|

[返回目录](#目录)

#### cash_user_quota_apply
额度申请log表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI||主键|
|2|cuser_id|int(11) unsigned|NO|MUL|0|C端用户id|
|3|cuser_name|varchar(60)|NO|MUL||C端用户姓名|
|4|cuser_bank_phone|varchar(11)|NO|||银行卡预留手机号|
|5|cuser_bank_num|varchar(20)|NO|||银行卡号|
|6|id_card|varchar(18)|NO|MUL||身份证号|
|7|cuser_register_phone|varchar(20)|NO|MUL||用户注册手机号|
|8|apply_ip|varchar(15)|NO|||用户提交的ip|
|9|apply_ip_city|varchar(60)|NO|||用户提交的ip的城市(预留字段)|
|10|longitude|decimal(6,2)|NO||0.00|经度(预留字段)|
|11|latitude|decimal(6,2)|NO||0.00|纬度(预留字段)|
|12|long_lat_city|varchar(60)|NO|||经纬度对应的城市(预留字段)|
|13|os|varchar(40)|NO|||用户使用的系统|
|14|contract_click_time|datetime|NO||CURRENT_TIMESTAMP|合同勾选时间|
|15|device|varchar(100)|NO|||设备号|
|16|face_img|varchar(60)|NO|||人脸识别图片url|
|17|scrap_value|bigint(11) unsigned|NO||0|车辆残值，两位小数|
|18|car_loan_repay|bigint(11) unsigned|NO||0|车贷已还款总额|
|19|credit_result|text|YES|||征信变量|
|20|status|tinyint(4)|NO||1|贷前状态，1-待人脸识别，2-额度审核中，3-资料错误，4-审核拒绝，5-额度审批结果小于最低额度限制或决策引擎返回为黑名单用户-拒绝,6-审核成功|
|21|created_at|timestamp|NO|MUL|CURRENT_TIMESTAMP|记录创建时间|
|22|updated_at|timestamp|NO||CURRENT_TIMESTAMP|记录最后修改时间|

[返回目录](#目录)

#### cash_verification_detail
核销详情表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
|1|id|int(11) unsigned|NO|PRI|||
|2|flow_id|int(11) unsigned|NO|||cash_trade_flow表主键id|
|3|plan_id|int(11) unsigned|NO|||cash_repay_plan表主键id|
|4|order_id|int(11) unsigned|NO|||订单号|
|5|order_num|varchar(20)|NO|MUL||订单号|
|6|cuser_id|int(11) unsigned|NO|MUL||用户id|
|7|cuser_name|varchar(64)|NO|MUL||用户姓名|
|8|flow_num|varchar(20)|NO|MUL||流水号，bank_trade_no银行流水号|
|9|repay_rank|tinyint(4)|NO|||核销账期|
|10|repay_channel|tinyint(4)|NO||1|交易渠道。1-平台划扣，2-来款认款|
|11|principal|bigint(11) unsigned|NO|||本金|
|12|interest|bigint(11) unsigned|NO|||利息|
|13|penalty|bigint(11) unsigned|NO|||罚息|
|14|fee|bigint(11) unsigned|NO|||手续费|
|15|op_user|int(11) unsigned|NO||0|核销人，0系统|
|16|op_user_name|varchar(64)|NO|||操作者姓名|
|17|status|tinyint(4)|NO||1|核销状态，1-已核销|
|18|fail_reason|varchar(60)|NO|||核销失败原因|
|19|created_at|timestamp|NO|MUL|CURRENT_TIMESTAMP|创建时间|
|20|updated_at|timestamp|NO||CURRENT_TIMESTAMP|更新时间|

[返回目录](#目录)

#### op_url_log
系统-日志表

|序号|字段|类型|IsNULL|KEY|默认值|说明|
|:------:|:------:|:------:|:------:|:------:|:------:|:------|
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

[返回目录](#目录)

