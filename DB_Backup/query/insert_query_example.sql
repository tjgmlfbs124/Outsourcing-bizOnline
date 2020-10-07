### 통신사 요금제 종류 추가 ###
# "SKT" 요금제 종류 "5G" 추가 >>>>
INSERT INTO mobile_plan_category(mobile_carrier_id, name) 
VALUES ( (SELECT _id FROM mobile_carrier WHERE name="SKT"), "5G" );

### 통신사 요금제 추가 ###
/*EX*/
# "SKT"의 "5G" 요금제 "뚱뚱" 추가 >>>
BEGIN;
INSERT INTO mobile_plan ( `category_id`, `name`, `price`, `data`, `data_call`, `data_message` )
VALUES ( 
	(
		SELECT _id FROM mobile_plan_category WHERE name = "5G" AND mobile_carrier_id = ( 
			SELECT _id FROM mobile_carrier WHERE name="KT"
		)
	),
	"뚱뚱",
	99000,
  "99GB",
  "많이",
  "조금더"
);
SET @mPlan_id = (SELECT _id FROM mobile_plan ORDER BY _id DESC LIMIT 1);
/*해당 요금제 디바이스 보조금 추가*/
INSERT INTO support_fund(`device_id`, `mobile_plan_id`, `fund`, `additional_fund`)
SELECT D._id as D_id, P._id as P_id, 0 as mFund, 0 as addFund
FROM Device D, mobile_plan P
WHERE P._id = @mPlan_id;
COMMIT;
###

### 디바이스 용량및 가격 추가
INSERT INTO device_storage(`device_id`,`storage`,`price`)
VALUES (
  2,
  "256GB",
  1199000
);

### 특정 디바이스 색상 추가 (device_id, {mobile_carrier_id} )
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`,`carrier_id`)
VALUES (
  %{device_id},
  "레드",
  "LGM-G900_red.jpg",
  "ff0000",
  %{mobile_carrier_id}
)

### 디바이스 추가 ###
# (SELECT _id FROM manufacturer WHERE name="삼성전자") = 1
BEGIN;
INSERT INTO device (`name`,`model`,`image_url`,`spec_display`,`spec_cam`,`spec_cpu`,`spec_size`,`manufacturer_id`, `release`)
VALUES (
  "갤럭시 S20+",
  "SM-G986N",
  "SM-G986N_IMG.jpg",
  "6.7″QHD+ WQHD+ HID",
  "전면 : 1,000만(듀얼 픽셀 AF) / 후면 : 1,200만(F2.2 초광각) + 1,200만 2PD OIS(F1.8 일반) + 6,400만 OIS(F2.0 망원) + ToF(VGA)",
  "Qualcomm SD865 + SDX55M",
  "161.9 x 73.7 x 7.8mm / 186g",
  1,
  "2020-03-06"
);
#SET @mDevice_id=LAST_INSERT_ID();
SET @mDevice_id = (SELECT _id FROM device ORDER BY _id DESC LIMIT 1);
/*해당 디바이스 용량 추가*/
INSERT INTO device_storage(`device_id`,`storage`, `price`)
VALUES
(@mDevice_id, "256GB", 1353000);
/*해당 디바이스 색상 추가*/
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`)
VALUES
(@mDevice_id, "회색", "SM-N976N_IMG_gray.jpg", "545454"),
(@mDevice_id, "클라우드블루", "SM-N976N_IMG_cblue.jpg", "a4c8e1"),
(@mDevice_id, "흰색", "SM-N976N_IMG_white.jpg", "ffffff"),
(@mDevice_id, "아우라블루", "SM-N976N_IMG_blue.jpg", "0000ff"),
(@mDevice_id, "아우라레드", "SM-N976N_IMG_red.jpg", "ff0000");
/*해당 디바이스 카테고리 추가*/
INSERT INTO device_mobile_category(`device_id`, `category_id`)
VALUES
(@mDevice_id, 1);
/*해당 디바이스의 모든 요금제 보조금 추가*/
INSERT INTO support_fund(`device_id`, `mobile_plan_id`, `fund`, `additional_fund`)
SELECT D._id as D_id, P._id as P_id, 0 as mFund, 0 as addFund
  FROM Device D, mobile_plan P
  WHERE D._id = @mDevice_id;
###
COMMIT;

### 색상추가 ###
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`)
VALUES
(1, "미스틱브론즈", "SM-N986N_img_bronze.jpg", "af7e75"),
(1, "미스틱화이트", "SM-N986N_img_white.jpg", "ffffff"),
(1, "미스틱블랙", "SM-N986N_img_black.jpg", "000000");

### 특정 디바이스({id}) 통신사 색상 추가 ###
INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`,`carrier_id`)
VALUES
({id},"미스틱그레이", "SM-N981N_img_gray.jpg", "545454", NULL),
({id},"미스틱브론즈", "SM-N981N_img_bronze.jpg", "af7e75", NULL),
({id}},"레드","SM-N981N_img_red.jpg","ff0000", 1),
({id},"블루","SM-N981N_img_blue.jpg","0000ff", 2),
({id},"핑크","SM-N981N_img_pink.jpg","ffe6ff", 3);

INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`,`carrier_id`)
VALUES
({id},"코스믹그레이", "SM-G988N_img_gray.jpg", "545454", NULL),
({id},"코스믹블랙", "SM-G988N_img_black.jpg", "000000", NULL);

### 특정 디바이스의 요금제 카테고리 추가(`device_id`, `category_id`)
INSERT INTO device_mobile_category(`device_id`,`category_id`)
VALUES (%{device_id}, %{category_id});
/*EX (30번 디바이스 에 KT.LTE, SKT.LTE, LG.LTE 추가)*/
INSERT INTO device_mobile_category(`device_id`,`category_id`)
VALUES (30, 2),(30, 5),(30, 8);

### 특정 디바이스의 3사 요금제_카테고리.이름 추가2(`device_id`, str{요금제카테고리})
/*EX ( 27 디바이스 에 3사.LTE 추가)*/
INSERT INTO device_mobile_category(`device_id`,`category_id`)
SELECT Dev._id , M._id
FROM device Dev, mobile_plan_category M
WHERE M.name = "5G"
  AND Dev._id = 29

### 특정 제조사의 디바이스 3사 요금제 카테고리 추가3(str{제조사}, str{요금카테고리})
INSERT 
  INTO device_mobile_category(`device_id`, `category_id`)
  SELECT Dev._id, M._id
  FROM device Dev, mobile_plan_category M
  WHERE M.name = "{요금카테고리}"
    AND Dev.manufacturer_id = (SELECT _id FROM manufacturer WHERE name="{제조사}");
/*EX*/
INSERT 
  INTO device_mobile_category(`device_id`, `category_id`)
  SELECT Dev._id, M._id
  FROM device Dev, mobile_plan_category M
  WHERE M.name = "5g" 
    AND Dev.manufacturer_id = (SELECT _id FROM manufacturer WHERE name="애플");

## 할부 개월 추가하기
INSERT INTO installment(`month`)
VALUES 
(0),(6),(12),(18),(24),(30),(36)


### 특정 요금제 카테고리에 특정 할부 개월 id 추가(category_id, installment_id)
INSERT INTO mobile_category_installment(`category_id`, `instsallment_id`)
VALUES %{category_id}, %{installment_id};
/* EX:모든 요금제 카테고리에 23이상 할부 추가 */
INSERT INTO mobile_category_installment(`category_id`, `installment_id`)
SELECT CAT._id, I._id
FROM mobile_plan_category CAT, installment I
  WHERE I.month > 23;
/* EX:모든 통신사 5G요금제 카테고리에 6개월 할부 추가 */
INSERT INTO mobile_category_installment(`category_id`,`installment_id`)
SELECT CAT._id, I._id
FROM mobile_plan_category CAT, installment I
  WHERE CAT.name = "5G";
  AND I.month = 6;

### 모든 디바이스*요금제 보조금 테이블에 입력
BEGIN;
INSERT 
  INTO support_fund(`device_id`, `mobile_plan_id`, `fund`, `additional_fund`)
  VALUES (SELECT D._id as D_id, P._id as P_id, 0 as mFund, 0 as addFund FROM device D, mobile_plan P);

### 디바이스 추가 이후 해당 디바이스의 모든 요금제 보조금 추가(device_id)
/* 디바이스 추가쿼리 이후 사용*/
INSERT
  INTO support_fund(`deivce_id`, `mobile_plan_id`, `fund`, `additional_fund`)
  VALUES (SELECT ${device_id} as D_id, P._id as P_id, 0 as mFund, 0 as addFund
    FROM mobile_plan P);

### 요금제 추가 이후 해당 요금제의 모든 디바이스 보조금 추가(plan_id)
/* 요금제 추가쿼리 이후 사용*/
INSERT
  INTO support_fund(`device_id`, `mobile_plan_id`, `fund`, `additional_fund`)
  VALUES (
    SELECT ${plan_id} as P_id, D._id as D_id, 0 as mFund, 0 as addFund
    FROM device D
  );
### 보조금 추가2
INSERT
  INTO support_fund(`device_id`, `mobile_plan_id`, `fund`, `additional_fund`)
  VALUES (1, 147, 500, 500);
##########################################################################